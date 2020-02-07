<?php

namespace Tests\Unit\app\UseCases;

use App\Repositories\Contracts\MoviesRepositoryInterface;
use App\UseCases\Contracts\GetListMoviesUseCaseInterface;
use App\UseCases\GetListMoviesUseCase;
use Tests\TestCase;

/**
 * Class GetListMoviesUseCaseTest
 * @package Tests\Unit\app\UseCases
 */
class GetListMoviesUseCaseTest extends TestCase
{
    /**
     * @test
     */
    public function testInstanceOf(): void
    {
        $this->assertInstanceOf(GetListMoviesUseCase::class, $this->app->make(GetListMoviesUseCaseInterface::class));
    }

    /**
     * @test
     */
    public function testGetListMoviesUseCase(): void
    {
        $mockRepository = $this->createMock(MoviesRepositoryInterface::class);

        $useCase = new GetListMoviesUseCase($mockRepository);

        $mockRepository
            ->expects($this->once())
            ->method('getWithPage')
            ->with(1)
            ->willReturn(['array']);

        $useCase->handler();
    }
}
