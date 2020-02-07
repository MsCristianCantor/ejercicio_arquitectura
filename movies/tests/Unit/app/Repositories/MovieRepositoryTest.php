<?php

namespace Tests\Unit\app\Repositories;

use App\Repositories\Contracts\MoviesRepositoryInterface;
use App\Repositories\MovieRepository;
use Tests\TestCase;

/**
 * Class MovieRepositoryTest
 * @package Tests\Unit\app\Repositories
 */
class MovieRepositoryTest extends TestCase
{
    /**
     * @test
     */
    public function testInstanceOf(): void
    {
        $this->assertInstanceOf(MovieRepository::class, $this->app->make(MoviesRepositoryInterface::class));
    }

    /**
     * @test
     */
    public function testGetMovies(): void
    {
        $repository = $this->app->make(MoviesRepositoryInterface::class);

        $movies = $repository->getWithPage(1);

        $this->assertNotEmpty($movies);
        $this->assertIsArray($movies);
        $this->assertEquals(10, count($movies));
    }
}
