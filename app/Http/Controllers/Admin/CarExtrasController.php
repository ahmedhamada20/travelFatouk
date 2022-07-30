<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CarExtrasController extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\CarExtras',
        'route' => 'carExtras',
        'folderBlade' => 'carExtras',
        'folderImage' => 'carExtras',
        'fileName' => 'test'
    ];

    // public function index()
    // {
    //     $data = [
    //         'data' => $this->data['Models']::all(),
    //     ];
    //     return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    // }


    public function create()
    {
        return view($this->data['folder'] . $this->data['folderBlade'] . '.create');
    }


    public function store(Request $request)
    {


        // Insert Many Photos
        if ($request->page_id == 3) {
            // Insert Many Photos
            if ($request->hasfile('FilenameMany')) {
                foreach ($request->file('FilenameMany') as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('admin/pictures/' . '/' . $this->data['folderImage'] . '/' . $request->id_photos, $file->getClientOriginalName());

                    // Inset Date
                    Photo::create([
                        'Filename' => $name,
                        'photoable_id' => $request->id_photos,
                        'photoable_type' => $this->data['Models'],
                    ]);
                }
            }

            toastr()->success('Done Created Photos Successfully');
            return redirect()->back();
        }

        DB::beginTransaction();
        try {

            foreach ($request->List_carExtras as $row) {
                $data = $this->data['Models']::create([
                    'name' => $row['name'],
                    'car_id' => $request->car_id,
                    'price' => $row['price'],
                ]);
            }

            DB::commit();
            toastr()->success('Done Created Successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        $data = [
            'data' => $this->data['Models']::where('car_id', $id)->get(),
            'car_id' => Car::findorfail($id),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    }

    public function edit($id)
    {

        $data = [
            'data' => $this->data['Models']::where('hotel_id', (decrypt($id)))->get(),
            'hotel_id' => Car::findorfail((decrypt($id))),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data = $this->data['Models']::findorfail($request->id);
            $data->update([

                'name' => $request->name,
                'car_id' => $request->car_id,
                'price' => $request->price,
            ]);

            DB::commit();
            toastr()->success('Done Created Successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request)
    {
        try {
            if ($request->page_id == 3) {
                File::delete(public_path('admin/pictures/' . $this->data['folderImage'] . '/' . $request->id . '/' . $request->oldfile));
                Photo::where('id', $request->id_photos)->where('photoable_type', $this->data['Models'])->delete();
                toastr()->error('done deleted Successfully');
                return redirect()->back();
            } else {
                $this->data['Models']::destroy($request->id);
                if ($request->oldfile) {
                    Storage::disk('public_download')->deleteDirectory($this->data['folderImage'] . '/' . $request->id);
                    Photo::where('photoable_id', $request->id)->where('photoable_type', $this->data['Models'])->delete();
                }
                toastr()->error('done deleted Successfully');
                return redirect()->back();
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
