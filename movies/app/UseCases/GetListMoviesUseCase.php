<?php

namespace App\UseCases;

use App\Repositories\Contracts\MoviesRepositoryInterface;
use App\UseCases\Contracts\GetListMoviesUseCaseInterface;

/**
 * Class GetListMoviesUseCase
 * @package App\UseCases
 */
class GetListMoviesUseCase implements GetListMoviesUseCaseInterface
{
    /**
     * @var MoviesRepositoryInterface
     */
    private $moviesRepository;

    /**
     * GetListMoviesUseCase constructor.
     * @param MoviesRepositoryInterface $moviesRepository
     */
    public function __construct(MoviesRepositoryInterface $moviesRepository)
    {
        $this->moviesRepository = $moviesRepository;
    }

    /**
     * @return array
     */
    public function handler(): array
    {
        return $this->moviesRepository->getWithPage(1);
    }
}
