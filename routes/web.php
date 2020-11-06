<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('dev', function () {

    $caveRepository = new App\Repositories\CaveRepository();
    $caveService    = new App\Services\CaveService($caveRepository);

    return new JsonResponse($caveService->getById(1), Response::HTTP_OK);
});
