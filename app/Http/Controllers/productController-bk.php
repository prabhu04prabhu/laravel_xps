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
    
    
return redirect()->back()->with('success', 'Category Updated Successfully'); 
}

public function delete_categoryname($id)
    {
        $del = DB::table('categorymaster')->where('CategoryID', $id)->get();

        DB::table('categorymaster')->where('CategoryID',$id)->delete();

        return redirect()->back()->with('success2', 'Category Deleted Successfully'); 
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
    
    
return redirect()->back()->with('success', 'Brand Updated Successfully'); 
}

public function delete_brand($id)
    {
        $del = DB::table('brandmaster')->where('BrandID', $id)->get();

        DB::table('brandmaster')->where('BrandID',$id)->delete();

        return redirect()->back()->with('success2', 'Brand Deleted Successfully'); 
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
    
    
return redirect()->back()->with('success', 'Sub Brand Updated Successfully'); 
}

public function delete_subbrand($id)
    {
        $del = DB::table('subbrand')->where('BrandID', $id)->get();

        DB::table('subbrand')->where('BrandID',$id)->delete();

        return redirect()->back()->with('success2', 'Sub Brand Deleted Successfully'); 
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
    $b_id = $request->input('b_id');
    $s_id = $request->input('s_id');
    $code = $request->input('code');
    $model = $request->input('model');
    $warranty = $request->input('warranty');
    $tax = $request->input('tax');
    $pdescription = $request->input('pdescription');
    $price = $request->input('price');
    $mrp = $request->input('mrp');
    $purchase = $request->input('purchase');
    $pstatus = $request->input('pstatus');
    


    // $images=array();
    // if($files=$request->file('images')){
    // foreach($files as $file){
    // $image_path= date('mdYHis') . uniqid() . $file->getClientOriginalName();
    // $file->move('image/product_img', $image_path);
    // $images[]=$image_path;
    
    DB::table('productmaster')->insert(['CategoryID' => $c_id, 'BrandID' => $b_id,'SubBrandID' => $s_id,'ProductCode' => $code,'ProductModelNo' => $model,'Warranty' => $warranty,'TaxID' => $tax,'Description' => $pdescription,'OnlinePricing' => $price,'MRP' => $mrp,'PurchasePrice' => $purchase,'Status' => $pstatus,'image' => $images,'CreatedBy' =>$date ]);

return redirect()->back()->with('success', 'Products Added Successfully'); 
}

public function edit_products(Request $request)
{
    $date = Carbon::now()->toDateTimeString();
    $ca_id = $request->input('ca_id');
    $br_id = $request->input('br_id');
    $sub_id = $request->input('sub_id');
    $ecode = $request->input('ecode');
    $emodel = $request->input('emodel');
    $ewarranty = $request->input('ewarranty');
    $etax = $request->input('etax');
    $edescription = $request->input('edescription');
    $eprice = $request->input('eprice');
    $emrp = $request->input('emrp');
    $epurchase = $request->input('epurchase');
    $estatus = $request->input('estatus');
    $id = $request->input('hidden_id');
    $img=$request->file('images');

    if (empty($img)) {
        DB::table('productmaster')->where('ProductID', $id)->update(['CategoryID' => $ca_id, 'BrandID' => $br_id,'SubBrandID' => $sub_id,'ProductCode' => $ecode,'ProductModelNo' => $emodel,'Warranty' => $ewarranty,'TaxID' => $etax,'Description' => $edescription,'OnlinePricing' => $eprice,'MRP' => $emrp,'PurchasePrice' => $epurchase,'Status' => $estatus, 'updated_at' => $date]);
    } else {
    $images=array();
    if($files=$request->file('images')){
    foreach($files as $file){
    $image_path= date('mdYHis') . uniqid() . $file->getClientOriginalName();
    $file->move('image/product_img',$image_path);
    $images[]=$image_path;
  
     DB::table('productmaster')->where('ProductID', $id)->update(['CategoryID' => $ca_id, 'BrandID' => $br_id,'SubBrandID' => $sub_id,'ProductCode' => $ecode,'ProductModelNo' => $emodel,'Warranty' => $ewarranty,'TaxID' => $etax,'Description' => $edescription,'OnlinePricing' => $eprice,'MRP' => $emrp,'PurchasePrice' => $epurchase,'Status' => $estatus,'image' => $image_path, 'updated_at' => $date]);

    }
}
    }  
    
return redirect()->back()->with('success', 'Product Updated Successfully'); 
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

}