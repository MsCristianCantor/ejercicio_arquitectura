<?php


namespace App\Http\Controllers\V1\Movies;


use App\Repositories\Contracts\MoviesRepositoryInterface;
use Illuminate\Contracts\View\View;

class MovieController
{
    /**
     * @var MoviesRepositoryInterface
     */
    private $moviesRepository;

    public function __construct(MoviesRepositoryInterface $moviesRepository)
    {
        $this->moviesRepository = $moviesRepository;
    }

    /**
     * @return View
     */
    public function __invoke(): view
    {
        $data = $this->moviesRepository->getWithPage(2);
        return view()->make('movies')->with(['movies' => $data]);
    }
}
