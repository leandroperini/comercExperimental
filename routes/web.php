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
Route::any('/data_dashboard', 'DashboardController@dataGet')->name('dataDashboard');

