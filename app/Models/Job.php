<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

  
    protected  $fillable =[
        'title',
        'type',
        'location',
        'salary',
        'time',
        'category',
        'description'
    ];
    
    use HasFactory;

} 
