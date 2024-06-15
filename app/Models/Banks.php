<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentInfo;

class banks extends Model
{
    use HasFactory;
    protected $table = 'bank';
    protected $primaryKey = 'id';
    protected $timestamp = 'true';
    protected $guarded = [];
    public function buy()
    {
        return $this->hasMany(PaymentInfo::class);
    }
}
