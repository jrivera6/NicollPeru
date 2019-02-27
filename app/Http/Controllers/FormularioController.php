<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    
    public function index(Request $request)
    {

        if($request->isJson())
        {
            $form = Formulario::with('tubo')->get();
            // $form = Formulario::all();
            return response()->json($form,200);
            // dd($form);
        }
        return response()->json(['error' => 'No Autorizado'], 401);

    }

    function create(Request $request)
    {

        if($request->isJson())
        {
            $this->validate($request,['tubo_id'=>'required']);
            $form = Formulario::create($request->all());
            return response()->json($form,201);
        }
        return response()->json(['error' => 'No Autorizado'], 401);
    }

    function select($id)
    {

        // $form = DB::select('select * from control_diario_extrusion where tubo_id='.$id.' and kilogramos_horas = (select max(kilogramos_horas) from control_diario_extrusion)');
        $max = Formulario::where('tubo_id',$id)->max('kilogramos_horas');
        $form = Formulario::where('kilogramos_horas',$max)->where('tubo_id',$id)->first();
        
        if(!$max){
            return response()->json(['error'=>'Codigo de tubo no existente'],404);
        }

        return response()->json($form,200);

    }   

}
