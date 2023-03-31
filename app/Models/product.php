<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use SoftDeletes;
    protected $dates = ['delected_at'];
    protected $hidden = ['created_at','updated_at']; 

    use HasFactory;
    
    protected $fillable = ['unit_id','nombre','marca','cantidadMl','valor','descueto','category_id'];
    
    public function units(){
        return $this->belongsToMany(unit::class);
    }

    public function categories(){
        return $this->belongsToMany(category::class);
    }

    public function product_sales(){
        return $this->hasMany(product_sale::class);
    }

    public function buy_products(){
        return $this->hasMany(buy_product::class);
    }

    public function consumptions(){
        return $this->hasMany(consumption::class);
    }
}
