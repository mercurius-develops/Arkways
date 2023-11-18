<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    public function transactions()
    {
        return $this->hasMany(transaction::class);
    }

    protected $fillable = [
        'referral_count',
    ];

    public function customers()
    {
        return $this->hasMany(customer::class, 'referred_id');
    }


}
