<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //1. Property
    protected $fillable = [
        'category_name',
        'description',
        'picture'
    ];

    //2.Constructer



    //3. Method
}
