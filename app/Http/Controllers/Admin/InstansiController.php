<?php

namespace App\Http\Controllers\Admin;

use App\Models\Instansi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InstansiController extends Controller
{
        /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:instansis.index|instansis.create|instansis.edit|instansis.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansis = Instansi::latest()->when(request()->q, function($instansis) {
            $instansis = $instansis->where('nama', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.instansi.index', compact('instansis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instansi.create');
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
            'kategori'=>'required',
            'nama'=>'required',
            'alamat' => 'required',
            'link' => 'required',
        ]);
  
        $input = $request->all();
    
        Instansi::create($input);

        if($input){
            //redirect dengan pesan sukses
            return redirect()->route('admin.instansi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.instansi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function show(Instansi $instansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function edit(Instansi $instansi)
    {
        return view('admin.instansi.edit', compact('instansi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instansi $instansi)
    {
        $request->validate([
            'kategori'=>'required',
            'nama'=>'required',
            'alamat' => 'required',
            'link' => 'required'
        ]);
  
        $input = $request->all();
          
        $instansi->update($input);

        if($instansi){
            //redirect dengan pesan sukses
            return redirect()->route('admin.instansi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.instansi.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instansi = Instansi::findOrFail($id);
        $instansi->delete();

        if($instansi){
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
