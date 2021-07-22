<?php

namespace Database\Factories;

use App\Models\Produtos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produtos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categoria = $this->faker->randomElement([
            'Camisetas', 'Blusinhas', 'Camisas',
            'Suéteres', 'Cardigans', 'Blazer', 'Jaquetas', 'casacos',
            'Coletes', 'Quimonos', 'Regatas'
        ]);
        $cofeccao = $this->faker->randomElement([
            'Tricoline', 'Malha', 'Cetim', 'Canvas', 'Córdoba',
            'Gabardine', 'Microfibra', 'Mousseline', 'Oxford', 'Vellum'
        ]);
        $nomeProduto = "{$categoria} {$cofeccao}";
        return [
            'categoria' => $categoria,
            'nome' => $nomeProduto,
            'preço' => $this->faker->bothify('##.##'),
            'confecção' => $cofeccao,
            'tamanho' =>  $this->faker->randomElement(['P', 'M', 'G', 'GG']),
            'quantidade_produtos' => $this->faker->bothify('##'),
        ];
    }
}
