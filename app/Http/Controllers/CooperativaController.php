<?php

namespace App\Http\Controllers;

use App\Cooperativa;
use Illuminate\Http\Request;

class CooperativaController extends Controller
{
    public function index()
    {
        return Cooperativa::all();
    }

    public function show(Cooperativa $cooperativas){
        return $cooperativas;
    }

    public function store(Request $request){
        $cooperativas =  Cooperativa::create($request->all());
        return response()->json($cooperativas, 201);
    }

    public function update(Request $request,  Cooperativa $cooperativas){
        $cooperativas->update($request->all());
        return response()->json($cooperativas, 200);
    }

    public function delete(Cooperativa $cooperativas){
        $cooperativas->delete();
        return response()->json(null, 204);
    }
}
