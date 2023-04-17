<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Buy
 *
 * @property $id
 * @property $supplier_id
 * @property $fecha
 * @property $numeroFactura
 * @property $cantidad
 * @property $valor
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property BuyProduct[] $buyProducts
 * @property Supplier $supplier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Buy extends Model
{
    use SoftDeletes;

    static $rules = [
		'fecha' => 'required',
		'numeroFactura' => 'required',
		'cantidad' => 'required',
		'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['supplier_id','fecha','numeroFactura','cantidad','valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buyProducts()
    {
        return $this->hasMany('App\Models\BuyProduct', 'buy_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier', 'id', 'supplier_id');
    }
    

}
