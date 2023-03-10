<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Customer extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['name', 'identification', 'telephone'];

}
