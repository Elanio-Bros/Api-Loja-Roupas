<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Imagens;
use App\Models\Historico;
use App\Models\Usuarios;
use PhpParser\Node\Expr\FuncCall;

class ProdutosControlle extends Controller
{
    private function UploadImagens(Request $request, $codigoProduto)
    {
        $allowedfileExtension = ['jpg'];
        $files = $request->file('fileName');
        $errors = [];
        $files = array_slice($files, 0, 3);
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

    private function adicionarHistorico($token, $codigoProduto, $quantidade)
    {
        $idUsuario = Usuarios::where('api_token', $token)->first()->id_usuario;
        $modificacao = $quantidade >= 1 && $quantidade != 0 ? 'Adicionado' : 'Retirado';
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
        $this->adicionarHistorico($request->header('token'), $produto->id, $request->quantidade);
        return response()->json('Produto Criado', 200);
    }
}
