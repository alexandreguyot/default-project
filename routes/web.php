<?php

use App\Http\Controllers\Site\HomeController;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type,Authorization,X-SELECT');
header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE');

Route::group(['middleware' => ['log']], function ()
{
    /**
     * Page d'accueil
     */
    Route::get('/', [HomeController::class, 'index'])->name('get.home');

});
