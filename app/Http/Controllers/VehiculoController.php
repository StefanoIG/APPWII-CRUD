<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
//validator
use Illuminate\Support\Facades\Validator;


class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return response()->json($vehiculos);
    }

       public function store(Request $request)
    {  

        $validator = Validator::make($request->all(), [
            'tipoVehiculo' => 'required',
            'categoria' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $vehiculo = Vehiculo::create($request->all());
        return response()->json($vehiculo, 201);
    }

    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        //si no existe el vehiculo
        if (!$vehiculo) {
            return response()->json(['error' => 'No existe el vehiculo'], 404);
        }
        
        return response()->json($vehiculo);
    }


    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->update($request->all());
        return response()->json($vehiculo);
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return response()->json(null, 204);
    }
}