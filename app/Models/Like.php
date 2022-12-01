<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image_id'
    ];

    protected static function boot() {
        parent::bott();

        if(!app()->runningInConsole())
        {
            self::creating(function (Like $like) {
                $like->user_id = auth()->id();
            });
        }


    }
}
