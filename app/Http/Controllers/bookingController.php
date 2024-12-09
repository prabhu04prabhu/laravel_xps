<?php

namespace App\Http\Controllers;
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

class bookingController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function bookings(Request $request){

        $current_date = Carbon::now()->toDateTimeString();
        $boarding_point = $request->input('city');
        $booking_type = $request->input('booking_type');
        $car_type = $request->input('car_type');
        $user_type = $request->input('user_type');

        DB::table('booking')->insert(['boarding_point' => $boarding_point, 'booking_type' => $booking_type, 'car_type' => $car_type, 'created_at' => $current_date, 'user_type' => $user_type]);

        $get_info = DB::table('booking')->get();
        foreach ($get_info as $row) {
          $id = $row->booking_id;
        }

        return redirect()->to('booking?id='.$id.'&type='.$user_type.'');

    }

    public function bookings_update(Request $request){

       
        $current_date = Carbon::now()->toDateTimeString();
        $fname = $request->input('fname');
        $email = $request->input('email');
        $mobile_number = $request->input('mobile_number');
        $boarding_point = $request->input('boarding_point');
        $destination_point = $request->input('destination_point');
        $boarding_address = $request->input('boarding_address');
        $destination_address = $request->input('destination_address');
        $booking_type = $request->input('booking_type');
        $car_type = $request->input('car_type');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $start_time = $request->input('start_time');
        $end_time = $request->input('end_time');
        $space = " ";
        $trip_start =  $start_date.''.$space.''.$start_time;
        $trip_end =  $end_date.''.$space.''.$end_time;
        $fair = $request->input('fair');

        $emergency = $request->input('emergency_checkbox');
        $emergency_reason = $request->input('emergency_reason');
        
        $todayDate = date("d-m-Y");
    
        $bytes = random_bytes(7);
        $transaction_number = bin2hex($bytes);

        $hidden_id = $request->input('hidden_id');

        $bookingGet = DB::table('booking')->Orderby('booking_number', 'desc')->limit(1)->get(['booking_number']);
      
            foreach($bookingGet as $ids){
                $last = $ids->booking_number;
            }
            if(empty($last)){
                $newLeadNo = 'BN00001';
            }
            if(!empty($last)){
            $number = substr($last, 5);
            $newLeadNo = 'BN'. sprintf('%05d', intval($number) + 1);
            }
        // admin email address
        
        DB::table('booking')->where('booking_id', $hidden_id)->update(['fname' => $fname,
        'email' => $email,
        'mobile_number' => $mobile_number,
        'boarding_point' => $boarding_point,
        'destination_point' => $destination_point,
        'boarding_address' => $boarding_address,
        'destination_address' => $destination_address,
        'booking_type' => $booking_type,
        'car_type' => $car_type,
        'trip_start' => $trip_start,
        'trip_end' => $trip_end,
        'fair' => $fair,
        'transaction_number' => $transaction_number,       
        'updated_at' => $current_date,
        'booking_number' => $newLeadNo,
        'emergency' => $emergency,
        'emergency_reason' => $emergency_reason
        ]);

        
        $smtp_db = DB::table('smtp')->get();

        foreach($smtp_db as $items){
          $host_detail = $items->host;
          $user_name_detail = $items->user_name;
          $password_detail = $items->password;
          $smtp_secure_detail = $items->smtp_secure;
          $port_details = $items->port;
          $receiver_address = $items->receiver_address;
        }
//To user
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;                                       
        $mail->isSMTP();                                            
        $mail->Host       = $host_detail; 
        $mail->SMTPAuth   = true;                                 
        $mail->Username   =  $user_name_detail;                   
        $mail->Password   = $password_detail;                             
        $mail->SMTPSecure = $smtp_secure_detail;                                  
        $mail->Port       = $port_details;                                   
    
       
        $mail->setFrom($receiver_address, 'Bookings Successfull');
        $mail->addAddress($email);     
        $mail->isHTML(true);                                 
        $mail->Subject = 'DriveEver - DriveEver - Bookings Successfull';
        $mail->Body    = "<html><head><link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet'><style>table {border-collapse: collapse;width: 600px;font-family: 'PT Sans Narrow', sans-serif;color: #fff;font-weight: 300;font-size: 15px;}td, th {border: 1px solid #969696;text-align: left;padding: 8px;color:#000000;} th{background-color:#17A2B8;text-align: center;color:#ffffff;text-transform:uppercase;font-size: 14px;}</style></head><body><table cellpadding='0' cellspacing='0'><tr><th colspan='2'>Booking Details</th></tr><tr>";
        $mail->Body    .= "<td>Name</td><td>".$fname."</td></tr>
        <tr><td>Email</td><td>" . $email . "</td></tr>
        <tr><td>Mobile Number</td><td>" . $mobile_number . "</td></tr>
        <tr><td>Boarding Point</td><td>" . $boarding_point . "</td></tr>
        <tr><td>Desitination Point</td><td>" . $destination_point . "</td></tr>
        <tr><td>Boarding Address</td><td>" . $boarding_address . "</td></tr>
        <tr><td>Desitination Address</td><td>" . $destination_address . "</td></tr>
        <tr><td>Booking Type</td><td>" . $booking_type . "</td></tr>
        <tr><td>Car Type</td><td>" . $car_type . "</td></tr>
        <tr><td>Fair</td><td>" . $fair . "</td></tr>";

        $mail->Body    .= "</table><h3>Regards, <br> DriveEver Team</h3></body></html>";

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
if(!$mail->Send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
  exit;
}

//To admin

$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;                                       
$mail->isSMTP();                                            
$mail->Host       = $host_detail; 
$mail->SMTPAuth   = true;                                 
$mail->Username   =  $user_name_detail;                   
$mail->Password   = $password_detail;                             
$mail->SMTPSecure = $smtp_secure_detail;                                  
$mail->Port       = $port_details;    
     


$mail->setFrom($receiver_address, 'New Booking Registered');
$mail->addAddress($receiver_address);     
$mail->isHTML(true);                                 
$mail->Subject = 'DriveEver - New Booking Registered';
$mail->Body    = "<html><head><link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet'><style>table {border-collapse: collapse;width: 600px;font-family: 'PT Sans Narrow', sans-serif;color: #fff;font-weight: 300;font-size: 15px;}td, th {border: 1px solid #969696;text-align: left;padding: 8px;color:#000000;} th{background-color:#17A2B8;text-align: center;color:#ffffff;text-transform:uppercase;font-size: 14px;}</style></head><body><table cellpadding='0' cellspacing='0'><tr><th colspan='2'>Booking Details</th></tr><tr>";
$mail->Body    .= "<td>Name</td><td>".$fname."</td></tr>
<tr><td>Email</td><td>" . $email . "</td></tr>
<tr><td>Mobile Number</td><td>" . $mobile_number . "</td></tr>
<tr><td>Boarding Point</td><td>" . $boarding_point . "</td></tr>
<tr><td>Desitination Point</td><td>" . $destination_point . "</td></tr>
<tr><td>Boarding Address</td><td>" . $boarding_address . "</td></tr>
<tr><td>Desitination Address</td><td>" . $destination_address . "</td></tr>
<tr><td>Booking Type</td><td>" . $booking_type . "</td></tr>
<tr><td>Car Type</td><td>" . $car_type . "</td></tr>
<tr><td>Fair</td><td>" . $fair . "</td></tr>";

$mail->Body    .= "</table><h3>Regards, <br> DriveEver Team</h3></body></html>";

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}

 return view('front_end.offline_payment');

?>

<?php

    }

    public function confirm_bookings_function (Request $request){

       
      $current_date = Carbon::now()->toDateTimeString();
      $fname = $request->input('fname');
      $email = $request->input('email');
      $mobile_number = $request->input('mobile_number');
      $boarding_point = $request->input('boarding_point');
      $destination_point = $request->input('destination_point');
      $boarding_address = $request->input('boarding_address');
      $destination_address = $request->input('destination_address');
      $booking_type = $request->input('booking_type');
      $car_type = $request->input('car_type');
     
      $trip_start =  $request->input('start_date_time');
      $trip_end =  $request->input('end_date_time');
      $fair = $request->input('fair');
      
      
      $hidden_id = $request->input('hidden_id');

      $getDetails = DB::table('booking')->where('booking_number', $hidden_id)->get();

      foreach ($getDetails as $value) {
        $transaction_number = $value->transaction_number;
      }
      // admin email address
        
      $smtp_db = DB::table('smtp')->get();

      foreach($smtp_db as $items){
        $host_detail = $items->host;
        $user_name_detail = $items->user_name;
        $password_detail = $items->password;
        $smtp_secure_detail = $items->smtp_secure;
        $port_details = $items->port;
      }
//To user
//         $mail = new PHPMailer(true);
//         $mail->SMTPDebug = 0;                                       
//         $mail->isSMTP();                                            
//         $mail->Host       = $host_detail; 
//         $mail->SMTPAuth   = true;                                 
//         $mail->Username   =  $user_name_detail;                   
//         $mail->Password   = $password_detail;                             
//         $mail->SMTPSecure = $smtp_secure_detail;                                  
//         $mail->Port       = $port_details;                                   
  
     
//         $mail->setFrom('testfromdevelopment@gmail.com', 'Bookings Successfull');
//         $mail->addAddress($email);     
//         $mail->isHTML(true);                                 
//         $mail->Subject = 'DriveEver - DriveEver - Bookings Successfull';
//         $mail->Body    = "<html><head><link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet'><style>table {border-collapse: collapse;width: 600px;font-family: 'PT Sans Narrow', sans-serif;color: #fff;font-weight: 300;font-size: 15px;}td, th {border: 1px solid #969696;text-align: left;padding: 8px;color:#000000;} th{background-color:#17A2B8;text-align: center;color:#ffffff;text-transform:uppercase;font-size: 14px;}</style></head><body><table cellpadding='0' cellspacing='0'><tr><th colspan='2'>Booking Details</th></tr><tr>";
//         $mail->Body    .= "<td>Name</td><td>".$fname."</td></tr>
//         <tr><td>Email</td><td>" . $email . "</td></tr>
//         <tr><td>Mobile Number</td><td>" . $mobile_number . "</td></tr>
//         <tr><td>Boarding Point</td><td>" . $boarding_point . "</td></tr>
//         <tr><td>Desitination Point</td><td>" . $destination_point . "</td></tr>
//         <tr><td>Boarding Address</td><td>" . $boarding_address . "</td></tr>
//         <tr><td>Desitination Address</td><td>" . $destination_address . "</td></tr>
//         <tr><td>Booking Type</td><td>" . $booking_type . "</td></tr>
//         <tr><td>Car Type</td><td>" . $car_type . "</td></tr>
//         <tr><td>Fair</td><td>" . $fair . "</td></tr>";

//         $mail->Body    .= "</table><h3>Regards, <br> DriveEver Team</h3></body></html>";

// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->Send()) {
//   echo 'Message could not be sent.';
//   echo 'Mailer Error: ' . $mail->ErrorInfo;
//   exit;
// }

//To admin

// $mail = new PHPMailer(true);
// $mail->SMTPDebug = 0;                                       
// $mail->isSMTP();                                            
// $mail->Host       = $host_detail; 
// $mail->SMTPAuth   = true;                                 
// $mail->Username   =  $user_name_detail;                   
// $mail->Password   = $password_detail;                             
// $mail->SMTPSecure = $smtp_secure_detail;                                  
// $mail->Port       = $port_details;         


// $mail->setFrom('testfromdevelopment@gmail.com', 'Bookings Successfull');
// $mail->addAddress($user_name_detail);     
// $mail->isHTML(true);                                 
// $mail->Subject = 'DriveEver - DriveEver - Bookings Successfull';
// $mail->Body    = "<html><head><link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet'><style>table {border-collapse: collapse;width: 600px;font-family: 'PT Sans Narrow', sans-serif;color: #fff;font-weight: 300;font-size: 15px;}td, th {border: 1px solid #969696;text-align: left;padding: 8px;color:#000000;} th{background-color:#17A2B8;text-align: center;color:#ffffff;text-transform:uppercase;font-size: 14px;}</style></head><body><table cellpadding='0' cellspacing='0'><tr><th colspan='2'>Booking Details</th></tr><tr>";
// $mail->Body    .= "<td>Name</td><td>".$fname."</td></tr>
// <tr><td>Email</td><td>" . $email . "</td></tr>
// <tr><td>Mobile Number</td><td>" . $mobile_number . "</td></tr>
// <tr><td>Boarding Point</td><td>" . $boarding_point . "</td></tr>
// <tr><td>Desitination Point</td><td>" . $destination_point . "</td></tr>
// <tr><td>Boarding Address</td><td>" . $boarding_address . "</td></tr>
// <tr><td>Desitination Address</td><td>" . $destination_address . "</td></tr>
// <tr><td>Booking Type</td><td>" . $booking_type . "</td></tr>
// <tr><td>Car Type</td><td>" . $car_type . "</td></tr>
// <tr><td>Fair</td><td>" . $fair . "</td></tr>";

// $mail->Body    .= "</table><h3>Regards, <br> DriveEver Team</h3></body></html>";

// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->Send()) {
// echo 'Message could not be sent.';
// echo 'Mailer Error: ' . $mail->ErrorInfo;
// exit;
// }

$value = $fair;
$onlyNumeric = filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$fairValue = ltrim($onlyNumeric, '.');

// dd($fairValue);

$hundred = '100';
$amount = $fairValue * $hundred;

$data = array(
'transaction_id'=> $transaction_number,
'amount'=> $amount,
);
  return view('front_end.bookings-payment')->with($data);

?>

<?php

  }

    public function delete_booking($id)
    {
      DB::table('booking')->where('booking_id',$id)->delete();
      return redirect()->back()->with('success2', 'Bookings Deleted Successfully'); 
    }

    public function booking_response (Request $request){
       return view('meTrnSuccess2');
    }
    
    public function booking_status(Request $request){
        $date = Carbon::now()->toDateTimeString();
        $txnRefNo = $request->input('txnRefNo');
        $orderID = $request->input('orderID');
        $statusCode = $request->input('statusCode');
        $statusDesc = $request->input('statusDesc');
        $txnReqDate = $request->input('txnReqDate');
        $txnamount = $request->input('amount');
        $responseCode = $request->input('responseCode');
        $bankRefNumber = $request->input('bankRefNumber');
        $authZStatus = $request->input('authZStatus');
        $amount = $txnamount / 100;

        if ($orderID == "") {
          return view('front_end.index');
         } else {

        DB::table('booking_trans')->insert(['txn_reference_no' => $txnRefNo, 'amount' => $amount, 'transaction_id' => $orderID, 'status_code' => $statusCode, 'status_desc' => $statusDesc, 'txn_req_date' => $txnReqDate, 'response_code' => $responseCode, 'bank_ref_number' => $bankRefNumber, 'authz_status' => $authZStatus, 'created_at' => $date ]);
      
        DB::table('booking')->where('transaction_number', $orderID)->update(['payment' => $statusCode]);

        DB::table('confirm_bookings')->where('transaction_number', $orderID)->update(['status' => $statusCode]);

        $getCustomerDetails = DB::table('booking')->where('booking.transaction_number', $orderID)->join('booking_trans', 'booking.transaction_number', '=', 'booking_trans.transaction_id')->get();

        foreach ($getCustomerDetails as $details) {
          $client_name = $details->fname;
          $mobile_number = $details->mobile_number;
          $email = $details->email;
          $boarding_point = $details->boarding_point;
          $destination_point = $details->destination_point;
          $boarding_address = $details->boarding_address;
          $destination_address = $details->destination_address;
          $booking_type = $details->booking_type;
          $trip_end = $details->trip_end;
          $trip_start = $details->trip_start;
          $fair = $details->fair;
          $user_type = strtoupper($details->user_type);
          $transaction_number = $details->transaction_id;
          $status_code = $details->status_code;
        }

        $smtp_db = DB::table('smtp')->get();

        foreach($smtp_db as $items){
          $host_detail = $items->host;
          $user_name_detail = $items->user_name;
          $password_detail = $items->password;
          $smtp_secure_detail = $items->smtp_secure;
          $port_details = $items->port;
          $receiver_address = $items->receiver_address;
        }

        $todayDate = date("d-m-Y");

  $mail = new PHPMailer(true);
  $mail->SMTPDebug = 0;                                       
  $mail->isSMTP();                                            
  $mail->Host       = $host_detail; 
  $mail->SMTPAuth   = true;                                 
  $mail->Username   =  $user_name_detail;                   
  $mail->Password   = $password_detail;                             
  $mail->SMTPSecure = $smtp_secure_detail;                                  
  $mail->Port       = $port_details;                                   

 
  
  if ($statusCode != 'F') {
    $mail->setFrom($receiver_address, 'Customer Registration Successful');
  $mail->addAddress($email); 
  $mail->AddCC($receiver_address);    
  $mail->isHTML(true);                                 
  $mail->Subject = 'DriveEver - DriveEver - Bookings Successfull';
    $mail->Body    = '<html>
  <body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">

    <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:20px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px #ffcc01;border-bottom: solid 10px #ffcc01;">
    
      <thead>
        <tr>
          <th style="text-align:left;position:relative !important;bottom:79px !important"><img style="max-width: 150px;" src="https://www.driveever.in/assets/front_end/images/logo.png" alt="Drive Ever"></th>
          <th style="text-align:right;font-weight:400;">'.$todayDate.'</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="height:35px;"></td>
        </tr>
        <tr>
          <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Registration status</span><b style="color:green;font-weight:normal;margin:0">Success</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> '.$orderID.'</p>
            <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> '.$fair.'.00</p>
            
          </td>
        </tr>
        <tr>
          <td style="height:35px;"></td>
        </tr>
        <tr>
          <td style="width:50%;padding:20px;vertical-align:top">
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Name</span> '.$client_name.'</p>
           
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Phone</span> +91-'.$mobile_number.'</p>
          </td>
          <td style="width:50%;padding:20px;vertical-align:top">
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Email</span> '.$email.'</p>
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">User Type</span> '.$user_type.'</p>
          </td>
        </tr>
       
        <tr>
        <td style="width:50%;padding:20px;vertical-align:top">
        <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Boarding Point</span> '.$boarding_point.'</p>
       
        <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Destination Point</span> '.$destination_point.'</p>
      </td>
      <td style="width:50%;padding:20px;vertical-align:top">
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Boarding Address</span> '.$boarding_address.'</p>
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Destination Address</span> '.$destination_address.'</p>
          </td>
        </tr>
      </tbody>
      <tfooter>
        <tr>
          <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
            <strong style="display:block;margin:0 0 10px 0;">Regards</strong> DriveEver <br> M/s Iconic Architects, Shakthi Apartments, Ground Floor Chinuswamy Nagar, Seelanayakanpatti, Salem-201<br><br>
            <b>Phone:</b> +91-95669 70755, 90922 44488<br>
        <b>Email:</b> sdrivever@gmail.com<br>
        <b>Booking queries:</b> bookings@driveever.in<br>
        <b>For More Info:</b> info@driveever.in<br>
        <b>Home Page:</b> www.driveever.in
          </td>
        </tr>
      </tfooter>
    </table>

  </body>
  
  </html>';
  } else {
    $mail->setFrom($receiver_address, 'Customer Registration Failed');
  $mail->addAddress($email); 
  $mail->AddCC($receiver_address);    
  $mail->isHTML(true);                                 
  $mail->Subject = 'DriveEver - DriveEver - Bookings Failed';
    $mail->Body    = '<html>
    <body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
  
      <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:20px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px #ffcc01;border-bottom: solid 10px #ffcc01;">
      
        <thead>
          <tr>
            <th style="text-align:left;position:relative !important;bottom:79px !important"><img style="max-width: 150px;" src="https://www.driveever.in/assets/front_end/images/logo.png" alt="Drive Ever"></th>
            <th style="text-align:right;font-weight:400;">'.$todayDate.'</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="height:35px;"></td>
          </tr>
          <tr>
            <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
              <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Registration status</span><b style="color:red;font-weight:normal;margin:0">Failed</b></p>
              <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> '.$orderID.'</p>
              <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> '.$fair.'.00</p>
              
            </td>
          </tr>
          <tr>
            <td style="height:35px;"></td>
          </tr>
          <tr>
            <td style="width:50%;padding:20px;vertical-align:top">
              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Name</span> '.$client_name.'</p>
             
              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Phone</span> +91-'.$mobile_number.'</p>
            </td>
            <td style="width:50%;padding:20px;vertical-align:top">
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Email</span> '.$email.'</p>
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">User Type</span> '.$user_type.'</p>
            </td>
          </tr>
         
          <tr>
          <td style="width:50%;padding:20px;vertical-align:top">
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Boarding Point</span> '.$boarding_point.'</p>
         
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Destination Point</span>'.$destination_point.'</p>
        </td>
        <td style="width:50%;padding:20px;vertical-align:top">
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Boarding Address</span> '.$boarding_address.'</p>
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Destination Address</span> '.$destination_address.'</p>
            </td>
          </tr>
        </tbody>
        <tfooter>
          <tr>
            <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
              <strong style="display:block;margin:0 0 10px 0;">Regards</strong> DriveEver <br> M/s Iconic Architects, Shakthi Apartments, Ground Floor Chinuswamy Nagar, Seelanayakanpatti, Salem-201<br><br>
              <b>Phone:</b> +91-95669 70755, 90922 44488<br>
              <b>Email:</b> sdrivever@gmail.com<br>
              <b>Booking queries:</b> bookings@driveever.in<br>
              <b>For More Info:</b> info@driveever.in<br>
              <b>Home Page:</b> www.driveever.in
            </td>
          </tr>
        </tfooter>
      </table>
  
    </body>
    
    </html>';
  }
  
  

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}

        $data = array(
            'txnRefNo'=> $txnRefNo,
            'amount'=> $amount,
            'orderID'=> $orderID,
            'statusCode'=> $statusCode,
            'statusDesc'=> $statusDesc,
            );
        return view('payment-status')->with($data); 
          }
  }

  public function get_booking_number(Request $request)
  {
    $booking_number = $request->input('booking_number');
    $get = DB::table('booking')->where('booking_number', $booking_number)->get();

    foreach ($get as $value) {
      $booking_type = $value->booking_type;
    }

    if (!empty($booking_type)) {
        
      $getTariff = DB::table('tariff')->where('type', $booking_type)->get();
      return ['tariff' => $getTariff,
              'booking_details' => $get];
    } else {
      return ['tariff' => '0',
              'booking_details' => '0'];
    }

  }

}
