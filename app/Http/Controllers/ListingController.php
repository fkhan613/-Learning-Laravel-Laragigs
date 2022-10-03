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
            'listings' => Listings::latest()->filter(request(['tag', 'search']))->paginate(6)
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

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listings::create($formFields);

        return redirect('/') ->with('message', 'Listing created successfully');
    }

    //show edit form
    public function edit(Listings $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    //update listing
    public function update(Request $request, Listings $listing){
        $formFields = $request->validate([
            'title' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back() ->with('message', 'Listing updated successfully');
    }

    //delete a listing
    public function destroy(Listings $listing) {
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }
}
