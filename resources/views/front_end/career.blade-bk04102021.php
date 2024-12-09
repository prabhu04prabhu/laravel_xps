@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">Career</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
			<li>Career</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content career clear">
        <aside class="left">
            <h2>Join hand with us</h2>
            <p>Always looking for people who blend with our brand.</p>
            <img src="assets/front_end/images/career.jpg">
        </aside>
        <fieldset class="right">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">

                                {!! \Session::get('success') !!}

                            </div>
                            @endif

                           @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <br/>

            <form  id="form1" name="form1" method="post" action="{{url('career_process')}}" enctype="multipart/form-data" onsubmit="return validate();">
                @csrf
			<!-- <form method="post" action="#" onsubmit="return validate();"> -->
				<div class="form-split left"><label>First Name<span>*</span></label><input name="First_Name" type="text" required></div>
				<div class="form-split right"><label>Last Name<span>*</span></label><input name="Last_Name" type="text" required></div>
                <div class="clear"></div>
				<div class="form-split left"><label>Email Id<span>*</span></label><input name="email" type="email" required></div>
				<div class="form-split right"><label>Phone No<span>*</span></label><input name="phone" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" required></div>
                <div class="clear"></div>
				<div class="form-split left">
                    <label>State<span>*</span></label>
                    <div class="">
                        <select name="State" class="select-option" required>
                            <option value="">Select State</option>
                            <option value="Andra Pradesh">Andra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madya Pradesh">Madya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Orissa">Orissa</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttaranchal">Uttaranchal</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                    </div>
                </div>
				<div class="form-split right">
                    <label>Key Function Area<span>*</span></label>
                    <div class="">
                        <select name="Key_Function" class="select-option" required>
                            <option value="">Select Key Function Area</option>
                            <option value="Administration">Administration</option>
                            <option value="Accounts">Accounts</option>
                            <option value="Finance">Finance</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Service">Service</option>
                            <option value="Sales/Marketing">Sa<em></em>les/Marketing</option>
                            <option value="Technical">Technical</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="clear"></div>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                <script type="text/javascript">
                    $("body").on("click", "#contact-button", function () {
                        var allowedFiles = [".doc", ".docx", ".pdf"];
                        var career = $("#career");
                        var lblError = $("#lblError");
                        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
                        if (!regex.test(career.val().toLowerCase())) {
                            lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
                            return false;
                        }
                        lblError.html('');
                        return true;
                    });
                </script><br/>
				<label>Upload Your Resume<span>*</span></label>
                <input type="file" name="career" id="career" accept=".doc,.docx,application/pdf" />
                <br /><span id="lblError" style="color: red;"></span><br /><br/>
                <!-- <div class="file-upload">
                    <label for="upload" class="file-upload__label">Upload Your Resume</label>
                    <input type="hidden" name="mode" value="Upload Your Resume">
                    <input id="upload" class="file-upload__input" type="file" name="career">
                </div> -->
                <div class="clear"></div>
				<label>Address</label>
				<textarea name="Address" rows="3" required></textarea>
				<label>Comments</label>
				<textarea name="Comments" rows="6" required></textarea>
                <div class="clear"></div>
				<input name="contact-button" type="submit"  value="Submit" id="contact-button"/>
				<input name="reset" type="reset" value="Reset" id="reset"/>
			</form>
		</fieldset>
    </section>
</section>
@endsection