<?php

use Illuminate\Support\Facades\Route;

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
    return view('startcontent');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

App::setLocale('ru');

Route::prefix('books')->group(function() {

    Route::get('/', 'BooksController@index')->name('books.index');
    Route::post('/', 'BooksController@store')->name('books.store');;

    Route::get('add', 'BooksController@create')->name('books.create');
    Route::put('{book}', 'BooksController@update')->name('books.update');

    Route::get('{book}', 'BooksController@show')->name('books.show');
    Route::delete('{book}', 'BooksController@destroy')->name('books.destroy');

    Route::get('{book}/edit', 'BooksController@edit')->name('books.edit');
});

Route::prefix('clients')->group(function() {

    Route::get('/', 'ClientsController@index')->name('clients.index');
    Route::post('/', 'ClientsController@store')->name('clients.store');;

    Route::get('add', 'ClientsController@create')->name('clients.create');
    Route::put('{client}', 'ClientsController@update')->name('clients.update');

    Route::get('{client}', 'ClientsController@show')->name('clients.show');

    Route::delete('{client}', 'ClientsController@destroy')->name('clients.destroy');

    Route::get('{client}/edit', 'ClientsController@edit')->name('clients.edit');
});


Route::prefix('employees')->group(function() {

    Route::get('/', 'EmployeesController@index')->name('employees.index');
    Route::post('/', 'EmployeesController@store')->name('employees.store');;

    Route::get('add', 'EmployeesController@create')->name('employees.create');
    Route::put('{employee}', 'EmployeesController@update')->name('employees.update');

    Route::get('{employee}', 'EmployeesController@show')->name('employees.show');

    Route::delete('{employee}', 'EmployeesController@destroy')->name('employees.destroy');

    Route::get('{employee}/edit', 'EmployeesController@edit')->name('employees.edit');
});

Route::prefix('films')->group(function() {

    Route::get('/', 'FilmsController@index')->name('films.index');
    Route::post('/', 'FilmsController@store')->name('films.store');;

    Route::get('add', 'FilmsController@create')->name('films.create');
    Route::put('{film}', 'FilmsController@update')->name('films.update');

    Route::get('{film}', 'FilmsController@show')->name('films.show');

    Route::delete('{film}', 'FilmsController@destroy')->name('films.destroy');

    Route::get('{film}/edit', 'FilmsController@edit')->name('films.edit');
});

Route::prefix('orders')->group(function() {

    Route::get('/', 'OrdersController@index')->name('orders.index');
    Route::post('/', 'OrdersController@store')->name('orders.store');;

    Route::get('add', 'OrdersController@create')->name('orders.create');
    Route::put('{order}', 'OrdersController@update')->name('orders.update');

    Route::get('{order}', 'OrdersController@show')->name('orders.show');

    Route::delete('{order}', 'OrdersController@destroy')->name('orders.destroy');

    Route::get('{order}/edit', 'OrdersController@edit')->name('orders.edit');
});

Route::prefix('workshifts')->group(function() {

    Route::get('/', 'WorkShiftsController@index')->name('workshifts.index');
    Route::post('/', 'WorkShiftsController@store')->name('workshifts.store');;

    Route::get('add', 'WorkShiftsController@create')->name('workshifts.create');
    Route::put('{workshift}', 'WorkShiftsController@update')->name('workshifts.update');

    Route::get('{workshift}', 'WorkShiftsController@show')->name('workshifts.show');

    Route::delete('{workshift}', 'WorkShiftsController@destroy')->name('workshifts.destroy');

    Route::get('{workshift}/edit', 'WorkShiftsController@edit')->name('workshifts.edit');
});

Route::prefix('ordersdetails')->group(function() {

    Route::get('/', 'OrdersDetailsController@index')->name('ordersdetails.index');
    Route::post('/', 'OrdersDetailsController@store')->name('ordersdetails.store');;

    Route::get('add', 'OrdersDetailsController@create')->name('ordersdetails.create');
    Route::put('{orderdetail}', 'OrdersDetailsController@update')->name('ordersdetails.update');

    Route::get('{orderdetail}', 'OrdersDetailsController@show')->name('ordersdetails.show');

    Route::delete('{orderdetail}', 'OrdersDetailsController@destroy')->name('ordersdetails.destroy');

    Route::get('{orderdetail}/edit', 'OrdersDetailsController@edit')->name('ordersdetails.edit');
});

Route::prefix('schedule')->group(function() {

    Route::get('/', 'ScheduleController@index')->name('schedule.index');
    Route::post('/', 'ScheduleController@store')->name('schedule.store');;

    Route::get('add', 'ScheduleController@create')->name('schedule.create');
    Route::put('{schedule_row}', 'ScheduleController@update')->name('schedule.update');

    Route::get('{schedule_row}', 'ScheduleController@show')->name('schedule.show');

    Route::delete('{schedule_row}', 'ScheduleController@destroy')->name('schedule.destroy');

    Route::get('{schedule_row}/edit', 'ScheduleController@edit')->name('schedule.edit');
});