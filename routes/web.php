<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use App\Mail\ContactMail;
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

Route::get('/email', function(){
    return new ContactMail();
});

Route::get('/',[MainController::class,'index'])->name('home');

Route::post('/validation',[ArticleController::class,'change']);
Route::get('/apropos',[MainController::class,'about']);
Route::get('/blog-detail',[MainController::class,'blogdetail']);
Route::get('/blog',[MainController::class,'blog']);
Route::get('/contact',[MainController::class,'contact']);
Route::get('/article-detail/{id}',[ArticleController::class,'article'])->name('voir_article');
Route::get('/articles',[ArticleController::class,'index'])->name('article_index');
Route::get('/type-articles/{id}',[ArticleController::class,'viewByType'])->name('article_type');
Route::get('/tag/{id}',[ArticleController::class,'viewByTag'])->name('article_type_par_tag');
Route::get('/panier',[CartController::class,'index'])->name('cart_index');
Route::post('/panier/add/{id}',[CartController::class,'add'])->name('cart_add');
Route::post('/panier/apply-coupon/',[CartController::class,'applyCoupon'])->name('apply_coupon');
Route::get('/panier/update-cart/',[CartController::class,'updateCart'])->name('update_cart');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    


});

Route::view('/publier','pages/publier-article');
Route::view('/test','test');
    Route::view('/admin','pages/Admin/dashboard');
    Route::view('/admin/pages/home','pages/Admin/home');
    Route::get('/admin/pages/articles',[MainController::class,'adminarticles']);
    Route::post('/admin',[ArticleController::class,'create']);

Route::prefix('admin')->middleware([
    'auth','isdmin'
    
])->group(function () {
    

    
}); 
 

/* Auth::routes();

Route::prefix('admin')->midleware('auth')->group(function(){

}); */
