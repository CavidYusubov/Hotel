<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
class IndexController extends Controller
{
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
    public function index(){
        $home_slider = DB::table('home_slider')->orderBy('id','desc')->get();
        $settings =DB::table('settings')->get();
        $galleries =DB::table('galleries')->get();
        $abouts =DB::table('abouts')->first();
        $contact_info =DB::table('contact_info')->first();
        $rooms =DB::table('rooms')
        ->join('rooms_imgs', 'rooms.id', '=', 'rooms_imgs.room_id')
        ->get();
        return view('Frontend.index', 
        ['contact_info'=> $contact_info,'settings'=>$settings,'home_slider'=>$home_slider,'abouts'=>$abouts,'galleries'=>$galleries,'rooms'=>$rooms]);
    }
    public function about(){
        $home_slider = DB::table('home_slider')->orderBy('id','desc')->get();
        $settings =DB::table('settings')->get();
        $galleries =DB::table('galleries')->get();
        $abouts =DB::table('abouts')->first();
        $abouts_images =DB::table('abouts_images')->get();
        $contact_info =DB::table('contact_info')->first();
        $rooms =DB::table('rooms')
        ->join('rooms_imgs', 'rooms.id', '=', 'rooms_imgs.room_id')
        ->get();
        return view('Frontend.about', 
        ['contact_info'=> $contact_info,'abouts_images'=>$abouts_images,'settings'=>$settings,'home_slider'=>$home_slider,'abouts'=>$abouts,'galleries'=>$galleries,'rooms'=>$rooms]);
    }

    public function rooms(){
        $home_slider = DB::table('home_slider')->orderBy('id','desc')->get();
        $settings =DB::table('settings')->get();
        $galleries =DB::table('galleries')->get();
        
        $abouts =DB::table('abouts')->first();
        $contact_info =DB::table('contact_info')->first();
        $rooms_info =DB::table('rooms_infos')->first();
        $rooms =DB::table('rooms')
        ->join('rooms_imgs', 'rooms.id', '=', 'rooms_imgs.room_id')
        ->get();
        return view('Frontend.rooms', 
        ['rooms_info'=>$rooms_info,'contact_info'=> $contact_info,'settings'=>$settings,'home_slider'=>$home_slider,'abouts'=>$abouts,'galleries'=>$galleries,'rooms'=>$rooms]);
    }
    public function gallery(){
        $home_slider = DB::table('home_slider')->orderBy('id','desc')->get();
        $settings =DB::table('settings')->get();
        $galleries =DB::table('galleries')->get();
        $abouts =DB::table('abouts')->first();
        $contact_info =DB::table('contact_info')->first();
           $gallery_page =DB::table('gallery_page')->first();
        $rooms =DB::table('rooms')
        ->join('rooms_imgs', 'rooms.id', '=', 'rooms_imgs.room_id')
        ->get();
        return view('Frontend.gallery', 
        ['contact_info'=> $contact_info,'gallery_page'=>$gallery_page,'settings'=>$settings,'home_slider'=>$home_slider,'abouts'=>$abouts,'galleries'=>$galleries,'rooms'=>$rooms]);
    }
    public function reservation(){
        $home_slider = DB::table('home_slider')->orderBy('id','desc')->get();
        $settings =DB::table('settings')->get();
        $galleries =DB::table('galleries')->get();
        $abouts =DB::table('abouts')->first();
        
        $contact_info =DB::table('contact_info')->first();
        $rooms =DB::table('rooms')
        ->join('rooms_imgs', 'rooms.id', '=', 'rooms_imgs.room_id')
        ->get();
        return view('Frontend.reservation', 
        ['contact_info'=> $contact_info,'settings'=>$settings,'home_slider'=>$home_slider,'abouts'=>$abouts,'galleries'=>$galleries,'rooms'=>$rooms]);
    }
    public function contact(){
        $home_slider = DB::table('home_slider')->orderBy('id','desc')->get();
        $settings =DB::table('settings')->get();
        $galleries =DB::table('galleries')->get();
        $abouts =DB::table('abouts')->first();
        $contacts =DB::table('contacts')->first();
        $contact_info =DB::table('contact_info')->first();
        $rooms =DB::table('rooms')
        ->join('rooms_imgs', 'rooms.id', '=', 'rooms_imgs.room_id')
        ->get();
        return view('Frontend.contact', 
        ['contact_info'=> $contact_info,'contacts'=>$contacts,'settings'=>$settings,'home_slider'=>$home_slider,'abouts'=>$abouts,'galleries'=>$galleries,'rooms'=>$rooms]);
    }
}
