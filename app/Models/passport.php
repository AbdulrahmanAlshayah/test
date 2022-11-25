<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'number', 'release','expiration','cerification_code','arrival','visa_type','passport_image','photograph','job'];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
