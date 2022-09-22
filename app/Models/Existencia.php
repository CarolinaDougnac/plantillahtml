<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Existencia
 *
 * @property $id
 * @property $id_producto
 * @property $cantidad
 * @property $id_estado
 * @property $vencimiento
 * @property $id_factura
 * @property $precio_venta
 * @property $precio_balance
 * @property $cant_tienda
 * @property $cant_bodega
 * @property $updated_at
 * @property $created_at
 *
 * @property EstadoProd $estadoProd
 * @property Factura $factura
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Existencia extends Model
{
    
    static $rules = [
		'id_producto' => 'required',
		'cantidad' => 'required',
		'id_estado' => 'required',
		'vencimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_producto','cantidad','id_estado','vencimiento','id_factura','precio_venta','precio_balance','cant_tienda','cant_bodega'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadoProd()
    {
        return $this->hasOne('App\Models\EstadoProd', 'id', 'id_estado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factura()
    {
        return $this->hasOne('App\Models\Factura', 'id', 'id_factura');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_producto');
    }
    

}
