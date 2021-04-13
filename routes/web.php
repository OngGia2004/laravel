<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BTController;

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
    return view('welcome');
});
//bt buôi 2
Route::get('shopbanhoatuoi', function () {
    return view('buoi2/bt1');
});
Route::get('/bt', function () {
    return view('buo1/bt1');
});
//bt buôi 3
Route::get('/buoi3/hinh/{cd?}/{cr?}',[BTController::class,'hinhchunhat'])->name("tinh");

//Route::get('/buoi3.hinh/{cd?}/{hv?}',[BTController::class,'hinhvuong'])->name("tinh");
Route::get('/buoi3/vidu01/{nam?}/{ten?}',[BTController::class,'chucmung'])->name("cauchao");
Route::get('/buoi3.vidu2/{a?}/{b?}',[BTController::class,'giaiptbac1'])->name("kq");

//buổi 4
Route::get('/buoi4/form',[BTController::class,'get_xemketqua'])->name("ketqua");
Route::post('/buoi4/form',[BTController::class,'post_xemketqua'])->name("ketqua");

    //trang tin tức
Route::get('hay',function (){
    return view('buoi4.head');
});


//buoi5
Route::group(['prefix' => '/buoi5'],function() {
    Route::get('/layout',[BTController::class,'layout']);
    //tiền điện
    Route::get("tiendien",[BTController::class,"get_tiendien"])->name("tiendien");
    Route::post("tiendien",[BTController::class,"post_tiendien"])->name('tiendien');
    //thidaihoc
    Route::get("thidaihoc",[BTController::class,"get_thidaihoc"])->name("thidaihoc");
    Route::post("thidaihoc",[BTController::class,"post_thidaihoc"])->name('thidaihoc');
    //ketquahoctap
    Route::get("ketquathi",[BTController::class,"get_ketquathi"])->name('ketquathi');
    Route::post("ketquathi",[BTController::class,"post_ketquathi"])->name('ketquathi');
    //tính cạnh huyền
    Route::get('canhhuyen',[BTController::class,'xemketqua'])->name('canhhuyen');
    Route::post('canhhuyen',[BTController::class,'xemketqua1'])->name('canhhuyen');
    //taifile
    Route::get("taifile",[BTController::class,"get_taifile"])->name("taifile");
    Route::post("taifile",[BTController::class,"post_taifile"])->name('taifile');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
