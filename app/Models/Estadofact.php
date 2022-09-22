<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadofact
 *
 * @property $id
 * @property $estado
 * @property $updated_at
 * @property $created_at
 *
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estadofact extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'estado_fact', 'id');
    }
    

}
