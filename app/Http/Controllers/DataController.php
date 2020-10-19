<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DataController extends Controller
{
    public function __construct()

    {
        $this->data = new Data();
    }
    public function index()
    {
        $datas = Data::all();
        return view('master.data.index',compact('datas'));
    }

    public function create()
    {

        return view('master.data.create');
    }

    public function store()
    {
        $data = Data::create($this->validateRequest());
        $this->storeImage($data);
        return redirect()->back()->with(['success' => 'SUKSES']);
    }

    public function edit($id)
    {
        $data = Data::findOrFail($id);

        return view('master.data.edit', compact('data'));
    }
    public function update(Data $data)
    {
        $data->update($this->validateRequest());

        $this->storeImage($data);

        return redirect()->back()->with(['success' => 'Data berhasil Di edit']);
    }

    public function destroy(Data $data)
    {
        $data->delete();

        if(\File::exists(public_path('storage/'. $data->image))){
            \File::delete(public_path('storage/'. $data->image));
        }

        return redirect()->back()->with(['success' => 'Data berhasil di hapus']);
    }
    private function validateRequest(){
        return tap(request()->validate([
            'nama'          => 'required',
            'alamat'        => 'required',
            'image'         => 'required|file|image|max:5000',
            'no_telp'       => 'required',
            'gender'        => 'required',
            'agama'         => 'required',
            'tgl_lahir'     => 'required',
            'tmpt_lahir'    => 'required',
            'asal_sekolah'  => 'required',
            'nama_ibu'      => 'required',
            'nama_ayah'     => 'required',
        ]), function(){
            if(request()->hasFile('image')){
                request()->validate([
                    'image'  => 'required|file|image|max:5000',
                ]);
            }
        }); 
    }

    private function storeImage($data){
        if(request()->has('image')){
        $data->update([
            'image' => request()->image->store('uploads','public'),
            ]);
            $images = Image::make(public_path('storage/'. $data->image))->fit(300,300,null, 'top-left');
            $images->save();
        }
    }
    public function show($id)
    {
        $data = Data::find($id);

        return view('master.data.show', compact('data'));
    }
}
