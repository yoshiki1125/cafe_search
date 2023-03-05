<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Cafe extends Model
{
    use HasFactory;
    
   protected $fillable = [
       'name',
       'address',
       'access',
       'tell',
       'open_hours',
       'regular_holiday',
       'wifi',
       'outlet',
       'working_space',
       'smorking_space',
       'paper_cigarette',
       'image_url',
       ];
   
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(user::class);
    }
 }   
