<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopContactInfo extends Model
{
    use HasFactory;
    protected $table = 'shop_contact_infos';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];

    public function petShop(){
        return $this->belongsTo(PetShop::class);
    }
}
