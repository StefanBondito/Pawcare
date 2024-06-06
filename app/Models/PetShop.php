<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetShop extends Model
{
    use HasFactory;
    protected $table = 'pet_shop_user';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];

    public function shoppingCart(){
        return $this->hasMany(ShoppingCart::class);
    }

    public function shopContact(){
        return $this->hasOne(ShopContactInfo::class);
    }
}
