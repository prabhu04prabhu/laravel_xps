<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class vehicleController extends Controller
{
    public function index(){
        $vehicle_list = DB::table('vehicle_list')->groupBy('make')->get(['make']);
        return view('customer-registration')->with('vehicle_list', $vehicle_list);
    }

    public function fetch(Request $request)
    {

        $make = $request->input('make');
        $details = DB::table('vehicle_list')->where('make',$make)->get();
        echo '<option value="">Select Model</option>';
        foreach($details as $row){
      echo '
      <option value="'.$row->model.'">'.$row->model.'</option>
      ';
        }
     }

     public function get_user(Request $request)
     {
       $client_id = $request->input('client_id');

       $get = DB::table('customer_registration')->where('client_id', $client_id)->orWhere('mobile_number', $client_id)->orWhere('email', $client_id)->get();
       return $get;
     }

     public function trial_check(Request $request)
     {
        $mobile_number = $request->input('mobile_number');
        $trial = 'trial';
        // $get_trial = "SELECT * FROM customer_registration where mobile_number = '$mobile_number' and user_type = '$trial'";
        $get_trial = DB::table('booking')->where([['mobile_number','=',$mobile_number],['user_type','=', $trial]])->groupBy('user_type')->count();
        // $get_trial = DB::table('customer_registration')->where('mobile_number', $mobile_number)->get();
        return $get_trial;
     }
}
