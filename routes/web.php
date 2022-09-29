<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;

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

//Returns a single listing.
Route::get('/listings/{listing}',[ ListingController::class, 'show']);


// Route::get('/hello', function () {
//     return response('<h1>This is a test</h1>', 200);
// });

// Route::get('/posts/{id}', function ($id){
//     return response('Post ' . $id);

// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return response('You entered: ' . $request->name . ' ' . $request->city);
// });