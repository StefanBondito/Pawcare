<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingCompany extends Model
{
    use HasFactory;
    protected $table = 'shipping_companies';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];

    public function shoppingCompany(){
        return $this->belongsTo(ShoppingCart::class);
    }
}
