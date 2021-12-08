<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'is_verify',
        'is_user',
        'is_admin',
        'verification_code',
        'password',
        'reset_password_code',
        'image',
        'user_ip'
    ];
}
