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


class registerController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function testimonial_cus(Request $request){ 
        
        $date = Carbon::now()->toDateTimeString();
        $name = $request->input('name');
        $Company_name = $request->input('Company_name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
         $Content = $request->input('Content');

         $customer_photo=array();
    if($files=$request->file('customer_photo')){
    foreach($files as $file){
    $image_path= date('mdYHis') . uniqid() . $file->getClientOriginalName();
    $file->move('image', $image_path);
    $customer_photo[]=$image_path;       

        DB::table('testimonial')->insert(['name' => $name,'email' => $email,'mobile' => $mobile,'Company_name' => $Company_name,'content' => $Content,'image' => $image_path,'status' =>'Active','type' =>'customer','created_at' =>$date ]);
      }
    }
     // return view("front_end.testimonials");
        return redirect('testimonials')->with('success', 'Testimonial Register Successfully');
}


public function franchise_enquiry(Request $request){ 
   // function generate_uuid() {
   //          return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
   //              mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
   //              mt_rand( 0, 0xffff ),
   //              mt_rand( 0, 0x0C2f ) | 0x4000,
   //              mt_rand( 0, 0x3fff ) | 0x8000,
   //              mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
   //          );      
   //        }   
   //        $franchise_doc ="";
   //        $idd = generate_uuid();
   //        if(move_uploaded_file($_FILES["file_upload"]["tmp_name"], "image/franchise_doc/" . $idd.".".pathinfo($_FILES["file_upload"]["name"], PATHINFO_EXTENSION))){
   //              $franchise_doc = "image/franchise_doc/" . $idd.".".pathinfo($_FILES["file_upload"]["name"], PATHINFO_EXTENSION);       
   //        }
        
        $date = Carbon::now()->toDateTimeString();
        $title = $request->input('title');
        $name = $request->input('name');
        $email = $request->input('email');
         $mobile = $request->input('mobile');
        $address = $request->input('address'); 
        $location = $request->input('franchise_locations');  
         //$franchise_locations = $request->input('franchise_locations');   

        // $file = rand(1000,100000)."-".$_FILES['file_upload']['name'];
        // $file_loc = $_FILES['file_upload']['tmp_name'];
        // $file_size = $_FILES['file_upload']['size'];
        // $file_type = $_FILES['file_upload']['type'];
        // $allowedExts = array("pdf", "doc");
        // $temp = explode(".", $_FILES["file_upload"]["name"]);
        // $extension = end($temp);
        // if (($_FILES["file_upload"]["type"] == "application/pdf")
        // || ($_FILES["file_upload"]["type"] == "application/doc")
        // && ($_FILES["file_upload"]["size"] < 200000)
        // && in_array($extension, $allowedExts))
        //   {
        //   if ($_FILES["file_upload"]["error"] > 0)
        //     {
        //     echo "Return Code: " . $_FILES["file_upload"]["error"] . "<br>";
        //     }}
        //  $folder="image/franchise_doc/"; 

        // move_uploaded_file($file_loc,$folder.$file);

        DB::table('tbl_franchiseenquiry')->insert(['type' => $title,'name' => $name,'mobile' => $mobile,'email' => $email,'address' => $address,'documents' => '','location' => $location,'created_date' =>$date ]);
        //INSERT INTO `tbl_franchiseenquiry`(`e_id`, `title`, `name`, `email`, `address`, `documents`, `location`, `created_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

     // return view("front_end.testimonials");
        ?>
<script type="text/javascript">
  alert("Enquiry Submitted");
  window.location.href="franchise";
</script>
<?php
}

public function delete_franchise($id)
    {
        $del = DB::table('tbl_franchiseenquiry')->where('enquiry_id', $id)->get();

        DB::table('tbl_franchiseenquiry')->where('enquiry_id',$id)->delete();

        return redirect('franchise_enquiry')->with('success2', 'Franchise Deleted Successfully'); 
    }

public function send_enquiry(Request $request){ 
        
        $date = Carbon::now()->toDateTimeString();
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $msg = $request->input('msg');     

        DB::table('send_enquiry')->insert(['name' => $name,'email' => $email,'mobile' => $phone,'message' => $msg,'created_date' =>$date ]);

     // return view("front_end.testimonials");
        ?>
<script type="text/javascript">
  alert("Enquiry Details Submitted");
  window.location.href="/";
</script>
<?php
}

public function delete_enquiry($id)
    {
        $del = DB::table('send_enquiry')->where('id', $id)->get();

        DB::table('send_enquiry')->where('id',$id)->delete();

        return redirect('send_enquiry')->with('success', 'Enquiry Deleted Successfully'); 
    }

public function contact_enquiry(Request $request){ 
        
        $date = Carbon::now()->toDateTimeString();
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $msg = $request->input('msg');  

        $image= env('DEFAULT_LOGO');
        $fb= env('DEFAULT_FB');
        $twitter= env('DEFAULT_TWI');
        $instagram= env('DEFAULT_INS');
        $youtube= env('DEFAULT_YOU');
        $mail_img = env('DEFAULT_SLIDE');
        $bg_img = env('DEFAULT_BACK');   

        DB::table('contact_enquiry')->insert(['name' => $name,'email' => $email,'phone_no' => $phone,'subject' => $subject,'message' => $msg,'created_date' =>$date ]);
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
    
       
        // $mail->setFrom($receiver_address, 'Bookings Successfull');
        $mail->setFrom($user_name_detail, 'Contact Details');
        $mail->addAddress($email); 
        $mail->AddCC($receiver_address);    
        $mail->isHTML(true);                                  
        $mail->Subject = 'Xps Battery Store - Contact Details';
        $mail->Body    = '<html><head><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet"></head><body>
        <div style="color: #000 !important;text-align: center;margin: 0% auto 0px auto;width: 500px;padding: 50px;"><h2 style="text-align: left;margin: 0;font-family:\'Poppins\', sans-serif;font-size: 23px;font-weight:100;color:#006f3b;padding: 15px;background: #fff url('.$bg_img.') top -370px right -190px no-repeat;background-size: 1000px 1000px;"><img src='.$image.' width="150" border=0 style="vertical-align:middle;"></h2><img src='.$mail_img.' border=0 style="width: 100%;"><br/>
        <div style="background: #e9edeb;padding: 10px;">
        <p style="font-family:\'Nunito Sans\', sans-serif;font-size: 15px;line-height: 25px;text-align: center;">Thank you for Contacting  Xps Batteries,Our team will contact you shortly.</p>

        <div style="border-radius: 0;padding: 6px;color: #fff;font-size: 1.1em;line-height: 2.0;background: #ed1c24;width: 160px;margin:auto;border-radius: 30px;font-family: \'Nunito Sans\',sans-serif;"><a href="https://demo.xpsbatterystore.com/login-and-register" style="color: #fff;text-decoration: unset;">Click here Login</a></div><br/>
        </div>
        <table style="margin:auto">
        <tr>
        <td style="padding: 8px;"><img src='.$fb.' width="25" border="0"></td>
        <td style="padding: 8px;"><img src='.$twitter.' width="25" border="0"></td>
        <td style="padding: 8px;"><img src='.$instagram.' width="30" border="0"></td>
        <td style="padding: 8px;"><img src='.$youtube.' width="25" border="0"></td>
      </tr>
        </table>
        <p style="text-align:center;font-size:13px;font-family:\'Nunito Sans\',sans-serif;">&copy; 2021 XPSBatteryStore.</p>
        <p style="text-align:center;font-size:12px;font-family:\'Nunito Sans\',sans-serif;">This is automatic mail, Please don\'t reply to this mail</p>
        </div></body></html>';
    
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
if(!$mail->Send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
  exit;
}
     // return view("front_end.testimonials");
 return redirect('contact')->with('success', 'Thank you for Contacting, We will contact you shortly.');
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
          $career_proof="";
          $idd = generate_uuid();
          // if(move_uploaded_file($_FILES["career"]["tmp_name"], "image/career_doc/" . $idd.".".pathinfo($_FILES["career"]["name"], PATHINFO_EXTENSION))){
          //       $career_proof = "image/career_doc/" . $idd.".".pathinfo($_FILES["career"]["name"], PATHINFO_EXTENSION);       
          // }
          if(move_uploaded_file($_FILES["career"]["tmp_name"], "image/career_doc/" .$_FILES["career"]["name"]))
          {
            $career_proof= "image/career_doc/" . $_FILES["career"]["name"];
          }
          
      //client id creation start
        $First_Name = $request->input('First_Name');
        $Last_Name = $request->input('Last_Name');
        $email = $request->input('email');
        $phone = $request->input('phone');
         $State = $request->input('State'); 
         $Key_Function = $request->input('Key_Function'); 
         $Address = $request->input('Address'); 
         $Comments = $request->input('Comments');      
        // $todayDate = date("d-m-Y");

        $image= env('DEFAULT_LOGO');
        $fb= env('DEFAULT_FB');
        $twitter= env('DEFAULT_TWI');
        $instagram= env('DEFAULT_INS');
        $youtube= env('DEFAULT_YOU');
        $mail_img = env('DEFAULT_SLIDE');
        $bg_img = env('DEFAULT_BACK');

        $care = DB::table('career')->insert(['first_name' => $First_Name,'last_name' => $Last_Name,'email' => $email,'phone' => $phone,'state' => $State,'key_function' => $Key_Function,'career_doc' => $career_proof,'address' => $Address,'comments' => $Comments,'created_date' => now() ]);

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
    
       
        // $mail->setFrom($receiver_address, 'Bookings Successfull');
        $mail->setFrom($user_name_detail, 'Career Details');
        $mail->addAddress($email); 
        $mail->AddCC($receiver_address);    
        $mail->isHTML(true);                                  
        $mail->Subject = 'XPS Battery Store - Career Details';
        $mail->Body    = '<html><head><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet"></head><body>
        <div style="color: #000 !important;text-align: center;margin: 0% auto 0px auto;width: 500px;padding: 50px;"><h2 style="text-align: left;margin: 0;font-family:\'Poppins\', sans-serif;font-size: 23px;font-weight:100;color:#006f3b;padding: 15px;background: #fff url('.$bg_img.') top -370px right -190px no-repeat;background-size: 1000px 1000px;"><img src='.$image.' width="150" border=0 style="vertical-align:middle;"></h2><img src='.$mail_img.' border=0 style="width: 100%;"><br/>
        <div style="background: #e9edeb;padding: 10px;">
        <p style="font-family:\'Nunito Sans\', sans-serif;font-size: 15px;line-height: 25px;text-align: center;">Thank you for Registering  Xps Batteries,Our team will contact you shortly.</p>

        <div style="border-radius: 0;padding: 6px;color: #fff;font-size: 1.1em;line-height: 2.0;background: #ed1c24;width: 160px;margin:auto;border-radius: 30px;font-family: \'Nunito Sans\',sans-serif;"><a href="https://demo.xpsbatterystore.com/login-and-register" style="color: #fff;text-decoration: unset;">Click here Login</a></div><br/>
        </div>
        <table style="margin:auto">
        <tr>
        <td style="padding: 8px;"><img src='.$fb.' width="25" border="0"></td>
        <td style="padding: 8px;"><img src='.$twitter.' width="25" border="0"></td>
        <td style="padding: 8px;"><img src='.$instagram.' width="30" border="0"></td>
        <td style="padding: 8px;"><img src='.$youtube.' width="25" border="0"></td>
      </tr>
        </table>
        <p style="text-align:center;font-size:13px;font-family:\'Nunito Sans\',sans-serif;">&copy; 2021 XPSBatteryStore.</p>
        <p style="text-align:center;font-size:12px;font-family:\'Nunito Sans\',sans-serif;">This is automatic mail, Please don\'t reply to this mail</p>
        </div></body></html>';
    
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->Send()) {
  
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
     


//$mail->setFrom($receiver_address, 'New Booking Registered');
$mail->setFrom($user_name_detail, 'Career Details');
$mail->addAddress($email); 
$mail->AddCC($receiver_address);    
$mail->isHTML(true);                                 
$mail->Subject = 'Xpsbatterystore - Career Details';
$mail->Body    = "<html><head><link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet'><style>table {border-collapse: collapse;width: 600px;font-family: 'PT Sans Narrow', sans-serif;color: #fff;font-weight: 300;font-size: 15px;}td, th {border: 1px solid #969696;text-align: left;padding: 8px;color:#000000;} th{background-color:#006f3b;text-align: center;color:#ffffff;text-transform:uppercase;font-size: 14px;}</style></head><body><table cellpadding='0' cellspacing='0'><tr><th colspan='2'>Career Details</th></tr><tr>";
        $mail->Body    .= "<td>First Name</td><td>".$First_Name."</td></tr>
        <tr><td>Last Name</td><td>" . $Last_Name . "</td></tr>
        <tr><td>Email</td><td>" . $email . "</td></tr>
        <tr><td>Mobile Number</td><td>" . $phone . "</td></tr>
        <tr><td>State</td><td>" . $State . "</td></tr>
        <tr><td>Key Function</td><td>" . $Key_Function . "</td></tr>
        <tr><td>Address</td><td>" . $Address . "</td></tr>
        <tr><td>Comments</td><td>" . $Comments . "</td></tr>";

$mail->Body    .= "</table><h3>Regards, <br> Xpsbatterystore Team</h3></body></html>";

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}
}

 // return view('front_end.career');
//echo  $career_proof;
    return redirect('career')->with('success', 'Career Register Successfully');

    
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

public function update_status($id)
{
    DB::table('ordertrans')->where('OrderTransID', $id)->update(['Status' => 'Delivered', 'DeliveryDate'=>now()]);
return redirect('admin-orders')->with('success', 'Status Updated Successfully'); 
}
public function update_mapping(Request $request)
{
        $cat_id = $request->input('cat_id');
        $pro_id = $request->input('pro_id');
        $brandname = $request->input('brandname');
        $modelname = $request->input('modelname');
        $petrol = $request->input('petrol');
        $diesel = $request->input('diesel'); 

  $count = DB::table('tbl_mapping')->where('brandname',$brandname)->where('pro_id',$pro_id)->where('modelname',$modelname)->get()->count();

  if($count > 0){
    DB::table('tbl_mapping')->where('brandname',$brandname)->where('pro_id',$pro_id)->where('modelname',$modelname)->update(['cat_id' => $cat_id,'is_petrol' =>$petrol,'is_disel' =>$diesel]);
  }
else{
    DB::table('tbl_mapping')->insert(['cat_id' => $cat_id,'pro_id' => $pro_id,'brandname' => $brandname,'modelname' => $modelname,'is_petrol' =>$petrol,'is_disel' =>$diesel]);
  }
    return response()->json(["success" => true]);

//return redirect('product_details')->with('success', 'Product Mapping Successfully'); 

//INSERT INTO `tbl_mapping`(`map_id`, `cat_id`, `pro_id`, `brandname`, `modelname`, `is_petrol`, `is_disel`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
}
    
public function getmappingdata(Request $request)
{
  $pro_id = $request->input('pro_id');
  $details=DB::table('tbl_mapping')
  ->join('tbl_vehiclemodel', 'tbl_vehiclemodel.m_id', '=', 'tbl_mapping.modelname')
  ->join('tbl_vehiclebrand', 'tbl_vehiclebrand.v_id', '=', 'tbl_mapping.brandname')
  ->where('tbl_mapping.pro_id',$pro_id)
  ->get();

  return response()->json(["success" => true, "data" => $details]);

}
 

}
