<?php

namespace App\Providers;

use App\Repositories\Contracts\MoviesRepositoryInterface;
use App\Repositories\MovieRepository;
use App\UseCases\Contracts\GetListMoviesUseCaseInterface;
use App\UseCases\GetListMoviesUseCase;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MoviesRepositoryInterface::class, MovieRepository::class);
        $this->app->bind(GetListMoviesUseCaseInterface::class, GetListMoviesUseCase::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
