<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsSeason extends Model
{
    use HasFactory;

    protected $table = 'products_season';

    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
    public function seasons()
    {
        return $this->belongsTo(Seasons::class, 'season_id');
    }
}
