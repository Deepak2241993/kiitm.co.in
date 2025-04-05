<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable=['name', 'description', 'image', 'star', 'status', 'created_at', 'updated_at','designation'];
}
