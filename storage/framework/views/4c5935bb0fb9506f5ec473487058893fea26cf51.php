<?php 
$get_details = DB::table('users')->where('id',Session::get('id'))->first();
$email = $get_details->email;
$mobile = $get_details->phone;
?>

<?php $__env->startSection('content'); ?>
<style>
    .payment_process {
        position: fixed;
        /* content:''; */
        z-index: 9999999;
        height: 100%;
        width: 100%;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(77, 77, 77, 0.9);
        background: rgba(77, 77, 77, 0.9);
        display: none;
    }
    .payment_process h2 {
        color:#fff;
        font-weight:700;
        position: fixed;
        top: 44%;
        right: 25px;
        left: 47%;
        border: 0;
    
    }
</style>
<div class="payment_process"><h2>Payment is Processing. Please Wait...</h2></div>
<header class="banner-heading clear">
	<h2 class="left">Checkout</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo e('/'); ?>">Home</a></li>
			<li><a href="<?php echo e('checkout'); ?>">Checkout</a></li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content login-and-register clear">  
    <aside class="left"  id="divaddress">
        <table id="cart" class="table table-hover table-condensed border_table">
        <thead>
        <tr>
            <th style="width: 100px;">S.No</th>
            <th>Product</th>
            <th>Name</th>
            <th>Quantity</th>
            <th class="text-center">Amount</th>
        </tr>
        </thead>
        <tbody>

        <?php $i=1;$total = 0 ?>

        <?php if(session('cart')): ?>
            <?php $__currentLoopData = (array) session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php $total += ($details['price'] * $details['quantity']) - $details['scrabamount']?>

                <tr>
                    <td style="width: 100px;"><?php echo e($i); ?></td>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="<?php echo e($details['photo']); ?>" width="100" height="100" class="img-responsive"/></div>
                            <!-- <div class="col-sm-9">
                                <h4 class="nomargin"><?php echo e($details['name']); ?></h4>
                            </div> -->
                        </div>
                    </td>
                    <td data-th="Product"><h4 class="nomargin"><?php echo e($details['name']); ?></h4></td>
                    <td data-th="Quantity"><?php echo e($details['quantity']); ?></td>
                    <td data-th="Subtotal" class="text-center">₹<span class="product-subtotal"><?php echo e(($details['price'] * $details['quantity']) -$details['scrabamount']); ?></span></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td colspan="4" class="text-center" style="text-align:right;font-weight: bold;"><strong>Total</strong></td>
            <td  class="text-center" style="text-align:right;font-weight: bold;"><strong> Rs:&nbsp;<span class="cart-total"><?php echo e($total); ?></span></strong></td>
        </tr>
        </tfoot>
    </table>
    <h3>Address Details</h3>
        <?php
              $cus_info = DB::table('customer_address')->where('cus_id',Session::get('id'))->where('status','Active')->get();
                
              ?>
              <?php $__currentLoopData = $cus_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="clear">
            <input name="addresscheckbox" class="checkbox-custom checkboxaddress" id="<?php echo e($row_info->id); ?>" type="checkbox" value="<?php echo e($row_info->id); ?>">
			<label class="checkbox-custom-label" for="<?php echo e($row_info->id); ?>" >
             <p><strong><?php echo e($row_info->name); ?></strong></p>
            <p><strong>Address</strong><br><?php echo e($row_info->address); ?></p>
            <p><strong>Mobile No :</strong><br>+91-<?php echo e($row_info->mobile); ?></p>
            </label></div>           
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </aside>
        
        <fieldset class="right">
        	<h2>Delivery address</h2>
			<form action="add_orderdetails" method="post" id="checkout_form">
                <?php echo csrf_field(); ?>
				<div class="form-split left"><label>Name<span>*</span></label><input name="CustomerName" type="text" id="txtName" oninput="txt_name()" required></div>
                <div class="form-split right"><label>Phone No<span>*</span></label><input name="MobileNo" id="txtPhone" type="number" oninput="txt_phone()" required></div>
                <div class="clear"></div>
                <div class="form-split left"><label>Pincode<span>*</span></label><input name="Pincode" id="txtPincode" type="text" required></div>
                <div class="form-split right"><label>Locality<span>*</span></label><input name="Locality" id="txtLocality" type="text" required></div>
                <div class="clear"></div>
				<label>Address</label>
				<textarea name="Address" id="txtAddress" rows="3" required></textarea>
                <label>city<span>*</span></label><input name="City" type="text" id="txtCity" placeholder="City/District/Town" required>
                <div class="clear"></div>
                <div class="form-split left"><label>Landmark</label><input name="Landmark" id="txtLandmark" type="text" placeholder="Landmark (Optional)"></div>
                <div class="form-split right"><label>Alternate Number</label><input name="AlternateNo" id="txtalt_number" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Alternate Phone No (Optional)" ></div>
                <div class="clear">&nbsp;</div>
				<input type="hidden" id="addressid" name="addressid" value="">
                <input type="hidden" id="customerid" name="customerid" value="">
                <div class="clear">
                <input name="paymentmode" class="checkbox-custom paymentmode" id="COD" type="checkbox" checked value="RAZORPAY">
			    <!-- <label class="checkbox-custom-label" for="COD" >Cash on Delivery
                </label> -->
                </div> 
                <div class="clear">&nbsp;</div>
                <!-- <button class="btn btn-info" type="submit" style="border: none;padding: 14px 36px;outline: 0;color: #fff;font-weight: 700;cursor: pointer;font-size: 18px;font-family: 'Muli', sans-serif;border-radius: 30px;box-shadow: 2px 4px 8px rgb(159 178 169 / 80%);background:#006f3b;" id="">Order</button> -->
				<input name="reset" type="reset" value="Reset" id="reset"/>
                <?php $modal_dismiss = '"{"ondismiss": function(){console.log("Checkout form closed");}}"'; ?>
                <script src="https://checkout.razorpay.com/v1/checkout.js"
                        data-key="<?php echo e(env('RAZOR_KEY')); ?>"
                        data-amount="<?php echo $total * 100; ?>"
                        data-buttontext="Pay"
                        data-name="XPS Battery Store"
                        data-description="Ordered Battery Payment"
                        data-image="<?php echo e(env('APP_URL')); ?>assets/front_end/images/franchise-logo.png"
                        data-prefill.name=""
                        data-prefill.email="<?php echo e($email); ?>"
                        data-prefill.contact="<?php echo e($mobile); ?>"
                        data-theme.color="#146634" id="razorpay_script">
                </script>
            </form>
		</fieldset>
	</section>
</section>
<script type="text/javascript">

$(".checkboxaddress").change(function() {
    $('.checkboxaddress').not(this).prop('checked', false);
    $.ajax({
        url: '<?php echo e(url('get_address')); ?>',
        method: "post",
        data: {_token: '<?php echo e(csrf_token()); ?>', id: $(this).val()},
        dataType: "json",
        success: function (response) {           
            var drow=response.data[0];
            $("#txtName").val(drow.name);
            $("#txtAddress").val(drow.address);
            $("#txtalt_number").val(drow.alternate_number);
            $("#txtCity").val(drow.city);
            $("#txtLandmark").val(drow.landmark);
            $("#txtLocality").val(drow.locality);
            $("#txtPhone").val(drow.mobile);
            $("#addressid").val(drow.id);
            $("#customerid").val(drow.cus_id);
            $("#txtPincode").val(drow.pincode);
            $('#razorpay_script').attr('data-prefill.name',drow.name);
            $('#razorpay_script').attr('data-prefill.contact','91'+drow.mobile);

        }
    });
});
function txt_phone() {
    $('#razorpay_script').attr('data-prefill.contact','91'+$('#txtPhone').val());txt_name
}
function txt_name() {
    $('#razorpay_script').attr('data-prefill.name',$('#txtName').val());
}

$("#btncheckout").click(function(){
    
    // $.ajax({
    //     url: '<?php echo e(url('add_orderdetails')); ?>',
    //     method: "post",
    //     data: {_token: '<?php echo e(csrf_token()); ?>', id: $(this).val(),
    //     CustomerName:$("#txtName").val(),
    //     Address:$("#txtAddress").val(),
    //     customerid:$("#customerid").val(),
    //     addressid:$("#addressid").val(),
    //     AlternateNo:$("#txtalt_number").val(),
    //     City:$("#txtCity").val(),
    //     Landmark:$("#txtLandmark").val(),
    //     Locality:$("#txtLocality").val(),
    //     MobileNo:$("#txtPhone").val(),
    //     Pincode:$("#txtPincode").val()},
    //     dataType: "json",
    //     success: function (response) {      
    //         console.log("1");     
    //         window.location = "/order-confirm";
    //     }
    // });
});

 // $("#btncheckout").attr("disabled", true);
$('button[type=submit]').click(function() {
    $(this).attr('disabled', 'disabled');
    $(this).parents('form').submit();
});
$('#checkout_form').submit(function(){
    // $('.payment_process').show();
    
});

$('div#modal-close.close').on('click',function(){
    // console.log('Working');
    // $('.payment_process').hide();
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/checkout.blade.php ENDPATH**/ ?>