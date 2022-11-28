<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'product_title',
        'quantity',
        'imagePath',
        'price',
        'product_id',
        'user_id'
    ];
}
