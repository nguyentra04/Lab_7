<?php
use App\Http\Controllers\NHT_khoacontroller;
use App\Http\Controllers\NHT_MHcontroller;
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

    //khoa list
    route::get('/khoa',[NHT_khoacontroller::class,'NHTgetallkhoa'] )->name('khoa.NHTgetallkhoa');
    //khoa detail
    route::get('/khoa/detail{makhoa}',[NHT_khoacontroller::class,'NHTgetkhoa'] )->name('khoa.NHTgetkhoa');
    //khoa edit
    route::get('/khoa/detail{makhoa}',[NHT_khoacontroller::class,'NHTgetkhoa'] )->name('khoa.NHTgetkhoa');
    //khoa add
    Route::get('/khoa/create',[KhoaController::class,'NHTcreate'])->name('khoa.NHTcreate');
    //khoa update
    route::get('/khoa/detail{makhoa}',[NHT_khoacontroller::class,'NHTupdatekhoa'] )->name('khoa.NHTupdatekhoa');
    //khoa insert
    route::post('/khoa/detail{makhoa}',[NHT_khoacontroller::class,'NHTinsert'] )->name('khoa.NHTinsert');


    //MH list
    route::get('/monhoc',[NHT_MHcontroller::class,'NHTgetallMH'] )->name('monhoc.NHTgetallMH');
    //MH detail
    route::get('monhoc/detail{MaMH}',[NHT_MHcontroller::class,'NHTgetMH'] )->name('monhoc.NHTgetMH');
    //MH edit
    route::get('/monhoc/detail{MaMH}',[NHT_MHcontroller::class,'NHTgetMH'] )->name('monhoc.NHTgetMH');
    //MH delete
    route::get('/monhoc/detail{MaMH}',[NHT_MHcontroller::class,'NHTgetMH'] )->name('monhoc.NHTgetMH');
    //MH update
    route::get('/monhoc/detail{MaMH}',[NHT_MHcontroller::class,'NHTupdateMH'] )->name('monhoc.NHTupdateMH');
    //MH insert
    route::get('/monhoc/detail{MaMH}',[NHT_MHcontroller::class,'NHTinsertMH'] )->name('monhoc.NHTinsertMH');
