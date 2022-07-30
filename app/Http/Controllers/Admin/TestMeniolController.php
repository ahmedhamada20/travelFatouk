<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TestMeniol;
use Illuminate\Http\Request;

class TestMeniolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests  =   TestMeniol::get();
        return view('admin.testmeiol.index',compact('tests'));
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
    public function store(Request $request)
    {
        $test   =   new TestMeniol();
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename =  $file->getClientOriginalname();
            $file->move('upload/testmeniol', $filename);
            $test->image = $filename;
        }
        $test->name =   ['en'=>$request->name, 'ar'=>$request->name_ar,'de'=>$request->name_de, 'it'=>$request->name_it, 'ru'=>$request->name_ru];
        $test->notes =   ['en'=>$request->notes, 'ar'=>$request->notes_ar,'de'=>$request->notes_de, 'it'=>$request->notes_it, 'ru'=>$request->notes_ru];
        $test->job =   ['en'=>$request->job, 'ar'=>$request->job_ar,'de'=>$request->job_de, 'it'=>$request->job_it, 'ru'=>$request->job_ru];
        $test->rate =   $request->rate;
        $test->save();
        return redirect()->back();
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
        $test   =   TestMeniol::findorfail($id);
        return view('admin.testmeiol.index',compact('test'));
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
        $test   =   TestMeniol::findorfail($id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename =  $file->getClientOriginalname();
            $file->move('upload/testmeniol', $filename);
            $test->image = $filename;
        }
        $test->name =   ['en'=>$request->name, 'ar'=>$request->name_ar,'de'=>$request->name_de, 'it'=>$request->name_it, 'ru'=>$request->name_ru];
        $test->notes =   ['en'=>$request->notes, 'ar'=>$request->notes_ar,'de'=>$request->notes_de, 'it'=>$request->notes_it, 'ru'=>$request->notes_ru];
        $test->job =   ['en'=>$request->job, 'ar'=>$request->job_ar,'de'=>$request->job_de, 'it'=>$request->job_it, 'ru'=>$request->job_ru];
        $test->rate =   $request->rate;
        $test->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test   =   TestMeniol::findorfail($id);
        $test->destroy($id);
        return redirect()->back();
    }
}
