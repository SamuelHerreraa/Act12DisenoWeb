<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }

    public function show($id)
    {
        try {
            $movie = Movie::findOrFail($id);
            return $movie;
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Movie not found.'], 404);
        }
    }

}