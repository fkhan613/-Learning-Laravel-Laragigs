<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class ListingController extends Controller
{   
    //get all listings
    public function index(){
        return view('listings.index',[
<<<<<<< HEAD
            'listings' => Listings::latest()->filter(request(['tag']))->get()
=======
            'listings' => Listings::all(),
>>>>>>> f1bd55c00acc6da212f862e84e893ea6593694f4
        ]);
    }

    //show single listing 
    public function show(Listings $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
