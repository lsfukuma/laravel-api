<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return response()->json([
            'success' => true,
            'count' => $movies->count(),
            'results' => $movies
        ]);
    }

    public function show($id){
        $movie = Movie::find($id);

            if ($movie) {
                return response()->json([
                    'success' => true,
                    'result' => $movie
                ]);
            } else {
                return response()->json([
                'sucess' => false,
                'result'=> 'There is not any film with this ID'
                ]);
            }

    }
}
