<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Imagens;
use App\Models\Historico;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ProdutosControlle extends Controller
{
    private function UploadImagens(Request $request, $codigoProduto)
    {
        $allowedfileExtension = ['jpg'];
        $files = $request->file('fileName');
        $errors = [];
        $countImagens = Imagens::where('ref_codigo_produto', $codigoProduto)->count();
        $files = array_slice($files, 0, (3 - $countImagens));
        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
            $files = [];
            if ($check) {
                foreach ($request->fileName as $mediaFiles) {
                    $path = $mediaFiles->store('public/imagens');
                    Imagens::create(["ref_codigo_produto" => $codigoProduto, 'path_imagem' => $path]);
                }
            } else {
                return response()->json('Tipo de arquivo invalido', 422);
            }
            return response()->json('Upload Files Ok', 200);
        }
    }

    private function adicionarHistorico($token, $codigoProduto, $quantidade, $modificacao = null)
    {
        $idUsuario = Usuarios::where('api_token', $token)->first()->id_usuario;
        if ($modificacao == null) {
            $modificacao = $quantidade >= 1 && $quantidade != 0 ? 'Adicionado' : 'Retirado';
        }

        Historico::create(
            [
                'criado_por' => $idUsuario,
                'ref_codigo_produto' => $codigoProduto,
                'modificação' => $modificacao,
                'quantidade' => $quantidade,
            ]
        );
    }

    public function createProduto(Request $request)
    {
        $this->validate($request, [
            'categoria' => 'required|string',
            'nome' => 'required|string',
            'preço' => 'required|numeric',
            'confecção' => 'required|string',
            'tamanho' => 'required|string|max:2',
            'quantidade' => 'required|integer'
        ]);

        $dadosProduto = $request->only([
            'categoria', 'nome', 'preço', 'confecção', 'tamanho'
        ]);
        $dadosProduto['quantidade_produtos'] = $request->quantidade;
        $produto = Produtos::create($dadosProduto);
        if ($request->hasFile('fileName')) {
            $this->UploadImagens($request, $produto->id);
        }
        $this->adicionarHistorico($request->header('token'), $produto->codigo_produto, $request->quantidade);
        return response()->json('Produto Criado', 200);
    }

    public function uploadFotos($idProduto, Request $request)
    {
        $this->validate($request, [
            'fileName' => 'required',
            'fileName.*' => 'required',
        ]);

        if ($request->hasFile('fileName')) {
            $this->UploadImagens($request, $idProduto);
            return response()->json('Imagens Load Ok', 200);
        }
    }

    public function updatePutProdutos($idProduto, Request $request)
    {
        $this->validate($request, [
            'categoria' => 'required|string',
            'nome' => 'required|string',
            'preço' => 'required|numeric',
            'confecção' => 'required|string',
            'tamanho' => 'required|string|max:2',
            'quantidade' => 'required|integer'
        ]);
        $produto = Produtos::find($idProduto);
        if ($produto) {
            $dadosProduto = $request->only([
                'categoria', 'nome', 'preço', 'confecção', 'tamanho'
            ]);
            $dadosProduto['quantidade_produtos'] = $request->quantidade;
            foreach ($dadosProduto as $key => $value) {
                $produto->$key = $value;
            }
            $produto->save();
            $this->adicionarHistorico($request->header('token'), $produto->id, $request->quantidade, 'Informações');
            return response()->json($produto, 200);
        }
        return response()->json('Produto não existe',  304);
    }

    public function updatePatchProdutos($idProduto, Request $request)
    {

        $produto = Produtos::find($idProduto);
        if ($produto) {
            foreach ($request->except('_token') as $key => $value) {
                switch (Str::lower($key)) {
                    case 'produto':
                        $produto->quantidade_produtos = $value;
                        break;
                    default:
                        $produto->$key = $value;
                }
            }
            $produto->save();
            if ($request->quantidade == null) {
                $request->quantidade = $produto->quantidade_produtos;
            }
            $this->adicionarHistorico($request->header('token'), $produto->codigo_produto, $request->quantidade, 'Informação');
            return response()->json($produto, 200);
        }
        return response()->json('Produto não existe',  304);
    }

    public function UpdateAllImagens(Request $request, $codigoProduto)
    {
        if (!$request->hasFile('fileName')) {
            return response()->json('fileName Não Encontrado', 404);
        }

        $allowedfileExtension = ['jpg'];
        $files = $request->file('fileName');
        $errors = [];
        $imagem = Imagens::where('ref_codigo_produto', $codigoProduto);
        $files = array_slice($files, 0, 3);
        foreach ($imagem->get() as $value) {
            Storage::delete($value->path_imagem);
            $value->delete();
        }

        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
            $files = [];
            if ($check) {
                foreach ($request->fileName as $mediaFiles) {
                    $path = $mediaFiles->store('public/imagens');
                    Imagens::create(["ref_codigo_produto" => $codigoProduto, 'path_imagem' => $path]);
                }
            } else {
                return response()->json('Tipo de arquivo invalido', 422);
            }
            return response()->json('Upload Files Ok', 200);
        }
    }

    public function UpdateImagem(Request $request, $codigoProduto, $idImagem)
    {
        if (!$request->hasFile('fileName')) {
            return response()->json('file Name Não Encontrado', 404);
        }
        $allowedfileExtension = ['jpg'];
        $files = $request->file('fileName');
        $errors = [];
        $imagem = Imagens::where('ref_codigo_produto', $codigoProduto)->find($idImagem)->first();
        $files = array_slice($files, 0, 1);
        Storage::delete($imagem->path_imagem);

        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
            $files = [];
            if ($check) {
                foreach ($request->fileName as $mediaFiles) {
                    $path = $mediaFiles->store('public/imagens');
                    $imagem->path_imagem = $path;
                    $imagem->save();
                }
            } else {
                return response()->json('Tipo de arquivo invalido', 422);
            }
            return response()->json('Upload Files Ok', 200);
        }
    }

    public function deleteProduto(Request $request, $codigoProduto)
    {
        $produto = Produtos::find($codigoProduto);
        $produto->delete();
        return response()->json('Produto deletado', 200);
    }

    public function deleteAllImagem($codigoProduto)
    {
        $imagem = Imagens::where('ref_codigo_produto', $codigoProduto);
        foreach ($imagem->get() as $value) {
            Storage::delete($value->path_imagem);
            $value->delete();
        }
        return response()->json('Fotos produto apagadas', 200);
    }
    public function deleteImagem($codigoProduto, $idImagem)
    {
        $imagem = Imagens::where('ref_codigo_produto', $codigoProduto)->find($idImagem)->first();
        Storage::delete($imagem->path_imagem);
        return response()->json('Fotos produto apagadas', 200);
    }
    public function getIdProdutoHistorico(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'codigo_produto' => 'required|numeric',
        ], [
            'codigo_produto.required' => 'Faltando campo codigo_produto',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response($errors->toJson(), 200);
        }
        $historico = Historico::where('ref_codigo_produto', $request->codigo_produto)->get();
        return response()->json($historico, 200);
    }
    
    public function getAllHistorico()
    {
        return response()->json(Historico::all(), 200);
    }
}
