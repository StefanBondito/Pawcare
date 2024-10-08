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

    public function content(){
        return $this->hasMany(ShoppingCartContent::class, 'cart_id');
    }
    public function owner(){
        return $this->belongsTo(User::class);
    }
    public function receiver_user()
    {
        return $this->belongsTo(User::class, 'receiver');
    }
}
