<?php

namespace App\Http\Controllers\Api\Place;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlaceResource;
use App\Models\Place;
use Illuminate\Http\Request;

class ShowPlaceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Place $place)
    {
        return PlaceResource::make($place);
    }
}
