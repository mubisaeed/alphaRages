<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'first_name', 'last_name', 'email', 'country', 'address1', 'address2', 'phone'
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }

}
