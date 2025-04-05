<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $fillable=[ 'email', 'mobile', 'status', 'mail_send_status', 'created_at', 'updated_at'];
}
