<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosFactory extends Factory
{

    protected $model = Usuarios::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'senha' => Hash::make('passwordTesteUser'), // password
            'permissão'=>3, //1:admin 2:modificador 3:usuario Comum
            'api_token' => Str::random(30),
            'data_token' => now(),
        ];
    }
}
