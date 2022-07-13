<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=User::class;

    public function definition(){
        return[
            'name'=>$this->faker->name(),
            'uid'=>$this->faker->text()
        ];
    }

}
