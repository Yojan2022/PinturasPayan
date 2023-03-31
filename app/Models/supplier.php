<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class supplier extends Model
{
    use SoftDeletes;
    protected $dates = ['delected_at'];
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;

    protected $fillable = ['nombre','descripcion'];

    public function buys(){
        return $this->hasMany(buys::class);
    }
}
