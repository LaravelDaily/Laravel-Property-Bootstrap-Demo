<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'description', 'title', 'photo', 'twitter', 'facebook', 'linkedin', 'instagram'];
}
