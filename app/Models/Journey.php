<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;
    protected $fillable=['title', 'description', 'page_id', 'deleted_by', 'is_deleted', 'status', 'created_at', 'updated_at'];
}
