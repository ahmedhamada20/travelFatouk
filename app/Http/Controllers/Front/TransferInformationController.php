<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Car;
use App\Models\CartCarTransfer;
use App\Models\CartPacakge;
use App\Models\CartTrips;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Transfer;
use App\Models\Trips;
use Illuminate\Http\Request;

class TransferInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function information_package(Request $request)
     {
        
        $setting = Setting::first();
        $trip = Package::findorfail($request->package_id);
        $blos = Blog::take(2)->get();
        $footer_trips = Trips::latest()->take(5)->get();
        CartPacakge::create([
            'data' => $request->data,
            'time' => $request->time,
            'adult_number' => $request->adult_number,
            'child_number' => $request->child_number,
            'packages_id' => $request->package_id,
        ]);
        return view('front.package.package-info', compact('setting', 'trip', 'blos', 'footer_trips'));
     }


    public function information_trips(Request $request)
    {

        $setting = Setting::first();
        $trip = Trips::findorfail($request->trips_id);
        $blos = Blog::take(2)->get();
        $footer_trips = Trips::latest()->take(5)->get();
        CartTrips::create([
            'data' => $request->data,
            'time' => $request->time,
            'adult_number' => $request->adult_number,
            'child_number' => $request->child_number,
            'trips_id' => $request->trips_id,
        ]);
        return view('front.tours.tours-information', compact('setting', 'trip', 'blos', 'footer_trips'));
    }

    public function store(Request $request)
    {


        $car = Car::findOrfail($request->car_id);
        $transfers = Transfer::findorfail($request->transfer_id);
        $setting = Setting::first();
        $footer_trips = Trips::latest()->take(5)->get();
        $blos = Blog::take(2)->get();

        CartCarTransfer::create([
            'car_id' => $request->car_id,
            'name' => $car->name,
            'data' => $request->data,
            'time' => $request->time,
            'adult_number' => $request->adult_number,
            'child_number' => $request->child_number,
            'bage' => $request->bage,
            'way_type' => $request->way_type,
            'extra' => implode(',', $request->extra),
            'price' => $car->price,
            'route_form' => $request->route_form,
            'route_to' => $request->route_to,
        ]);
        return view('front.transfer.transfer-information', compact('transfers', 'setting', 'footer_trips', 'blos', 'car'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
