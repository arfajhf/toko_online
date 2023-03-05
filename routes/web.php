<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\UserAuthController;
use App\Http\Controllers\produk\CctvController;
use App\Http\Controllers\produk\CpuController;
use App\Http\Controllers\produk\HardwareController;
use App\Http\Controllers\produk\MonitorController;
use App\Http\Controllers\user\dashboardController;
use App\Http\Controllers\user\PemesanController;
use App\Http\Controllers\user\ViewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', [AuthController::class, 'index'])->name('login');


Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => 'App\\Http\\Controllers',
], function () {

    Route::get('loginadmin', [AuthController::class, 'index'])->name('admin.login');
    Route::post('loginadmin', [AuthController::class, 'login']);

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

        // Route::get('logoutuser', [AuthController::class, 'logoutuser'])->name('user.logout');
        // Route::view('/dasboard','admin.dashboardadmin')->name('dashboard');
        Route::get('/', [dashboardController::class, 'index'])->name('dashboardUser');
        Route::get('/dashboard', 'admin\DashboardController@index')->name('dashboard');
        // ->middleware('can:role,"admin","pimpinan"');

        // Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboardUser');

        // Route::get('userlogin', [UserAuthController::class, 'index'])->name('user.login');
        // Route::post('userlogin', [UserAuthController::class, 'login']);

        // Route::get('/', [dashboardController::class, 'index'])->name('dashboardUser')->middleware('can:role,"user"');
        Route::get('/cctv', [CctvController::class, 'index'])->name('cctv');
        Route::get('/monitor', [MonitorController::class, 'index'])->name('monitor');
        Route::get('/cpu', [CpuController::class, 'index'])->name('cpu');
        Route::get('/hardware', [HardwareController::class, 'index'])->name('hardware');
        Route::get('/view/{id}', [ViewController::class, 'index'])->name('view');
        Route::get('/pemesanan/{id}', [PemesanController::class, 'index'])->name('pemesanan');

        Route::view('/pimpinan', 'admin.pimpinan.coba')->name('pimpinan')->middleware('can:role,"admin","pimpinan"');

        Route::get('/admin', 'admin\UserController@index')->name('admin')->middleware('can:role,"admin"');

        Route::get('/admin/create', 'admin\CreateuserController@index')->name('admin.create')->middleware('can:role,"admin"');
        Route::post('/admin/create', 'admin\CreateuserController@create')->middleware('can:role,"admin"');
        Route::get('/admin/edit/{id}', 'admin\CreateuserController@edit')->name('admin.edit')->middleware('can:role,"admin"');
        Route::post('/admin/edit/{id}', 'admin\CreateuserController@update')->middleware('can:role,"admin"');
        Route::get('/admin/delete/{id}', 'admin\CreateuserController@delete')->name('admin.delete')->middleware('can:role,"admin"');
        Route::get('/admin/restore/{id}', 'admin\CreateuserController@restore')->name('admin.restore')->middleware('can:role,"admin"');

        Route::get('/admin/produk', 'admin\ProdukController@index')->name('produk');
        Route::get('/produk/create', 'admin\ProdukController@create')->name('produkCreate');
        Route::post('/produk/create', 'admin\ProdukController@tambah');
        Route::get('/produk/delete/{id}', 'admin\ProdukController@delete');
        Route::get('/produk/edit/{id}', 'admin\ProdukController@edit')->name('edit.produk');
        Route::post('/produk/edit/{id}', 'admin\ProdukController@update');
        Route::get('/produk/view/{id}', 'admin\ProdukController@view');
    });
});
