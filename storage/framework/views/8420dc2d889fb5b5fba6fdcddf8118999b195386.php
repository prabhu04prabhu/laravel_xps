 <?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">File Upload</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if(\Session::has('success')): ?>
                            <div class="alert alert-success">

                                <?php echo \Session::get('success'); ?>


                            </div>
                            <?php endif; ?>

                           <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <div class="m-b-30">
                                <form id="form" action="<?php echo e(url('multiplesliderupload')); ?>" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Choose Image</label>
                                                <input required type="file"   accept=".jpg,.png,.gif,.jpeg" class="form-control" name="images[]" multiple>
                                            </div>
                                            <p style="color: red;">Note:<br/>
                                                Accept Files: .png,.jpg,.jpeg<br/>
                                                File size: 1920px * 600px</p>
                                        </div>
                                </div>
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>

                                            <button  class="btn btn-success" onclick="window.history.back();">Back</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>

<script type='text/javascript' src='assets/front_end/js/jquery.js'></script>
<script type="text/javascript">

$("#form").submit(function(event) {
    var form = this;
        event.preventDefault(); //Stop the submit for now

        var fileInput = $(this).find("input[type=file]")[0],
        file = fileInput.files && fileInput.files[0];
    if( file ) {
        var img = new Image();
        img.src = window.URL.createObjectURL( file );
       
        img.onload = function() {
            var width = img.naturalWidth,
                height = img.naturalHeight;
        if (width == 1920 && height == 600) {
            form.submit();
        } else {
            alert("The image resolution is too low.");
        }
        }
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/slider_view.blade.php ENDPATH**/ ?>