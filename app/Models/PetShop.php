<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetShop extends Model
{
    use HasFactory;
    protected $table = 'pet_shop';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];
    protected $fillable = [
        'shop_name',
        'address'
    ];

    public function sell(){
        return $this->hasMany(Item::class);
    }

    public function shopContact(){
        return $this->hasOne(ShopContactInfo::class);
    }

    public function account(){
        return $this->belongsTo(User::class);
    }
}
