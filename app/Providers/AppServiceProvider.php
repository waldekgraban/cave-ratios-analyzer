<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CaveRepository;
use App\Services\CaveRepositoryInterface;
use App\Services\CaveService;
use App\Services\CaveServiceInterface;


class AppServiceProvider extends ServiceProvider
{

    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        CaveServiceInterface::class => CaveService::class,
        CaveRepositoryInterface::class => CaveRepository::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
