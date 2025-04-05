<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
     protected $fillable=[ 'name', 'designation', 'image', 'description', 'social_link_1', 'social_link_2', 'deleted_by', 'is_deleted', 'status', 'created_at', 'updated_at'];
}
