<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SousCategorieController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\RecruteurController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\StagiaireController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('api')->group(function () {
    Route::resource('offre', OffreController::class);
    });
    Route::middleware('api')->group(function () {
        Route::resource('recruteur', RecruteurController::class);
        });
        Route::middleware('api')->group(function () {
            Route::resource('categorie', CategorieController::class);
            });
            Route::middleware('api')->group(function () {
                Route::resource('demande', DemandeController::class);
                });
                Route::middleware('api')->group(function () {
                    Route::resource('souscategorie', SousCategorieController::class);
                    });
                    Route::middleware('api')->group(function () {
                        Route::resource('stagiaire', StagiaireController::class);
                        });
                        Route::get('/scat/{idcat}',
                        [SousCategorieController::class,'showSCategorieByCAT']);

                        Route::get('/off/{idscat}',
                        [OffreController::class,'showoffrebysscategorie']);
    

Route::post('/login', [LoginController::class,'login']);
Route::post('/register', [RegisterController::class,'register']);
Route::middleware('auth:sanctum')->post('/logout', [LoginController::class,
'logout']);
