<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=['title','tags','slug', 'image', 'description', 'image_url', 'cat_id', 'total_view', 'written_by', 'deleted_by', 'is_deleted', 'status', 'created_at', 'updated_at','meta_keywords','meta_description','meta_title'];
}
