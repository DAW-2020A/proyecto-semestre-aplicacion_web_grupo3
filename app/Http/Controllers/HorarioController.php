<?php

namespace App\Http\Controllers;

use App\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        return Horario::all();
    }

    public function show(Horario $horarios){
        return $horarios;
    }

    public function store(Request $request){
        $horarios = Horario::create($request->all());
        return response()->json($horarios, 201);
    }

    public function update(Request $request, Horario $horarios){
        $horarios->update($request->all());
        return response()->json($horarios, 200);
    }

    public function delete(Horario $horarios){
        $horarios->delete();
        return response()->json(null, 204);
    }
}
