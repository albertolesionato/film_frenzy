<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Collection;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * @returns Collection<Movie>
     */
    public function getMovies(): Collection
    {
        return Movie::all();
    }
}
