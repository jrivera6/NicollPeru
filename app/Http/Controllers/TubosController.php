<?php

namespace App\Http\Controllers;

use App\Models\Tubo;
use Illuminate\Http\Request;

class TubosController extends Controller
{

    function index(Request $request)
    {

        if($request->isJson())
        {    
            $tubos = Tubo::all();
            return response()->json($tubos, 200);
        }
        return response()->json(['error' => 'No Autorizado'], 401, []);
        
        // dd($tubo);
        // return 'Hola';

    }

    function create(Request $request)
    {
        if($request->isJson())
        {

            $this->validate($request,['id'=>'required','descripcion_tubo'=>'required']);
            $tubos = Tubo::create($request->all());
            return response()->json($tubos,201);
        }
        return response()->json(['error' => 'No Autorizado'], 401, []);


    }

    function select($id)
    {
        // $form = Tubo::find($id)->formularios;
        $tubo = Tubo::findOrFail($id);
        
        return response()->json($tubo,200);
    }

    
}
