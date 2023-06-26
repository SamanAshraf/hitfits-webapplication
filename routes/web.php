<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\userauth;
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

// admin

Route::get('dashboard', function () {
    return view('dashboard');
})->name('home');

Route::get('/Addproduct', function () {
    return view('Addproduct');
})->name('addp');

Route::post('addpro', [ProductController::class,'addData']);
////////
Route::get('/', function () {
    return view('index');
})->name('home');



Route::get('/MENALLPRODUCTS', function () {
    return view('MENALLPRODUCTS');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/MENTrousers', function () {
    return view('MENTrousers');
});


Route::get('/ALLWOMEN', function () {
    return view('ALLWOMEN');
});

Route::get('/ALLKIDS', function () {
    return view('ALLKIDS');
});
Route::get('/KIDSPRODUCT', function () {
    return view('KIDSPRODUCT');
});
Route::get('/deliveryform', function () {
    return view('deliveryform');
}) ->name('deliveryform');

/* Route::get('/Checkout', function () {
    return view('Checkout');
}); */

/* Route::get('/login', function () {
    return view('login');
});
 */


 Route::get('/SingleProduct', function () {
    return view('SingleProduct');
}); 

Route::post('adddetails', [CustomerController::class,'addData']);

Route::post('addD', [ProductController::class,'DeliveryDetails']);


Route::get('/ALLMEN', [ProductController::class,'ALLM'])->name('ALLMEN');
Route::get('/MENALLPRODUCTS', [ProductController::class,'Mentee'])->name('MENALLPRODUCTS');
Route::get('/MENTrousers', [ProductController::class,'Mentrou'])->name('MENTrousers');

Route::get('/SingleProduct/{id}', [ProductController::class,'singleproduct'])->name('singleproduct');

Route::get('/ALLWOMEN', [ProductController::class,'ALLW'])->name('ALLWOMEN');
Route::get('/allproducts', [ProductController::class,'womentee'])->name('allproducts');
//Route::get('/KIDSPRODUCT', [ProductController::class,'Mentrou'])->name('MENTrousers');
Route::get('/ALLKIDS', [ProductController::class,'ALLKIDS'])->name('ALLKIDS');
Route::get('/KIDSPRODUCT', [ProductController::class,'ALLK'])->name('ALLKIDS');



Route::get('/Checkout', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'updateC'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');


//Route::post('adddetails', [ProductController::class,'addData']);
Route::get('list',[ProductController::class,'list']);
Route::get('delete/{id}',[ProductController::class,'delete']);
Route::get('edit/{id}',[ProductController::class,'showData']);
Route::post('edit/edit', [ProductController::class, 'update']); 




Route::post('/check', [CustomerController::class,'check'])->name('check');

Route::get('/logout', [CustomerController::class,'logout'])->name('logout');
//Route::post('user', [userauth::class,'userLogin']);

Route:: group(['middleware'=>['AuthCheck']],function(){

    Route::get('/account', [CustomerController::class,'account']);


    Route::get('/login', [CustomerController::class,'login']);
});
    //Route::get('/signup', [CustomerController::class,'signup']);

     Route::get('/signup', function () {
        return view('signup');


});


