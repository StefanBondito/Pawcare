<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentCompany extends Model
{
    use HasFactory;
    protected $table = 'payment_companies';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];

    public function paymentInfo(){
        return $this->belongsTo(PaymentInfo::class);
    }
}
