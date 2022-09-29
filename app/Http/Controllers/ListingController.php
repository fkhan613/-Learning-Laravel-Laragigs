<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{   
    //get all listings
    public function index(){
        return view('listings.index',[
            'listings' => Listings::latest()->filter(request(['tag', 'search']))->get(),
        ]);
    }

    //show single listing 
    public function show(Listings $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show the create form
    public function create(){
        return view('listings.create');
    }

    //store listing data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listings::create($formFields);

        return redirect('/');
    }
}
