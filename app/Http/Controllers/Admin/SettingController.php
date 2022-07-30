<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\Setting',
        'route' => 'setting',
        'folderBlade' => 'setting',
        'folderImage' => 'setting',
        'fileName' => 'test'
    ];
    public function index()
    {
        $data = Setting::first();
        return view('admin.setting.index', compact('data'));
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
        //
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
        $setting = Setting::findorfail($request->id);

        if ($request->hasfile('logo')) {
            $file = $request->logo;
            $filename = time() . $file->getClientOriginalname();
            $file->move('upload/setting', $filename);
            $setting->logo = $filename;
        }
        if ($request->hasfile('footer_image')) {
            $file = $request->footer_image;
            $filename = time() . $file->getClientOriginalname();
            $file->move('upload/footer_image', $filename);
            $setting->footer_image = $filename;
        }
        if ($request->hasfile('footer_logo')) {
            $file = $request->footer_logo;
            $filename = time() . $file->getClientOriginalname();
            $file->move('upload/footer_logo', $filename);
            $setting->footer_logo = $filename;
        }
        if ($request->hasfile('transfer_image')) {
            $file = $request->transfer_image;
            $filename = time() . $file->getClientOriginalname();
            $file->move('upload/transfer_image', $filename);
            $setting->transfer_image = $filename;
        }
        $setting->name = ['ar' => $request->name, 'en' => $request->name_en , 'de' => $request->name_de , 'it'=> $request->name_it , 'ru'=>$request->name_ru];
        $setting->phone = $request->phone;
        $setting->footer_image_link = $request->footer_image_link;
        $setting->email = $request->email;
        $setting->notes = ['ar' => $request->notes, 'en' => $request->notes_en, 'de' => $request->notes_de , 'it'=> $request->notes_it , 'ru'=>$request->notes_ru];
        $setting->address = $request->address;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->instagram = $request->instagram;
        $setting->YouTube = $request->YouTube;
        $setting->seo = $request->seo;
        $setting->url = $request->url;
        $setting->Fax = $request->Fax;
        $setting->description = ['ar' => $request->description, 'en' => $request->description_en];
        $setting->save();

        // Update One Photo
        if ($file = $request->file('filename')) {
            File::delete(public_path('admin/pictures/' . $this->data['folderImage'] . '/' . $request->id . '/' . $request->oldfile));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('filename')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;
            if ($file->move('admin/pictures/' . $this->data['folderImage'] . '/' . $request->id, $file_to_store)) {
                Photo::updateOrCreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => $this->data['Models'],
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $setting->id,
                    'photoable_type' => $this->data['Models'],
                ]);
            }
        }


        toastr()->success('Done Updated Successfully');
        return redirect()->back();

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
