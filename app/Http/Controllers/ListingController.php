<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listings
    public function index(Request $request){
        return view('listings.index',[
            'heading' => "this is a heading",
            'listings' => Listing::latest()->filter(request(['tag']))->get()
           ]);   

    }

    //show single listing
    public function show(Listing $listing){
        return view('listing.show',[
            'listing' => $listing
        ]);
    }
}
