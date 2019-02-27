<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tubo;


class Formulario extends Model
{
    
    protected $table = 'control_diario_extrusion';
    protected $fillable = ['tubo_id','numero_maquina','nombre_maquinista','nombre_supervisor',
            'fecha','turno','error_id','error_descripcion','cilindro_oil','cilindro_zona_1','cilindro_zona_2','cilindro_zona_3','cilindro_zona_4',
            'cilindro_zona_5','cilindro_zona_6','cabezal_interna','cabezal_zona_1','cabezal_zona_2','cabezal_zona_3',
            'cabezal_zona_4','cabezal_zona_5','cabezal_zona_6','cabezal_zona_7','cabezal_zona_8','cabezal_zona_9',
            'cabezal_zona_9','cabezal_zona_10','cabezal_zona_11','cabezal_zona_12','cabezal_zona_13','cabezal_zona_14',
            'cabezal_zona_15','cabezal_zona_16','cabezal_zona_17','cabezal_zona_18','nombre_cabezal','diametro_restrictor_filtro',
            'rpm_motorExtrusora','amperaje_motorExtrusora','rpm_revMin_tornillos','porcentaje_velocidad_alimentador','amperaje_motor_alimentador',
            'desgasificador_vacio','presion_masa','temperatura_masa','contrapresion','vacio_primera_tina','temperatura_primera_tina_enfria',
            'presion_agua_primera_tina_enfria','vacio_segunda_tina_enfria','velocidad_halador','limpieza_filtro_tina','altura_rotulo',
            'espesor','diametro_externo','longitud_tubo','embone','kilogramos_horas','peso_tubo_metro'];



    // protected $hidden = ['tubos_id'];            
    public $timestamps = false;

    public function tubo()
    {
        return $this->belongsTo(Tubo::class,'tubo_id');
    }

}
