<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogcomment extends Model
{
    use HasFactory;
    protected $fillable=['name', 'comments', 'email', 'answer', 'blog_id', 'status', 'read_status', 'created_at', 'updated_at'];
}
