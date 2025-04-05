<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helpsection extends Model
{
    use HasFactory;
    protected $fillable=['title', 'description','help_alt_name', 'image', 'page_id', 'deleted_by', 'is_deleted', 'status', 'created_at', 'updated_at'];
}
