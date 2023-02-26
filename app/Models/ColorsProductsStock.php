<?php

namespace App\Models;

use ColoursProducts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorsProductsStock extends Model
{
    use HasFactory;

    protected $fillable=[
          'stock','color_product_id'
    ];
    public function cp()
    {
       return $this->belongsTo(ColoursProducts::class);
    }
}
