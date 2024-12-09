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
use Razorpay\Api\Api;
use DateTime;


class loginController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

       public function login_process(Request $request){ 
        
        $date = Carbon::now()->toDateTimeString();
        $user = $request->input('user');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $country = $request->input('country');  
        $state = $request->input('state'); 
        $city = $request->input('city');  
        $pincode = $request->input('pincode'); 
        $password = $request->input('password');
        $gender = $request->input('gender');  
        $comments = $request->input('comments');  
        
        $image= env('DEFAULT_LOGO');
        $fb= env('DEFAULT_FB');
        $twitter= env('DEFAULT_TWI');
        $instagram= env('DEFAULT_INS');
        $youtube= env('DEFAULT_YOU');
        $mail_img = env('DEFAULT_SLIDE');
        $bg_img = env('DEFAULT_BACK');

        define("RECAPTCHA_V3_SECRET_KEY", '6LcEt6MZAAAAAEewixV8MeCMm3FHsgo2HeUkinCL');
        $token = $request->input('token');
        $action = $request->input('action');
        // $token = $_POST['token'];
        // $action = $_POST['action'];

  // call curl to POST request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $arrResponse = json_decode($response, true);
    
    //echo $response."<br/>";
    //echo "success : ". $arrResponse["success"] ." <br/> action : ". $arrResponse["action"] . " <br/> score : ". $arrResponse["score"];
    //exit;
    
      if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) 
      {

        DB::table('users')->insert(['first_name' => $first_name,'last_name' => $last_name,'email' => $email,'phone' => $phone,'address' => $address,'country' => $country,'state' => $state,'city' => $city,'pincode' => $pincode,'password' => MD5($password),'gender' => $gender,'comments' => $comments,'type' => $user,'created_at' =>$date ]);
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
        $mail->setFrom($user_name_detail, 'Login Details');
        $mail->addAddress($email); 
        $mail->AddCC($receiver_address);
        $mail->addBCC("suresh@binaryclouds.in");    
        //$mail->addBCC("prabhu@binaryclouds.in");
        $mail->isHTML(true);                                  
        $mail->Subject = 'XPS Battery Store - Login Details';
        $mail->Body    = '<html><head><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet"></head><body>
        <div style="color: #000 !important;text-align: center;margin: 0% auto 0px auto;width: 500px;padding: 50px;"><h2 style="text-align: left;margin: 0;font-family:\'Poppins\', sans-serif;font-size: 23px;font-weight:100;color:#006f3b;padding: 15px;background: #fff url('.$bg_img.') top -370px right -190px no-repeat;background-size: 1000px 1000px;"><img src='.$image.' width="150" border=0 style="vertical-align:middle;"></h2><img src='.$mail_img.' border=0 style="width: 100%;"><br/>
        <div style="background: #e9edeb;padding: 10px;">
        <p style="font-family:\'Nunito Sans\', sans-serif;font-size: 15px;line-height: 25px;text-align: left;">Dear <span style="color:#ed1c24;font-weight:600"> '.$first_name.' '.$last_name.'</span>, <br/> Thank you for Registering  Xps Batteries, Your Registration Successfully and Login details given below.</p>

        <p style="font-family: \'Nunito Sans\', sans-serif;font-size: 15px;;text-align:left;">Username : '.$email.'</p>

        <p style="font-family: \'Nunito Sans\', sans-serif;font-size: 15px;text-align:left;">Password : '.$password.'</p>

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
              return redirect('login-and-register')->with('success', '');
            }
    return redirect('login-and-register')->with('success3', '');
}

public function user_login_process(Request $request){
  $email = $request->input('email');
  $password = $request->input('password');

$detail = DB::table('users')->where('email',$email)->where('password',md5($password))->where('type','user')->get();

$count = DB::table('users')->where('email',$email)->where('password',md5($password))->where('type','user')->get()->count();

if($count > 0){
  foreach($detail as $value){
        $id = $value->id;
      }

    Session::put('id',$id);
    $value = (Session::get('pagename'));
    if($value  ==1)
      return redirect('checkout');
    else
      return redirect('personal-information');
      Session::put('pagename',0);
}
else{
  return redirect('login-and-register')->with('success2', '');

}

}


public function user_forgetpassword(Request $request){
  $email = $request->input('email');

$count = DB::table('users')->where('email',$email)->where('type','user')->get()->count();
$detail = DB::table('users')->where('email',$email)->where('type','user')->get();

$image= env('DEFAULT_LOGO');
        $fb= env('DEFAULT_FB');
        $twitter= env('DEFAULT_TWI');
        $instagram= env('DEFAULT_INS');
        $youtube= env('DEFAULT_YOU');
        $mail_img = env('DEFAULT_SLIDE');
        $bg_img = env('DEFAULT_BACK'); 


if($count > 0){
  foreach($detail as $value){
    $smtp_db = DB::table('smtp')->get();
$randompassword= rand(10000000,100000000);
    foreach($smtp_db as $items){
      $host_detail = $items->host;
      $user_name_detail = $items->user_name;
      $password_detail = $items->password;
      $smtp_secure_detail = $items->smtp_secure;
      $port_details = $items->port;
      $receiver_address = $items->receiver_address;
    }

    DB::table('users')->where('email',$email)->update(['password' => md5($randompassword)]);

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

    $mail->setFrom($user_name_detail, 'Forget Password');
    $mail->addAddress($email); 
    //$mail->AddCC($receiver_address);    
    $mail->isHTML(true);                                  
    $mail->Subject = 'XPS Battery Store - Forget Password';
    $mail->Body    = '<html><head><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet"></head><body>
        <div style="color: #000 !important;text-align: center;margin: 0% auto 0px auto;width: 500px;padding: 50px;"><h2 style="text-align: left;margin: 0;font-family:\'Poppins\', sans-serif;font-size: 23px;font-weight:100;color:#006f3b;padding: 15px;background: #fff url('.$bg_img.') top -370px right -190px no-repeat;background-size: 1000px 1000px;"><img src='.$image.' width="150" border=0 style="vertical-align:middle;"></h2><img src='.$mail_img.' border=0 style="width: 100%;"><br/>
        <div style="background: #e9edeb;padding: 10px;">
        <p style="font-family:\'Nunito Sans\', sans-serif;font-size: 15px;line-height: 25px;text-align: left;">Dear <span style="color:#ed1c24;font-weight:600">'.$value->first_name.' '.$value->last_name.'</span>, <br/> Your password is given below.</p>

        <p style="font-family:\'Nunito Sans\', sans-serif;font-size: 15px;line-height: 25px;text-align: left;">Username :  '.$email.'</p>
        <p style="font-family:\'Nunito Sans\', sans-serif;font-size: 15px;line-height: 25px;text-align: left;">Password :  '.$randompassword.'</p>

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
      }
      return redirect('send_password');
}
else{
?>
<script type="text/javascript">
 alert('Incorrect Email ID. Please try again');
  window.location.href='login-and-register';
</script>
<?php
}

}

public function logout(Request $request){
  $request->session()->flush();
    return redirect('login-and-register');

 }

  public function update_profile(Request $request){
  $firstname = $request->input('firstname');
  $lastname = $request->input('lastname');
  $email = $request->input('email');
  $phone = $request->input('phone');
  $country = $request->input('country');
  $state = $request->input('state');
  $city = $request->input('city');
  $pincode = $request->input('pincode');
  $gender = $request->input('gender');
  $address = $request->input('address');


  DB::table('users')->where('id',Session::get('id'))->update([
    'first_name' => $firstname,
    'last_name' => $lastname,
    'email' => $email,
    'phone' => $phone,
    'country' => $country,
    'state' => $state,
    'city' => $city,
    'pincode' => $pincode,
    'gender' => $gender,
    'address' => $address
  ]);
     return redirect('personal-information')->with('success', 'Profile Updated Successfully');
 }

 public function change_password(Request $request){
  $old_password = $request->input('old_password');
  $new_password = $request->input('new_password');
  $userid = $request->input('userid');
  $confirm_password = $request->input('confirm_password');


   $old_count = DB::table('users')
   ->where('password',md5($old_password))
   ->where('id',Session::get('id'))
   ->get()
   ->count();

    if($old_count <= 0){
       return redirect()->back()->withErrors(['old_password' => 'Old Password Missmatch']);
    }

    $this->validate($request, [
     
    'new_password' => 'required_with:confirm_password|same:confirm_password',

    ]);

    DB::table('users')
    ->where('password',md5($old_password))
    ->where('id',Session::get('id'))->update(['password' => md5($new_password)]);

 //DB::table('users')->where('password',$old_password)->where('id',Session::get('id'))->update(['password' => md5($password)]);
//  DB::table('users')->where('id',$userid)->update(['password' => md5($new_password)]);

// echo md5($password);

    return redirect()->back()->with('success', 'Password changed Successfully');
 

}

public function address_process(Request $request){
  $userid = $request->input('userid');
  $name = $request->input("name");
  $phone = $request->input("phone");
  $pincode = $request->input("pincode");
  $locality = $request->input("locality");
  $address = $request->input("address");
  $city = $request->input("city");
  $landmark = $request->input("landmark");
  $alt_number = $request->input("alt_number");
  $created_at = Carbon::now()->toDateTimeString();
  
  DB::table('customer_address')->insert(['cus_id' => $userid,'name' => $name,'mobile' => $phone,'pincode' => $pincode, 'locality' => $locality, 'address' => $address, 'city' => $city, 'landmark' => $landmark, 'alternate_number' => $alt_number,'status' => 'Active','created_at' => $created_at]);
    
  return redirect()->back()->with('success', 'Created Address Successfully');

}


public function add_orderdetails(Request $request){
  $cart = session()->get('cart');
  $total = 0;
  foreach($cart as $id => $details) {
    $total += $details['price'] * $details['quantity'];
  }

  $generate_id =  rand(1000,9999);
  //echo $generate_id;
  //exit;


  $userid = session()->get('id');
  $name = $request->input("CustomerName");
  $phone = $request->input("MobileNo");
  $pincode = $request->input("Pincode");
  $locality = $request->input("Locality");
  $address = $request->input("Address");
  $city = $request->input("City");
  $landmark = $request->input("Landmark");
  $alt_number = $request->input("AlternateNo");
  $addressid = $request->input("addressid");
  $created_at = Carbon::now()->toDateTimeString();
  $order_at = Carbon::now()->toDateString();
  
  if (strlen($addressid) <=0){
  DB::table('customer_address')->insert(['cus_id' => $userid,'name' => $name,'mobile' => $phone,'pincode' => $pincode, 'locality' => $locality, 'address' => $address, 'city' => $city, 'landmark' => $landmark, 'alternate_number' => $alt_number,'status' => 'Active','created_at' => $created_at]);
  $addressid =DB::getPdo()->lastInsertId();
}
  
 DB::table('ordermaster')->insert(['UserID' => $userid,'ShippingID' => $addressid,'CustomerName' => $name,
 'Address' => $address,'MobileNo' => $phone,'Pincode' => $pincode, 'Locality' => $locality,'Landmark' => $landmark,
 'City' => $city, 'AlternateNo' => $alt_number, 'PaymentMode' => 'RAZORPAY','PaymentStatus' => 'Pending',
 'TotalAmount'=>$total,'OrderStatus'=>'Pending', 'Order_Date'=>$order_at, 'Delivery_Date'=>$order_at, 
 'Created_Date' => $created_at,'Modified_Date' => $created_at,'ReferenceNo' => 'NONE','OrderNo'=>'14','generate_id'=> $generate_id]);
 $orderid =DB::getPdo()->lastInsertId();

         foreach($cart as $id => $details) {
            $productID=$details['productid'];
            $quantity=$details['quantity'];
            $originalrate=$details['originalrate'];
            $rate=$details['price'];
            $scrabamount=$details['scrabamount'];
            $discount=$details['discount'];
            $subtotal=($details['price'] * $details['quantity']) - $details['scrabamount'];
            DB::table('ordertrans')->insert(['OrderID' => $orderid,'Status'=>'Pending','ProductID' => $productID,
            'Quantity' => $quantity,'Rate' => $rate, 'ScrabAmount' => $scrabamount,'Subtotal'=>$subtotal,
             'DiscountPercent' => $discount, 'OnlinePrice' => $originalrate]);

             if(isset($cart[$productID])) {

              unset($cart[$productID]);

              session()->put('cart', $cart);
          }
         }

         foreach($cart as $key => $n ) {
  
        //print "The name is ".$n." and email is ".$email[$key].", thank you\n";

          $count = $count + 1; 

          if($count % 2 == 0)
              $CartList .= "<tr style='background-color: #dddddd;'>";
          else
              $CartList .= "<tr>";

          $CartList .= "<td style='padding: 8px;text-align: center;'>".$cart[$key]."</td>";
          $CartList .= "<td style='padding: 8px;text-align: center;'>".$ProductModelNo[$key]."</td>";
          $CartList .= "<td style='padding: 8px;text-align: center;'><img src='".$ProductImage[$key]."' title='' style='width:150px' /></td>";
          $CartList .= "<td style='padding: 8px;text-align: center;'>".$quantity[$key]."</td>";
          $CartList .= "<td style='padding: 8px;text-align: center;'>".$rate[$key]."</td>";
          $CartList .= "<td style='padding: 8px;text-align: center;'>".$subtotal[$key]."</td></tr>";

          $TotalAmount = $TotalAmount + ((int)($quantity[$key]) * (int)($ProductPrice[$key]));

      }

        $image= env('DEFAULT_LOGO');
        $fb= env('DEFAULT_FB');
        $twitter= env('DEFAULT_TWI');
        $instagram= env('DEFAULT_INS');
        $youtube= env('DEFAULT_YOU');
        $mail_img = env('DEFAULT_SLIDE');
        $bg_img = env('DEFAULT_BACK');
        $link = env('DEFAULT_LINK');
     

         $userdata =DB::table('users') ->where('id',session()->get('id')) ->get();
      
          foreach($userdata as $iuser){
            $emailid = $iuser->email;
            $first_name = $iuser->first_name;
            $last_name = $iuser->last_name;
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

// To user
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
        $mail->setFrom($user_name_detail, 'Checkout Details');
        $mail->addAddress($emailid); 
        $mail->AddCC($receiver_address);
        $mail->AddCC("thaieeb.b4u@gmail.com");
        $mail->addBCC("suresh@binaryclouds.in");  
        //$mail->addBCC("prabhu@binaryclouds.in");   
        $mail->isHTML(true);                                  
        $mail->Subject = 'XPS Battery Store - Checkout';
    $mail->Body    = '<html><head><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet"></head><body>
        <div style="color: #000 !important;text-align: center;margin: 0% auto 0px auto;width: 500px;padding: 50px;"><h2 style="text-align: left;margin: 0;font-family:\'Poppins\', sans-serif;font-size: 23px;font-weight:100;color:#006f3b;padding: 15px;background: #fff url('.$bg_img.') top -370px right -190px no-repeat;background-size: 1000px 1000px;"><img src='.$image.' width="150" border=0 style="vertical-align:middle;"></h2><img src='.$mail_img.' border=0 style="width: 100%;"><br/>
        <div style="background: #e9edeb;padding: 10px;">
        <p style="font-family:\'Nunito Sans\', sans-serif;font-size: 15px;line-height: 25px;text-align: left;">Dear <span style="color:#ed1c24;font-weight:600">'.$first_name.' '.$last_name.'</span>, <br/> Your order details given below.</p>

        <table style="width:100%;">
            <tr style="border: 1px solid #ddd;background-color: #006f3b;color: #ffffff;">
              <th style="padding: 8px;width: 10%;">S.No</th>
              <th style="padding: 8px;width: 30%;">Product</th>
              <th style="padding: 8px;width: 20%;">Image</th>
              <th style="padding: 8px;width: 10%;">Quantity</th>
              <th style="padding: 8px;width: 10%;">Price</th>
              <th style="padding: 8px;width: 20%;">Subtotal</th>
            </tr>';
            $sno=0; $itotal=0;
             $productdetails = DB::table('ordertrans')
                              ->join('productmaster', 'productmaster.ProductID', '=', 'ordertrans.ProductID')
                              ->where('OrderID',$orderid)->get();
                    foreach($productdetails as $iproduct){
                       
                  $sno++;   
                  $itotal=$itotal+$iproduct->Subtotal;
            $mail->Body.= '<tr>
              <td style="border: 1px solid #ddd;padding: 8px;">'.$sno.'</td>
              <td style="border: 1px solid #ddd;padding: 8px;">'.$iproduct->ProductModelNo.'</td>
              <td style="border: 1px solid #ddd;padding: 8px;"><img src="'.$link.'/'.$iproduct->image.'" width="100" /></td>
              <td style="border: 1px solid #ddd;padding: 8px;">'.$iproduct->Quantity.'</td>
              <td style="border: 1px solid #ddd;padding: 8px;">'.$iproduct->Rate.'</td>
              <td style="border: 1px solid #ddd;padding: 8px;">'.$iproduct->Subtotal.'</td>
            </tr>';
             }
             $mail->Body.='<tr>
            <td style="border: 1px solid #ddd;padding: 8px;text-align: right;" colspan="5">Total</td>
            <td style="border: 1px solid #ddd;padding: 8px;">'.$itotal.'</td>
            </tr>
          </table><br/>

        <div style="border-radius: 0;padding: 6px;color: #fff;font-size: 1.1em;line-height: 2.0;background: #ed1c24;width: 160px;margin:auto;border-radius: 30px;font-family: \'Nunito Sans\',sans-serif;"><a href="https://xpsbatterystore.com/login-and-register" style="color: #fff;text-decoration: unset;">Click here Login</a></div><br/>
        </div>

        <table style="margin:auto">
        <tr>
        <td style="padding: 8px;"><img src='.$fb.' width="25" border="0"></td>
        <td style="padding: 8px;"><img src='.$twitter.' width="25" border="0"></td>
        <td style="padding: 8px;"><img src='.$instagram.' width="30" border="0"></td>
        <td style="padding: 8px;"><img src='.$youtube.' width="25" border="0"></td>
      </tr>
        </table>
        <p style="text-align:center;font-size:13px;font-family:\'Nunito Sans\',sans-serif;">&copy; 2022 XPSBatteryStore.</p>
        <p style="text-align:center;font-size:12px;font-family:\'Nunito Sans\',sans-serif;">This is automatic mail, Please don\'t reply to this mail</p>
        <p style="text-align: center;font-size:12px;font-family:\'Nunito Sans\',sans-serif">If you want to cancel this order, Please check this <a style="color:#ed1c24;font-weight: 600;" href="https://xpsbatterystore.com/cancelorder&id='.$generate_id.'">link</a></p>
        <p style="text-align: center;font-size:12px;font-family:\'Nunito Sans\',sans-serif;color: #ed1c24;">Note : Cancellation available 24hrs only from the order placed</p>

        </div></body></html>';
    
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
if(!$mail->Send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
  exit;
}

        

//          $userdata =DB::table('users') ->where('ID',session()->get('id')) ->get();
      
//           foreach($userdata as $iuser){
//             $emailid = $iuser->email;
//           }

//           $smtp_db = DB::table('smtp')->get();

//         foreach($smtp_db as $items){
//           $host_detail = $items->host;
//           $user_name_detail = $items->user_name;
//           $password_detail = $items->password;
//           $smtp_secure_detail = $items->smtp_secure;
//           $port_details = $items->port;
//           $receiver_address = $items->receiver_address;
//         }

// // To user
//         $mail = new PHPMailer(true);
//         $mail->SMTPDebug = 0;                                       
//         $mail->isSMTP();                                            
//         $mail->Host       = $host_detail; 
//         $mail->SMTPAuth   = true;                                 
//         $mail->Username   =  $user_name_detail;                   
//         $mail->Password   = $password_detail;                             
//         $mail->SMTPSecure = $smtp_secure_detail;                                  
//         $mail->Port       = $port_details;                                   
    
       
//         // $mail->setFrom($receiver_address, 'Bookings Successfull');
//         $mail->setFrom($user_name_detail, 'Contact Details');
//         $mail->addAddress($emailid); 
//         $mail->AddCC($receiver_address);    
//         $mail->isHTML(true);                                  
//         $mail->Subject = 'Xpsbatterystore - Contact Details';
//         $mail->Body    = '<table style="border: 1px solid #ddd;"><tr style="border: 1px solid #ddd;background-color:#155f91;color:#ffffff;"><th style="padding: 8px;width: 10%;">S.No</th><th style="padding: 8px;width: 30%;">Name</th><th style="padding: 8px;width: 10%;">Quantity</th><th style="padding: 8px;width: 10%;">Price</th><th style="padding: 8px;width: 20%;">Subtotal</th></tr>';
//         $mail->Body    .= '<tr><td style="padding: 8px;text-align: center;">Total</td><td style="padding: 8px;text-align: center;">'.$ProductModelNo.'</td><td style="padding: 8px;text-align: center;">'.$quantity.'</td><td style="padding: 8px;text-align: center;">'.$quantity.'</td><td style="padding: 8px;text-align: center;">'.$rate.'</td></tr><tr><td style="padding: 8px;text-align: right;" colspan="5">Total</td><td style="padding: 8px;text-align: center;">'.$subtotal.'</td></tr></table><br>Regards,<br><h4 style="background: unset;">Xpsbatterystore.<h4>';

// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
// if(!$mail->Send()) {
//   echo 'Message could not be sent.';
//   echo 'Mailer Error: ' . $mail->ErrorInfo;
//   exit;
// }
     // return view("front_end.testimonials");
        //  return response()->json(array('success' => true));
        // return redirect('order-confirm');
        // $get_final_total_amount = DB::table('ordertrans')->where('orderID',$orderid)->sum('Subtotal');
        // $this->online_payment($get_final_total_amount,$request->input('razorpay_payment_id'));
        $input = $request->all();        
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        // print_r($payment);
        // die;
        if(count($input)  && !empty($input['razorpay_payment_id'])) 
        {
            try 
            {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
                // print_r($response);
                // die;
                if($response['status'] == 'captured')
                {
                  $update_order_details = DB::table('ordermaster')->where('orderID',$orderid)->update(['PaymentStatus' => $response['status'], 'ReferenceNo' => $response['id'], 'TransactionDate' => $response['created_at'] ]);

                  return redirect('order-confirm')->with(['success' => "Payment Successfull", 'total' => $payment['amount']/100, 'status' => "Paid", 'referenceno' => $response['id']]);
                }
                else
                {
                  $update_order_details = DB::table('ordermaster')->where('orderID',$orderid)->update(['PaymentStatus' => $response['status'], 'ReferenceNo' => $response['id'], 'TransactionDate' => $response['created_at'] ]);

                  return redirect('order-confirm')->with(['error' => "Payment Un Successfull", 'total' => $payment['amount'], 'status' => $response['status'], 'referenceno' => $response['id']]);

                }
                
            } 
            catch (\Exception $e) 
            {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                //return redirect()->back();
            }            
        }
        
        // \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        // return redirect()->back();
}

public function get_address(Request $request){
  $id = $request->input('id');  

  $product = DB::table('customer_address')->where('customer_address.id',$id)->get();
  return response()->json(array('success' => true, 'data' =>  $product));
}


  public function update_address(Request $request){
  $userid = $request->input('address_id');
  $name = $request->input("name");
  $phone = $request->input("phone");
  $pincode = $request->input("pincode");
  $locality = $request->input("locality");
  $address = $request->input("address");
  $city = $request->input("city");
  $landmark = $request->input("landmark");
  $alt_number = $request->input("alt_number");


  DB::table('customer_address')->where('customer_address.id',$userid) ->update([
    'name' => $name,
    'mobile' => $phone,
    'pincode' => $pincode,
    'locality' => $locality,
    'address' => $address,
    'city' => $city,
    'landmark' => $landmark,
    'alternate_number' => $alt_number
  ]);
     return redirect('manage-addresses')->with('success', 'Address Updated Successfully');
 }

 //  public function del_address(Request $request){
 //    DB::table('customer_address')->where('id',Session::get('id'))->update([
 //    'status' => 'Inactive'
 //  ]);
 //     return redirect('manage-addresses')->with('success', 'Address Deleted');
 // }

public function edit_manage_addresses($id){
$details =  DB::table('customer_address')->where('customer_address.id',$id)->get();
  
  return view('front_end.edit-manage-addresses',['details' => $details]);
}

public function del_address($id){
$details =  DB::table('customer_address')->where('customer_address.id',$id) ->update([
    'status' => 'Inactive'
  ]);
  
  return redirect('manage-addresses')->with('success', 'Address Deleted Successfully');
  //return view('front_end.manage-addresses',['details' => $details]);
}


public function shop($id){
$details =  DB::table('productmaster')->where('productmaster.ProductID',$id)->get();
  
  return view('front_end.shop',['details' => $details]);
}

public function authenticate(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
        // Authentication passed...
        return redirect()->intended('dashboard');
    }
}

public function cancelorder($generate_id)
{
  $autoid =  $generate_id;
  //echo $autoid;

    $details_order = DB::table('ordermaster')->where('generate_id',$autoid)->first();

    //echo $details_order;
    $datetime_1 = $details_order->Created_Date; 
    $datetime_2 = now(); 

    $start_datetime = new DateTime($datetime_1); 
    $diff = $start_datetime->diff(new DateTime($datetime_2)); 

    // echo $diff->days.' Days total<br>'; 
    // echo $diff->y.' Years<br>'; 
    // echo $diff->m.' Months<br>'; 
    // echo $diff->d.' Days<br>'; 
    // echo $diff->h.' Hours<br>'; 
    // echo $diff->i.' Minutes<br>'; 
    // echo $diff->s.' Seconds<br>';
    $hours = $diff->h;
    // echo $hours;
    // exit;

    if($hours <= 24){

      $details_order = DB::table('ordermaster')->where('generate_id',$generate_id)->update(['OrderStatus' => 'Cancelled']);
      
      return view('front_end.cancelorder',['details_order' => $details_order,'hours' => $hours]);
    }
    else{
      //echo "Cancel";
      
      return view('front_end.cancelorder',['details_order' => $details_order,'hours' => $hours]);
    }
}
  public function order_refund_process(Request $request){
    $order_id = $request->order_id;
    $get_payment_id = DB::table('ordermaster')->where('OrderID',$order_id)->first();
    
    $payment_id = $get_payment_id->ReferenceNo;

    $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

    $payment = $api->payment->fetch($payment_id)->refund();

    // print_r($payment);
    $id = $payment['id'];
    $payment_id = $payment['payment_id'];
    $status = $payment['status'];

    $refund_update = DB::table('ordermaster')->where('OrderId',$order_id)->update([ "refund_referenceno" => $payment_id, "refund_id" =>$id, "refund_status" =>$status]);
    
    if($refund_update == true) {
      return redirect('admin-orders')->with('success', 'Refund Processed Successfully'); 
    }
    else {
      return redirect('admin-orders')->with('error', 'Refund Not Processed Successfully'); 
    }
  }
}
