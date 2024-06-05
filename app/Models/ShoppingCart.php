<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;
    protected $table = 'shopping_carts';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];

    public function shoppingCartContent(){
        return $this->hasOne(ShoppingCartContent::class);
    }

    public function shippingCompany(){
        return $this->hasOne(ShippingCompany::class);
    }

    public function petShop(){
        return $this->belongsTo(PetShop::class);
    }
}
