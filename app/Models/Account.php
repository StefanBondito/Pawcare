<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];

    public function admin(){
        return $this->hasOne(Admin::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    public function petShop(){
        return $this->hasOne(PetShop::class);
    }

    public function accountType(){
        return $this->belongsTo(AccountType::class);
    }
}
