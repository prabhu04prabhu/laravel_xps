<?php $__env->startSection('content'); ?>
<?php
session_start(); 
if(isset($_GET["cid"])){
$_SESSION['scategoryid'] = $_GET["cid"];
}
else{
    $_SESSION['scategoryid']=0;
}
if(isset($_GET["bid"])){
        $_SESSION['sbrandid']=$_GET["bid"];
        }
        else{
            $_SESSION['sbrandid']=0;
        }
if(isset($_GET["mid"])){
    $_SESSION['smodelid']=$_GET["mid"];
    }
    else{
        $_SESSION['smodelid']=0;
    }    
    if(isset($_GET["fueltype"])){
        $_SESSION['fueltype']=$_GET["fueltype"];
        }
        else{
            $_SESSION['fueltype']=0;
        }
    if(isset($_GET["capacity"])){
        $_SESSION['capacity']=$_GET["capacity"];
        }
        else{
            $_SESSION['capacity']=0;
        }
?>
<header class="banner-heading clear">
<script src="https://cdn.jsdelivr.net/npm/lozad"></script>
    <h2 class="left">Products</h2>
    <div class="banner-nav right">
        <ul>
            <li><a href="#">Home</a></li>
            <li>Products</li>
        </ul>
    </div>
</header>
<section class="section">
    <section class="section-content products clear">
        <!-- <aside class="sidebar left">
            <?php echo $__env->make('front_end.sidebar-products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        </aside> -->
        <aside class="sidebar sidebarproduct left">
        <h2>Search</h2>
<fieldset class="clear">
    <form class="form-horizontal m-t-30" action="filter_search" method="POST">
        <?php echo csrf_field(); ?>
        <!-- <div class="custom-select"> -->
        <input type="hidden" name="_token" id="filter_token" value="<?php echo csrf_token(); ?>">
        <select name="fcategory" id="icategory" class="dropdownsytyles icategory">
        <option value="0">All Product Type</option>
                <?php
                $cat_info = DB::table('categorymaster')->where('Status','=','Active')->Orderby('CategoryID', 'ASC')->get();
                ?>
                <?php $__currentLoopData = $cat_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($row_shop->CategoryID); ?>" <?php if($_SESSION["scategoryid"] == $row_shop->CategoryID): ?> Selected <?php endif; ?>> <?php echo e($row_shop->CategoryName); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </select>
        <!-- </div> -->


            <select name="vbrand" id="vbrand" class="dropdownsytyles vbrand" style="display: none;">
            <option value="0" >All Vehicle Brand</option>
               <!--  <?php
                $vechicle_brand = DB::table('tbl_vehiclebrand')->get();
                ?>
                
                <?php $__currentLoopData = $vechicle_brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_vbrand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($row_vbrand->v_id); ?>" <?php if($_SESSION["sbrandid"]== $row_vbrand->v_id): ?> Selected <?php endif; ?> ><?php echo e($row_vbrand->brand_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  -->              
            </select>

            <select name="vmodel"id="vmodel" class="dropdownsytyles vmodel" style="display: none;">
            <option value="0">All Vehicle Model</option>
                <!-- <?php
                $vechicle_model = DB::table('tbl_vehiclemodel')->get();
                ?>
                
                <?php $__currentLoopData = $vechicle_model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_vmodel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($row_vmodel->m_id); ?>" <?php if($_SESSION["smodelid"] == $row_vmodel->m_id): ?> Selected <?php endif; ?> ><?php echo e($row_vmodel->model_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   -->             
            </select>
            <?php 
            if($_SESSION["fueltype"] == ""){ ?>
            <select id="fueltype" name="fueltype"  class="dropdownsytyles fueltype" style="display: none;">
                        <option value="">Select Fuel Type</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                </select>
                <?php
            }
            else if($_SESSION["fueltype"] == "Petrol"){ ?>
                <select id="fueltype" name="fueltype"  class="dropdownsytyles fueltype" style="display: none;">
                        <option value="">Select Fuel Type</option>
                        <option value="Petrol" selected="">Petrol</option>
                        <option value="Diesel">Diesel</option>
                </select>

                <?php }
          

            else if($_SESSION["fueltype"] == "Diesel"){ ?>
                <select id="fueltype" name="fueltype"  class="dropdownsytyles fueltype" style="display: none;">
                        <option value="">Select Fuel Type</option>
                        <option value="Petrol" >Petrol</option>
                        <option value="Diesel" selected="" >Diesel</option>
                </select>

                <?php }
            ?>
        <!-- <div class="custom-select"> -->
            <select name="fbrand" id="ibrand" class="dropdownsytyles ibrand">
            <option value="0">All Brand</option>
                <?php
                $brand_info = DB::table('brandmaster')->where('Brand_Status','=','Active')->get();
                ?>
                
                <?php $__currentLoopData = $brand_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($row_brand->BrandID); ?>"  ><?php echo e($row_brand->BrandName); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
            </select>
       
        <!-- <div class="custom-select"> -->
        <select name="fmodel" id="imodel" class="dropdownsytyles">
            <option value="0">Select Model</option> 
        <!-- <option value="0">All Model</option>
                <?php
                $model_info = DB::table('productmaster')->get();
                ?>
               
                <?php $__currentLoopData = $model_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($row_model->ProductID); ?>" ><?php echo e($row_model->ProductModelNo); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
               
            </select>
        <!-- </div> -->

            
        <!-- </div> -->
     <?php /*   <br/>
<h3>Price</h3>
<div class="range-slider">
            <span class="rangeValues" id="rangevalueid"></span>
            <input value="750" min="750" max="50000" step="0" name="irange1" type="range" id="range1" onchange="updateTextInput();">
            <input value="50000" min="750" max="50000" step="0" name="irange2" type="range" id="range2" onchange="updateTextInput();">
        </div> 

        <div class="clear"></div> */ ?>
        <input value="750" min="750" max="50000" step="0" name="irange1" type="hidden" id="range1" value="0">
        <input value="50000" min="750" max="50000" step="0" name="irange2" type="hidden" id="range2" value="50000">
        <input name="Find Product" type="button" value="Find Product" id="contact-button" onclick="Searchclick();" />
        <!-- <input name="Clear Search" type="button" value="Clear Search" id="clear-search" onclick="ClearSearch();" /> -->
    </form>
</fieldset>
<?php /* <div class="capacity">
    <h2>Capacity</h2>
    <fieldset class="clear">
    <?php
                $ct_info = DB::table('capacitymaster')->get();
                ?>
                @foreach ($ct_info as $row)
                <div class="clear"><input name="Checkbox" class="checkbox-custom" id="checkbox-{{$row->CapacityID }}" type="checkbox" onclick="Searchclick();" value="{{$row->CapacityID }}" @if ($_SESSION["capacity"] == $row->CapacityID) checked @endif>
                <label class="checkbox-custom-label" for="checkbox-{{$row->CapacityID }}">{{$row->CapacityName }}</label>
                </div>
                @endforeach
    </fieldset>
</div>  */ ?>
        </aside>
        <aside class="content contentproduct right">
            <div class="products-top clear">
                <h2 class="left"><a id="searchtext"></a> - <span id="itotalcount" ></span></h2>
                <div class="sort right">
                    <p class="left">Sort By</p>
                    <div >
                        <select id="isortby"  onchange="Searchclick();" style="color: #4d4d4f;font-family: 'Muli', sans-serif;font-size: 16px; padding: 12px 19px; border: 1px solid transparent; border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;cursor: pointer; user-select: none; border-radius: 2px;">
                            <option value="0">Sort by Price</option>
                            <option value="1">Low to High</option>
                            <option value="2">High to Low</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="product-item clear" id="container">
            </div>
            <div class="auto-load text-center">
            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <path fill="#000"
                    d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                        from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                </path>
            </svg>
        </div>
        </aside>
    </section>
</section>

<script type="text/javascript">

 $(".icategory").change(function (e) {
  e.preventDefault();
  var ele = $(this);
  ele.siblings('.btn-loading').show();
  $.ajax({
      url: '<?php echo e(url('get-by-brand')); ?>',
      method: "post",
      data: {id: document.getElementById("icategory").value,
      _token: '<?php echo e(csrf_token()); ?>'},
      dataType: "json",
      success: function (response) { 
        //console.log(response);
        $("#vbrand").empty();
        var obj = response.data;
        $("#vbrand").append('<option value=0>Select Vehicle Brand</option>')
      //   for (var index = 0; index < obj.length; index++) {
      // //          if(getUrlParameter('bid') == obj[index].v_id){                
      // //     $("#vbrand").append('<option value=' + obj[index].v_id + ' selected>' + obj[index].brand_name + '</option>');
      // //     $(".vbrand").change();
      // // }
      // //           else
      //     $("#vbrand").append('<option value=' + obj[index].v_id + ' >' + obj[index].brand_name + '</option>');
      //   }
       for (var index = 0; index < obj.length; index++) {
         
          $("#vbrand").append('<option value=' + obj[index].v_id + ' >' + obj[index].brand_name + '</option>');
        }
           if(getUrlParameter('cid') == document.getElementById("icategory").value){
                $("#vbrand").val(getUrlParameter('bid')).change();
           }
           else
             $("#vmodel").val(0).change();
    //console.log(getUrlParameter('bid'));
       // Searchclick();
      }
  });
});

$(".vbrand").change(function (e) {
  e.preventDefault();
  var ele = $(this);
  ele.siblings('.btn-loading').show();
  $.ajax({
      url: '<?php echo e(url('get-by-model')); ?>',
      method: "post",
      data: {id: document.getElementById("vbrand").value,
      _token: '<?php echo e(csrf_token()); ?>'},
      dataType: "json",
      success: function (response) { 
        $("#vmodel").empty();
        var obj = response.data;
        $("#vmodel").append('<option value=0>Select Vehicle Model</option>');
        //for (var index = 0; index < obj.length; index++) {
        //   $("#vmodel").append('<option value=' + obj[index].m_id + ' >' + obj[index].model_name + '</option>');
        // }

        for (var index = 0; index < obj.length; index++) {
          
          $("#vmodel").append('<option value=' + obj[index].m_id + ' >' + obj[index].model_name + '</option>');
        }
          if(getUrlParameter('bid') == document.getElementById("vbrand").value)
                $("#vmodel").val(getUrlParameter('mid')).change();

       //  $("#vmodel").val();
       //  //console.log(getUrlParameter('mid'));
       

       //  //console.log(getUrlParameter('mid'));
       Searchclick();
      }
  });
});


$(".ibrand").change(function (e) {
  
  e.preventDefault();
  var ele = $(this);
  ele.siblings('.btn-loading').show();
  $.ajax({
      url: '<?php echo e(url('get-by-brand-model')); ?>',
      method: "post",
      data: {id: document.getElementById("ibrand").value,
      _token: '<?php echo e(csrf_token()); ?>'},
      dataType: "json",
      success: function (response) { 
        $("#imodel").empty();
        var obj = response.data;
        $("#imodel").append('<option value=0>Select Model</option>');
        for (var index = 0; index < obj.length; index++) {
          $("#imodel").append('<option value=' + obj[index].SubBrandID + ' >'  + obj[index].SubBrandName + '</option>');
        }
       
      }
  });
});

 var page = 1;
      function updateTextInput() {
        document.getElementById("rangevalueid").innerHTML= "₹ " + document.getElementById("range1").value +" - ₹ " + document.getElementById("range2").value;
        }

        $(document).ready(function() {
            // Searchclick();
            // document.getElementById("rangevalueid").innerHTML="₹ " + document.getElementById("range1").value +" - ₹ " + document.getElementById("range2").value;
             $("#icategory").val(getUrlParameter('cid')).change();
            Searchclick();
        });

        $(window).scroll(function () {
           // console.log($(window).scrollTop() + $(window).height() +"  "+$(document).height());
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                Search(page);
               // console.log(page);
            }
        });
       
        function ClearSearch() 
        {
            document.getElementById("range1").value="750";
            document.getElementById("range2").value="50000";
            document.getElementById("icategory").selectedIndex = -1;
            document.getElementById("imodel").selectedIndex = -1;
            $("#imodel").val(-1).change();
            document.getElementById("ibrand").value=0;
            document.getElementById("vbrand").value=0;
            document.getElementById("vmodel").value=0;
            document.getElementById("fueltype").value=0;
            document.getElementById("rangevalueid").innerHTML= "₹ " + document.getElementById("range1").value +" - ₹ " + document.getElementById("range2").value;
        }

        function Searchclick(){
            $("#container").empty();
            page = 1;
            Search(page);
        }
        function Search(page) 
        {
            var isort=""; var scapacity = "";
            $.each($("input[name='Checkbox']:checked"), function () {
                scapacity = scapacity + $(this).val() + ',';
            });
            scapacity =scapacity.slice(0, -1);

        if(document.getElementById("isortby").value==2)
            isort="desc";
            else
            isort="asc";
        $.ajax({
        url: "/product-list-filter?page="+page,
        type:"POST",        
        data:{
            categoryid: document.getElementById("icategory").value,
            range1: document.getElementById("range1").value,
            range2: document.getElementById("range2").value,
            modelid: document.getElementById("imodel").value,
            brandid: document.getElementById("ibrand").value,
            vbrandid: document.getElementById("vbrand").value,
            vmodelid: document.getElementById("vmodel").value,
            fueltypeid: document.getElementById("fueltype").value,
            sortby:isort,
            capacityid:scapacity,
            _token: $("#filter_token").val()
        },
        success:function(response){
            //console.log(response);
          if(response) {
            $('.auto-load').hide();
            
            $("#container").append(response.data);
            $("#itotalcount").text(response.rawdata.total + " Products");
            
            var searchfilter="";
            if(document.getElementById("icategory").value >0)
            searchfilter=$("#icategory option:selected").text();
            if(document.getElementById("imodel").value >0)
            if(searchfilter.length >0)
            searchfilter= searchfilter + " - " + $("#imodel option:selected").text();
            else
            searchfilter=$("#imodel option:selected").text();
            if(document.getElementById("ibrand").value >0)
            if(searchfilter.length >0)
            searchfilter= searchfilter + " - " + $("#ibrand option:selected").text();
            else
            searchfilter=$("#ibrand option:selected").text();
            if(searchfilter.length <=0)
            searchfilter="All Products";
            $("#searchtext").text(searchfilter);
          }
        },
       });
         
        }

        var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return 0;
};

function addcart(id){ 
    $('.cd-cart-trigger').click();
    var productid= document.getElementById("productid"+id).getAttribute("data-id");
    var productprice= document.getElementById("productid"+id).getAttribute("data-price");
    var price= document.getElementById("productid"+id).getAttribute("data-rate");
    //var price=productprice - (productprice * <?php echo e(env('DEFAULT_DISCOUNT')); ?>/100);
        $.ajax({
            url: '<?php echo e(url('add-to-cart')); ?>',
            method: "POST",
            data: {quantity: 1,
            defaultdiscount: <?php echo e(env('DEFAULT_DISCOUNT')); ?>,
            scrabamount: 0,
            originalrate: productprice,
            rate: price,
            productid: productid,
            _token: '<?php echo e(csrf_token()); ?>'},
            dataType: "json",
            success: function (response) {                
                // location.reload();
                console.log(response);
                var total = response.total;
                var data = response.data;
                // console.log(data[595]);
                $('#cart_body').html('');
                var subtotal = 0;
                $.each(data, function(key,val) {
                    console.log(val);
                    var total = val.price * val.quantity;
                    total = total - val.scrabamount;
                    subtotal = subtotal + total;
                    $('#cart_body').append('<tr><td data-th="Product"><div class="row"><div class="col-sm-3 hidden-xs"><img src="'+val.photo+'" width="100" height="100" class="img-responsive"/></div><div class="col-sm-9"><h4 class="nomargin">'+val.name+'</h4></div></div></td><td style="text-align: center;" data-th="Price">₹'+val.price+'</td><td style="text-align: center;" data-th="Quantity">'+val.quantity+'</td><td style="text-align: center;" data-th="Subtotal" class="text-center">₹<span class="product-subtotal"> '+total+'</span></td></tr>');
                    // $('#cart_body').append('<p>Hello</p>');
                });            
                $('#sum_subtotal').html(subtotal)
                // alert(data);
                $('.cart_total_count').html(total);
                
                $(".toastmessage").fadeIn(700);
                setTimeout(
                    function() {
                        swal({
                            type: "success",
                            title: "Product Added to Cart",
                            timer: 2000,
                            showConfirmButton: false
                          });
                    });
            }
        });
    }
$("#icategory").change(function () {
      // else {
    //     $("#ibrand").show();
    //     $("#imodel").show();
    // }
    if($(this).val() === "1") {
        //console.log('hi');
        $("#ibrand").show();
        $("#imodel").show();
        $(".fueltype").show();
        $("#vbrand").show();
        $("#vmodel").show();

        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "2") {
        //console.log('hi');
        $("#ibrand").show();
        $("#imodel").show();
        $("#vbrand").show();
        $("#vmodel").show();
        $("#fueltype").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "3") {
        $("#vbrand").hide();
        $("#vmodel").hide();
        $("#fueltype").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "4") {
        //console.log('hi');
        $("#vbrand").hide();
        $("#vmodel").hide();
        $("#fueltype").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "5") {
        //console.log('hi');
        $("#vbrand").hide();
        $("#vmodel").hide();
        $("#fueltype").hide();
        //$("#fueltype").css("background-color", "yellow");
     // $.ajax({
     //      url: '<?php echo e(url('get-appliance')); ?>',
     //      method: "GET",
     //      dataType: "json",
     //      success: function (response) { 
     //        //console.log(response);
     //        var obj = response.data;
     //        //console.log(obj);
     //        for (var index = 0; index < obj.length; index++) {
     //          // $("#appliance").append('<input type='text' placeholder='obj[index].name'>');
     //          // var appliancename = obj[index].name;
     //          //  $("#appliance").append('<input type='text' name=' + obj[index].name + '  placeholder=' + appliancename + ' class='dropdownsytyle'>');

     //          $("#appliance").append('<input type = "text" placeholder=' + obj[index].name + ' class="dropdownsytyle" >');
     //        }
     //      }
     //  });
    }

});

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front_end.productheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/products.blade.php ENDPATH**/ ?>