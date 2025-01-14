<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubBrand extends Model
{
    public $timestamps=false;
    protected $guarded=[];

    public function brand():BelongsTo
    {
        return $this->belongsTo(BrandMenu::class);
    }

}
