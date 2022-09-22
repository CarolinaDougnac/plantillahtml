<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadoprod
 *
 * @property $id
 * @property $estado
 * @property $updated_at
 * @property $created_at
 *
 * @property Existencia[] $existencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estadoprod extends Model
{
    
    static $rules = [
		'estado' => 'required',
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
    public function existencias()
    {
        return $this->hasMany('App\Models\Existencia', 'id_estado', 'id');
    }
    

}
