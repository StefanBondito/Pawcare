<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'petshop_transaction';
    protected $timestamp = 'true';
    protected $guarded = ['id'];
    protected $fillable = [
        'user_id',
        'pet_id',
        'petshop_id',
        'status',
    ];

    public function customer(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function pet(){
        return $this->belongsTo(Pet::class, 'pet_id');
    }
    public function shop(){
        return $this->belongsTo(PetShop::class, 'petshop_id');
    }
}
