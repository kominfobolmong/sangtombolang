<?php

namespace App\Http\Controllers\Admin;

use App\Models\Statik;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use File;

class StatikController extends Controller
{
            /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:statiks.index|statiks.create|statiks.edit|statiks.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statiks = Statik::latest()->when(request()->q, function($statiks) {
            $statiks = $statiks->where('halaman', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.statik.index', compact('statiks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statik.create');
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
            'halaman'=>'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'public/statik-images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Statik::create($input);

        if($input){
            //redirect dengan pesan sukses
            return redirect()->route('admin.statik.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.statik.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statik  $statik
     * @return \Illuminate\Http\Response
     */
    public function show(Statik $statik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statik  $statik
     * @return \Illuminate\Http\Response
     */
    public function edit(Statik $statik)
    {
        return view('admin.statik.edit', compact('statik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statik  $statik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statik $statik)
    {
        $request->validate([
            'halaman' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'public/statik-images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $statik->update($input);

        if($statik){
            //redirect dengan pesan sukses
            return redirect()->route('admin.statik.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.statik.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statik  $statik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statik = Statik::findOrFail($id);
        unlink('public/statik-images/'.$statik->image);
        // $image = Storage::disk('local')->delete('public/statik-images/'.$statik->image);
        $statik->delete();

        if($statik){
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
