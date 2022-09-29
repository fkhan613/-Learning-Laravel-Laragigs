<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class ListingController extends Controller
{   
    //get all listings
    public function index(){
        return view('listings.index',[
            'listings' => Listings::latest()->filter(request(['tag']))->get(),
            'listings' => Listings::all(),
        ]);
    }

    //show single listing 
    public function show(Listings $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
