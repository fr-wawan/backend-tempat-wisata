<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlaceCommentRequest;
use App\Models\Place;
use App\Models\PlaceComment;
use App\Services\PlaceService;
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

    public function indexComment($place_id)
    {
        $comments = PlaceComment::orderBy('created_at', 'desc')->where('place_id', $place_id)->paginate(10);

        return response()->json([
            'data' => $comments
        ]);
    }

    public function storeComment(PlaceCommentRequest $request, PlaceService $service)
    {
        $validated = $request->validated();

        $service->storeComment($validated);

        return response()->json([
            'message' => 'Komen Berhasil!'
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
