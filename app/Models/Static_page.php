<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Static_page extends Model
{
    use HasFactory;
    protected $fillable=[ 'page_name', 'title', 'short_description', 'long_description', 'image', 'image_alt_name', 'status', 'created_at', 'updated_at'];
}
