<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email', 'phone', 'job_title', 'company_name', 'country', 'message', 'etype', 'service_id', 'status', 'created_at', 'updated_at'];
}
