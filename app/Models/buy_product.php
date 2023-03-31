<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class buy_product extends Model
{
    use SoftDeletes;
    protected $dates = ['delected_at'];
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;

    protected $fillable = ['product_id','buy_id'];

    public function products(){
        return $this->belongsToMany(product::class);
    }

    public function buys(){
        return $this->belongsToMany(buy::class);
    }
}
