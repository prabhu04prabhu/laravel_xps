<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use Carbon\Carbon;

class imageController extends Controller
{
public function multiplefileupload(Request $request)
{
        $date = Carbon::now()->toDateTimeString();
        $cat_id = $request->input('cat_id');

        request()->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $images=array();
        if($files=$request->file('images'))
        {
            foreach($files as $file)
            {
                $name= date('mdYHis') . uniqid() . $file->getClientOriginalName();
                $file->move('image',$name);
                $images[]=$name;       

                DB::table('images')->insert(['image' => $name,'created_at' => $date, 'cat_id' => $cat_id]);
            }
            return redirect()->back()->with('success', 'Image Uploaded Successfully');
        }

}


public function multiplesliderupload(Request $request)
{
        $date = Carbon::now()->toDateTimeString();

        request()->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $images=array();
        if($files=$request->file('images'))
        {
            foreach($files as $file)
            {
                $name= date('mdYHis') . uniqid() . $file->getClientOriginalName();
                $file->move('image',$name);
                $images[]=$name;       

                DB::table('slider_image')->insert(['image' => $name,'Created_at' => $date]);
            }
            return redirect()->back()->with('success', 'Image Uploaded Successfully');
        }
}

public function deleteslider($id)
{
    $del = DB::table('slider_image')->where('Slider_ID', $id)->get();

    foreach($del as $row){
        $image = $row->image;
        $image_path = 'image/'.$image;
     if (file_exists($image_path)) {
        @unlink($image_path);
    }
  

    }
     
    DB::table('slider_image')->where('Slider_ID',$id)->delete();  
    // return view('back_end.uploadedImage');
?>
<script>
alert('Image deleted Successfully');
window.location.href='uploadedSlider';
</script>
<?php
}

public function add_category(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $cat_name = $request->input('category_name');

    DB::table('gallery_category')->insert(['name' => $cat_name, 'created_at' => $date]);

    return redirect()->back()->with('success', 'Category Created Successfully'); 
}

public function cat_search(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $cat_search = $request->input('cat_id_hidden');

    $result = DB::table('images')
            ->join('gallery_category', 'gallery_category.cat_id', '=', 'images.cat_id')
            ->where('images.cat_id', $cat_search)
            ->get();
    return view("back_end.edit_gallery",['result' => $result]);
}

public function edit_category(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $cat_id = $request->input('cat_id_hidden');

    $name = $request->input('category_name');

    $edited = DB::table('gallery_category')->where('cat_id', $cat_id)->update(['name' => $name, 'updated_at' => $date]);


$images=array();
if($files=$request->file('images')){
foreach($files as $file){
$name= date('mdYHis') . uniqid() . $file->getClientOriginalName();
$file->move('image',$name);
$images[]=$name;
/*Insert your data*/
DB::table('images')->insert(['image' => $name,'created_at' => $date, 'cat_id' => $cat_id]);
}
}
    return redirect()->back()->with('success', 'Category Name Updated Successfully'); 
}

public function delete_image($id)
{
    $del = DB::table('images')->where('id', $id)->get();

    foreach($del as $row){
        $image = $row->image;
    }
     $image_path = 'image/'.$image;
     if (file_exists($image_path)) {
        @unlink($image_path);
    }
    DB::table('images')->where('id',$id)->delete();
   

    // return view('back_end.uploadedImage');
?>
<script>
alert('Image deleted Successfully');
window.location.href='uploadedImage';
</script>
<?php
}
public function gallery_view($id){
$details =  DB::table('images')->join('gallery_category','images.cat_id', '=','gallery_category.cat_id')->where('gallery_category.cat_id',$id)->get();
  
  return view('back_end.gallery_view',['details' => $details]);
}
public function image_gallery($id){
$details =  DB::table('images')->join('gallery_category','images.cat_id', '=','gallery_category.cat_id')->where('gallery_category.cat_id',$id)->get();
  
  return view('front_end.image-gallery',['details' => $details]);
}
public function video_gallery($id){
$detail =  DB::table('video_url')->join('video_category','video_url.video_id', '=','video_category.video_id')->where('video_category.video_id',$id)->get();
  
  return view('front_end.video-gallery',['detail' => $detail]);
}
}
