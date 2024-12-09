<?php $__env->startSection('content'); ?>

<section class="section-content cardsection cart clear"> 
<aside class="continue-shop">
        <a href="<?php echo e(url('products')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
    </aside>   
    <aside class="cart-product left" id="cart_products">

        <?php $total = 0 ?>
        <?php if(session('cart')): ?>
            <?php $__currentLoopData = (array) session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $total += ($details['price'] * $details['quantity']) - $details['scrabamount']?>

        <article class="clear">
                
            <aside>
                <h3>Item</h3>
                <div class="clear">
                    <figure><img src="<?php echo e($details['photo']); ?>"></figure>
                    <h4><?php echo e($details['name']); ?></h4>
                </div>
            </aside>
            <aside>
                <h3>Quantity</h3>
                <div class="clear">
                    <div class="quantity-center">
                        

                        <span class="value-button" id="decrease" onclick="decreaseValuesPage(<?php echo e($details['productid']); ?>)" data-id="<?php echo e($id); ?>" value="Decrease Value">-</span>
                	<input type="number" class="number" id="number<?php echo e($details['productid']); ?>" value="<?php echo e($details['quantity']); ?>" readonly="true" class="form-control quantity" />
                	<span class="value-button" id="increase" onclick="increaseValuesPage(<?php echo e($details['productid']); ?>)"  data-id="<?php echo e($id); ?>" value="Increase Value">+</span>
                </div>
                    
                </div>
            </aside>
            <aside>
                <h3>Price</h3>
                <div class="clear">
                    <h1>₹ <?php echo e($details['price']); ?></h1>
                </div>
            </aside>
            <aside>
                <h3>Subtotal</h3>
                <div class="clear">
                    <h1>₹ <?php echo e(($details['price'] * $details['quantity']) - $details['scrabamount']); ?></h1>

                    <!-- <button class="btn btn-info btn-sm update-cart" "><i class="fa fa-refresh"></i></button> -->
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="<?php echo e($id); ?>" onclick="remove_from_cart(<?php echo e($id); ?>)"><i class="fa fa-trash-o"></i></button>
                    <!-- <i class="fa fa-circle-o-notch fa-spin btn-loading" style="font-size:24px; display: none"></i> -->

                </div>
            </aside>           

        </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        
        
    </aside>
    <aside class="cart-price right">
        <h2>Total</h2>
        <h3>Sub Total : <span id="cart_subtotal">₹<?php echo e($total); ?></span></h3>
        <h3>Order Total : <span id="cart_total">₹<?php echo e($total); ?></span></h3>
        <!-- <h3 class="hidden-xs text-center"><strong>Total $<span class="cart-total"><?php echo e($total); ?></span></strong></h3> -->
        <a href="#" id="btncontinue">Continue</a>
        <h5>Powered By</h5>
        <img src="assets/front_end/images/razor.png" style="width: 250px;margin: 12px 0;">
    </aside>
</section>

    <span id="status"></span>

   <?php /* <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:40%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:10%">Old Battery(-)</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach((array) session('cart') as $id => $details)

                <?php $total += ($details['price'] * $details['quantity']) - $details['scrabamount']?>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">₹{{ $details['price'] }}</td>
                    <td data-th="Quantity" style="text-align:center;">
                    <span class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</span>
                	<input type="number" id="number" value="{{ $details['quantity'] }}" readonly="true" class="form-control quantity" />
                	<span class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</span>
                        <!-- <input type="number" value="{{ $details['quantity'] }}"  class="form-control quantity" /> -->
                    </td>
                    <td data-th="scrap">₹{{ $details['scrabamount'] }}</td>

                    <td data-th="Subtotal" class="text-center">₹<span class="product-subtotal">{{ ($details['price'] * $details['quantity']) -$details['scrabamount'] }}</span></td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                        <i class="fa fa-circle-o-notch fa-spin btn-loading" style="font-size:24px; display: none"></i>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total $<span class="cart-total">{{ $total }}</span></strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total $<span class="cart-total">{{ $total }}</span></strong></td>
            <td colspan="2" class="hidden-xs"><button class="btn btn-info" id="btncontinue">Continue</button></td>
        </tr>
        
        </tfoot>
    </table> */ ?>
    <script type="text/javascript">
$("#btncontinue").click(function (e) {
     
    var iuserid = '<?php echo (Session::get('id')); ?>';
    if( iuserid != '')
    {
        window.location = '<?php echo e(url('checkout')); ?>';
    }
    else
    {
        <?php (Session::put('pagename', 1)); ?>
        window.location = '<?php echo e(url('login-and-register')); ?>';
    }

});

        $(".update-cart").click(function (e) 
        {
            e.preventDefault();

            var ele = $(this);

            var parent_row = ele.parents("article");

            var product_subtotal = parent_row.find("span.product-subtotal");

            var cart_total = $(".cart-total");

            var loading = parent_row.find(".btn-loading");

            loading.show();

            console.log("id: " +  ele.attr("data-id") + " quantity : " +  $("#number"+ele.attr("data-id")).val());

            $.ajax({
                url: '<?php echo e(url('update-cart')); ?>',
                method: "patch",
                data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id"), quantity: $("#number"+ele.attr("data-id")).val()},
                dataType: "json",
                success: function (response) {

                    loading.hide();

                    $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');

                    $("#header-bar").html(response.data);

                    product_subtotal.text(response.subTotal);

                    cart_total.text(response.total);
                    // location.reload();
                }
            });
        });

        // $(".remove-from-cart").click(function (e) {
        //     e.preventDefault();

        //     var ele = $(this);

        //     var parent_row = ele.parents("aside");

        //     var cart_total = $(".cart-total");

        //     if(confirm("Are you sure delete this product?")) {
        //         $.ajax({
        //             url: '<?php echo e(url('remove-from-cart')); ?>',
        //             method: "DELETE",
        //             data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id")},
        //             dataType: "json",
        //             success: function (response) {
        //                 // console.log(response);
        //                 $('#cart_products').empty();
        //                 console.log(response);
        //                 var data = response.data;
        //                 $('#cart_total').html('₹ '+response.total);
        //                 $('#cart_subtotal').html('₹ '+response.total);
        //                 $.each(data,function(key,val){
        //                     $('#cart_products').append('<article class="clear"><aside><h3>Item</h3><div class="clear"><figure><img src="'+val.photo+'"></figure><h4>'+val.name+'</h4></div></aside><aside><h3>Quantity</h3><div class="clear"><div class="quantity-center"><span class="value-button" id="decrease" onclick="decreaseValuesPage('+val.productid+')" data-id="'+val.productid+'" value="Decrease Value">-</span><input type="number" class="number" id="number'+val.productid+'" value="'+val.quantity+'" readonly="true" class="form-control quantity" /><span class="value-button" id="increase" onclick="increaseValuesPage('+val.productid+')"  data-id="'+val.productid+'" value="Increase Value">+</span></div></div></aside><aside><h3>Price</h3><div class="clear"><h1>₹ '+val.price+'</h1></div></aside><aside><h3>Subtotal</h3><div class="clear"><h1>₹  '+Number((Number(val.price) * Number(val.quantity) - Number(val.scrabamount)))+' </h1><button class="btn btn-danger btn-sm remove-from-cart" data-id="'+val.productid+'"><i class="fa fa-trash-o"></i></button></div></aside></article>');
        //                 })

        //                 $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');

        //                 $("#header-bar").html(response.data);

        //                 cart_total.text(response.total);
        //             }
        //         });
        //     }
        // });

    </script>
    
    <script>
        function remove_from_cart(id){
            if(confirm("Are you sure delete this product?")) {
                $.ajax({
                    url: '<?php echo e(url('remove-from-cart')); ?>',
                    method: "DELETE",
                    data: {_token: '<?php echo e(csrf_token()); ?>', id: id},
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        $('#cart_products').empty();
                        console.log(response);
                        var data = response.data;
                        $('#cart_total').html('₹ '+response.total);
                        $('#cart_subtotal').html('₹ '+response.total);
                        $.each(data,function(key,val){
                            $('#cart_products').append('<article class="clear"><aside><h3>Item</h3><div class="clear"><figure><img src="'+val.photo+'"></figure><h4>'+val.name+'</h4></div></aside><aside><h3>Quantity</h3><div class="clear"><div class="quantity-center"><span class="value-button" id="decrease" onclick="decreaseValuesPage('+val.productid+')" data-id="'+val.productid+'" value="Decrease Value">-</span><input type="number" class="number" id="number'+val.productid+'" value="'+val.quantity+'" readonly="true" class="form-control quantity" /><span class="value-button" id="increase" onclick="increaseValuesPage('+val.productid+')"  data-id="'+val.productid+'" value="Increase Value">+</span></div></div></aside><aside><h3>Price</h3><div class="clear"><h1>₹ '+val.price+'</h1></div></aside><aside><h3>Subtotal</h3><div class="clear"><h1>₹  '+Number((Number(val.price) * Number(val.quantity) - Number(val.scrabamount)))+' </h1><button class="btn btn-danger btn-sm remove-from-cart" data-id="'+val.productid+'" onclick="remove_from_cart('+val.productid+')"><i class="fa fa-trash-o"></i></button></div></aside></article>');
                        })

                        $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');

                        $("#header-bar").html(response.data);

                        cart_total.text(response.total);
                    }
                });
            }
        }
        function increaseValuesPage(id) {
            var value = parseInt(document.getElementById('number'+id).value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number'+id).value = value;

            $.ajax({
                url: '<?php echo e(url('update-cart')); ?>',
                method: "patch",
                data: {_token: '<?php echo e(csrf_token()); ?>', id: id, quantity: $("#number"+id).val()},
                dataType: "json",
                success: function (response) {
                    $('#cart_products').empty();
                    console.log(response);
                    var data = response.data;
                    $('#cart_total').html('₹ '+response.total);
                    $('#cart_subtotal').html('₹ '+response.total);
                    $.each(data,function(key,val){
                        $('#cart_products').append('<article class="clear"><aside><h3>Item</h3><div class="clear"><figure><img src="'+val.photo+'"></figure><h4>'+val.name+'</h4></div></aside><aside><h3>Quantity</h3><div class="clear"><div class="quantity-center"><span class="value-button" id="decrease" onclick="decreaseValuesPage('+val.productid+')" data-id="'+val.productid+'" value="Decrease Value">-</span><input type="number" class="number" id="number'+val.productid+'" value="'+val.quantity+'" readonly="true" class="form-control quantity" /><span class="value-button" id="increase" onclick="increaseValuesPage('+val.productid+')"  data-id="'+val.productid+'" value="Increase Value">+</span></div></div></aside><aside><h3>Price</h3><div class="clear"><h1>₹ '+val.price+'</h1></div></aside><aside><h3>Subtotal</h3><div class="clear"><h1>₹  '+Number((Number(val.price) * Number(val.quantity) - Number(val.scrabamount)))+' </h1><button class="btn btn-danger btn-sm remove-from-cart" data-id="'+val.productid+'" onclick="remove_from_cart('+val.productid+')"><i class="fa fa-trash-o"></i></button></div></aside></article>');
                    })
                    
                }
            });
        }

        function decreaseValuesPage(id) {
            var value = parseInt(document.getElementById('number'+id).value, 10);
            value = isNaN(value) ? 1 : value;
            value < 2 ? value = 2 : '';
            value--;
            document.getElementById('number'+id).value = value;

            $.ajax({
                url: '<?php echo e(url('update-cart')); ?>',
                method: "patch",
                data: {_token: '<?php echo e(csrf_token()); ?>', id: id, quantity: $("#number"+id).val()},
                dataType: "json",
                success: function (response) {
                    $('#cart_products').empty();
                    console.log(response.data);
                    var data = response.data;
                    
                    $.each(data,function(key,val){
                        $('#cart_products').append('<article class="clear"><aside><h3>Item</h3><div class="clear"><figure><img src="'+val.photo+'"></figure><h4>'+val.name+'</h4></div></aside><aside><h3>Quantity</h3><div class="clear"><div class="quantity-center"><span class="value-button" id="decrease" onclick="decreaseValuesPage('+val.productid+')" data-id="'+val.productid+'" value="Decrease Value">-</span><input type="number" class="number" id="number'+val.productid+'" value="'+val.quantity+'" readonly="true" class="form-control quantity" /><span class="value-button" id="increase" onclick="increaseValuesPage('+val.productid+')"  data-id="'+val.productid+'" value="Increase Value">+</span></div></div></aside><aside><h3>Price</h3><div class="clear"><h1>₹ '+val.price+'</h1></div></aside><aside><h3>Subtotal</h3><div class="clear"><h1>₹  '+Number((Number(val.price) * Number(val.quantity) - Number(val.scrabamount)))+' </h1><button class="btn btn-danger btn-sm remove-from-cart" data-id="'+val.productid+'" onclick="remove_from_cart('+val.productid+')"><i class="fa fa-trash-o"></i></button></div></aside></article>');
                    })

                    $('#cart_total').html('₹ '+response.total);
                    $('#cart_subtotal').html('₹ '+response.total);
                    
                }
            });
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/cart_view.blade.php ENDPATH**/ ?>