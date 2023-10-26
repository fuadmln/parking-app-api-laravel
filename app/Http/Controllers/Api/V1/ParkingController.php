<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Parking;
use App\Http\Resources\ParkingResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParkingController extends Controller
{
    public function start(Request $request)
    {
        $parkingData = $request->validate([
            'vehicle_id' => [
                'required',
                'integer',
                'exists:vehicles,id,deleted_at,NULL,user_id,'.auth()->id(),
            ],
            'zone_id' => ['required', 'integer', 'exists:zones,id'],
        ]);

        if(Parking::active()->where('vehicle_id', $request->vehicle_id)->exists()) {
            return response()->json([
                'errors' => [
                    'general' => ['Vehicle already active parking, can\'t start twice. Please stop active parking!'],
                ],
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        
        $parking = Parking::create($parkingData);
        $parking->load('vehicle', 'zone');

        return ParkingResource::make($parking);
    }

    public function show(Parking $parking)
    {
        return ParkingResource::make($parking);
    }

    public function stop(Parking $parking)
    {
        $parking->update([
            'stop_time' => now(),
        ]);

        return ParkingResource::make($parking);
    }
}
