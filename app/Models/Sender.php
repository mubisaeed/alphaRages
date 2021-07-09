<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'country', 'address1', 'address2', 'phone', 'website', 'registration_number'
    ];
}
