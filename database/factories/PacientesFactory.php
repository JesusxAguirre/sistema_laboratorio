<?php

namespace Database\Factories;

use App\Models\Pacientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacientesFactory extends Factory
{
    protected $model = Pacientes::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' =>$this->faker->firstName(),
            'sexo' =>$this->faker->randomElement(['Macho', 'Hembra']),
            'raza' =>$this->faker->randomElement(['Pastor', 'Husky','Golden retriever', 'Poodle','Labrador']),
            'edad'=>$this->faker->randomDigitNotNull(),
            'remitente'=>$this->faker->name(),
            'fecha'=>$this->faker->date('Y_m_d')
        ];
    }
}
