<?php

namespace App\Http\Controllers\V1\Movies;

use App\UseCases\Contracts\GetListMoviesUseCaseInterface;
use Illuminate\Contracts\View\View;

/**
 * Class MovieController
 * @package App\Http\Controllers\V1\Movies
 */
class MovieController
{
    /**
     * @var GetListMoviesUseCaseInterface
     */
    private $getListMoviesUseCase;

    /**
     * MovieController constructor.
     * @param GetListMoviesUseCaseInterface $getListMoviesUseCase
     */
    public function __construct(GetListMoviesUseCaseInterface $getListMoviesUseCase)
    {
        $this->getListMoviesUseCase = $getListMoviesUseCase;
    }

    /**
     * @return View
     */
    public function __invoke(): view
    {
        $data = $this->getListMoviesUseCase->handler();
        return view()->make('movies')->with(['movies' => $data]);
    }
}
