<?php


namespace App\Repositories;


use App\Models\Movie;
use App\Repositories\Contracts\MoviesRepositoryInterface;

/**
 * Interface MovieRepository
 * @package App\Repositories
 */
class MovieRepository implements MoviesRepositoryInterface
{
    /**
     * @param int $page
     * @return array|null ?array
     */
    public function getWithPage(int $page): ?array
    {
        return Movie::limit(10)
            ->offset($page * 10)
            ->get()
            ->toArray();
    }
}
