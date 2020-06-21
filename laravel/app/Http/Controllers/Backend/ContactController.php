<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
    public function index(){
        $contact=Contact::first();
        $contact_info=DB::table('contact_info')->first();
        
        return view('Backend.Contact.index',['contact'=>$contact,'contact_info'=>$contact_info]);
    }

    public function update(Request $request){

        $Contact =  Contact::find(1);
        
        $Contact->title_en = $request->title_en;
        $Contact->title_tr = $request->title_tr;
        $Contact->text_en = $request->text_en;
        $Contact->text_tr = $request->text_tr;
        $Contact->iframe = $request->iframe;
        $update= $Contact->save();
        if ($update)
        {
            DB::table('contact_info')->update([
                "phone"=>$request->phone,
                "location"=>$request->location,
                "email"=>$request->email
            ]);
            return redirect(route('contact'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','İşlem Başarısız');
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
        $update2=DB::table('contacts')->where('id','1')->update([
            "contact_background_image"=>'temp/'.$file_name1,
            
        ]);
        if ($update2)
        {
            return redirect(route('contact'))->with('success','İşlem Başarılı');
        }
          return back()->with('error','Something went wrong');
    }
}
