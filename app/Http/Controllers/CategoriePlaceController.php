<?php

namespace App\Http\Controllers;

use App\CategoriePlace;
use Illuminate\Http\Request;

class CategoriePlaceController extends Controller
{
    public function index()
    {
        return CategoriePlace::all();
    }

    public function show(CategoriePlace $categorie_places){
        return $categorie_places;
    }

    public function store(Request $request){
        $categorie_places = CategoriePlace::create($request->all());
        return response()->json($categorie_places, 201);
    }

    public function update(Request $request, CategoriePlace $categorie_places){
        $categorie_places->update($request->all());
        return response()->json($categorie_places, 200);
    }

    public function delete(CategoriePlace $categorie_places){
        $categorie_places->delete();
        return response()->json(null, 204);
    }
}
