<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Destenation;
use App\Models\Setting;
use App\Models\Trips;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trips::paginate(20);
        $setting = Setting::first();
        $footer_trips = Trips::latest()->take(5)->get();
        $blos = Blog::take(2)->get();
        return view('front.tour', compact('trips', 'setting', 'footer_trips', 'blos'));
    }
    public function details($id)
    {
        $trip = Trips::findorfail(decrypt($id));
        $setting = Setting::first();
        $destinations   =   Destenation::take(3)->get();
        $footer_trips = Trips::latest()->take(5)->get();
        $blos = Blog::take(2)->get();
        return view('front.tours.tours-details', compact('trip', 'setting', 'footer_trips', 'blos','destinations'));
    }


    public function getTrips($id)
    {
       $trips = Trips::where('trips_type_id',decrypt($id))->get();
       $setting = Setting::first();
       $destinations   =   Destenation::take(3)->get();
       $footer_trips = Trips::latest()->take(5)->get();
       $blos = Blog::take(2)->get();
       return view('front.tour',compact('trips','setting', 'footer_trips', 'blos','destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        \Gloudemans\Shoppingcart\Facades\Cart::destroy();
        $cart = Cart::content();
        $trips = Trips::findorfail(decrypt($id));
        $setting = Setting::first();
        $blos = Blog::take(2)->get();
        $footer_trips = Trips::latest()->take(5)->get();
        return view('front.trips-form-wizard', compact('trips', 'setting', 'cart', 'blos', 'footer_trips'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
