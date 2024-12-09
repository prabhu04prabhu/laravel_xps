<?php

namespace App\Http\Controllers;

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

class enquireController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function enquire(Request $request){

        $date = Carbon::now()->toDateTimeString();
        $name = $request->input('name');
        $company = $request->input('company');
        $email = $request->input('email');
        $phone_no = $request->input('phone_no');
        $message = $request->input('message');
        
       

        DB::table('enquire')->insert(['name' => $name,
        'company' => $company,
        'email' => $email,
        'phone_no' => $phone_no,
        'message' => $message,
        'created_at' => $date,
        ]);

        
// To user
        $smtp_db = DB::table('smtp')->get();

        foreach($smtp_db as $items){
          $host_detail = $items->host;
          $user_name_detail = $items->user_name;
          $password_detail = $items->password;
          $smtp_secure_detail = $items->smtp_secure;
          $port_details = $items->port;
        }

        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;                                       
        $mail->isSMTP();                                            
        $mail->Host       = $host_detail; 
        $mail->SMTPAuth   = true;                                 
        $mail->Username   =  $user_name_detail;                   
        $mail->Password   = $password_detail;                             
        $mail->SMTPSecure = $smtp_secure_detail;                                  
        $mail->Port       = $port_details;                           
    
        //Recipients
        $mail->setFrom('testfromdevelopment@gmail.com', 'DriveEver - FeedBack / Enquire');
        $mail->addAddress($email, $name);     // Add a recipient
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'DriveEver - DriveEver - FeedBack / Enquire';
        $mail->Body    = "<html><head><link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet'><style>table {border-collapse: collapse;width: 600px;font-family: 'PT Sans Narrow', sans-serif;color: #fff;font-weight: 300;font-size: 15px;}td, th {border: 1px solid #969696;text-align: left;padding: 8px;color:#000000;} th{background-color:#17A2B8;text-align: center;color:#ffffff;text-transform:uppercase;font-size: 14px;}</style></head><body><table cellpadding='0' cellspacing='0'><tr><th colspan='2'>Feedback / Enquire</th></tr><tr>";
        $mail->Body    .= "<td>Customer Name</td><td>".$name."</td></tr>
        <tr><td>Company</td><td>" . $company . "</td></tr>
        <tr><td>Email</td><td>" . $email . "</td></tr>
        <tr><td>Phone Number</td><td>" . $phone_no . "</td></tr>
        <tr><td>Message</td><td>" . $message . "</td></tr>";

        $mail->Body    .= "</table><h3>Regards, <br> DriveEver Team</h3></body></html>";

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
if(!$mail->Send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
  exit;
}


return redirect()->back()->with('success', 'Enquiry / Feedback Sent Successfully'); 


    }
}
