<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapstoneGroups extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name' , 'capstone_id' , 'email' , 'school' , 'panelists_id'
    ];
}
