<?php

namespace Database\Factories;

use App\Models\Imagens;
use App\Models\Produtos;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Environment\Runtime;

class ImagensFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imagens::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ref_codigo_produto' => function () {
                while (true) {
                    $codigoProduto = $this->faker->randomElement(Produtos::all())->codigo_produto;
                    $countImagensProdutos = Imagens::where('ref_codigo_produto', $codigoProduto)->count();
                    if (empty($codigoProduto) || $countImagensProdutos === 3) {
                        return Produtos::factory()->create()->id;
                    } else if ($countImagensProdutos < 3) {
                        return $codigoProduto;
                    }
                }
            },
            // storage/image
            'path_imagem' => 'img.jpg',
        ];
    }
}
