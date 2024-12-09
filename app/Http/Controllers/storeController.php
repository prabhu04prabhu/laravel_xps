<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use Carbon\Carbon;

class storeController extends Controller
{

public function new_store(Request $request)
    {
    $date = Carbon::now()->toDateTimeString();
    $name = $request->input('name');
    $address = $request->input('address');
    $city = $request->input('city');
    $pincode = $request->input('pincode');
    $contact_person = $request->input('contact_person');
    $mobile = $request->input('mobile');
    $lan = $request->input('lan');
    $lat = $request->input('lat');
    $map = $request->input('map');
    $mrp = $request->input('mrp');
    $status = $request->input('status');


    // $images=array();
    // if($files=$request->file('images')){
    // foreach($files as $file){
    // $image_path= date('mdYHis') . uniqid() . $file->getClientOriginalName();
    // $file->move('image/product_img', $image_path);
    // $images[]=$image_path;
    
    DB::table('tbl_storelocator')->insert(['name' => $name,'address' => $address, 'city' => $city,'pincode' => $pincode,'contact_person' => $contact_person,'mobile_no' => $mobile,'lan' => $lan,'lat' => $lat,'map_link' => $map,'status' => $status,'created_on' =>$date ]);

    //INSERT INTO `tbl_storelocator`(`store_id`, `name`, `address`, `city`, `pincode`, `contact_person`, `mobile_no`, `lan`, `lat`, `map_link`, `status`, `created_on`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])

return redirect('store_location')->with('success', 'Store Added Successfully'); 
}

public function edit_store(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $capacity_id = $request->input('capacity_id');
    $id = $request->input('hidden_id');
    $name = $request->input('ename');
    $address = $request->input('eaddress');
    $city = $request->input('ecity');
    $pincode = $request->input('epincode');
    $contact_person = $request->input('econtact_person');
    $mobile = $request->input('emobile');
    $lan = $request->input('elan');
    $lat = $request->input('elat');
    $map = $request->input('emap');
    $mrp = $request->input('emrp');
    $status = $request->input('estatus');


    DB::table('tbl_storelocator')->where('store_id', $id)->update(['name' => $name,'address' => $address, 'city' => $city,'pincode' => $pincode,'contact_person' => $contact_person,'mobile_no' => $mobile,'lan' => $lan,'lat' => $lat,'map_link' => $map,'status' => $status,'updated_on' => $date]);


    //UPDATE `tbl_storelocator` SET `store_id`=[value-1],`name`=[value-2],`address`=[value-3],`city`=[value-4],`pincode`=[value-5],`contact_person`=[value-6],`mobile_no`=[value-7],`lan`=[value-8],`lat`=[value-9],`map_link`=[value-10],`status`=[value-11],`created_on`=[value-12],`updated_on`=[value-13] WHERE 1

    
    
return redirect('store_location')->with('success', 'Store Details Updated'); 
}


public function delete_store($id)
    {
        $del = DB::table('tbl_storelocator')->where('store_id', $id)->get();

        DB::table('tbl_storelocator')->where('store_id',$id)->delete();

        return redirect('store_location')->with('success2', 'Store Deleted Successfully'); 
    }

public function publish($id){
  DB::table('tbl_storelocator')->where('store_id',$id)->update(['status' => 'Active']);
  return redirect('store_location')->with('success', 'Activated in Store Location');
}

public function un_publish($id){
  DB::table('tbl_storelocator')->where('store_id',$id)->update(['status' => 'Inactive']);
  return redirect('store_location')->with('success2', 'Inactivated Store Location'); 
}

}