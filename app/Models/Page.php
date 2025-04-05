<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable=['page_title','meta_title','cat_id','fetured_service','image_short','short_desc','short_title','image_alt_name','banner_alt_name', 'slug', 'banner_title', 'banner_description', 'banner_image', 'second_page_title', 'second_description', 'image', 'meta_keywords', 'meta_description', 'footer_note', 'deleted_by', 'is_deleted', 'status', 'created_at', 'updated_at'];
}
