<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;
use App\pilote;
use App\project;
use Auth;
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
    $counts=[];
    $counts['projects']=count(project::all());
    $counts['pilotes']=count(pilote::all());
    return view('home',compact('counts'));
});



Route::get('/home', function(){
    $counts=[];
    $counts['projects']=count(project::all());
    $counts['pilotes']=count(pilote::all());
    return view('home',compact('counts'));
});


Route::Get("/planificateur/{Name?}","Planificateur@index");

Route::Get("/AddPilote/{Nom}/{Prenom}/{Dob}","PiloteController@create");

Route::Get("/ShowPilote/{id}","PiloteController@show");

Route::resource('pilotes',"PiloteController");
Route::resource('projets',"ProjectController");
Route::Get("Pilote/Delete/{id}","PiloteController@Delete")->name('PiloteDelete');
Route::Get("Projet/Delete/{id}","ProjectController@Delete")->name('ProjectDelete');


Route::get('/home', 'HomeController@index')->name('home');
