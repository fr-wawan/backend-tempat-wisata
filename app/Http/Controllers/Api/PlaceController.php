<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::orderBy('created_at', 'desc')->paginate(request('paginate'));

        return response()->json([
            'data' => $places
        ]);
    }

    public function show($slug)
    {
        $place = Place::where('slug', $slug)->first();

        return response()->json([
            'data' => $place
        ]);
    }
}
