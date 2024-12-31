<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeMenu extends Model
{
    use HasFactory;
    protected $table = 'cafe_menus';
    protected $guarded=[];
   
}
