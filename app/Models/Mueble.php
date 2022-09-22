<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mueble
 *
 * @property $id
 * @property $nombre_mueble
 * @property $updated_at
 * @property $created_at
 *
 * @property Tienda[] $tiendas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mueble extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_mueble'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendas()
    {
        return $this->hasMany('App\Models\Tienda', 'id_mueble', 'id');
    }
    

}
