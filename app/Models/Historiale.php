<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Historiale
 *
 * @property $id
 * @property $cantidad
 * @property $id_bodega_origen
 * @property $id_bodega_destino
 * @property $created_by
 * @property $updated_by
 * @property $created_at
 * @property $updated_at
 * @property $id_inventario
 *
 * @property Bodega[] $bodega
 * @property Bodega[] $bodega
 * @property Inventario[] $inventario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Historiale extends Model
{
    use HasFactory;
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad','id_bodega_origen','id_bodega_destino','created_by','updated_by','id_inventario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bodega()
    {
        return $this->hasOne('App\Models\Bodega', 'id', 'id_bodega_origen');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    /* public function bodega()
    {
        return $this->hasOne('App\Models\Bodega', 'id', 'id_bodega_destino');
    } */
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inventario()
    {
        return $this->hasOne('App\Models\Inventario', 'id', 'id_inventario');
    }
    

}
