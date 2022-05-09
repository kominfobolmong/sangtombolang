<?php

namespace App\Http\Controllers\Admin;

use App\Models\Leader;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LeaderController extends Controller
{
        /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:leaders.index|leaders.create|leaders.edit|leaders.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaders = Leader::latest()->when(request()->q, function($leaders) {
            $leaders = $leaders->where('nama', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.leader.index', compact('leaders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.leader.create');
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
            'nama' => 'required',
            'jabatan' => 'required|unique:leaders',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'body' => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/leader-images', $image->hashName());

        $leader = Leader::create([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'image' => $image->hashName(),
            'body' => $request->input('body'),
            'linkedin' => $request->input('linkedin'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
        ]);

        if($leader){
            //redirect dengan pesan sukses
            return redirect()->route('admin.leader.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.leader.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Leader $leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(Leader $leader)
    {
        return view('admin.leader.edit', compact('leader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $leader)
    {
        $this->validate($request,[
            'nama' => 'required',
            'jabatan' => 'required|unique:leaders,jabatan,'.$leader->id,
            'body' => 'required'
        ]);

        if ($request->file('image') == "") {
        
            $leader = Leader::findOrFail($leader->id);
            $leader->update([
                'nama' => $request->input('nama'),
                'jabatan' => $request->input('jabatan'),
                'body' => $request->input('body'),
                'linkedin' => $request->input('linkedin'),
                'twitter' => $request->input('twitter'),
                'facebook' => $request->input('facebook'),
                'instagram' => $request->input('instagram'),
            ]);

        } else {

            //remove old image
            Storage::disk('local')->delete('public/leader-images/'.$leader->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/leader-images', $image->hashName());

            $leader = Leader::findOrFail($leader->id);
            $leader->update([
                'image' => $image->hashName(),
                'nama' => $request->input('nama'),
                'jabatan' => $request->input('jabatan'),
                'body' => $request->input('body')  
            ]);

        }

        if($leader){
            //redirect dengan pesan sukses
            return redirect()->route('admin.leader.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.leader.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leader = Leader::findOrFail($id);
        $image = Storage::disk('local')->delete('public/leader-images/'.$leader->image);
        $leader->delete();

        if($leader){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
        // $leader->delete();

        // return redirect()->route('admin.leader.index')
        //                 ->with('success', 'Pimpinan Berhasil Dihapus !');
    }
}
