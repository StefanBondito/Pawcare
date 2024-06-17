<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{PetShop, ShoppingCartContent};

class Item extends Model
{
    use HasFactory;
    protected $table = 'item';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'type_id',
        'price',
    ];

    public function itemCategory()
    {
        return $this->belongsTo(ItemType::class, 'type_id');
    }

    public function buy()
    {
        return $this->hasMany(ShoppingCartContent::class);
    }
}
