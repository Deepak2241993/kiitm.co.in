<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable=[ 'title', 'slug', 'image', 'description', 'image_url', 'deleted_by', 'is_deleted', 'status', 'created_at', 'updated_at'];
}
