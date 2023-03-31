<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sale extends Model
{
    use SoftDeletes;
    protected $dates = ['delected_at'];
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;

    protected $fillable = ['customer_id','fechaVenta'];

    public function customers(){
        return $this->belongsToMany(customer::class);
    }

    public function product_sales(){
        return $this->hasMany(product_sale::class);
    }
}
