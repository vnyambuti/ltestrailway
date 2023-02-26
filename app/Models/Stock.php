<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock', 'colours_id', 'product_id','lowstock'
    ];

    public function color()
    {
        return $this->belongsTo(Colours::class,'colours_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
