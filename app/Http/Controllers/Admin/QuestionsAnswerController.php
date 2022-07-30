<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class QuestionsAnswerController extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\QuestionsAnswer',
        'route' => 'questionsAnswer',
        'folderBlade' => 'questionsAnswer',
        'folderImage' => 'questionsAnswer',
        'fileName' => 'filename'
    ];

    public function index()
    {
        $data = [
            'data' => $this->data['Models']::all(),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    }


    public function create()
    {
        return view($this->data['folder'] . $this->data['folderBlade'] . '.create');
    }


    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = $this->data['Models']::create([
                'name' => ['ar' => $request->name, 'en' => $request->name_en , 'de' => $request->name_de , 'it'=> $request->name_it , 'ru'=>$request->name_ru],
                'notes' => ['ar' => $request->notes, 'en' => $request->notes_en, 'de' => $request->notes_de , 'it'=> $request->notes_it , 'ru'=>$request->notes_ru],
            ]);


            // Insert One Photo
            uploadPhoto($request, $this->data['fileName'], $this->data['folderImage'], $data->id, $this->data['Models']);

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
                'name' => ['ar' => $request->name, 'en' => $request->name_en , 'de' => $request->name_de , 'it'=> $request->name_it , 'ru'=>$request->name_ru],
                'notes' => ['ar' => $request->notes, 'en' => $request->notes_en, 'de' => $request->notes_de , 'it'=> $request->notes_it , 'ru'=>$request->notes_ru],
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
            $this->data['Models']::destroy($request->id);
            if ($request->oldfile) {
                Storage::disk('public_download')->deleteDirectory($this->data['folderImage'] . '/' . $request->id);
                Photo::where('photoable_id', $request->id)->where('photoable_type', $this->data['Models'])->delete();
            }
            toastr()->error('done deleted Successfully');
            return redirect('admin/' . $this->data['route']);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
