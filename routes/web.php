<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/ListeEtudiants', function () {
//     return view('listeEtudiant');
// });
Route::get('/ListeEtudiants',[EtudiantController::class,'Liste_etudiant'])
          ->name('Liste');
Route::get('/AjouterEtudiants',[EtudiantController::class,'Ajouter_etudiant'])
          ->name('Ajouter');
Route::post('/AjouterEtudiants/verification',[EtudiantController::class,'verification'])
          ->name('Verifier');
Route::get('/update-etudiant/{id}',[EtudiantController::class,'updateEtudiant'])
          ->name('Update');

 Route::post('/update-etudiant/verification',[EtudiantController::class,'verification_update'])
          ->name('updateVerifier');
Route::get('/delete-etudiant/{id}',[EtudiantController::class,'DeleteEtudiant'])
          ->name('Delete');  
// Route::get('/recherche', [EtudiantController::class,'rechercher'])->name('Rechercher');
Route::post('/rechercher', [EtudiantController::class,'rechercher'])
         ->name('Rechercher');
Route::get('/rechercherAffiche', [EtudiantController::class,'rechercherAffiche'])
         ->name('RechercheAfficher');

       
          

