<?php

namespace App\Http\Controllers;

use App\BusStop;
use Illuminate\Http\Request;

class BusStopController extends Controller
{
    public function index()
    {
        return BusStop::all();
    }

    public function show(BusStop $bus_stop){
        return $bus_stop;
    }

    public function store(Request $request){
        $bus_stop = BusStop::create($request->all());
        return response()->json($bus_stop, 201);
    }

    public function update(Request $request, BusStop $bus_stop){
        $bus_stop->update($request->all());
        return response()->json($bus_stop, 200);
    }

    public function delete(BusStop $bus_stop){
        $bus_stop->delete();
        return response()->json(null, 204);
    }
}
