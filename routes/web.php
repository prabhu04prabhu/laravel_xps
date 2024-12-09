<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::POST('order_refund_process','loginController@order_refund_process');

Route::get('export_product_data', 'Controller@export')->name('export_product_data');
Route::get('importExportView', 'Controller@importExportView');
Route::post('import_product_data', 'Controller@import')->name('import_product_data');


Route::get('/', function () {
    return view('front_end.index');
});

Route::get('admin', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/personal-information', 'UserController.php@index')->name('personal-information');

// change password
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');


// image upload
Route::get('multipleimage', function () {
    return view('back_end.multipleimage');
});
Route::get('order-confirm', function () {
    return view('front_end.order-confirm');
});


// Route::get('cancelorder', function () {
//     return view('front_end.cancelorder');
// });

Route::get('cancelorder&id={id}','loginController@cancelorder');


Route::get('add_category', function () {
    return view('back_end.add_category');
});
Route::get('add_categorymaster', function () {
    return view('back_end.add_categorymaster');
});

Route::get('uploadedImage', function () {
    return view('back_end.uploadedImage');
});

Route::get('uploadedSlider', function () {
    return view('back_end.uploadedSlider');
});
Route::get('slider_view', function () {
    return view('back_end.slider_view');
});


Route::get('editImage', function () {
    return view('back_end.edit_gallery');
});
Route::get('edit_category', function () {
    return view('back_end.edit_category');
});
Route::get('add_capacitymaster', function () {
    return view('back_end.add_capacitymaster');
});
Route::get('edit_capacitymaster', function () {
    return view('back_end.edit_capacitymaster');
});
Route::post('multiplefileupload', 'imageController@multiplefileupload');
Route::post('multiplesliderupload', 'imageController@multiplesliderupload');
Route::post('add_category', 'imageController@add_category');
Route::post('cat_search', 'imageController@cat_search');
Route::post('edit_category', 'imageController@edit_category');
Route::get('delete_image&{id}','imageController@delete_image');
Route::get('deleteslider&{id}','imageController@deleteslider');

// video
Route::get('add_video', function () {
    return view('back_end.add_video');
});

Route::get('video', function () {
    return view('back_end.video');
});

Route::post('add_video_category', 'videoController@add_video_category');
Route::post('add_video_url', 'videoController@add_video_url');
Route::get('delete_video&{id}','videoController@delete_video');

Route::get('edit_video', function () {
    return view('back_end.edit_video');
});

Route::post('edit_video_url', 'videoController@edit_video_url');

// Testimonial

Route::get('add_testimonial', function () {
    return view('back_end.add_testimonial');
});

Route::get('add_brand', function () {
    return view('back_end.add_brand');
});

Route::get('add_subbrand', function () {
    return view('back_end.add_subbrand');
});

Route::get('add_products', function () {
    return view('back_end.add_products');
});

Route::get('edit_testimonial', function () {
    return view('back_end.edit_testimonial');
});

Route::get('edit_categoryname', function () {
    return view('back_end.edit_category_new');
});
Route::get('admin-orders', function () {
    return view('back_end.admin-orders');
});

Route::get('admin-delivered-orders', function () {
    return view('back_end.admin-delivered-orders');
});

Route::get('admin-total-orders', function () {
    return view('back_end.admin-total-orders');
});

Route::get('edit_capacityname', function () {
    return view('back_end.edit_capacity_new');
});
Route::get('edit_brand', function () {
    return view('back_end.edit_brand');
});

Route::get('my_orders', function () {
    return view('front_end.my-orders');
});

Route::get('terms-conditions', function () {
    return view('front_end.terms-conditions');
});

Route::get('shipping-policy', function () {
    return view('front_end.shipping-policy');
});

Route::get('privacy-policy', function () {
    return view('front_end.disclaimer');
});

Route::get('refunds-and-cancellations', function () {
    return view('front_end.refunds-and-cancellations');
});


Route::get('edit_product', function () {
    return view('back_end.edit_product');
});

Route::get('add_products', function () {
    return view('back_end.add_products');
});


Route::get('vehicle_brand', function () {
    return view('back_end.vehicle_brand');
});
Route::get('add_vehicle_brand', function () {
    return view('back_end.add_vehicle_brand');
});
Route::get('edit_vehicle_brand', function () {
    return view('back_end.edit_vehicle_brand');
});

Route::get('vehicle_model', function () {
    return view('back_end.vehicle_model');
});
Route::get('add_vehicle_model', function () {
    return view('back_end.add_vehicle_model');
});
Route::get('edit_vehicle_model', function () {
    return view('back_end.edit_vehicle_model');
});

Route::get('appliance_details', function () {
    return view('back_end.appliance_details');
});
Route::get('add_appliance', function () {
    return view('back_end.add_appliance');
});
Route::get('edit_appliance', function () {
    return view('back_end.edit_appliance');
});

Route::post('new_vehicle', 'productController@new_vehicle');
Route::post('edit_vehiclebrand', 'productController@edit_vehiclebrand');
Route::get('delete_vehiclebrand&{id}','productController@delete_vehiclebrand');

Route::post('new_appliance', 'productController@new_appliance');
Route::post('edit_appliances', 'productController@edit_appliances');
Route::get('delete_appliance&{id}','productController@delete_appliance');

Route::post('new_vehiclemodel', 'productController@new_vehiclemodel');
Route::post('edit_vehiclemodel', 'productController@edit_vehiclemodel');
Route::get('delete_vehiclemodel&{id}','productController@delete_vehiclemodel');


Route::post('update_mapping', 'registerController@update_mapping'); 

Route::post('testimonial_cus', 'registerController@testimonial_cus');  //Testimonial registration

Route::post('franchise_enquiry', 'registerController@franchise_enquiry');  //franchise Enquiry 

Route::post('send_enquiry', 'registerController@send_enquiry');

Route::post('contact_enquiry', 'registerController@contact_enquiry');  //Contact Enquiry 

Route::post('career_process', 'registerController@career_process');  //career registration

Route::post('login_process', 'loginController@login_process');  // Register User

Route::post('new_testimonial', 'testimonialController@new_testimonial');

Route::post('new_category', 'productController@new_category');
Route::post('new_capacity', 'productController@new_capacity');

Route::post('new_brand', 'productController@new_brand');

Route::post('new_subbrand', 'productController@new_subbrand');

Route::post('new_products', 'productController@new_products');

Route::post('approve', 'testimonialController@approve');

Route::post('re_issue', 'testimonialController@re_issue');

Route::post('edit_testimonial_new', 'testimonialController@edit_testimonial_new');
Route::get('delete_testimonial_image&{id}','testimonialController@delete_testimonial_image');
Route::get('delete_testimonial&{id}','testimonialController@delete_testimonial');

Route::post('edit_category_new', 'productController@edit_category_new');
Route::get('delete_categoryname&{id}','productController@delete_categoryname');

Route::post('edit_capacity_new', 'productController@edit_capacity_new');
Route::get('delete_capacityname&{id}','productController@delete_capacityname');

Route::post('edit_products','productController@edit_products');
Route::get('delete_product_image&{id}','productController@delete_product_image');
Route::get('delete_product&{id}','productController@delete_product');

Route::post('sessionfilter','searchController@session_filter');

Route::post('edit_brand', 'productController@edit_brand');
Route::get('delete_brand&{id}','productController@delete_brand');

Route::post('edit_subbrand', 'productController@edit_subbrand');
Route::get('delete_subbrand&{id}','productController@delete_subbrand');

Route::get('customer_details', function () {
    return view('back_end.customer_details');  /// customer registration
});
Route::get('customer_testimonial', function () {
    return view('back_end.customer_testimonial');  /// testimonial registration
});

Route::get('career_details', function () {
    return view('back_end.career_details');  /// career registration
});
Route::get('alert/{AlertType}','sweetalertController@alert')->name('alert');

Route::get('enquiry_details', function () {
    return view('back_end.enquiry_details');  /// enquiry dealers
});

Route::get('product_details', function () {
    return view('back_end.product_details');  /// contact dealers
});

Route::get('contact_enquiry', function () {
    return view('back_end.contact_enquiry');  /// contact dealers
});

Route::post('cust_register', 'registerController@register');  //customer registration

Route::get('delete_info&{id}','registerController@delete_info');

Route::get('booking_registration', function () {
    return view('back_end.booking_registration');  /// booking
});

Route::get('delete_booking&{id}','bookingController@delete_booking');
// front end start

/** Views */
Route::get('about-us', function () {
    return view('front_end.about-us'); //about us
});

Route::get('benefits', function () {
    return view('front_end.benefits');  //our-history
});

Route::get('branch', function () {
    return view('front_end.branch');  //vision and mission
});

Route::get('career', function () {
    return view('front_end.career');  // services
});

Route::get('contact', function () {
    return view('front_end.contact-us');  // services
});

Route::get('dealers', function () {
    return view('front_end.dealers');  //enquiry feedback
});

Route::get('gallery', function () {
    return view('front_end.gallery');   //gallery
});

Route::get('services', function () {
    return view('front_end.services');
});
Route::get('maintenance_tips', function () {
    return view('front_end.maintenance-tips');
});

Route::get('store_locator', function () {
    return view('front_end.store-locator'); 
});

Route::get('franchise', function () {
    return view('front_end.franchise'); 
});

Route::get('xps_master_franchise', function () {
    return view('front_end.xps-master-franchise'); 
});

Route::get('xps_silver_franchise', function () {
    return view('front_end.xps-silver-franchise'); 
});

Route::get('xps_gold_franchise', function () {
    return view('front_end.xps-gold-franchise'); 
});

Route::get('xps_battery_kiosk', function () {
    return view('front_end.xps-battery-kiosk'); 
});

Route::get('faq', function () {
    return view('front_end.faq'); 
});

Route::get('cart-view', function () {
    return view('front_end.cart_view'); 
});

Route::get('category', function () {
    return view('front_end.category'); 
});

Route::get('checkout', function () {
    return view('front_end.checkout'); 
});

Route::get('login-and-register', function () {
    return view('front_end.login-and-register'); 
});

Route::get('manage-addresses', function () {
    return view('front_end.manage-addresses'); 
});

Route::get('personal-information', function () {
    return view('front_end.personal-information'); 
});

Route::get('products', function () {
    return view('front_end.products'); 
});

// Route::get('shop', function () {
//     return view('front_end.shop'); 
// });


Route::get('edit-personal-details', function () {
    return view('front_end.edit-personal-details'); 
});

// Route::get('edit-manage-addresses', function () {
//     return view('front_end.edit-manage-addresses'); 
// });


Route::get('change-password', function () {
    return view('front_end.change-password'); 
});


Route::get('my-orders', function () {
    return view('front_end.my-orders'); 
});

Route::get('notifications', function () {
    return view('front_end.notifications'); 
});

Route::get('wishlist', function () {
    return view('front_end.wishlist'); 
});

Route::get('testimonials', function () {
    return view('front_end.testimonials');  //contact us
});


Route::post('vehicleController/fetch', 'vehicleController@fetch')->name('vehicleController.fetch');

/** views end */

/** Front-end functionalities start */

Route::post('enquires', 'enquireController@enquire');  //enquire & feedback
Route::post('bookings', 'bookingController@bookings');  //booking add
Route::post('bookings_update', 'bookingController@bookings_update');  //booking update


/** Front-end functionalities start  */

// front end views end

/** Settings start */
Route::get('settings', function () {
    return view('back_end.settings');  /// booking
});

Route::post('smtp', 'settingsController@smtp');
Route::post('smtp_edit', 'settingsController@smtp_edit');
/** Settings end */

// Tariff Settings

Route::get('tariff', function () {
    return view('back_end.tariff');  /// Tariff
});

Route::post('tariff_settings', 'settingsController@tariff');

Route::post('tariff_edit', 'settingsController@tariff_edit');

// ajax call to get user details using the client ID start
Route::POST('get_users','vehicleController@get_user');
// ajax call to get user details using the client ID End
Route::POST('trial_check','vehicleController@trial_check');

// online payment

Route::get('online-payment', function () {
    return view('front_end.online_payment');  /// booking
});
Route::get('offline-payment', function () {
    return view('front_end.offline_payment');  /// booking
});

Route::get('tariff_details', function () {
    return view('front_end.tariff_details');  
});

Route::get('send_password', function () {
    return view('front_end.send_password');  
});

// Payment gateway response
// Exculded csrf verification in app/Http/Middleware/VerifyCsrfToken.php (protected $except = [        'response'];)
Route::post('response', 'registerController@response');
Route::post('payment-status', 'registerController@status');

Route::post('booking_response', 'bookingController@booking_response');
Route::post('booking-payment-status', 'bookingController@booking_status');

Route::get('terms_conditions', function () {
    return view('front_end.terms-and-conditions');  
});

Route::get('privacy_policy', function () {
    return view('front_end.privacy-policy');  
});

Route::get('transactions', function () {
    return view('back_end.transactions');  
});

Route::get('confirm-bookings', function () {
    return view('back_end.confirm-bookings');  
});

Route::get('order-booking', function () {
    return view('front_end.order-booking');  
});

Route::get('whatsapp', function () {
    return view('back_end.whatsapp');  
});
Route::get('store_location', function () {
    return view('back_end.store_location');  
});

Route::get('add_store_location', function () {
    return view('back_end.add_store_location');  
});

Route::get('edit_store', function () {
    return view('back_end.edit_store');
});

Route::get('franchise_enquiry', function () {
    return view('back_end.franchise_enquiry');  
});

Route::get('send_enquiry', function () {
    return view('back_end.send_enquiry');  
});

Route::get('view_testimonial', function () {
    return view('back_end.view_testimonial');  
});

Route::post('new_store', 'storeController@new_store');
Route::post('edit_store','storeController@edit_store');
Route::get('delete_store&{id}','storeController@delete_store');
Route::get('delete_franchise&{id}','registerController@delete_franchise');
Route::get('delete_product&{id}','productController@delete_product');

Route::get('delete_enquiry&{id}','registerController@delete_enquiry');

Route::get('update_status&{id}', 'registerController@update_status');  //booking update

 // Publish
Route::get('publish&id={id}','storeController@publish');
// UnPublish
Route::get('un_publish&id={id}','storeController@un_publish');


Route::get('gallery_view&{id}','imageController@gallery_view');

Route::POST('get_booking_number','bookingController@get_booking_number');
Route::POST('confirm','confirmBookingController@confirm');
Route::POST('confirm_bookings','bookingController@confirm_bookings_function');

Route::get('image_gallery&{id}','imageController@image_gallery');
Route::get('video_gallery&{id}','imageController@video_gallery');

// Route::get('/user-register-page', 'LoginUserController@registerUserPage')->middleware(['auth','auth.admin']);

// Route::post('/register-user', 'Auth\RegisterController@create')->name('register');

Route::POST('user_login_process','loginController@user_login_process');
Route::POST('user_forgetpassword','loginController@user_forgetpassword');
Route::get('logout','loginController@logout');

//Update profile
Route::POST('update_profile','loginController@update_profile');
//Change password
Route::POST('change_password','loginController@change_password');

//add Address
Route::POST('address_process','loginController@address_process');
//Update Address
Route::POST('update_address','loginController@update_address');
//Delete Address
// Route::POST('del_address','loginController@del_address');
Route::get('del-address&id={id}','loginController@del_address');

Route::POST('get-modal-by-brand','productController@get_vehiclemodelbybrand');

Route::POST('get-by-brand','productController@get_bybrand');

Route::POST('get-by-brand-model','productController@get_bybrandmodel');

Route::GET('get-appliance','productController@get_appliance');

Route::POST('get-by-model','productController@get_bymodel');

Route::post('delete_mapping', 'productController@deletemapping');

Route::POST('get-subbrand-by-brand','productController@get_subbrandbybrand');

Route::get('edit-manage-addresses&id={id}','loginController@edit_manage_addresses');

Route::POST('get_mappingdata','registerController@getmappingdata');

Route::get('shop&id={ProductID}','loginController@shop');

//Update Address
Route::POST('filter_search','filterController@filter_search');

Route::POST('get_address','loginController@get_address');


//For accessing long links from the shortem links start
Route::get('{code}', 'confirmBookingController@shortenLink')->name('shorten.link');
//end

//Product filter
Route::post('product-list-filter', 'searchController@product_list_filter');

Route::get('cart', 'CartController@cart');

Route::post('add-to-cart', 'CartController@addToCart');

Route::patch('update-cart', 'CartController@update');

Route::delete('remove-from-cart', 'CartController@remove');

Route::get('session-id', function()
{
    return "Session::get('id');";
});

Route::post('add_orderdetails','loginController@add_orderdetails');



