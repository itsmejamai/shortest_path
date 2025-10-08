<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Route;

class RouteController extends Controller
{
    public function index()
    {
        return Route::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'start_point' => 'required|string|max:255',
            'end_point' => 'required|string|max:255',
            'shortest_path' => 'required|string',
            'distance' => 'required|numeric',
            'travel_time' => 'required|string|max:255',
        ]);

        $route = Route::create($validatedData);
        return response()->json($route, 201);
    }

    public function show(Route $route)
    {
        return $route;
    }

    public function update(Request $request, Route $route)
    {
        $validatedData = $request->validate([
            'start_point' => 'sometimes|required|string|max:255',
            'end_point' => 'sometimes|required|string|max:255',
            'shortest_path' => 'sometimes|required|string',
            'distance' => 'sometimes|required|numeric',
            'travel_time' => 'sometimes|required|string|max:255',
        ]);

        $route->update($validatedData);

        return response()->json($route);
    }

    public function destroy(Route $route)
    {
        $route->delete();
        return response()->json(null, 204);
    }
}
