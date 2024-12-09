<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use Carbon\Carbon;

class searchController extends Controller
{

public function product_list_filter(Request $request)
{    
    $categoryid = $request->input('categoryid');
    $range1 = $request->input('range1');
    $range2 = $request->input('range2');
    $imodel = $request->input('modelid');
    $ibrand = $request->input('brandid');
    $vbrand = $request->input('vbrandid');
    $vmodel = $request->input('vmodelid');
    $fueltype = $request->input('fueltypeid');
    $isort = $request->input('sortby');
    $icapacityid = $request->input('capacityid');
    
    $product = DB::table('productmaster')->select('productmaster.ProductID','productmaster.MRP','productmaster.OnlinePricing','brandmaster.BrandName','productmaster.image')
    ->join('categorymaster', 'categorymaster.CategoryID', '=', 'productmaster.CategoryID')
    ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
    ->join('subbrand', 'subbrand.SubBrandID', '=', 'productmaster.SubBrandID');
    if($vbrand != 0){

    $product = $product->join('tbl_mapping', 'tbl_mapping.pro_id', '=', 'productmaster.ProductID');

    }
    //->whereRaw("productmaster.OnlinePricing >=$range1")
    $product->where('productmaster.OnlinePricing','>=',$range1)
    ->where('productmaster.OnlinePricing','<=',$range2);   
    if(strlen($icapacityid) >0){
        $product = $product ->whereRaw("productmaster.CapacityID in ($icapacityid)");
       // $product = $product ->whereIn('productmaster.CapacityID',$icapacityid);
    }
    if($ibrand != 0){
        $product = $product ->where('productmaster.BrandID','=',$ibrand);
    }if($categoryid != 0){
        $product = $product ->where('productmaster.CategoryID','=',$categoryid);
    }if($imodel != 0){
        $product = $product ->where('productmaster.ProductID','=',$imodel);
    }
    if($vbrand != 0){
        $product = $product ->where('tbl_mapping.brandname',$vbrand);
    }
    if($vmodel != 0){
        $product = $product ->where('tbl_mapping.modelname','=',$vmodel);
    }

    if($fueltype != 0){
        $product = $product ->where('tbl_mapping.map_id','=',$fueltype);
    }
    if($fueltype =="Petrol"){
        $product = $product->where('tbl_mapping.is_petrol','=','true');
    }
    if($fueltype =="Diesel"){
        $product = $product->where('tbl_mapping.is_disel','=','true');
    }
    
   
    $product = $product ->groupBy('productmaster.ProductID','productmaster.MRP','productmaster.OnlinePricing','brandmaster.BrandName','productmaster.image')->orderBy('productmaster.OnlinePricing', $isort) ->paginate(10);
    
    $artilces = '';
    if ($request->ajax()) {
        foreach ($product as $products) {
            $artilces.='<div class="item"><a href="shop&id='.$products->ProductID.'" class="more-details">More Details</a><figure><figcaption><div class="shop-icons"><a href="javascript:void(0);" class="cd-add-to-cart" title="Cart"><i onclick="addcart('.$products->ProductID.');" id="productid'.$products->ProductID.'" data-id="'.$products->ProductID.'" data-price="'.$products->MRP.'" data-rate="'.$products->OnlinePricing.'" class="fa fa-shopping-cart"></i></a><a href="#" title="Wishlist"><i class="fa fa-heart"></i></a><a href="shop&id='.$products->ProductID.'" title="View Product"><i class="fa fa-eye"></i></a></div><h3>'.$products->BrandName.'</h3><h2><del style="color: black;font-size: 19px;">Rs.'.$products->MRP.'</del>  Rs.'.$products->OnlinePricing.'/-</h2></figcaption><img src="'.$products->image.'"></figure></div>';
        }
        return response()->json(array('success' => true, 'data' => $artilces, 'rawdata' =>$product));
    }

   // return response()->json(array('success' => true, 'data' => $product));
}

public function session_filter(Request $request)
{    
    $categoryid = $request->input('categoryid');
    $modelid = $request->input('modelid');
    $ibrand = $request->input('brandid');
    $_SESSION['scategoryid']=$categoryid;
    $_SESSION['smodelid']=$modelid;
    $_SESSION['sbrandid']=$ibrand;
    // session()->put('scategoryid', $categoryid);
    // session()->put('smodelid', $modelid);
    // session()->put('sbrandid', $ibrand);
    return response()->json(array('success' => true, 'value'=>$_SESSION['sbrandid']));
}


}