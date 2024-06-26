<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'capstone_name' , 'description' , 'sdg' , 'trl', 'email' , 'school'
    ];

    protected $table = 'startups';
}
