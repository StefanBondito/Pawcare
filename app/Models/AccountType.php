<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;
    protected $table = 'account_type';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    public const ADMIN_ID = 1;
    public const PET_SHOP_ID = 2;
    public const CUSTOMER_ID = 3;
    protected $guarded = [];

    public function types(){
        return $this->hasMany(User::class);
    }
}
