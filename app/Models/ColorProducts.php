<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorProducts extends Model
{
    use HasFactory;

    protected $fillable=[
        'colours_id','product_id'
    ];
    public function Colours()
    {
        return $this->belongsToMany(Colours::class);
    }

    public function products()
    {
      return $this->belongsToMany(Products::class);
    }

    public function cps()
    {
        return $this->hasOne(ColorsProductsStock::class);
    }
}
