<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlaceResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryPlaceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Category $category)
    {
        return PlaceResource::collection($category->places()->paginate(10));
    }
}
