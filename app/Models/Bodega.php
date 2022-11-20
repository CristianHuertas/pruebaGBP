<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bodega
 *
 * @property $id
 * @property $nombre
 * @property $id_responsable
 * @property $estado
 * @property $created_by
 * @property $updated_by
 * @property $created_at
 * @property $updated_at
 *
 * @property Historiale[] $historiales
 * @property Historiale[] $historiales
 * @property Inventario[] $inventarios
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bodega extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','id_responsable','estado','created_by','updated_by'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historiales()
    {
        return $this->hasMany('App\Models\Historiale', 'id_bodega_destino', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historiales()
    {
        return $this->hasMany('App\Models\Historiale', 'id_bodega_origen', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario', 'id_bodega', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_responsable');
    }
    

}
