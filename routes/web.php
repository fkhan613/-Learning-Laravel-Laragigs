<?php

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 

//Returns all listings
Route::get('/', [ListingController::class, 'index']);

//shows create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store the listing in the database
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Returns a single listing.
Route::get('/listings/{listing}',[ ListingController::class, 'show']);

//show register form
Route::get('/register',[UserController::class, 'create'])->middleware('guest');

//store user
Route::post('/users',[UserController::class, 'store']);

//log user out
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//show login form
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate',[UserController::class, 'authenticate']);


// Route::get('/hello', function () {
//     return response('<h1>This is a test</h1>', 200);
// });

// Route::get('/posts/{id}', function ($id){
//     return response('Post ' . $id);

// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return response('You entered: ' . $request->name . ' ' . $request->city);
// });
