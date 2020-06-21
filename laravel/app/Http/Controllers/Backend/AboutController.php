<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\About;
class AboutController extends Controller
{
    public function index(){
        $about=About::first();
        $about_images=DB::table('abouts_images')->get();
        $about_slider=DB::table('abouts_slider')->get();
        return view('Backend.About.index',['about'=>$about,'about_images'=>$about_images,'about_slider'=>$about_slider]);
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

        $About =  About::find(1);
        
        $About->title_en = $request->title_en;
        $About->title_tr = $request->title_tr;
        $About->text_en = $request->text_en;
        $About->text_tr = $request->text_tr;
        $update= $About->save();
        if ($update)
        {
            return redirect(route('about'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','İşlem Başarısız');
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
        $insert=DB::table('abouts_slider')->insert([
            'image' =>'temp/'.$file_name1
        ]);
        if ($insert)
        {
            return redirect(route('about'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','Something went wrong');

    }
    public function delete_slider_image($id){
        $find=DB::table('abouts_slider')->where('id',$id)->first();
       $delete=DB::table('abouts_slider')->where('id',$id)->delete();
       $path=$find->image;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        if ($delete)
        {
            return redirect(route('about'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','Something went wrong');
    }

}
