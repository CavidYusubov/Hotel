<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Backend\RoomsImgs;
use App\Backend\RoomsServices;
use App\Model\Rooms;
use App\Model\RoomsInfos;
class RoomsController extends Controller
{
    public function index(){
        $Rooms =Rooms::All();
        $RoomsInfos =RoomsInfos::find(1);
        $RoomsImgs =RoomsImgs::All();
        $RoomsServices =RoomsServices::All();
      
        return view('Backend.Rooms.index',['Rooms'=>$Rooms,'RoomsImgs'=>$RoomsImgs,'RoomsServices'=>$RoomsServices,'RoomsInfos'=>$RoomsInfos]);
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
        $update2=RoomsInfos::where('id','1')->update([
            "background_image"=>'temp/'.$file_name1,
            
        ]);
        if ($update2)
        {
            return redirect(route('rooms'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','Something went wrong');
    }

    public function update(Request $request){

        $update =  DB::table('gallery_page')->where('id',1)->update([
            "title_en"=>  $request->title_en,
            "title_tr"=>$request->title_tr,
        ]);
       
   
        if ($update)
        {
            return redirect(route('gallery'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','İşlem Başarısız');
    }
    public function update_gallery_image(Request $request){

        if($request->hasFile('image')){
            $request->validate([
                'image.*' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]   , [
                'image.*' => 'Only  This file types allowed: doc,docx,txt,excel,xls,xlsx,zip,pdf'
            ]);
       
            foreach ($request->image as $keys =>$file) {
           
               
                
                $file_name_icon=uniqid().'.'.$file->getClientOriginalExtension();
               
                $file->move('temp/', $file_name_icon);
            $name_of_iconss[]=$file_name_icon;
                  
            $update =  DB::table('galleries')->where('id',$keys)->update([
                "image"=>  'temp/'.$file_name_icon,
               
            ]);
           
              
    }
}

foreach ($request->title_en as $key => $value) {
    
  
        $update =  DB::table('galleries')->where('id',$key)->update([
            "title_en"=>  $request->title_en[$key],
            "title_tr"=>$request->title_tr[$key],
        ]);
        
        
    }
    return redirect(route('gallery'))->with('success','İşlem Başarılı');

  
      
   
}

public function store(Request $request){
    
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
    ] );
  
    $file_name_icon=uniqid().'.'.$request->image->getClientOriginalExtension();
               
    $request->image->move('temp/', $file_name_icon);

    $update =  DB::table('galleries')->insert([
        "image"=>  'temp/'.$file_name_icon,
        "title_en"=>  $request->title_en,
        "title_tr"=>$request->title_tr,
    ]);

    if ($update)
    {
        return redirect(route('gallery'))->with('success','İşlem Başarılı');
    }
      return back()->with('error','İşlem Başarısız');
    
}

public function delete($id){
    $find=DB::table('galleries')->where('id',$id)->first();
   $delete=DB::table('galleries')->where('id',$id)->delete();
   $path=$find->image;
        if (file_exists($path))
        {
            @unlink(public_path($path));
        }
    if ($delete)
    {
        return redirect(route('gallery'))->with('success','İşlem Başarılı');
    }
      return back()->with('error','Something went wrong');
}
}
