<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name', 'account_title', 'account_number', 'code_key', 'code_value', 'country', 'city', 'address'
    ];
}
