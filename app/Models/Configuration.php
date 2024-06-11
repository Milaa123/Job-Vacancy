<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'company_name',
        'logo',
        'company_address',
        'phone',
        'email',
        'tagline',
        'description',
    ];
}