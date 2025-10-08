<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function index()
    {
        return Delivery::with(['user', 'route'])->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'route_id' => 'required|exists:routes,id',
            'pickup_location' => 'required|string|max:255',
            'dropoff_location' => 'required|string|max:255',
            'delivery_status' => 'required|in:pending,in-transit,delivered',
        ]);

        $delivery = Delivery::create($validatedData);
        return response()->json($delivery, 201);
    }

    public function show(Delivery $delivery)
    {
        return $delivery->load(['user', 'route']);
    }

    public function update(Request $request, Delivery $delivery)
    {
        $validatedData = $request->validate([
            'user_id' => 'sometimes|required|exists:users,id',
            'route_id' => 'sometimes|required|exists:routes,id',
            'pickup_location' => 'sometimes|required|string|max:255',
            'dropoff_location' => 'sometimes|required|string|max:255',
            'delivery_status' => 'sometimes|required|in:pending,in-transit,delivered',
        ]);

        $delivery->update($validatedData);

        return response()->json($delivery);
    }

    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        return response()->json(null, 204);
    }
}
