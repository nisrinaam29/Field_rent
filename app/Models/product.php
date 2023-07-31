<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
  
    protected $fillable = ['name','image_url', 'price', 'description','open_hours', 'category', 'location', 'contact'];
}
