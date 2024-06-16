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

    public function type()
    {
        return $this->belongsTo(ItemType::class);
    }

    public function insert()
    {
        return $this->hasMany(ShoppingCartContent::class, 'item_id');
    }
}
