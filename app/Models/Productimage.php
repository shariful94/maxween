<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productimage extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'name'
    ];

    public function Product()
    {
    return $this->belongsTo('App\Models\Product');
    }
}
