<?php


namespace App\UseCases\Contracts;

/**
 * Interface GetListMoviesUseCaseInterface
 * @package App\UseCases\Contracts
 */
interface GetListMoviesUseCaseInterface
{
    /**
     * @return array
     */
    public function handler(): array;
}
