<?php

namespace App\Http\Controllers;

//use App\Models\movie;
use App\Http\Requests\StoremovieRequest;
use App\Http\Requests\UpdatemovieRequest;
use App\Interfaces\MovieRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovieController extends Controller
{

    private $movieRepository;
    

    public function __construct(MovieRepositoryInterface $movieRepository) 
    {
        $this->movieRepository = $movieRepository;
    }

    public function index()
    {
      
        $movie = $this->movieRepository->getAllMovies(); 
        $movie->load('showtime');
        return $movie;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse 
    {
        $movieDetails = $request->only([
            'title',
            'description'
        ]);

        return response()->json(
            [
                'data' => $this->movieRepository->createMovie($movieDetails)
            ],
            Response::HTTP_CREATED
        );
        $movie_id = $data->id;
        return redirect('/'.$prop_id);
    }

    public function saveshowtime(Request $request): JsonResponse 
    {
        $movieDetails = $request->only([
            'location_id',
            'movie_id'
        ]);

        return response()->json(
            [
                'data' => $this->movieRepository->createMovie($showtimeDetails)
            ],
            Response::HTTP_CREATED
        );
        $movie_id = $data->id;
        return redirect('/addshowtime'.$movie_id);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemovieRequest  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemovieRequest $request, movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $movie)
    {
        //
    }
}
