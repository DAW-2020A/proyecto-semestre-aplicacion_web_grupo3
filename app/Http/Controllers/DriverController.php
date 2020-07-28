<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        return Driver::all();
    }

    public function show(Driver $drivers){
        return $drivers;
    }

    public function store(Request $request){
        $drivers = Driver::create($request->all());
        return response()->json($drivers, 201);
    }

    public function update(Request $request, Driver $drivers){
        $drivers->update($request->all());
        return response()->json($drivers, 200);
    }

    public function delete(Driver $drivers){
        $drivers->delete();
        return response()->json(null, 204);
    }
}
