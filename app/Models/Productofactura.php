<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Productofactura
 *
 * @property $id
 * @property $ProductoBasico_id_productoBasico
 * @property $Factura_id_factura
 * @property $updated_at
 * @property $created_at
 *
 * @property Factura $factura
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Productofactura extends Model
{
    
    static $rules = [
		'ProductoBasico_id_productoBasico' => 'required',
		'Factura_id_factura' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ProductoBasico_id_productoBasico','Factura_id_factura'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factura()
    {
        return $this->hasOne('App\Models\Factura', 'id', 'Factura_id_factura');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'ProductoBasico_id_productoBasico');
    }
    

}
