<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profesor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre"=>$this->faker->firstName,
            "apellido"=>$this->faker->lastName,
            "dni"=>$this->faker->dni,
            "direccion"=>$this->faker->address,
            "telefono"=>$this->faker->phoneNumber


        ];
    }
}
