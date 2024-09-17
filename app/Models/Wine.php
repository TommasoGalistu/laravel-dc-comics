<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'slug',
        'sale_date',
        'type'
    ];
}
