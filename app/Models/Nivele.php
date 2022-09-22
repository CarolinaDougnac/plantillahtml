<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nivele
 *
 * @property $id
 * @property $nivel
 * @property $updated_at
 * @property $created_at
 *
 * @property Tienda[] $tiendas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nivele extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nivel'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendas()
    {
        return $this->hasMany('App\Models\Tienda', 'id_nivel', 'id');
    }
    

}
