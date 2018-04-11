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

use Illuminate\Support\Facades\Route;

Route::get('/logout', function () {
    try {
        Auth::logout();
    } catch (Exception $e) {
        throw $e;
    } finally {
        return redirect(route('home'));
    }


})->name('logout');

Auth::routes();

Route::get('/', 'DashboardController@admin')->name('home');

Route::prefix('reports')->group(function () {
    Route::delete('/', 'DashboardController@deleteReport')->name('removeReport');

    Route::post('/', 'DashboardController@createReport')->name('createReport');

    Route::put('/', 'DashboardController@updateReport')->name('updateReport');

    Route::get('/', 'DashboardController@getReport')->name('getReport');

    Route::any('/data_dashboard', 'DashboardController@dataGet')->name('dataDashboard');
});
Route::prefix('dashboard')->group(function () {

    Route::get('/', 'DashboardController@getDash')->name('getDashboard');

});

