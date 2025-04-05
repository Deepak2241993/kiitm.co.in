<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable=['question', 'answer', 'page_id', 'deleted_by', 'is_deleted', 'status', 'created_at', 'updated_at','fetured'];
}
