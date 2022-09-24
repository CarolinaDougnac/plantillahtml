<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facturaproducto
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
class Facturaproducto extends Model
{
    
    static $rules = [
		'producto_id' => 'required',
		'factura_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['factura_id','producto_id','cantidad','vencimiento','precio_compra','precio_venta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factura()
    {
        return $this->hasOne('App\Models\Factura', 'id', 'factura_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    

}
