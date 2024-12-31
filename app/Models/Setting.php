<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table='marketsettings';
        use HasFactory;
        public $timestamps=false;
        protected $guarded=[];
        protected $fillable = [
            'name',
            'value'
        ]; 
}
