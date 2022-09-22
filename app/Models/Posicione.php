<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Posicione
 *
 * @property $id
 * @property $posicion
 * @property $updated_at
 * @property $created_at
 *
 * @property Tienda[] $tiendas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Posicione extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['posicion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendas()
    {
        return $this->hasMany('App\Models\Tienda', 'id_posicion', 'id');
    }
    

}
