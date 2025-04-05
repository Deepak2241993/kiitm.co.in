<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email', 'phone', 'dob', 'exprience', 'qualification', 'role', 'current_salary', 'expected_salary', 'message', 'attachment', 'status', 'created_at', 'updated_at','job_position'];
}
