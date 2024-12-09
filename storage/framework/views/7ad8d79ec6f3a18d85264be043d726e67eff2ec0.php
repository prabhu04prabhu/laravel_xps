

<?php $__env->startSection('content'); ?>
<div class="content-page">  
<div class="content">
    <div class="container-fluid">
       <div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Sliders</h4>

</div>
<div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='<?php echo e(url('slider_view')); ?>'">Add New Slider</button>
        </div>
         
     </div>
     
</div>

</div>
</div>
<!-- end row -->
            <?php
            $gallery = DB::table('slider_image')->get();
                ?>
             <div class="row">
                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-md-6">
                <a href="deleteslider&<?php echo e($item->Slider_ID); ?>" class="more-details">Delete</a>
                     <a href="image/<?php echo e($item->image); ?>" class="gallery-popup">
                        <div class="project-item">
                            <div class="overlay-container">
                                <img src="image/<?php echo e($item->image); ?>" alt="img" class="gallery-thumb-img">
                               
                            </div>
                        </div>
                    </a>
                   
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- end col -->
            </div>
            <!-- end row -->      
    </div> 
</div> 
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/uploadedSlider.blade.php ENDPATH**/ ?>