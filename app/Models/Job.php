<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable=['postion', 'profiledescription', 'experience', 'industry_type', 'vaccancy', 'status', 'created_at', 'updated_at'];
}
