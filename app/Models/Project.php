<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['image', 'slug'];

    protected function image():Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/'.$value): null,
        );
    }
}
