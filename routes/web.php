<?php

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


use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $bodyClass='index';
    return view('index',compact(['bodyClass']));

});
Route::get('/index', 'indexController@index');


Route::get('/about','PagesController@about');
Route::get('/business-growth','PagesController@BusinessGrowth');
Route::get('/research-and-strategy','PagesController@ResearchAndStrategy');
Route::get('/liabilities-management','PagesController@LiabilitiesManagement');
Route::get('/clearing-and-execution','PagesController@ClearingAndExecution');
Route::get('/product-solutions','PagesController@ProductSolution');
Route::get('/transition-services','PagesController@TransitionServices');
Route::get('/resource','PagesController@Resource');
//Route::get('/contact','PagesController@Contact');
Route::get('/contact', 'ContactFormController@create')  ;

Route::get('/holdings/{user}', 'HoldingsController@index')->name('holding.index');
//Route::get('/holdings/create', 'HoldingsController@create')->name('holding.create');
Route::get('/holdings/user/create', 'HoldingsController@create')->name('holding.create');
Route::post('/holdings/{user}', 'HoldingsController@store');

Route::get('/holdings/shows/{holding}', 'HoldingsController@show');
Route::get('/holdings/shows/{holding}/edit', 'HoldingsController@edit');
Route::patch('/holdings/shows/{holding}', 'HoldingsController@update');
Route::get('/holdings/user/{user}/edit', 'HoldingsController@editUserHoldings');
Route::post('/save/{holding}/{user}', 'SavePivotController@store');

Route::post('/contact', 'ContactFormController@store');

//Route::post('/h', 'HoldingsController@store');





Route::get('/index', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('index');

Auth::routes();


