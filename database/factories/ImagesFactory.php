<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class LikesFactory extends Factory
{
    public function definition(){
        return [
            'user_id' => User::all()->random(1)->id,
            'image_path' => $this->faker->imageUrl(800,600),
            'description' => $this->faker->text(500),
            'created_at' => now()
        ];
    }
}

?>