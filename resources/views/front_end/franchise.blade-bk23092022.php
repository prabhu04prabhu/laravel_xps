@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">Franchise</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
			<li>Franchise</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content clear">
    	<div class="franchise-chart clear">
        	<div class="franchise-chart-logo clear"><img src="assets/front_end/images/franchise-logo.png"></div>
        	<div class="franchise-tab master-franchise clear">
            	<div class="line-arrow"></div>
            	<a href="{{'xps_master_franchise'}}">XPS Master Franchise</a>
            </div>
        	<div class="franchise-tab silver-franchise left">
            	<div class="line-arrow"></div>
            	<a href="{{'xps_silver_franchise'}}">XPS Silver Franchise</a>
            </div>
        	<div class="franchise-tab gold-franchise right">
            	<div class="line-arrow"></div>
            	<a href="{{'xps_gold_franchise'}}">XPS Gold Franchise</a>
            </div>
        	<div class="franchise-tab kiosk-franchise clear">
            	<div class="line-arrow"></div>
            	<a href="{{'xps_battery_kiosk'}}">XPS Battery Kiosk</a>
            </div>
        </div>
        <div class="franchise-table clear">
            <div class="franchise-table-inner clear">
                <article class="left">
                    <h3 style="margin-top: 30px;">Sub Franchise</h3>
                    <h3>Multiple Branch</h3>
                    <h3>Website Order & Access</h3>
                    <h3>MobileApp Order & Access</h3>
                    <h3>Interior</h3>
                    <h3>Marketing Tools</h3>
                    <h3>Staff Training</h3>
                    <h3>Social media & Theater Ads.</h3>
                    <h3>Testing Equipment</h3>
                   <!--  <h3>Testing Equipment</h3> -->
                    <h3>ERP</h3>
                    <h3>Gross Profit</h3>
                    <!-- <h3>Gross Profit</h3> -->
                    <h3>Refundable Deposit</h3>
                </article>
                <aside class="left">
                    <h3>Master Franchise</h3>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>Advanced</p>
                    <p>Worth ₹6,00,000</p>
                    <p>Advanced</p>
                    <p>-</p>
                    <p>-</p>
                    <p>-</p>
                    <a href="{{'xps_master_franchise'}}">More Details</a>
            		<a href="javascript:void(0)" class="button" data-modal="franchise-master">Enquiry</a>
                     <div id="franchise-master" class="modal">
                  <div class="modal-content-franchise">
                    <span class="close">&times;</span>
                    <h1>XPS Master Franchise</h1>
                      <fieldset class="clear">
                      <!-- <form method="post" action="#" onsubmit="return validate();"> -->
                               <form  id="form1" name="form1" method="post" action="{{url('franchise_enquiry')}}" enctype="multipart/form-data" onsubmit="return validate();">
                                @csrf
                        <div class="form-split left">
                          <input type="hidden" name="title" value="XPS Master Franchise">
                          <input name="name" type="text" placeholder="Name" required>            
                                </div>
                        <div class="form-split right">
                                    <input name="email" type="email" placeholder="Email" required>                
                                </div>
                        <input name="mobile" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" placeholder="Mobile No" required>
                        <textarea name="address" rows="2" placeholder="Address" required></textarea>
                              <!--   <div class="file-upload">
                                    <label for="upload" class="file-upload__label">Upload Documents </label>
                                    <input type="hidden" name="mode" value="Upload Documents">
                                    <input id="upload" class="file-upload__input" type="file" accept=".doc,.docx,application/pdf" name="file_upload">
                                </div> -->
                                <!-- <div class="clear"></div><br/>
                                    <label for="upload">Upload Documents </label><br/><br/>
                                    <input id="upload"  type="file" accept=".doc,.docx,application/pdf" name="file_upload"> -->
                                    <div class="clear"></div>
                        <div class="custom-select">
                          <select class="select-options" name="franchise_locations">
                            <option value="Franchise Locations">Franchise Locations</option>
                            @php
                                  $locations = DB::table('tbl_cities')->get();
                                    @endphp
                                    @foreach ($locations as $row)
                                    <option value="{{$row->city_name}}">{{$row->city_name}}</option>
                                @endforeach
                          </select>
                                </div>
                        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
                      </form>
                    </fieldset>
                  </div>
                </div>
                </aside>
                <aside class="left">
                    <h3>Gold Franchise</h3>
                    <p><span>NO</span></p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>Basic </p>
                    <p>Worth ₹1,00,000</p>
                    <p>Advanced</p>
                    <p>₹75K - ₹1L </p>
                    <p>₹4,50,000</p>
                    <p>₹40,000</p>
                    <a href="{{'xps_gold_franchise'}}">More Details</a>
            		<a href="javascript:void(0)" class="button" data-modal="franchise-gold">Enquiry</a>
                     <div id="franchise-gold" class="modal">
                  <div class="modal-content-franchise">
                    <span class="close">&times;</span>
                    <h1>XPS Gold Franchise</h1>
                      <fieldset class="clear">
                      <!-- <form method="post" action="#" onsubmit="return validate();"> -->
                               <form  id="form1" name="form1" method="post" action="{{url('franchise_enquiry')}}" enctype="multipart/form-data" onsubmit="return validate();">
                                @csrf
                        <div class="form-split left">
                          <input type="hidden" name="title" value="XPS Gold Franchise">
                          <input name="name" type="text" placeholder="Name" required>            
                                </div>
                        <div class="form-split right">
                                    <input name="email" type="email" placeholder="Email" required>                
                                </div>
                        <input name="mobile" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" placeholder="Mobile No" required>
                        <textarea name="address" rows="2" placeholder="Address" required></textarea>
                              <!--   <div class="file-upload">
                                    <label for="upload" class="file-upload__label">Upload Documents </label>
                                    <input type="hidden" name="mode" value="Upload Documents">
                                    <input id="upload" class="file-upload__input" type="file" accept=".doc,.docx,application/pdf" name="file_upload">
                                </div> -->
                                <!-- <div class="clear"></div><br/>
                                    <label for="upload">Upload Documents </label><br/><br/>
                                    <input id="upload"  type="file" accept=".doc,.docx,application/pdf" name="file_upload"> -->
                                    <div class="clear"></div>
                        <div class="custom-select">
                          <select class="select-options" name="franchise_locations">
                            <option value="Franchise Locations">Franchise Locations</option>
                            @php
                                  $locations = DB::table('tbl_cities')->get();
                                    @endphp
                                    @foreach ($locations as $row)
                                    <option value="{{$row->city_name}}">{{$row->city_name}}</option>
                                @endforeach
                          </select>
                                </div>
                        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
                      </form>
                    </fieldset>
                  </div>
                </div>
                </aside>
                <aside class="left">
                    <h3>Silver Franchise</h3>
                    <p><span>NO</span></p>
                    <p><span>NO</span></p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>Basic</p>
                    <p>Worth ₹70,000</p>
                    <p>Single User</p>
                    <p>₹50K - ₹60K</p>
                    <p>₹3,50,000</p>
                    <p>₹25,000</p>
                    <a href="{{'xps_silver_franchise'}}">More Details</a>
            		<a href="javascript:void(0)" class="button" data-modal="franchise-silver">Enquiry</a>
                     <div id="franchise-silver" class="modal">
                  <div class="modal-content-franchise">
                    <span class="close">&times;</span>
                    <h1>XPS Silver Franchise</h1>
                      <fieldset class="clear">
                      <!-- <form method="post" action="#" onsubmit="return validate();"> -->
                               <form  id="form1" name="form1" method="post" action="{{url('franchise_enquiry')}}" enctype="multipart/form-data" onsubmit="return validate();">
                                @csrf
                        <div class="form-split left">
                          <input type="hidden" name="title" value="XPS Silver Franchise">
                          <input name="name" type="text" placeholder="Name" required>            
                                </div>
                        <div class="form-split right">
                                    <input name="email" type="email" placeholder="Email" required>                
                                </div>
                        <input name="mobile" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" placeholder="Mobile No" required>
                        <textarea name="address" rows="2" placeholder="Address" required></textarea>
                              <!--   <div class="file-upload">
                                    <label for="upload" class="file-upload__label">Upload Documents </label>
                                    <input type="hidden" name="mode" value="Upload Documents">
                                    <input id="upload" class="file-upload__input" type="file" accept=".doc,.docx,application/pdf" name="file_upload">
                                </div> -->
                                <!-- <div class="clear"></div><br/>
                                    <label for="upload">Upload Documents </label><br/><br/>
                                    <input id="upload"  type="file" accept=".doc,.docx,application/pdf" name="file_upload"> -->
                                    <div class="clear"></div>
                        <div class="custom-select">
                          <select class="select-options" name="franchise_locations">
                            <option value="Franchise Locations">Franchise Locations</option>
                            @php
                                  $locations = DB::table('tbl_cities')->get();
                                    @endphp
                                    @foreach ($locations as $row)
                                    <option value="{{$row->city_name}}">{{$row->city_name}}</option>
                                @endforeach
                          </select>
                                </div>
                        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
                      </form>
                    </fieldset>
                  </div>
                </div>
                </aside>
                <aside class="left">
                    <h3>Check-Point Franchise</h3>
                    <p><span>NO</span></p>
                    <p><span>NO</span></p>
                    <p><span>NO</span></p>
                    <p><span>NO</span></p>
                    <p>KIOSK</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>YES</p>
                    <p>Basic</p>
                    <p>Worth ₹35,000</p>
                    <p>Single User</p>
                    <p>₹15K – ₹20K</p>
                    <p>₹2,60,000</p>
                    <p>₹80,000</p>
                    <a href="{{'xps_battery_kiosk'}}">More Details</a>
            		<a href="javascript:void(0)" class="button" data-modal="franchise-kiosk">Enquiry</a>
                    <div id="franchise-kiosk" class="modal">
                  <div class="modal-content-franchise">
                    <span class="close">&times;</span>
                    <h1>XPS Battery Kiosk</h1>
                      <fieldset class="clear">
                      <!-- <form method="post" action="#" onsubmit="return validate();"> -->
                               <form  id="form1" name="form1" method="post" action="{{url('franchise_enquiry')}}" enctype="multipart/form-data" onsubmit="return validate();">
                                @csrf
                        <div class="form-split left">
                          <input type="hidden" name="title" value="XPS Battery Kiosk">
                          <input name="name" type="text" placeholder="Name" required>            
                                </div>
                        <div class="form-split right">
                                    <input name="email" type="email" placeholder="Email" required>                
                                </div>
                        <input name="mobile" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" placeholder="Mobile No" required>
                        <textarea name="address" rows="2" placeholder="Address" required></textarea>
                              <!--   <div class="file-upload">
                                    <label for="upload" class="file-upload__label">Upload Documents </label>
                                    <input type="hidden" name="mode" value="Upload Documents">
                                    <input id="upload" class="file-upload__input" type="file" accept=".doc,.docx,application/pdf" name="file_upload">
                                </div> -->
                                <!-- <div class="clear"></div><br/>
                                    <label for="upload">Upload Documents </label><br/><br/>
                                    <input id="upload"  type="file" accept=".doc,.docx,application/pdf" name="file_upload"> -->
                                    <div class="clear"></div>
                        <div class="custom-select">
                          <select class="select-options" name="franchise_locations">
                            <option value="Franchise Locations">Franchise Locations</option>
                            @php
                                  $locations = DB::table('tbl_cities')->get();
                                    @endphp
                                    @foreach ($locations as $row)
                                    <option value="{{$row->city_name}}">{{$row->city_name}}</option>
                                @endforeach
                          </select>
                                </div>
                        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
                      </form>
                    </fieldset>
                  </div>
                </div>
                </aside>
            </div>
        </div>
    </section>
</section>
@endsection
