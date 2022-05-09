<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
            /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:banners.index|banners.create|banners.edit|banners.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->when(request()->q, function($banners) {
            $banners = $banners->where('nama', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kolom' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'link' => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/banner-images', $image->hashName());

        $banner = Banner::create([
            'kolom' => $request->input('kolom'),
            'image' => $image->hashName(),
            'link' => $request->input('body')
        ]);

        if($banner){
            //redirect dengan pesan sukses
            return redirect()->route('admin.banner.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.banner.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $this->validate($request,[
            'kolom' => 'required',
            'link' => 'required'
        ]);

        if ($request->file('image') == "") {
        
            $banner = Banner::findOrFail($banner->id);
            $banner->update([
                'kolom' => $request->input('kolom'),
                'link' => $request->input('link')  
            ]);

        } else {

            //remove old image
            Storage::disk('local')->delete('public/banner-images/'.$banner->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/banner-images', $image->hashName());

            $banner = Banner::findOrFail($banner->id);
            $banner->update([
                'image' => $image->hashName(),
                'kolom' => $request->input('kolom'),
                'link' => $request->input('link')  
            ]);

        }

        if($banner){
            //redirect dengan pesan sukses
            return redirect()->route('admin.banner.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.banner.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $image = Storage::disk('local')->delete('public/banner-images/'.$banner->image);
        $banner->delete();

        if($banner){
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
