<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['delected_at']; 
    protected $hidden = ['created_at','updated_at']; 
    protected $fillable = [
        'name',
        'code',
        'price',
        'discount',
        'category'

    ];
}
