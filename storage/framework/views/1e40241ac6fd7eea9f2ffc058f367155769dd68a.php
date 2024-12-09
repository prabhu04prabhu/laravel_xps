

<?php $__env->startSection('content'); ?>
<div class="content-page">  
<div class="content">
    <div class="container-fluid">
       <div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Gallery</h4>

</div>
<div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='<?php echo e(url('multipleimage')); ?>'">Add New Image</button>
                    <button type="button" class="btn btn-secondary waves-effect" onclick="window.location.href='<?php echo e(url('editImage')); ?>'" >Edit</button>
             
        </div>
         
     </div>
     
</div>

</div>
</div>
<!-- end row -->
            <?php

              $gallery = DB::table('gallery_category')->select("gallery_category.*", DB::raw("(SELECT image FROM images WHERE images.cat_id = gallery_category.cat_id limit 1) as image"))->get();

                ?>
             <div class="row">
                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-md-6">
                    <h6 style="text-align: center;"><?php echo e($item->name); ?></h6>
                     <a href="image/<?php echo e($item->image); ?>" class="gallery-popup">
                   <!--  <a href="gallery_view&<?php echo e($item->cat_id); ?>" class="gallery-popup"> -->
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
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/uploadedImage.blade.php ENDPATH**/ ?>