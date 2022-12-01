<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Image;

class LikesFactory extends Factory
{
    public function definition(){
        return [
            'user_id' => User::all()->random(1)->id,
            'image_id' => Image::all()->random(1)->id,
            'created_at' => now()
        ];
    }
}

?>