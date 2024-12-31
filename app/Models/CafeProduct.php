<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CafeProduct extends Model
{
    use HasFactory;
    protected $table = 'cafeproducts';
    protected $guarded=[];

    public function menu():BelongsTo
    {
        return $this->belongsTo(CafeMenu::class);
    }

}

