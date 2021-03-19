<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use GuzzleHttp\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function index()
    {
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key='. config('services.tmdb.api_key'))->json()['results'];
        $nowPlayingMovies = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key=' . config('services.tmdb.api_key') . '&language=en-US&page=1')->json()['results'];
        $genresArray = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=' . config('services.tmdb.api_key') . '&language=en-US')->json();

        $genres = collect($genresArray['genres'])->pluck('name', 'id');

        return \view('index', compact([
            'popularMovies',
            'nowPlayingMovies',
            'genres',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Movie $movie
     * @return Application|Factory|View|Response
     */
    public function show($id)
    {

//        https://api.themoviedb.org/3/movie/527774?api_key=ebe86aa3836f4012f8f0e803498c9b74&append_to_response=credits,videos,images
        $movie = Http::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key='.config('services.tmdb.api_key').'&append_to_response=credits,videos,images')->json();
        dump($movie);

        return view('Movies.show', [
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Movie $movie
     * @return Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Movie $movie
     * @return Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Movie $movie
     * @return Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
