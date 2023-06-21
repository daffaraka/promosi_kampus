<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AlternatifController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\QuisionerController;
use App\Http\Controllers\Schedule;
use App\Http\Controllers\SubKriteriaController;
use App\Models\SubKriteria;

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

Route::get('quisioner', function () {
    return view('general.quisioner.quisioner');
});

Route::get('/quisioner/1', function () {
    return view('general.quisioner.quisionerM');
});


Route::get('/quisioner/2', function () {
    return view('general.quisioner.quisioner2');
});


Route::get('/quisioner/3', function () {
    return view('general.quisioner.quisioner3');
});


Route::get('/quisioner/4', function () {
    return view('general.quisioner.quisioner4');
});

Route::get('/quisioner/5', function () {
    return view('general.quisioner.quisioner5');
});

Route::get('/test', function () {
    return view('admin.dashboard');
});
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {

        if (!empty(Session::get('auth')['email'])) {
            return  redirect('dashboard/admin');
        } else {
            return view('general.home');
        }
    })->name('login');
});
Auth::routes();

Route::group(['prefix' => 'dashboard/admin', 'middleware' => ['auth']], function () {


    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [HomeController::class, 'profile'])->name('profile');
        Route::post('update', [HomeController::class, 'updateprofile'])->name('profile.update');
    });

    Route::controller(AkunController::class)
        ->prefix('akun')
        ->as('akun.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('showdata', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahAkun')->name('add');
            Route::match(['get', 'post'], '{id}/ubah', 'ubahAkun')->name('edit');
            Route::delete('{id}/hapus', 'hapusAkun')->name('delete');
        });

    Route::controller(AkunController::class)
        ->prefix('user')
        ->as('user.')
        ->group(function () {
            Route::get('/', 'user')->name('user');
            Route::post('showdata', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahUser')->name('add');
            Route::match(['get', 'post'], '{id}/ubah', 'ubahUser')->name('edit');
            Route::delete('{id}/hapus', 'hapusUser')->name('delete');
        });

    Route::controller(AkunController::class)
        ->prefix('kuisioner')
        ->as('kuisioner.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('showdata', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahAkun')->name('add');
            Route::match(['get', 'post'], '{id}/ubah', 'ubahAkun')->name('edit');
            Route::delete('{id}/hapus', 'hapusAkun')->name('delete');
        });

    // Route::controller(AkunController::class)
    //     ->prefix('kriteria')
    //     ->as('kriteria.')
    //     ->group(function () {
    //         Route::get('/', 'index')->name('index');
    //         Route::post('showdata', 'dataTable')->name('dataTable');
    //         Route::match(['get', 'post'], 'tambah', 'tambahAkun')->name('add');
    //         Route::match(['get', 'post'], '{id}/ubah', 'ubahAkun')->name('edit');
    //         Route::delete('{id}/hapus', 'hapusAkun')->name('delete');
    //     });
    Route::controller(AkunController::class)
        ->prefix('alternatif')
        ->as('alternatif.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('showdata', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahAkun')->name('add');
            Route::match(['get', 'post'], '{id}/ubah', 'ubahAkun')->name('edit');
            Route::delete('{id}/hapus', 'hapusAkun')->name('delete');
        });


    Route::controller(QuisionerController::class)
        ->prefix('kuisioner')
        ->as('kuisioner.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('showdata', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahAkun')->name('add');
            Route::match(['get', 'post'], '{id}/ubah', 'ubahAkun')->name('edit');
            Route::delete('{id}/hapus', 'hapusAkun')->name('delete');
        });

    // Kriteria
    Route::controller(KriteriaController::class)
        ->prefix('kriteria')
        ->as('kriteria.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('delete/{id}', 'destroy')->name('delete');
        });

    // Sub Kriteria
    Route::controller(SubKriteriaController::class)
        ->prefix('subKriteria')
        ->as('subKriteria.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('delete/{id}', 'destroy')->name('delete');
        });

    // Alternatif
    Route::controller(AlternatifController::class)
        ->prefix('alternatif')
        ->as('alternatif.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('delete/{id}', 'destroy')->name('delete');
        });

    Route::controller(Schedule::class)
        ->prefix('schedule')
        ->as('schedule.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('showdata', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahschedule')->name('add');
            Route::match(['get', 'post'], '{id}/ubah', 'ubahschedule')->name('edit');
            Route::match(['get', 'post'], '{id}/editconfirm', 'ubahconfirmschedule')->name('editconfirm');
            Route::delete('{id}/hapus', 'hapusschedule')->name('delete');
        });
});
