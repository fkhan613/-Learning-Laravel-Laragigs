<?php

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

//Returns all listings
Route::get('/', function(){
    return view('listings',[
        'heading' => 'Latest listings',
        'listings' => Listings::all(),
    ]);
});

//Returns a single listing.
Route::get('/listings/{listing}', function(Listings $listing){
        return view('listing', [
            'listing' => $listing
        ]);
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return response('<h1>This is a test</h1>', 200);
// });

// Route::get('/posts/{id}', function ($id){
//     return response('Post ' . $id);

// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return response('You entered: ' . $request->name . ' ' . $request->city);
// });
