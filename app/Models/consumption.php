<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class consumption extends Model
{
    use SoftDeletes;
    protected $dates = ['delected_at'];
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;

    protected $fillable = ['preparation_id','product_id','cantidadMl'];

    public function preparations(){
        return $this->belongsToMany(preparation::class);
    }

    public function products(){
        return $this->belongsToMany(product::class);
    }
}
