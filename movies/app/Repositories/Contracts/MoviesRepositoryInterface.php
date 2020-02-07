<?php


namespace App\Repositories\Contracts;


use App\Models\Movie;

/**
 * Interface MoviesRepositoryInterface
 * @package App\Repositories\Contracts
 */
interface MoviesRepositoryInterface
{
    /**
     * @param int $page
     * @return array|null ?array
     */
    public function getWithPage(int $page): ?array;
}
