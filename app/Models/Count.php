<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    use HasFactory;

    protected $fillable=[
        'stock','colour_id','product_id'
    ];


    public function products()
    {
        return $this->belongsTo(Products::class);
    }

    public function colours()
    {
       return $this->belongsTo(Colours::class);
    }
}
