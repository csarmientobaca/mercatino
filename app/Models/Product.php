<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_product', 'product_id', 'user_id');
    }
}
