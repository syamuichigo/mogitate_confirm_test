<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    public function products()
    {
        return $this->belongsToMany(Products::class ,'products_seasons', 'product_id', 'season_id');
    }
}
