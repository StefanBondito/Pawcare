<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCartContent extends Model
{
    use HasFactory;
    protected $table = 'shopping_cart_content';
    protected $timestamp = 'true';
    protected $guarded = [];
    protected $fillable = [
        'item_id',
        'item_count'
    ];

    public function add(){
        return $this->belongsTo(ShoppingCart::class, 'cart_id');
    }

    public function item(){
        return $this->belongsTo(Item::class, 'item_id');
    }
}
