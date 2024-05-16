<?php

namespace App\Http\Controllers\Api\Place;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlaceResource;
use App\Models\Place;
use Illuminate\Http\Request;

class ListPlaceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $places = Place::query();

        if ($request->filled('name')) {
            $places->where('name', 'like', '%' . $request->get('name') . '%');
        }

        return PlaceResource::collection($places->paginate(10));
    }
}
