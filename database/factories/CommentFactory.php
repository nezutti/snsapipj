<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
class CommentFactory extends Factory
{   

    protected $model=Model::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment'=>$this->faker->text(),
        ];
    }
}
