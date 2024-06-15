<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCartContent extends Model
{
    use HasFactory;
    protected $table = 'shopping_cart_contents';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];

    public function add(){
        return $this->belongsTo(ShoppingCart::class);
    }

    public function item(){
        return $this->hasMany(Item::class);
    }
}
