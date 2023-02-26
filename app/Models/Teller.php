<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teller extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','shop_id','status'

    ];

    public function shop()
    {
       return $this->belongsTo(Shop::class);
    }

    public function user()
    {
      return  $this->belongsTo(User::class);
    }
}
