<?php
use App\notifications\notif;
use App\User;
use Carbon\Carbon;
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

Route::get('/{any}', function(){
    return view('vue');
})->where('any', '.*');

Route :: get('/getMatricule', 'RechMatController@getMatricule');

/*
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/creercpt','CreerCompteController@creercpt');

Route::view('/rech','rech');
Route::post('/rechmat','RechMatController@rechEtd');

Route::view('/permut','permut');
Route::post('/permutEtd','PermutController@permuteEtd');
*/





