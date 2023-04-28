<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\OffreEmploiController;
use GuzzleHttp\Middleware;

//Authentification
Route::post('/getUser', [AuthController::class, 'login']);
Route::post('/addUser', [AuthController::class, 'register']);
Route::middleware('api')->get('/user', [AuthController::class, 'user']);


//Offre d'emploi
Route::get('/getOffreEmploi/{id}', [OffreEmploiController::class, 'getOffreEmploi']);
Route::get('/getOffresEmploi', [OffreEmploiController::class, 'getOffresEmploi']);
Route::post('/addOffreEmploi', [OffreEmploiController::class, 'addOffreEmploi']);
Route::put('/updateOffreEmploi/{id}', [OffreEmploiController::class, 'updateOffreEmploi']);
Route::delete('/deleteOffreEmploi/{id}', [OffreEmploiController::class, 'deleteOffreEmploi']);

Route::get('/getOffreTachePoste', [OffreEmploiController::class, 'getOffreTachePoste']);
