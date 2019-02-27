<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Formulario;


class Tubo extends Model
{
    
    // protected $table = 'tubo';

    protected $fillable = [
        'id','descripcion_tubo'
    ];


    public $timestamps = false;


    public function formularios()
    {
        return $this->hasMany(Formulario::class);
    }
}
