<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    protected $model = Equipo::class;

    public function definition()
    {
        $ganados = $this->faker->numberBetween(0, 10);
        $empatados = $this->faker->numberBetween(0, 5);
        $perdidos = $this->faker->numberBetween(0, 10);
        $pj = $ganados + $empatados + $perdidos;
        $gfavor = $this->faker->numberBetween(0, 30);
        $gcontra = $this->faker->numberBetween(0, 30);

        return [
            'nombre' => $this->faker->company,
            'marca'  => $this->faker->word,
            'modelo' => $this->faker->bothify('Model-###'),
            'estado' => $this->faker->randomElement(['disponible', 'no disponible']),
            'partidos_jugados' => $pj,
            'juegos_ganados' => $ganados,
            'juegos_perdidos' => $perdidos,
            'juegos_empatados' => $empatados,
            'goles_favor' => $gfavor,
            'goles_contra' => $gcontra,
            'diferencia_goles' => ($gfavor - $gcontra),
            'puntos' => ($ganados * 3) + $empatados,
            'posicion' => null,
        ];
    }
}
