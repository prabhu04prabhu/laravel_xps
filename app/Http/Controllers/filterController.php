<?php

namespace App\Http\Controllers;
// namespace App\Payment;

// use App\Paymnet\AWLMEAPI;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Hash;
use DB;
use Session;
use Carbon\Carbon;


class filterController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function filter_search(Request $request){
    // $budget = "";
    // $s_id = $request->input('s_id');
    $fcategory = $request->input('fcategory');
    $fmodel = $request->input('fmodel');
    $fbrand = $request->input('fbrand');

    $result = DB::table('productmaster')
                ->join('categorymaster', 'categorymaster.CategoryID', '=', 'productmaster.CategoryID')
                ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID') 
                ->where('categorymaster.CategoryID', $fcategory)
                ->where('productmaster.ProductID', $fmodel)
                ->where('brandmaster.BrandID', $fbrand)                                           
                ->get();
                //echo $result;

    // $result = DB::table('images')
    //         ->join('gallery_category', 'gallery_category.cat_id', '=', 'images.cat_id')
    //         ->where('images.cat_id', $cat_search)
    //         ->get();

    return view("front_end.products",['result' => $result]);

//     $type_category_search ="";
//     $type_model_search ="";
//     $theme_brand_search ="";
    
//     $ft = "";
//     if($fcategory != ""){
//     $type_category_search = implode(",", $fcategory);
//     $ft .= " and categorymaster.CategoryName in ('" . implode("', '", $fcategory) . "')";
//     }

//     if($fmodel != ""){
//     $type_model_search = implode(",", $fmodel);
//     $ft .= " and productmaster.ProductModelNo in ('" . implode("', '", $fmodel) . "')";
//     }
     
//     if($fbrand != ""){
//     $theme_brand_search = implode(",", $fbrand);
      
//     $ft .=  "and brandmaster.BrandName in ('" . implode("', '", $fbrand) . "') ";
//     }

//     if($status == 'india-tour-packages'){
  
//    $mt =  "SELECT tour_title,theme_tour.tour_id,tour_code,flight_special,tour_special,days,nights,current_rate,specifications,package_highlights,tour_category from theme_tour inner join visit_city on visit_city.tour_id = theme_tour.tour_id inner join themes on theme_tour.tour_id = themes.tour_id inner join category on theme_tour.category = category.category_id inner join hotel_type on hotel_type.tour_id = theme_tour.tour_id left join travel_date on travel_date.tour_id = theme_tour.tour_id
//     where v_city_name = '$s_id' and theme_tour.status = 'active'";

//  $gt = " group by tour_title,theme_tour.tour_id,tour_code,flight_special,tour_special,days,nights,current_rate,specifications,package_highlights,tour_category";

//  $fr = $mt.$ft.$gt;
//     $details = DB::select($fr);
 
 
// }
// if($status == 'international'){

//    $mt =  "SELECT tour_title,theme_tour.tour_id,tour_code,flight_special,tour_special,days,nights,current_rate,specifications,package_highlights,tour_category from theme_tour inner join visit_country on visit_country.tour_id = theme_tour.tour_id inner join themes on theme_tour.tour_id = themes.tour_id inner join category on theme_tour.category = category.category_id inner join hotel_type on hotel_type.tour_id = theme_tour.tour_id left join travel_date on travel_date.tour_id = theme_tour.tour_id
//      where v_country_name = '$s_id' and theme_tour.status = 'active' ";

//  $gt = " group by tour_title,theme_tour.tour_id,tour_code,flight_special,tour_special,days,nights,current_rate,specifications,package_highlights,tour_category";

//  $fr = $mt.$ft.$gt;
//     $details = DB::select($fr);
//    }  

//    if($status != 'international' and $status != 'india-tour-packages'){

//    $mt =  "SELECT tour_title,theme_tour.tour_id,tour_code,flight_special,tour_special,days,nights,current_rate,specifications,package_highlights,tour_category from theme_tour inner join themes on theme_tour.tour_id = themes.tour_id inner join category on theme_tour.category = category.category_id inner join hotel_type on hotel_type.tour_id = theme_tour.tour_id left join travel_date on travel_date.tour_id = theme_tour.tour_id
//      where theme_tour.status = 'active' ";

//  $gt = " group by tour_title,theme_tour.tour_id,tour_code,flight_special,tour_special,days,nights,current_rate,specifications,package_highlights,tour_category";

//  $fr = $mt.$ft.$gt;
//     $details = DB::select($fr);
//    }

// $data = ([
//   'details' => $details,
//   'status' => $status,
//   's_id' => $s_id,
//   'theme_name' => $theme_name_search,
//   'type_name' => $type_name_search,
//   'place' => $place,
//   'budget' => "",
//   'd_city' => $d_city_search,
//   'month' => $month_search

// ]);
// // echo $fr;

//    return view('tour_detail')->with($data);

}
}