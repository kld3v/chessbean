<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MoveController;

 Route::apiResource('games', GameController::class);
 Route::apiResource('moves', MoveController::class);

/* Route::apiResource([ */
/*   'games' => GameController::class, */
/*   'moves' => MoveController::class, */
/* ]); */

