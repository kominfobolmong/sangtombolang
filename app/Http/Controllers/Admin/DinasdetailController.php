<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dinasdetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use File;

class DinasdetailController extends Controller
{
                /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:dinasdetails.index|dinasdetails.create|dinasdetails.edit|dinasdetails.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinasdetails = Dinasdetail::latest()->when(request()->q, function($dinasdetails) {
            $dinasdetails = $dinasdetails->where('dinas', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.dinasdetail.index', compact('dinasdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dinasdetail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dinas'=>'required',
            'pimpinan' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'website' => 'required',
            'email' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'public/dinas-images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Dinasdetail::create($input);

        if($input){
            //redirect dengan pesan sukses
            return redirect()->route('admin.dinasdetail.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.dinasdetail.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dinasdetail  $dinasdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Dinasdetail $dinasdetail)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dinasdetail  $dinasdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Dinasdetail $dinasdetail)
    {
        return view('admin.dinasdetail.edit', compact('dinasdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dinasdetail  $dinasdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dinasdetail $dinasdetail)
    {
        $request->validate([
            'dinas'=>'required',
            'pimpinan' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'website' => 'required',
            'email' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'public/dinas-images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $dinasdetail->update($input);

        if($dinasdetail){
            //redirect dengan pesan sukses
            return redirect()->route('admin.dinasdetail.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.dinasdetail.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dinasdetail  $dinasdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dinasdetail = Dinasdetail::findOrFail($id);
        // File::delete('public/dinas-images/'.$dinasdetail->image);
        unlink('public/dinas-images/'.$dinasdetail->image);
        // $image = Storage::disk('local')->delete('public/dinas-images/'.$dinasdetail->image);
        $dinasdetail->delete();

        if($dinasdetail){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
