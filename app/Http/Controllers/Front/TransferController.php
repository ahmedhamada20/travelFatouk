<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Car;
use App\Models\Setting;
use App\Models\Transfer;
use App\Models\Trips;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfers = Transfer::paginate(20);
        $setting = Setting::first();
        $footer_trips = Trips::latest()->take(5)->get();
        $blos = Blog::take(2)->get();
        return view('front.transfer', compact('transfers', 'setting', 'footer_trips', 'blos'));
    }

    public function car($id)
    {
        $setting = Setting::first();
        $footer_trips = Trips::latest()->take(5)->get();
        $blos = Blog::take(2)->get();
        $trasfair   =   Transfer::findorfail(decrypt($id));
        return view('front.transfer.transfer-car',compact('setting','footer_trips','blos','trasfair'));
    }
public function car_details($id)
{
    $setting = Setting::first();
    $footer_trips = Trips::latest()->take(5)->get();
    $blos = Blog::take(2)->get();
    $car    =   Car::findorfail(decrypt($id));
    return view('front.transfer.transfer-car-details',compact('setting','footer_trips','blos','car'));
}

    public function transfer_Information($id)
    {
        $setting = Setting::first();
        $footer_trips = Trips::latest()->take(5)->get();
        $blos = Blog::take(2)->get();

        return view('front.transfer.transfer-information',compact('setting','footer_trips','blos'));
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
        $transfer = Transfer::findorfail(decrypt($id));
        $setting = Setting::first();
        $blos = Blog::take(2)->get();
        $footer_trips = Trips::latest()->take(5)->get();
        return view('front.trasnfer-form-wizard', compact('transfer', 'setting', 'cart', 'blos', 'footer_trips'));
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
