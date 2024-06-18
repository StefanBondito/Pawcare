<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $table = 'pet';
    protected $primaryKey = 'id';
    // protected $timestamps = 'true';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'type',
        'breed',
        'dateOfBirth',
        'age',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function transaction(){
        return $this->hasOne(Transaction::class, 'pet_id');
    }
}
