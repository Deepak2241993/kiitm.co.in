<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    protected $fillable=['name', 'subject', 'html_file', 'type', 'created_at', 'updated_at','subscriber_id'];
}
