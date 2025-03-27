<?php

namespace Database\Factories;

use App\Models\Sample;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class SampleFactory extends Factory
{
    protected $model = Sample::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->address(),
            'fecha' => Carbon::today()->subDays(rand(0, 30)),
            'hora' => $this->faker->time('H:i:s'),
            'contacto' => $this->faker->randomElement([
                $this->faker->email(),
                $this->faker->phoneNumber()
            ]),
            'recolector' => $this->faker->name(),
            'observaciones' => $this->faker->sentence(6),
            'tipo_muestra' => $this->faker->randomElement([
                'Paludismo',
                'Dengue',  // Corregí "Denge" a "Dengue"
                'Chagas'
            ])
        ];
    }

    /**
     * Estados personalizados para tipos de muestra específicos
     */
    public function paludismo(): static
    {
        return $this->state([
            'tipo_muestra' => 'Paludismo',
            'observaciones' => 'Muestra para diagnóstico de malaria - ' . $this->faker->sentence(3)
        ]);
    }

    public function dengue(): static
    {
        return $this->state([
            'tipo_muestra' => 'Dengue',
            'observaciones' => 'Prueba NS1/IgM - ' . $this->faker->sentence(3)
        ]);
    }
}