<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable=['project_name', 'language', 'image','fetured', 'image_alt', 'meta_title', 'meta_keywords', 'meta_description', 'categories', 'project_info', 'project_details','slug', 'status', 'created_at', 'updated_at','language_id','banner_image'];
}
