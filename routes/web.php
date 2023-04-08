<?php

use App\Http\Controllers\admin\CreateuserController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\UserAuthController;
use App\Http\Controllers\produk\CableController;
use App\Http\Controllers\produk\CctvController;
use App\Http\Controllers\produk\CpuController;
use App\Http\Controllers\produk\HardwareController;
use App\Http\Controllers\produk\MonitorController;
use App\Http\Controllers\produk\PcaController;
use App\Http\Controllers\produk\UpsController;
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
Route::get('/', [dashboardController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/create', [CreateuserController::class, 'index'])->name('admin.create');
Route::post('/create', [CreateuserController::class, 'create']);
Route::group([
    'prefix' => config('user.user'),
    // 'namespace' => 'App\\Http\\Controllers',
], function(){
    Route::middleware('auth:user')->group(function(){

        Route::get('/dashboarduser', [dashboardController::class, 'index'])->name('dashboardUser');

    });
});
// Route::get('/', [dashboardController::class, 'index']);
// Route::get('/login', [AuthController::class, 'index'])->name('admin.login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/create', 'admin\CreateuserController@index')->name('admin.create');
// Route::post('/create', 'admin\CreateuserController@create');

Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => 'App\\Http\\Controllers',
], function () {



    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

        // Route::get('logoutuser', [AuthController::class, 'logoutuser'])->name('user.logout');
        // Route::view('/dasboard','admin.dashboardadmin')->name('dashboard');

        Route::get('/dashboard', 'admin\DashboardController@index')->name('dashboard');
        // ->middleware('can:role,"admin","pimpinan"');

        // Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboardUser');

        // Route::get('userlogin', [UserAuthController::class, 'index'])->name('user.login');
        // Route::post('userlogin', [UserAuthController::class, 'login']);

        // Route::get('/', [dashboardController::class, 'index'])->name('dashboardUser')->middleware('can:role,"user"');

        // user
        Route::get('/cctv', [CctvController::class, 'index'])->name('cctv');
        Route::get('/monitor', [MonitorController::class, 'index'])->name('monitor');
        Route::get('/cpu', [CpuController::class, 'index'])->name('cpu');
        Route::get('/hardware', [HardwareController::class, 'index'])->name('hardware');
        Route::get('cable', [CableController::class, 'index'])->name('cable');
        Route::get('ups', [UpsController::class, 'index'])->name('ups');
        Route::get('pca', [PcaController::class, 'index'])->name('pca');
        Route::get('/view/{id}', [ViewController::class, 'index'])->name('view');
        Route::get('/pemesanan/{id}', [PemesanController::class, 'index'])->name('pemesanan');
        Route::post('/pemesanan/{id}', 'user\PemesanController@create');
        Route::get('/chat', 'user\ChatController@index')->name('chat');

        // pimpinan
        Route::view('/pimpinan', 'admin.pimpinan.coba')->name('pimpinan')->middleware('can:role,"admin","pimpinan"');


        // admin
        Route::get('/admin', 'admin\UserController@index')->name('admin')->middleware('can:role,"admin"');

        Route::get('/admin/edit/{id}', 'admin\CreateuserController@edit')->name('admin.edit')->middleware('can:role,"admin"');
        Route::post('/admin/edit/{id}', 'admin\CreateuserController@update')->middleware('can:role,"admin"');
        Route::get('/admin/delete/{id}', 'admin\CreateuserController@delete')->name('admin.delete')->middleware('can:role,"admin"');
        Route::get('/admin/restore/{id}', 'admin\CreateuserController@restore')->name('admin.restore')->middleware('can:role,"admin"');

        Route::get('/pengirim', 'admin\PengirimController@index')->name('pengirim');
        Route::get('/pengirim/create', 'admin\PengirimController@create')->name('pengirimCreate');
        Route::post('/pengirim/create', 'admin\PengirimController@store');
        Route::get('/pesanan', 'admin\PesananController@index')->name('pesanan');
        Route::get('/pesanan/view/{id}', 'admin\PesananController@view')->name('pesanan.view');
        Route::post('/pesanan/view/{id}', 'admin\PesananController@update');

        Route::get('/admin/produk', 'admin\ProdukController@index')->name('produk');
        Route::get('/produk/create', 'admin\ProdukController@create')->name('produkCreate');
        Route::post('/produk/create', 'admin\ProdukController@tambah');
        Route::get('/produk/delete/{id}', 'admin\ProdukController@delete');
        Route::get('/produk/edit/{id}', 'admin\ProdukController@edit')->name('edit.produk');
        Route::post('/produk/edit/{id}', 'admin\ProdukController@update');
        Route::get('/produk/view/{id}', 'admin\ProdukController@view');
    });
});
