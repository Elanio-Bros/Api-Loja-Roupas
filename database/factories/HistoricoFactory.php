<?php

namespace Database\Factories;

use App\Models\Historico;
use App\Models\Produtos;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoricoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Historico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $modificacao = $this->faker->randomElement(['Adicionado', 'Retirado',]);

        return [
            'criado_por' => function () {
                $usuarios = Usuarios::all();
                if ($usuarios->count() === 0) {
                    return Usuarios::factory()->create()->id;
                } else {
                    return $this->faker->randomElement($usuarios)->id_usuario;
                }
            },
            'ref_codigo_produto' => function () {
                $produtos = Produtos::all();
                if ($produtos->count() === 0) {
                    return Usuarios::factory()->create()->id;
                } else {
                    return $this->faker->randomElement($produtos)->codigo_produto;
                }
            },
            'modificação' => $modificacao,
            'quantidade' => function () use ($modificacao) {
                if ($modificacao === 'Adicionado') {
                    return random_int(1, 100);
                } else {
                    return random_int(-100, 10);
                }
            },
        ];
    }
}
