<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'image',
        'updated_at',
        'created_at'
    ];
}
