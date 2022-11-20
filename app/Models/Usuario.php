<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre
 * @property $foto
 * @property $estado
 * @property $created_by
 * @property $updated_by
 * @property $created_at
 * @property $updated_at
 *
 * @property Bodega[] $bodegas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
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
    protected $fillable = ['nombre','foto','estado','created_by','updated_by'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bodegas()
    {
        return $this->hasMany('App\Models\Bodega', 'id_responsable', 'id');
    }
    

}
