<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use Carbon\Carbon;

class testimonialController extends Controller
{
public function new_testimonial(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $name = $request->input('name');
    $content = $request->input('content');
    $designation = $request->input('designation');
    $company_name = $request->input('company_name');
    
    

    $images=array();
    if($files=$request->file('images')){
    foreach($files as $file){
    $image_path= date('mdYHis') . uniqid() . $file->getClientOriginalName();
    $file->move('image', $image_path);
    $images[]=$image_path;

    DB::table('testimonial')->insert(['image' => $image_path, 'designation' => $designation, 'created_at' => $date, 'content' => $content, 'company_name' => $company_name, 'status' => 'Approved', 'type' => 'admin', 'name' => $name]);

    }
}
return redirect('view_testimonial')->with('success', 'Testimonial Added Successfully'); 
}
public function approve(Request $request)
{
    $edit_id = $request->input('edit_id');
    $details = DB::table('testimonial')->where('t_id',$edit_id)->get();
    foreach($details as $row){
          $status =  $row->status;

        }
 DB::table('testimonial')->where('t_id',$edit_id)->update(['status' => 'Approved']);
        
 return redirect()->back()->with('success', 'Testimonial Approved Successfully'); 
 
}

public function re_issue(Request $request)
{
    $reissue_id = $request->input('reissue_id');
    $comment = $request->input('comment');
    $details = DB::table('testimonial')->where('t_id',$reissue_id)->get();
    foreach($details as $row){
  $status =  $row->status;

}
 DB::table('testimonial')->where('t_id',$reissue_id)->update(['status' => $comment ]);
        
  
return redirect()->back()->with('success', 'Testimonial Reissue Sent'); 
}

public function edit_testimonial_new(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $name = $request->input('name');
    $content = $request->input('content');
    $designation = $request->input('designation');
    $id = $request->input('hidden_id');
    $img=$request->file('images');

    if (empty($img)) {
        DB::table('testimonial')->where('t_id', $id)->update(['designation' => $designation, 'updated_at' => $date, 'content' => $content, 'name' => $name]);
    } else {
    $images=array();
    if($files=$request->file('images')){
    foreach($files as $file){
    $image_path= date('mdYHis') . uniqid() . $file->getClientOriginalName();
    $file->move('image',$image_path);
    $images[]=$image_path;
  
    DB::table('testimonial')->where('t_id', $id)->update(['image' => $image_path, 'designation' => $designation, 'updated_at' => $date, 'content' => $content, 'name' => $name]);

    }
}
    }
    
    
return redirect('view_testimonial')->with('success', 'Testimonial Updated Successfully'); 
}

public function delete_testimonial_image($id)
{
    $del = DB::table('testimonial')->where('t_id', $id)->get();
   
    foreach($del as $row){
        $image = $row->image;
    }
     $image_path = 'image/'.$image;
     if (file_exists($image_path)) {
        @unlink($image_path);
    }
    DB::table('testimonial')->where('t_id', $id)->update(['image' => null]);
   
    return redirect()->back()->with('success', 'Testimonial Image Deleted Successfully'); 
    // return view('back_end.uploadedImage');

}

public function delete_testimonial($id)
    {
        $del = DB::table('testimonial')->where('t_id', $id)->get();

        foreach($del as $row){
            $image = $row->image;
        }
         $image_path = 'image/'.$image;
         if (file_exists($image_path)) {
            @unlink($image_path);
        }

        DB::table('testimonial')->where('t_id',$id)->delete();

        return redirect()->back()->with('success2', 'Testimonial Deleted Successfully'); 
    }

}