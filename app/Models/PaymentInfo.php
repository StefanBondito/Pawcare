<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInfo extends Model
{
    use HasFactory;
    protected $table = 'payment_infos';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function paymentCompany(){
        return $this->hasOne(PaymentCompany::class);
    }
}
