<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SettingsController extends Controller
{

    public function index(){
        $settings=DB::table('settings')->get();
      
        $settings_slider=DB::table('home_slider')->get();
        return view('Backend.Settings.index',['settings'=>$settings,'settings_slider'=>$settings_slider]);
    }
    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $blogs = About::find(intval($value));
            $blogs->about_must = intval($key);
            $blogs->save();
        }
        echo true;
    }
    public function update(Request $request){
        if ($request->hasFile('logo_dark')){
            $request->validate([
                'logo_dark' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $file_name=uniqid().'.'.$request->logo_dark->getClientOriginalExtension();
            $request->logo_dark->move('img/',$file_name);
            $path=$request->old_logo_dark;
            $update=DB::table('settings')->where('settings_key','logo_dark')->update([
                'settings_value' => 'img/'.$file_name
            ]);
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        }

        if ($request->hasFile('logo')){
            $request->validate([
                'logo' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $file_name=uniqid().'.'.$request->logo->getClientOriginalExtension();
            $request->logo->move('img/',$file_name);
            $path=$request->old_logo;
            $update=DB::table('settings')->where('settings_key','logo')->update([
                'settings_value' => 'img/'.$file_name
            ]);
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        }
        if ($request->hasFile('icon')){
            $request->validate([
                'icon' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $file_name=uniqid().'.'.$request->icon->getClientOriginalExtension();
            $request->icon->move('img/',$file_name);
            $path=$request->old_icon;
            $update=DB::table('settings')->where('settings_key','icon')->update([
                'settings_value' => 'img/'.$file_name
            ]);
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        }
        $update=DB::table('settings')->where('settings_key','title')->update([
            'settings_value' => $request->title
        ]);
        $update=DB::table('settings')->where('settings_key','title_en')->update([
            'settings_value' => $request->title_en
        ]);
        $update=DB::table('settings')->where('settings_key','description')->update([
            'settings_value' => $request->description
        ]);
        $update=DB::table('settings')->where('settings_key','description_en')->update([
            'settings_value' => $request->description_en
        ]);
        $update=DB::table('settings')->where('settings_key','keywords')->update([
            'settings_value' => $request->keywords
        ]);
        
      
            return redirect(route('settings'))->with('success','İşlem Başarılı');
       
    }
    public function update_images(Request $request){

        if ($request->hasFile('image1')){
            $request->validate([
                'image1' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $file_name=uniqid().'.'.$request->image1->getClientOriginalExtension();
            $request->image1->move('temp/',$file_name);
            $path=$request->old_image1;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        } else {
            $file_name=substr($request->old_image1, 5);
        }
        if ($request->hasFile('image6')){
            $request->validate([
                'image6' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $file_name1=uniqid().'.'.$request->image6->getClientOriginalExtension();
            $request->image6->move('temp/',$file_name1);
            $path=$request->old_image2;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        } else {
            $file_name1=substr($request->old_image2, 5);
        }
        if ($request->hasFile('image11')){
            $request->validate([
                'image11' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $file_name2=uniqid().'.'.$request->image11->getClientOriginalExtension();
            $request->image11->move('temp/',$file_name2);
            $path=$request->old_image3;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        } else {
            $file_name2=substr($request->old_image3, 5);
        }
        $update=DB::table('abouts_images')->where('id','1')->update([
            "image"=>'temp/'.$file_name,
            "title_en"=>$request->title_en2,
            "title_tr"=>$request->title_tr3,
            "text_en"=>$request->text_en4,
            "text_tr"=>$request->text_tr5
        ]);
        $update2=DB::table('abouts_images')->where('id','2')->update([
            "image"=>'temp/'.$file_name1,
            "title_en"=>$request->title_en7,
            "title_tr"=>$request->title_tr8,
            "text_en"=>$request->text_en9,
            "text_tr"=>$request->text_tr10
        ]);
        $update1=DB::table('abouts_images')->where('id','3')->update([
            "image"=>'temp/'.$file_name2,
            "title_en"=>$request->title_en12,
            "title_tr"=>$request->title_tr13,
            "text_en"=>$request->text_en14,
            "text_tr"=>$request->text_tr15
        ]);

        if ($update)
        {
            return redirect(route('about'))->with('success','İşlem Başarılı');
        }
        if ($update1)
        {
            return redirect(route('about'))->with('success','İşlem Başarılı');
        }
        if ($update2)
        {
            return redirect(route('about'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','Something went wrong');
    }
    public function update_head_image(Request $request){
        if ($request->hasFile('head_image')){
            $request->validate([
                'head_image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $file_name1=uniqid().'.'.$request->head_image->getClientOriginalExtension();
            $request->head_image->move('temp/',$file_name1);
            $path=$request->old_image;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        } else {
            $file_name1=substr($request->old_image, 5);
        }
        $update2=DB::table('abouts')->where('id','1')->update([
            "title_background_image"=>'temp/'.$file_name1,
            
        ]);
        if ($update2)
        {
            return redirect(route('about'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','Something went wrong');
    }


    public function update_slider_image(Request $request){
        if ($request->hasFile('slider_image')){
            $request->validate([
                'slider_image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $file_name1=uniqid().'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move('temp/',$file_name1);
            
        } else {
            $file_name1=substr($request->old_image, 5);
        }
        $insert=DB::table('home_slider')->insert([
            'image' =>'temp/'.$file_name1,
            'sort' =>'0',
        ]);
        if ($insert)
        {
            return redirect(route('settings'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','Something went wrong');

    }
    public function delete_slider_image($id){
        $find=DB::table('home_slider')->where('id',$id)->first();
       $delete=DB::table('home_slider')->where('id',$id)->delete();
       $path=$find->image;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        if ($delete)
        {
            return redirect(route('settings'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','Something went wrong');
    }
}
