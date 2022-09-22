<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tienda
 *
 * @property $id
 * @property $nombre
 * @property $id_mueble
 * @property $id_nivel
 * @property $id_posicion
 * @property $updated_at
 * @property $created_at
 *
 * @property Mueble $mueble
 * @property Nivele $nivele
 * @property Posicione $posicione
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tienda extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'id_mueble' => 'required',
		'id_nivel' => 'required',
		'id_posicion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','id_mueble','id_nivel','id_posicion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mueble()
    {
        return $this->hasOne('App\Models\Mueble', 'id', 'id_mueble');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nivele()
    {
        return $this->hasOne('App\Models\Nivele', 'id', 'id_nivel');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function posicione()
    {
        return $this->hasOne('App\Models\Posicione', 'id', 'id_posicion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_tienda', 'id');
    }
    

}
