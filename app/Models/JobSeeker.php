<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }
}