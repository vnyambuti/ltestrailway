<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colours extends Model
{
    use HasFactory;

    protected $fillable=[
     "title"
    ];

    public function products()
    {

        return $this->belongsToMany(Products::class);
    }
    public function counts()
    {
       return $this->hasOne(Count::class);
    }

    public function cp()
    {
        return $this->belongsToMany(ColorProducts::class);
    }
    public function Stock()
    {
       return $this->hasMany(Stock::class);
    }

}
