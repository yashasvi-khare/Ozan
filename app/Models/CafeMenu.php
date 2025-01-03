<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeMenu extends Model
{
    use HasFactory;
    protected $table = 'cafe_menus';
    protected $guarded=[];

    public function name():Attribute
    {
        return Attribute::make(
            get:fn($value) => strtoupper($value)
        );
    }
}
