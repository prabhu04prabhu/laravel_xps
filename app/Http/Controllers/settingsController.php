<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use Carbon\Carbon;

class settingsController extends Controller
{
    public function smtp(Request $request)
    {
        $date = Carbon::now()->toDateTimeString();
        $host = $request->input('host');
        $user_name = $request->input('user_name');
        $password = $request->input('password');
        $smtp_secure = $request->input('smtp_secure');
        $port = $request->input('port');
        $receiver_mail = $request->input('receiver_address');
      
        DB::table('smtp')->insert(['host' => $host, 'user_name' => $user_name, 'password' => $password, 'smtp_secure' => $smtp_secure, 'port' => $port, 'receiver_address' => $receiver_mail, 'created_at' => $date]);

        return redirect()->back()->with('success', 'SMTP added Successfully');
    }

    public function smtp_edit(Request $request)
    {
        $date = Carbon::now()->toDateTimeString();
        $host = $request->input('host');
        $user_name = $request->input('user_name');
        $password = $request->input('password');
        $smtp_secure = $request->input('smtp_secure');
        $port = $request->input('port');
        $receiver_mail = $request->input('receiver_address');
        $id = $request->input('hiiden_id');
      
        DB::table('smtp')->where('smtp_id', $id)->update(['host' => $host, 'user_name' => $user_name, 'password' => $password, 'smtp_secure' => $smtp_secure, 'port' => $port, 'receiver_address' => $receiver_mail, 'updated_at' => $date]);

        return redirect()->back()->with('success', 'SMTP Updated Successfully');
    }

    public function tariff(Request $request)
    {
        $date = Carbon::now()->toDateTimeString();
        $type = $request->input('type');
        $amount = $request->input('amount');
        $percentage = $request->input('percentage');
        $bata = $request->input('bata');
        $per_hour = $request->input('per_hour');

        $breakfast = $request->input('breakfast');
        $lunch = $request->input('lunch');
        $dinner = $request->input('dinner');
        $food_allowance = $breakfast + $lunch + $dinner;
       
        $per_cal = ($bata * $percentage)/100;
        $total = $amount - $per_cal + $bata + $food_allowance;
        $fare_without_offer = $amount + $bata + $food_allowance;
        DB::table('tariff')->insert(['type' => $type, 'amount' => $amount, 'created_at' => $date, 'bata' => $bata, 'total' => $total, 'percentage' => $percentage, 'per_hour' => $per_hour, 'fare_without_offer' => $fare_without_offer, 'breakfast' => $breakfast, 'lunch' => $lunch, 'dinner' => $dinner, 'total_food_allowance' => $food_allowance]);

        return redirect()->back()->with('success', 'Tariff added Successfully');

    }

    public function tariff_edit(Request $request)
    {
        $date = Carbon::now()->toDateTimeString();
        $type = $request->input('type');
        $amount = $request->input('amount');
        $percentage = $request->input('percentage');
        $bata = $request->input('bata');
        $id =  $request->input('hid');
        $per_hour = $request->input('per_hour');

        $breakfast = $request->input('breakfast');
        $lunch = $request->input('lunch');
        $dinner = $request->input('dinner');
        $food_allowance = $breakfast + $lunch + $dinner;

        $per_cal = ($bata * $percentage)/100;
        $total = $amount - $per_cal + $bata + $food_allowance;
        $fare_without_offer = $amount + $bata + $food_allowance;
        DB::table('tariff')->where('tariff_id', $id)->update(['type' => $type, 'amount' => $amount, 'created_at' => $date, 'bata' => $bata, 'total' => $total, 'percentage' => $percentage, 'per_hour' => $per_hour, 'fare_without_offer' => $fare_without_offer, 'breakfast' => $breakfast, 'lunch' => $lunch, 'dinner' => $dinner, 'total_food_allowance' => $food_allowance]);

        return redirect()->back()->with('success', 'Tariff Updated Successfully');
    }
}