<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KubunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected @model =  Kubun::class;
     
    public function definition()
    {
        return [
            'name' => $faker -> name
        ];
    }
}
