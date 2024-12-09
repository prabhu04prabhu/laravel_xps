<?php

namespace App\Http\Controllers;
// namespace App\Payment;

// use App\Paymnet\AWLMEAPI;

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

class registerController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(Request $request){

      
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
          if(move_uploaded_file($_FILES["document_photo"]["tmp_name"], "image/customer_documents/" . $idd.".".pathinfo($_FILES["document_photo"]["name"], PATHINFO_EXTENSION))){
                $document_photo_file = "image/customer_documents/" . $idd.".".pathinfo($_FILES["document_photo"]["name"], PATHINFO_EXTENSION);
          
          }

          $idd1 = generate_uuid();
      if(move_uploaded_file($_FILES["customer_photo"]["tmp_name"], "image/customer_documents/" . $idd1.".".pathinfo($_FILES["customer_photo"]["name"], PATHINFO_EXTENSION))){
            $customer_photo_file = "image/customer_documents/" . $idd1.".".pathinfo($_FILES["customer_photo"]["name"], PATHINFO_EXTENSION);
      
      }
    
      $idd2 = generate_uuid();
      if(move_uploaded_file($_FILES["vehicle_photo"]["tmp_name"], "image/customer_documents/" . $idd2.".".pathinfo($_FILES["vehicle_photo"]["name"], PATHINFO_EXTENSION))){
            $vehicle_photo_file = "image/customer_documents/" . $idd2.".".pathinfo($_FILES["vehicle_photo"]["name"], PATHINFO_EXTENSION);
      
      }

      
      $idd3 = generate_uuid();
      if(move_uploaded_file($_FILES["insurance_photo"]["tmp_name"], "image/customer_documents/" . $idd3.".".pathinfo($_FILES["insurance_photo"]["name"], PATHINFO_EXTENSION))){
            $insurance_photo_file = "image/customer_documents/" . $idd3.".".pathinfo($_FILES["insurance_photo"]["name"], PATHINFO_EXTENSION);
      
      }


      //client id creation start
   
        $lastorderId = DB::table('customer_registration')->Orderby('reg_id', 'desc')->limit(1)->get(['reg_id']);
      
        foreach($lastorderId as $ids){
            $last = $ids->reg_id;
        }
        if(empty($last)){
            $newOrderId = 'CUS001';
        }
        if(!empty($last)){
        $newOrderId = 'CUS' . str_pad($last + 1, 3, 0, STR_PAD_LEFT);
        }

    
        //client id create end

        $date = Carbon::now()->toDateTimeString();
        $client_id = $newOrderId;
        $client_name = $request->input('client_name');
        $dob = $request->input('dob');
        $blood_group = $request->input('blood_group');
        $aadhar_no = $request->input('aadhar_no');
        $occupation = $request->input('occupation');
        $permanent_address = $request->input('permanent_address');
        $present_address = $request->input('present_address');
        $reference = $request->input('reference');
        $vehicle_reg_no = $request->input('vehicle_reg_no');
        $make = $request->input('make');
        $model = $request->input('model');
        $fuel = $request->input('fuel');
        // $colour = $request->input('colour');
        $insurance_status = $request->input('insurance_status');
        $email =  $request->input('email');
        $mobile_number =  $request->input('mobile_number');
        $car_transmission = $request->input('car_transmission');      
   
        $todayDate = date("d-m-Y");
    
        $bytes = random_bytes(7);
        $transaction_number = bin2hex($bytes);

        DB::table('customer_registration')->insert(['client_id' => $client_id,'client_name' => $client_name,'email' => $email,'mobile_number' => $mobile_number,'dob' => $dob,'blood_group' => $blood_group,'aadhar_no' => $aadhar_no,'occupation' => $occupation, 'permanent_address' => $permanent_address, 'present_address' => $present_address, 'reference' => $reference,'vehicle_reg_no' => $vehicle_reg_no, 'make' => $make, 'model' => $model, 'fuel' => $fuel, 'car_transmission' => $car_transmission,    'customer_photo' => $customer_photo_file, 'document_photo' => $document_photo_file, 'vehicle_photo' => $vehicle_photo_file,   'insurance_photo' => $insurance_photo_file, 'insurance_status' => $insurance_status, 'created_at' => $date, 'transaction_id' => $transaction_number ]);

      
 

$amount = 1500000;

$data = array(
  'transaction_id'=> $transaction_number,
  'amount'=> $amount,
  );
    return view('front_end.payment')->with($data);

    }

    public function testimonial_cus(Request $request){ 
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
          if(move_uploaded_file($_FILES["customer_photo"]["tmp_name"], "image/customer_testimonial/" . $idd.".".pathinfo($_FILES["customer_photo"]["name"], PATHINFO_EXTENSION))){
                $document_photo_file = "image/customer_testimonial/" . $idd.".".pathinfo($_FILES["customer_photo"]["name"], PATHINFO_EXTENSION);       
          }
      //client id creation start
        $name = $request->input('name');
        $Company_name = $request->input('Company_name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
         $Content = $request->input('Content');       
        $todayDate = date("d-m-Y");
        DB::table('testimonial_cus')->insert(['name' => $name,'email' => $email,'mobile' => $mobile,'Company_name' => $Company_name,'Content' => $Content,'customer_photo' => $document_photo_file,'created_date' => now() ]);
     // return view("front_end.testimonials");
        ?>
<script type="text/javascript">
  alert("Testimonial Register Successfully");
  window.location.href="testimonials";
</script>
<?php
}

public function career_process(Request $request){ 
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
          if(move_uploaded_file($_FILES["resume"]["tmp_name"], "image/career_resumes/" . $idd.".".pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION))){
                $resume_proof = "image/career_resumes/" . $idd.".".pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION);       
          }
          
      //client id creation start
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email_id = $request->input('email_id');
        $contact_number = $request->input('contact_number');
         $dob = $request->input('date_of_birth'); 
         $current_location = $request->input('current_location');      
        $todayDate = date("d-m-Y");
        DB::table('career')->insert(['first_name' => $first_name,'last_name' => $last_name,'email_id' => $email_id,'contact_number' => $contact_number,'dob' => $dob,'current_location' => $current_location,'resume' => $resume_proof,'created_date' => now() ]);
     // return view("front_end.testimonials");
        ?>
<script type="text/javascript">
  alert("Career Register Successfully");
  window.location.href="career";
</script>
<?php
}
    public function delete_info($id)
    {
      
       $del = DB::table('customer_registration')->where('reg_id',$id)->get();

       foreach($del as $row){
            $document_photo = $row->document_photo;
            $customer_photo = $row->customer_photo;
            $vehicle_photo = $row->vehicle_photo;
            $insurance_photo = $row->insurance_photo;
           
        }
         $image_path1 = $document_photo;
         $image_path2 = $customer_photo;
         $image_path3 = $vehicle_photo;
         $image_path4 = $insurance_photo;
      

         if (file_exists($image_path1)) {
            @unlink($image_path1);
        }
         if (file_exists($image_path2)) {
            @unlink($image_path2);
        }
         if (file_exists($image_path3)) {
            @unlink($image_path3);
        }
         if (file_exists($image_path4)) {
            @unlink($image_path4);
        }
      

        DB::table('customer_registration')->where('reg_id',$id)->delete();

        return redirect()->back()->with('success2', 'Customer Info Deleted Successfully'); 
    }

    public function response(Request $request){
        return view('meTrnSuccess');
    }

    public function status(Request $request){
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
          
        
        
       
        DB::table('customer_registration')->where('transaction_id', $orderID)->update(['txn_reference_no' => $txnRefNo, 'status_code' => $statusCode, 'status_desc' => $statusDesc, 'txn_req_date' => $txnReqDate, 'response_code' => $responseCode, 'bank_ref_number' => $bankRefNumber, 'authz_status' => $authZStatus]);
       
        $getCustomerDetails = DB::table('customer_registration')->where('transaction_id', $orderID)->get();

        foreach ($getCustomerDetails as $details) {
          $client_id = $details->client_id;
          $client_name = $details->client_name;
          $mobile_number = $details->mobile_number;
          $email = $details->email;
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
  $mail->setFrom($receiver_address, 'Transaction Successful');
  $mail->addAddress($email); 
  $mail->AddCC($receiver_address);    
  $mail->isHTML(true);
    $mail->Subject = 'DriveEver - DriveEver - Transaction Successfull';
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
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Transaction status</span><b style="color:green;font-weight:normal;margin:0">Success</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Client ID</span><b style="font-weight:bold;margin:0">'.$client_id.'</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> '.$orderID.'</p>
            <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> Rs. 15000.00</p>
            
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
    $mail->setFrom($receiver_address, 'Transaction Failed');
  $mail->addAddress($email); 
  $mail->AddCC($receiver_address);    
  $mail->isHTML(true);
    $mail->Subject = 'DriveEver - DriveEver - Transaction Failed';
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
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Transaction status</span><b style="color:red;font-weight:normal;margin:0">Failed</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Client ID</span><b style="font-weight:bold;margin:0">'.$client_id.'</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> '.$orderID.'</p>
            <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> Rs. 15000.00</p>
            
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
}
<?php

namespace App\Http\Controllers;
// namespace App\Payment;

// use App\Paymnet\AWLMEAPI;

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

class registerController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(Request $request){

      
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
          if(move_uploaded_file($_FILES["document_photo"]["tmp_name"], "image/customer_documents/" . $idd.".".pathinfo($_FILES["document_photo"]["name"], PATHINFO_EXTENSION))){
                $document_photo_file = "image/customer_documents/" . $idd.".".pathinfo($_FILES["document_photo"]["name"], PATHINFO_EXTENSION);
          
          }

          $idd1 = generate_uuid();
      if(move_uploaded_file($_FILES["customer_photo"]["tmp_name"], "image/customer_documents/" . $idd1.".".pathinfo($_FILES["customer_photo"]["name"], PATHINFO_EXTENSION))){
            $customer_photo_file = "image/customer_documents/" . $idd1.".".pathinfo($_FILES["customer_photo"]["name"], PATHINFO_EXTENSION);
      
      }
    
      $idd2 = generate_uuid();
      if(move_uploaded_file($_FILES["vehicle_photo"]["tmp_name"], "image/customer_documents/" . $idd2.".".pathinfo($_FILES["vehicle_photo"]["name"], PATHINFO_EXTENSION))){
            $vehicle_photo_file = "image/customer_documents/" . $idd2.".".pathinfo($_FILES["vehicle_photo"]["name"], PATHINFO_EXTENSION);
      
      }

      
      $idd3 = generate_uuid();
      if(move_uploaded_file($_FILES["insurance_photo"]["tmp_name"], "image/customer_documents/" . $idd3.".".pathinfo($_FILES["insurance_photo"]["name"], PATHINFO_EXTENSION))){
            $insurance_photo_file = "image/customer_documents/" . $idd3.".".pathinfo($_FILES["insurance_photo"]["name"], PATHINFO_EXTENSION);
      
      }


      //client id creation start
   
        $lastorderId = DB::table('customer_registration')->Orderby('reg_id', 'desc')->limit(1)->get(['reg_id']);
      
        foreach($lastorderId as $ids){
            $last = $ids->reg_id;
        }
        if(empty($last)){
            $newOrderId = 'CUS001';
        }
        if(!empty($last)){
        $newOrderId = 'CUS' . str_pad($last + 1, 3, 0, STR_PAD_LEFT);
        }

    
        //client id create end

        $date = Carbon::now()->toDateTimeString();
        $client_id = $newOrderId;
        $client_name = $request->input('client_name');
        $dob = $request->input('dob');
        $blood_group = $request->input('blood_group');
        $aadhar_no = $request->input('aadhar_no');
        $occupation = $request->input('occupation');
        $permanent_address = $request->input('permanent_address');
        $present_address = $request->input('present_address');
        $reference = $request->input('reference');
        $vehicle_reg_no = $request->input('vehicle_reg_no');
        $make = $request->input('make');
        $model = $request->input('model');
        $fuel = $request->input('fuel');
        // $colour = $request->input('colour');
        $insurance_status = $request->input('insurance_status');
        $email =  $request->input('email');
        $mobile_number =  $request->input('mobile_number');
        $car_transmission = $request->input('car_transmission');      
   
        $todayDate = date("d-m-Y");
    
        $bytes = random_bytes(7);
        $transaction_number = bin2hex($bytes);

        DB::table('customer_registration')->insert(['client_id' => $client_id,'client_name' => $client_name,'email' => $email,'mobile_number' => $mobile_number,'dob' => $dob,'blood_group' => $blood_group,'aadhar_no' => $aadhar_no,'occupation' => $occupation, 'permanent_address' => $permanent_address, 'present_address' => $present_address, 'reference' => $reference,'vehicle_reg_no' => $vehicle_reg_no, 'make' => $make, 'model' => $model, 'fuel' => $fuel, 'car_transmission' => $car_transmission,    'customer_photo' => $customer_photo_file, 'document_photo' => $document_photo_file, 'vehicle_photo' => $vehicle_photo_file,   'insurance_photo' => $insurance_photo_file, 'insurance_status' => $insurance_status, 'created_at' => $date, 'transaction_id' => $transaction_number ]);

      
 

$amount = 1500000;

$data = array(
  'transaction_id'=> $transaction_number,
  'amount'=> $amount,
  );
    return view('front_end.payment')->with($data);

    }

    public function testimonial_cus(Request $request){ 
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
          if(move_uploaded_file($_FILES["customer_photo"]["tmp_name"], "image/customer_testimonial/" . $idd.".".pathinfo($_FILES["customer_photo"]["name"], PATHINFO_EXTENSION))){
                $document_photo_file = "image/customer_testimonial/" . $idd.".".pathinfo($_FILES["customer_photo"]["name"], PATHINFO_EXTENSION);       
          }
      //client id creation start
        $name = $request->input('name');
        $Company_name = $request->input('Company_name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
         $Content = $request->input('Content');       
        $todayDate = date("d-m-Y");
        DB::table('testimonial_cus')->insert(['name' => $name,'email' => $email,'mobile' => $mobile,'Company_name' => $Company_name,'Content' => $Content,'customer_photo' => $document_photo_file,'created_date' => now() ]);
     // return view("front_end.testimonials");
        ?>
<script type="text/javascript">
  alert("Testimonial Register Successfully");
  window.location.href="testimonials";
</script>
<?php
}

public function career_process(Request $request){ 
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
          if(move_uploaded_file($_FILES["resume"]["tmp_name"], "image/career_resumes/" . $idd.".".pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION))){
                $resume_proof = "image/career_resumes/" . $idd.".".pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION);       
          }
          
      //client id creation start
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email_id = $request->input('email_id');
        $contact_number = $request->input('contact_number');
         $dob = $request->input('date_of_birth'); 
         $current_location = $request->input('current_location');      
        $todayDate = date("d-m-Y");
        DB::table('career')->insert(['first_name' => $first_name,'last_name' => $last_name,'email_id' => $email_id,'contact_number' => $contact_number,'dob' => $dob,'current_location' => $current_location,'resume' => $resume_proof,'created_date' => now() ]);
     // return view("front_end.testimonials");
        ?>
<script type="text/javascript">
  alert("Career Register Successfully");
  window.location.href="career";
</script>
<?php
}
    public function delete_info($id)
    {
      
       $del = DB::table('customer_registration')->where('reg_id',$id)->get();

       foreach($del as $row){
            $document_photo = $row->document_photo;
            $customer_photo = $row->customer_photo;
            $vehicle_photo = $row->vehicle_photo;
            $insurance_photo = $row->insurance_photo;
           
        }
         $image_path1 = $document_photo;
         $image_path2 = $customer_photo;
         $image_path3 = $vehicle_photo;
         $image_path4 = $insurance_photo;
      

         if (file_exists($image_path1)) {
            @unlink($image_path1);
        }
         if (file_exists($image_path2)) {
            @unlink($image_path2);
        }
         if (file_exists($image_path3)) {
            @unlink($image_path3);
        }
         if (file_exists($image_path4)) {
            @unlink($image_path4);
        }
      

        DB::table('customer_registration')->where('reg_id',$id)->delete();

        return redirect()->back()->with('success2', 'Customer Info Deleted Successfully'); 
    }

    public function response(Request $request){
        return view('meTrnSuccess');
    }

    public function status(Request $request){
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
          
        
        
       
        DB::table('customer_registration')->where('transaction_id', $orderID)->update(['txn_reference_no' => $txnRefNo, 'status_code' => $statusCode, 'status_desc' => $statusDesc, 'txn_req_date' => $txnReqDate, 'response_code' => $responseCode, 'bank_ref_number' => $bankRefNumber, 'authz_status' => $authZStatus]);
       
        $getCustomerDetails = DB::table('customer_registration')->where('transaction_id', $orderID)->get();

        foreach ($getCustomerDetails as $details) {
          $client_id = $details->client_id;
          $client_name = $details->client_name;
          $mobile_number = $details->mobile_number;
          $email = $details->email;
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
  $mail->setFrom($receiver_address, 'Transaction Successful');
  $mail->addAddress($email); 
  $mail->AddCC($receiver_address);    
  $mail->isHTML(true);
    $mail->Subject = 'DriveEver - DriveEver - Transaction Successfull';
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
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Transaction status</span><b style="color:green;font-weight:normal;margin:0">Success</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Client ID</span><b style="font-weight:bold;margin:0">'.$client_id.'</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> '.$orderID.'</p>
            <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> Rs. 15000.00</p>
            
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
    $mail->setFrom($receiver_address, 'Transaction Failed');
  $mail->addAddress($email); 
  $mail->AddCC($receiver_address);    
  $mail->isHTML(true);
    $mail->Subject = 'DriveEver - DriveEver - Transaction Failed';
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
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Transaction status</span><b style="color:red;font-weight:normal;margin:0">Failed</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Client ID</span><b style="font-weight:bold;margin:0">'.$client_id.'</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> '.$orderID.'</p>
            <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> Rs. 15000.00</p>
            
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
}
