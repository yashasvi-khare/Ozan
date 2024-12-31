<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeProduct extends Model
{
    use HasFactory;
    protected $table = 'cafeproducts';
    protected $guarded=[];
   
}

