<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use Carbon\Carbon;

class productController extends Controller
{
 public function new_category(Request $request)
    {
    $date = Carbon::now()->toDateTimeString();
    $cname = $request->input('cname');
    $points = $request->input('points');
    $description = $request->input('description');
    $status = $request->input('status');
    
    DB::table('categorymaster')->insert(['CategoryName' => $cname,'PointsValue' => $points,'Description' => $description,'Status' => $status,'CreatedBy' =>$date ]);

return redirect()->back()->with('success', 'Category Name Added Successfully'); 
}

public function edit_category_new(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $cname = $request->input('cname');
    $points = $request->input('points');
    $description = $request->input('description');
    $status = $request->input('status');
    $id = $request->input('hidden_id');
    $img=$request->file('images');

    DB::table('categorymaster')->where('CategoryID', $id)->update(['CategoryName' => $cname,'PointsValue' => $points,'Description' => $description,'Status' => $status, 'updated_at' => $date]);
    
    
return redirect('add_categorymaster')->with('success', 'Category Updated Successfully'); 
}

public function delete_categoryname($id)
    {
        DB::table('categorymaster')->where('CategoryID',$id)->delete();

        return redirect('add_categorymaster')->with('success2', 'Category Deleted Successfully'); 
    }



  public function new_brand(Request $request)
    {
    $date = Carbon::now()->toDateTimeString();
    $bname = $request->input('bname');
    $bdescription = $request->input('bdescription');
    $bstatus = $request->input('bstatus');
    
    DB::table('brandmaster')->insert(['BrandName' => $bname,'Description' => $bdescription,'Brand_Status' => $bstatus,'CreatedBy' =>$date ]);

return redirect()->back()->with('success', 'Brand Added Successfully'); 
}

public function edit_brand(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $bname = $request->input('bname');
    $bdescription = $request->input('bdescription');
    $bstatus = $request->input('bstatus');
    $id = $request->input('hidden_id');

    DB::table('brandmaster')->where('BrandID', $id)->update(['BrandName' => $bname,'Description' => $bdescription,'Brand_Status' => $bstatus, 'updated_at' => $date]);
    
    
return redirect('add_brand')->with('success', 'Brand Updated Successfully'); 
}

public function delete_brand($id)
    {
        DB::table('brandmaster')->where('BrandID',$id)->delete();

        return redirect('add_brand')->with('success2', 'Brand Deleted Successfully'); 
    }

public function new_subbrand(Request $request)
    {
    $date = Carbon::now()->toDateTimeString();
    $sname = $request->input('sname');
    $sdescription = $request->input('sdescription');
    $sstatus = $request->input('sstatus');
    $BrandID = $request->input('BrandID');
    
    DB::table('subbrand')->insert(['BrandID' => $BrandID,'SubBrandName' => $sname,'Description' => $sdescription,'Status' => $sstatus,'CreatedBy' =>$date ]);

return redirect()->back()->with('success', 'Sub Brand Added Successfully'); 
}
public function edit_subbrand(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $sname = $request->input('sname');
    $sdescription = $request->input('sdescription');
    $sstatus = $request->input('sstatus');
    $id = $request->input('hidden_id');
    $BrandID = $request->input('BrandID');

    DB::table('subbrand')->where('SubBrandID', $id)->update(['BrandID' => $BrandID,'SubBrandName' => $sname,'Description' => $sdescription,'Status' => $sstatus, 'updated_at' => $date]);
    
    
return redirect('add_subbrand')->with('success', 'Sub Brand Updated Successfully'); 
}

public function delete_subbrand($id)
    {
        DB::table('subbrand')->where('SubBrandID',$id)->delete();

        return redirect('add_subbrand')->with('success2', 'Sub Brand Deleted Successfully'); 
    }


      public function new_products(Request $request)
    {

    	 function generate_uuid() {
            return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
                mt_rand( 0, 0xffff ),
                mt_rand( 0, 0x0C2f ) | 0x4000,
                mt_rand( 0, 0x3fff ) | 0x8000,
                mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
            );
          
          }
    
          $idd = generate_uuid();
          if(move_uploaded_file($_FILES["images"]["tmp_name"], "image/product_img/" . $idd.".".pathinfo($_FILES["images"]["name"], PATHINFO_EXTENSION))){
                $images = "image/product_img/" . $idd.".".pathinfo($_FILES["images"]["name"], PATHINFO_EXTENSION);
          
          }
    $date = Carbon::now()->toDateTimeString();
    $c_id = $request->input('c_id');
    $capacity_id = $request->input('capacity_id');
    $b_id = $request->input('b_id');
    $s_id = $request->input('s_id');
    $code = $request->input('code');
    $model = $request->input('model');
    $warranty = $request->input('warranty');
    $tax = $request->input('tax');
    $price = $request->input('price');
    $mrp = $request->input('mrp');
    $purchase = $request->input('purchase');
    $pstatus = $request->input('pstatus');
    $pavailable = $request->input('pavailable');
    $pfeature = $request->input('pfeature');
    $pdescription = $request->input('pdescription');    
    $pspecifications = $request->input('pspecifications');
    $discount_percentage = $request->input('discount_percentage');
    $scrab_amount = $request->input('scrab_amount');
    


    // $images=array();
    // if($files=$request->file('images')){
    // foreach($files as $file){
    // $image_path= date('mdYHis') . uniqid() . $file->getClientOriginalName();
    // $file->move('image/product_img', $image_path);
    // $images[]=$image_path;
    
    DB::table('productmaster')->insert(['CategoryID' => $c_id,'CapacityID' => $capacity_id, 'BrandID' => $b_id,'SubBrandID' => $s_id,'ProductCode' => $code,'ProductModelNo' => $model,'Warranty' => $warranty,'TaxID' => $tax,'Descriptions' => $pdescription,'specification' => $pspecifications,'OnlinePricing' => $price,'MRP' => $mrp,'PurchasePrice' => $purchase,'display' => $pstatus,'availability' => $pavailable,'feature' => $pfeature,'image' => $images,'CreatedBy' =>$date,'scrab_amount' => $scrab_amount, 'discount_percent' => $discount_percentage ]);

return redirect('product_details')->with('success', 'Products Added Successfully'); 
}

public function edit_products(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $ca_id = $request->input('ca_id');
    $capacity_id = $request->input('capacity_id');
    $br_id = $request->input('br_id');
    $sub_id = $request->input('sub_id');
    $ecode = $request->input('ecode');
    $emodel = $request->input('emodel');
    $ewarranty = $request->input('ewarranty');
    $etax = $request->input('etax');
    $eprice = $request->input('eprice');
    $emrp = $request->input('emrp');
    $epurchase = $request->input('epurchase');
    $estatus = $request->input('estatus');
    $images = $request->input('images');
    $id = $request->input('hidden_id');
    $edescription = $request->input('edescription');
    $especifications = $request->input('especifications');
    $eavailable = $request->input('eavailable');
    $efeature = $request->input('efeature');
    $discount_percentage = $request->input('discount_percentage');
    $scrab_amount = $request->input('scrab_amount');


    //$images=array();

    if($files=$request->file('images'))
    {
        foreach($files as $file)
        {
           $image_path= date('mdYHis') . uniqid() . $file->getClientOriginalName();
            $file->move('image/product_img', $image_path);
            $image_path = 'image/product_img/'.$image_path;
            $images=$image_path;
        }
    
    DB::table('productmaster')->where('ProductID', $id)->update(['CategoryID' => $ca_id,'CapacityID' => $capacity_id, 'BrandID' => $br_id,'SubBrandID' => $sub_id,'ProductCode' => $ecode,'ProductModelNo' => $emodel,'Warranty' => $ewarranty,'TaxID' => $etax,'Descriptions' => $edescription,'specification' => $especifications,'OnlinePricing' => $eprice,'MRP' => $emrp,'PurchasePrice' => $epurchase,'display' => $estatus,'availability' => $eavailable,'feature' => $efeature,'image' => $images, 'updated_at' => $date, 'scrab_amount' => $scrab_amount, 'discount_percent' => $discount_percentage]);
}
else
{
    DB::table('productmaster')->where('ProductID', $id)->update(['CategoryID' => $ca_id,'CapacityID' => $capacity_id, 'BrandID' => $br_id,'SubBrandID' => $sub_id,'ProductCode' => $ecode,'ProductModelNo' => $emodel,'Warranty' => $ewarranty,'TaxID' => $etax,'Descriptions' => $edescription,'specification' => $especifications,'OnlinePricing' => $eprice,'MRP' => $emrp,'PurchasePrice' => $epurchase,'display' => $estatus,'availability' => $eavailable,'feature' => $efeature, 'updated_at' => $date, 'scrab_amount' => $scrab_amount, 'discount_percent' => $discount_percentage]);
}
    
    
return redirect('product_details')->with('success', 'Product Updated Successfully'); 
}



public function delete_product_image($id)
{
    $del = DB::table('productmaster')->where('ProductID', $id)->get();
   
    foreach($del as $row){
        $image = $row->image;
    }
     $image_path = 'image/product_img/'.$image;
     if (file_exists($image_path)) {
        @unlink($image_path);
    }
    DB::table('productmaster')->where('ProductID', $id)->update(['image' => null]);
   
    return redirect()->back()->with('success', 'Product Image Deleted Successfully'); 
    // return view('back_end.uploadedImage');

}

public function delete_product($id)
    {

        DB::table('productmaster')->where('ProductID',$id)->delete();

        return redirect()->back()->with('success2', 'Product Deleted Successfully'); 
    }


    
 public function new_capacity(Request $request)
 {
 $date = Carbon::now()->toDateTimeString();
 $cname = $request->input('cname');
 $description = $request->input('description');
 $status = $request->input('status');
 
 DB::table('capacitymaster')->insert(['CapacityName' => $cname,'Description' => $description,'Status' => $status,'CreatedBy' =>$date ]);

return redirect()->back()->with('success', 'Capacity Name Added Successfully'); 
}

public function edit_capacity_new(Request $request)
{
 $date = Carbon::now()->toDateTimeString();
 $cname = $request->input('cname');
 $description = $request->input('description');
 $status = $request->input('status');
 $id = $request->input('hidden_id');

 DB::table('capacitymaster')->where('CapacityID', $id)->update(['CapacityName' => $cname,'Description' => $description,'Status' => $status, 'updated_at' => $date]);
 
 
return redirect('add_capacitymaster')->with('success', 'Capacity Updated Successfully'); 
}

public function delete_capacityname($id)
 {

     DB::table('capacitymaster')->where('CapacityID',$id)->delete();

     return redirect()->back()->with('success2', 'Capacity Deleted Successfully'); 
 }

 public function new_vehicle(Request $request)
    {

        function generate_uuid() {
            return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
                mt_rand( 0, 0xffff ),
                mt_rand( 0, 0x0C2f ) | 0x4000,
                mt_rand( 0, 0x3fff ) | 0x8000,
                mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
            );
          
          }
    
          $idd = generate_uuid();
          if(move_uploaded_file($_FILES["images"]["tmp_name"], "image/brand-logo/" . $idd.".".pathinfo($_FILES["images"]["name"], PATHINFO_EXTENSION))){
                $images = "image/brand-logo/" . $idd.".".pathinfo($_FILES["images"]["name"], PATHINFO_EXTENSION);
          
          }
    $date = Carbon::now()->toDateTimeString();
    $CategoryID = $request->input('CategoryID');
    $brand_name = $request->input('brand_name');
    // $description = $request->input('description');
    $status = $request->input('status');
    
    DB::table('tbl_vehiclebrand')->insert(['cat_id' => $CategoryID,'brand_name' => $brand_name,'images' => $images,'status' => $status,'created_at' =>$date ]);

return redirect('vehicle_brand')->with('success', 'Vehicle Brand Added Successfully'); 
}

public function edit_vehiclebrand(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $CategoryID = $request->input('CategoryID');
    $vbname = $request->input('vbname');
    $vstatus = $request->input('vstatus');
    $id = $request->input('hidden_id');
    //$vdescription = $request->input('vdescription');
    $images = $request->input('images');

    if($files=$request->file('images'))
    {
        foreach($files as $file)
        {
           $image_path= date('mdYHis') . uniqid() . $file->getClientOriginalName();
            $file->move('image/brand-logo/', $image_path);
            $image_path = 'image/brand-logo/'.$image_path;
            $images=$image_path;
        }

    //echo  $images;
            DB::table('tbl_vehiclebrand')->where('v_id', $id)->update(['cat_id' => $CategoryID,'brand_name' => $vbname,'images' => $images,'status' => $vstatus, 'updated_at' => $date]);
        }
        else
        {
            DB::table('tbl_vehiclebrand')->where('v_id', $id)->update(['cat_id' => $CategoryID,'brand_name' => $vbname,'status' => $vstatus, 'updated_at' => $date]);
        }

    //DB::table('tbl_vehiclebrand')->where('v_id', $id)->update(['cat_id' => $CategoryID,'brand_name' => $vbname,'description' => $vdescription,'status' => $vstatus, 'updated_at' => $date]);
    //echo $set;
    
return redirect('vehicle_brand')->with('success', 'Brand Updated Successfully'); 
}

public function delete_vehiclebrand($id)
    {
        DB::table('tbl_vehiclebrand')->where('v_id',$id)->delete();

        return redirect('vehicle_brand')->with('success2', 'Brand Deleted Successfully'); 
    }

    
public function get_vehiclemodelbybrand(Request $request)
{
    $details=DB::table('tbl_vehiclemodel')->where('v_id',$request->input('id'))->get();

    return response()->json(["success" => true, "data" => $details]);
}

public function new_vehiclemodel(Request $request)
    {
    $date = Carbon::now()->toDateTimeString();
    $v_id = $request->input('v_id');
    $model_name = $request->input('model_name');
    // $description = $request->input('description');
    $status = $request->input('status');
    
    DB::table('tbl_vehiclemodel')->insert(['v_id' => $v_id,'model_name' => $model_name,'m_status' => $status,'created_at' =>$date ]);

return redirect('vehicle_model')->with('success', 'Vehicle Model Added Successfully'); 
}

public function edit_vehiclemodel(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $v_id = $request->input('v_id');
    $mname = $request->input('mname');
    $mstatus = $request->input('mstatus');
    $id = $request->input('hidden_id');
    // $vdescription = $request->input('vdescription');

    DB::table('tbl_vehiclemodel')->where('m_id', $id)->update(['v_id' => $v_id,'model_name' => $mname,'m_status' => $mstatus, 'updated_at' => $date]);
    //echo $set;
    
return redirect('vehicle_model')->with('success', 'Model Updated Successfully'); 
}

public function delete_vehiclemodel($id)
    {
        $del = DB::table('tbl_vehiclemodel')->where('m_id', $id)->get();

        DB::table('tbl_vehiclemodel')->where('m_id',$id)->delete();

        return redirect('tbl_vehiclemodel')->with('success2', 'Model Deleted Successfully'); 
    }

public function new_appliance(Request $request)
    {
    $date = Carbon::now()->toDateTimeString();
    $name = $request->input('name');
    $perunit = $request->input('perunit');
    // $description = $request->input('description');
    //$status = $request->input('status');
    
    DB::table('tbl_appliance')->insert(['name' => $name,'per_unit' => $perunit,'created_at' =>$date ]);

return redirect('appliance_details')->with('success', 'Appliance Added Successfully'); 
}

public function edit_appliances(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $appname = $request->input('appname');
    $app_per = $request->input('app_per');
    $id = $request->input('hidden_id');
    // $vdescription = $request->input('vdescription');

    DB::table('tbl_appliance')->where('app_id', $id)->update(['name' => $appname,'per_unit' => $app_per, 'updated_at' => $date]);
    //echo $set;
    
return redirect('appliance_details')->with('success', 'Appliance Updated Successfully'); 
}

public function delete_appliance($id)
    {
        $del = DB::table('tbl_appliance')->where('app_id', $id)->get();

        DB::table('tbl_appliance')->where('app_id',$id)->delete();

        return redirect('appliance_details')->with('success2', 'Appliance Deleted Successfully'); 
    }
   
// public function get_bybrand(Request $request)
//     {
//         $details=DB::table('tbl_vehiclebrand')->where('v_id',$request->input('id'))->get();
    
//         return response()->json(["success" => true, "data" => $details]);
//     }
    public function deletemapping(Request $request)
    {
        $usersdata =DB::table('tbl_mapping')->where("map_id", $request->input('id'))->first();
        DB::table('tbl_mapping')->where('map_id',$request->input('id'))->delete();

        return response()->json(["success" => true, "id" => $usersdata->pro_id]);
    }
    public function get_subbrandbybrand(Request $request)
    {
        $details=DB::table('subbrand')->where('BrandID',$request->input('id'))->get();

        return response()->json(["success" => true, "data" => $details]);
    }

    public function get_bybrand(Request $request)
    {
        $details=DB::table('tbl_vehiclebrand')->where('cat_id',$request->input('id'))->get();
    
        return response()->json(["success" => true, "data" => $details]);
    }

    public function get_bymodel(Request $request)
    {
        $details=DB::table('tbl_vehiclemodel')->where('v_id',$request->input('id'))->get();
    
        return response()->json(["success" => true, "data" => $details]);
    }
    public function get_appliance(Request $request)
    {
        $details=DB::table('tbl_appliance')->get();

        return response()->json(["success" => true, "data" => $details]);
    }
    public function get_bybrandmodel(Request $request)
    {
        $details=DB::table('subbrand')->where('BrandID',$request->input('id'))->get();
    
        return response()->json(["success" => true, "data" => $details]);
    }

}