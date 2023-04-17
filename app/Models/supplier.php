<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Supplier
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Buy[] $buys
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Supplier extends Model
{
    use SoftDeletes;

    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buys()
    {
        return $this->hasMany('App\Models\Buy', 'supplier_id', 'id');
    }
    

}
