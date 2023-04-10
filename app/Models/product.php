<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 *
 * @property $id
 * @property $unit_id
 * @property $nombre
 * @property $marca
 * @property $valor
 * @property $descuento
 * @property $codigoBarras
 * @property $category_id
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property BuyProduct[] $buyProducts
 * @property Category $category
 * @property Consumption[] $consumptions
 * @property ProductSale[] $productSales
 * @property Unit $unit
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    use SoftDeletes;

    static $rules = [
		'codigoBarras' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['unit_id','nombre','marca','valor','descuento','codigoBarras','category_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buyProducts()
    {
        return $this->hasMany('App\Models\BuyProduct', 'product_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consumptions()
    {
        return $this->hasMany('App\Models\Consumption', 'product_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSales()
    {
        return $this->hasMany('App\Models\ProductSale', 'product_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unit()
    {
        return $this->hasOne('App\Models\Unit', 'id', 'unit_id');
    }
    

}
