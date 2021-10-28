<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\AirPlaneFlight;


class AirPlaneFlightControllerAPI extends Controller
{
    public function index()
    {
        $flights = AirPlaneFlight::all();

        return response()->json(['flights'=>$flights],200);
    }
}
