<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class buy extends Model
{
    use SoftDeletes;
    protected $dates = ['delected_at'];
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;

    protected $fillable = ['supplier_id','fecha','numeroFactura','cantidad','valor'];

    public function suppliers(){
        return $this->belongsToMany(supplier::class);
    }

    public function buy_products(){
        return $this->hasMany(buy_product::class);
    }
}
