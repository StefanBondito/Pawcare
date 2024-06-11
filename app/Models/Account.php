<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use HasFactory, Notifiable;
    public $timestamps = false ;
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $table = 'accounts';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = ['id'];

    public function admin(){
        return $this->hasOne(Admin::class);
    }

    public function user(){
        return $this->hasOne(User::class, 'fk_account_id', 'id');
    }

    public function petShop(){
        return $this->hasOne(PetShop::class);
    }

    public function accountType(){
        return $this->belongsTo(AccountType::class);
    }
}
