<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unit
 *
 * @property $id
 * @property $nombre
 * @property $unidadMl
 * @property $factorConversion
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Product[] $products
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Unit extends Model
{
    use SoftDeletes;

    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','unidadMl','factorConversion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'unit_id', 'id');
    }
    

}
