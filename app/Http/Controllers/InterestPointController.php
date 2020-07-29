<?php

namespace App\Http\Controllers;

use App\InterestPoint;
use Illuminate\Http\Request;

class InterestPointController extends Controller
{
    public function index()
    {
        return InterestPoint::all();
    }

    public function show(InterestPoint $interest_points){
        return $interest_points;
    }

    public function store(Request $request){
        $interest_points = InterestPoint::create($request->all());
        return response()->json($interest_points, 201);
    }

    public function update(Request $request, InterestPoint $interest_points){
        $interest_points->update($request->all());
        return response()->json($interest_points, 200);
    }

    public function delete(InterestPoint $interest_points){
        $interest_points->delete();
        return response()->json(null, 204);
    }
}
