<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cafe;


class Review extends Model
{
    use HasFactory;
    
    public function cafe()
    {
        return $this->belongsTo(Cafe::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
