<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Event;
use App\Models\Tag;
use App\Models\Slider;
use App\Models\Leader;
use App\Models\Service;
use App\Models\Banner;
use App\Models\Statik;
use App\Models\Category;
use App\Models\Dinasdetail;
use App\Models\Instansi;
use App\Models\Download;
use App\Models\Travel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\News;

class PageController extends Controller
{
    public function index(){
        // $posts = Post::with('tags')->take(3)->latest()->get();
        // $events = Event::take(3)->latest()->get();
        // $sliders = Slider::latest()->get();
        // $leaders = Leader::latest()->Paginate(3);
        // $services = Service::all();
        // $banners1 = Banner::where('kolom', 'kolom1')->get();
        // $banners2 = Banner::where('kolom', 'kolom2')->get();
        // $banners3 = Banner::where('kolom', 'kolom3')->get();
        // $visimisi = Statik::where('halaman', 'visimisi')->get();
        // return view('bolmongkab/index',compact(
        //     'posts','events','sliders','leaders','services',
        //     'banners1','banners2','banners3','visimisi'));
        
        // $kecamatan = Instansi::where('kategori','kecamatan')->get();
        // $badan = Instansi::where('kategori','badandaerah')->get();
        // $dinasdetails = Instansi::where('kategori','dinas')->get();
        $posts = News::with('tags')->take(3)->latest()->get();
        $events = Event::take(3)->latest()->get();
        $sliders = Slider::latest()->get();
        // $leaders = Leader::latest()->Paginate(3);
        $services = Service::all();
        // $banners1 = Banner::where('kolom', 'kolom1')->get();
        // $banners2 = Banner::where('kolom', 'kolom2')->get();
        // $banners3 = Banner::where('kolom', 'kolom3')->get();
        // $visimisi = Statik::where('halaman', 'visimisi')->get();
        return view('lolak/index',compact(
            'posts','events','sliders','services'));
    }

    public function eventDetail(Request $request, $id){
        $events = Event::where('id', $id)->firstOrFail();
        return view('bolmongkab/detail/agenda-detail',compact('events'));
    }

    public function visimisi(){
        $visimisi = Statik::where('halaman', 'visimisi')->get();
        return view('bolmongkab/detail/visimisi',compact('visimisi'));
    }

    public function artilambang(){
        $artilambang = Statik::where('halaman', 'artilambang')->get();
        return view('bolmongkab/detail/artilambang',compact('artilambang'));
    }

    public function bupati(){
        $bupati = Leader::where('jabatan', 'bupati')->get();
        return view('bolmongkab/detail/bupati',compact('bupati'));
    }

    public function wakilBupati(){
        $wakilbupati = Leader::where('jabatan', 'wakilbupati')->get();
        return view('bolmongkab/detail/wakilbupati',compact('wakilbupati'));
    }

    public function sekda(){
        $sekda = Leader::where('jabatan', 'sekda')->get();
        return view('bolmongkab/detail/sekda',compact('sekda'));
    }

    public function wisata(){
        $travels = Travel::latest()->paginate(8);
        return view('bolmongkab/detail/wisata',compact('travels'));
    }

    public function event(){
        $events = Event::latest()->paginate(5);
        return view('bolmongkab/detail/agenda',compact('events'));
    }

    public function download(){
        $downloads = Download::latest()->paginate(5);
        return view('bolmongkab/detail/download',compact('downloads'));
    }

    public function getDownload(Request $request, $id) {
        $downloads = Download::where('id', $id)->firstOrFail();
        return view('admin.download.show',compact('downloads'));
    }

    public function sejarah(){
        $sejarah = Statik::where('halaman', 'sejarah')->get();
        $detailsejarah = Statik::where('halaman', 'detailsejarah')->get();
        return view('bolmongkab/detail/sejarah',compact('sejarah','detailsejarah'));
    }

    public function dinas(){
        $dinasdetails = Instansi::where('kategori','dinas')->paginate(10);
        return view('bolmongkab/detail/dinas',compact('dinasdetails'));
    }

    public function kecamatan(){
        $kecamatan = Instansi::where('kategori','kecamatan')->paginate(10);
        return view('bolmongkab/detail/kecamatan',compact('kecamatan'));
    }

    public function puskesmas(){
        $puskesmas = Instansi::where('kategori','puskesmas')->paginate(10);
        return view('bolmongkab/detail/puskesmas',compact('puskesmas'));
    }

    public function badandaerah(){
        $badandaerah = Instansi::where('kategori','badandaerah')->paginate(10);
        return view('bolmongkab/detail/badandaerah',compact('badandaerah'));
    }

    public function desa(){
        $desa = Instansi::where('kategori','desa')->paginate(10);
        return view('bolmongkab/detail/desa',compact('desa'));
    }

    public function berita(Request $request) {
        $kategori = Category::latest()->get();
        $posts = News::latest()->Paginate(5);
        $sidebar = News::skip(5)->Paginate(5);
        $tags = Tag::get();
        
        return view('lolak/detail/berita',compact('posts','kategori','sidebar','tags'));
    }
    
    public function pengumumanDetail(Request $request, $id){
        if($request->has('cari')){
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = Post::skip(5)->Paginate(5);
            $posts = Post::where('title','LIKE','%'.$request->cari.'%')->with('kategori')->get();
            return view('bolmongkab/detail/pengumuman',compact('posts','kategori','sidebar','tags'));
        } else {
            $kategori = Category::latest()->simplePaginate(5);
            $posts = Post::where('id', $id)->firstOrFail();
            $tags = Tag::latest()->get();
            $sidebar = Post::skip(5)->Paginate(5);
            return view('bolmongkab/detail/pengumuman-detail',compact('posts','sidebar','kategori','tags'));
        }

    }

    public function hascarpengumuman(Request $request) {
        if($request->has('cari')){
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = Post::skip(5)->Paginate(5);
            $posts = Post::where('title','LIKE','%'.$request->cari.'%')->get();
        } else {
            $kategori = Category::latest()->simplePaginate(5);
            $posts = Post::where('id', $id)->firstOrFail();
            $tags = Tag::latest()->get();
            $sidebar = Post::skip(5)->Paginate(5);
        }
        return view('bolmongkab/detail/hascarpengumuman',compact('posts','kategori','sidebar','tags'));
    }

    public function kategori(Category $category) {
       
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = Post::skip(5)->Paginate(5);
            $posts = $category->posts()->latest()->paginate(4);

        return view('bolmongkab/detail/pengumuman',compact('posts','kategori','sidebar','tags'));
    }

    public function tag(Tag $tag) {
       
        $kategori = Category::latest()->get();
        $tags = Tag::latest()->get();
        $sidebar = Post::skip(5)->Paginate(5);
        $posts = $tag->posts()->latest()->paginate(4);

    return view('bolmongkab/detail/pengumuman',compact('posts','kategori','sidebar','tags'));
}
}
