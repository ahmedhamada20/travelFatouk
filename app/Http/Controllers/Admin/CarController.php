<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\Car',
        'route' => 'car',
        'folderBlade' => 'car',
        'folderImage' => 'car',
        'fileName' => 'trips'
    ];

    public function index()
    {
        $data = [
            'data' => $this->data['Models']::paginate(50),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    }


    public function create()
    {

        return view($this->data['folder'] . $this->data['folderBlade'] . '.create');
    }


    public function store(Request $request)
    {


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
            $data = $this->data['Models']::create([
                'name' => ['ar' => $request->name, 'en' => $request->name_en, 'de' => $request->name_de, 'it' => $request->name_it, 'ru' => $request->name_ru],
                'notes' => ['ar' => $request->notes, 'en' => $request->notes_en, 'de' => $request->notes_de, 'it' => $request->notes_it, 'ru' => $request->notes_ru],
                'conslshen' => ['ar' => $request->conslshen, 'en' => $request->conslshen_en, 'de' => $request->conslshen_de, 'it' => $request->conslshen_it, 'ru' => $request->conslshen_ru],
                'car_type' => $request->car_type,
                'car_model' => $request->car_model,
                'price' => $request->price,
                'price_back' => $request->price_back,

            ]);



            // Insert Many Photos
            if ($request->hasfile('FilenameMany')) {
                foreach ($request->file('FilenameMany') as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('admin/pictures/' . '/' . $this->data['folderImage'] . '/' . $data->id, $file->getClientOriginalName());

                    // Inset Date
                    Photo::create([
                        'Filename' => $name,
                        'photoable_id' => $data->id,
                        'photoable_type' => $this->data['Models'],
                    ]);
                }
            }
            DB::commit();
            toastr()->success('Done Created Successfully');
            return redirect('admin/' . $this->data['route']);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        $data = [
            'data' => $this->data['Models']::findorfail($id),

        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.show', $data);
    }

    public function edit($id)
    {
        $data = [
            'data' => $this->data['Models']::findorfail($id),

        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.edit', $data);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data = $this->data['Models']::findorfail($request->id);
            $data->update([
                'name' => ['ar' => $request->name, 'en' => $request->name_en, 'de' => $request->name_de, 'it' => $request->name_it, 'ru' => $request->name_ru],
                'notes' => ['ar' => $request->notes, 'en' => $request->notes_en, 'de' => $request->notes_de, 'it' => $request->notes_it, 'ru' => $request->notes_ru],
                'conslshen' => ['ar' => $request->conslshen, 'en' => $request->conslshen_en, 'de' => $request->conslshen_de, 'it' => $request->conslshen_it, 'ru' => $request->conslshen_ru],
                'car_type' => $request->car_type,
                'car_model' => $request->car_model,
                'price' => $request->price,
                'price_back' => $request->price_back,

            ]);


            DB::commit();
            toastr()->success('Done Created Successfully');
            return redirect('admin/' . $this->data['route']);
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
                return redirect('admin/' . $this->data['route']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
