<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_sale extends Model
{
    use SoftDeletes;
    protected $dates = ['delected_at'];
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;

    protected $fillable = ['sale_id','product_id','user_id','cantidad','valor'];

    public function sales(){
        return $this->belongsToMany(sale::class);
    }

    public function products(){
        return $this->belongsToMany(product::class);
    }

    public function users(){
        return $this->belongsToMany(user::class);
    }
}