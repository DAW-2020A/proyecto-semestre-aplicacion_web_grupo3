<?php

namespace App\Http\Controllers;

use App\Rutas;
use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function index()
    {
        return Rutas::all();
    }

    public function show(Rutas $rutas){
        return $rutas;
    }

    public function store(Request $request){
        $rutas = Rutas::create($request->all());
        return response()->json($rutas, 201);
    }

    public function update(Request $request, Rutas $rutas){
        $rutas->update($request->all());
        return response()->json($rutas, 200);
    }

    public function delete(Rutas $rutas){
        $rutas->delete();
        return response()->json(null, 204);
    }
}
