<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $folio
 * @property $id_proveedor
 * @property $estado_fact
 * @property $fecha_emision
 * @property $fecha_reception
 * @property $updated_at
 * @property $created_at
 *
 * @property Estadofact $estadofact
 * @property Existencia[] $existencias
 * @property Productofactura[] $productofacturas
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'id_proveedor' => 'required',
		'estado_fact' => 'required',
		'fecha_emision' => 'required',
		'fecha_reception' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','id_proveedor','estado_fact','fecha_emision','fecha_reception'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadofact()
    {
        return $this->hasOne('App\Models\Estadofact', 'id', 'estado_fact');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function existencias()
    {
        return $this->hasMany('App\Models\Existencia', 'id_factura', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productofacturas()
    {
        return $this->hasMany('App\Models\Productofactura', 'Factura_id_factura', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'id_proveedor');
    }
    

}
