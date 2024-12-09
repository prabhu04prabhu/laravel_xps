 <?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Edit Testimonial</h4>

                    </div>
                    <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
                        
                                
                                    
                                 
                             </div>
                             
                        </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if(\Session::has('success')): ?>
                            <div class="alert alert-success">

                                <?php echo \Session::get('success'); ?>


                            </div>
                            <?php endif; ?>

                            <?php
                                $id = $_GET['id'];
                                $result = DB::table('testimonial')->where('t_id', $id)->get();
                                foreach ($result as $row) {
                                   $name = $row->name;
                                   $content = $row->content;
                                   $designation = $row->designation;
                                   $image = $row->image;
                                }
                            ?>
                            <div class="m-b-30">
                                <form id="form" action="<?php echo e(url('edit_testimonial_new')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input required type="text" class="form-control" name="name" value="<?php echo e($name); ?>"> 
                                        </div>
                                    </div>
                            <input type="hidden" name="hidden_id" value="<?php echo e($id); ?>">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Designation</label>
                                            <input required type="text" class="form-control" name="designation" value="<?php echo e($designation); ?>"> 
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Choose Image</label>
                                                        <input type="file" class="form-control" name="images[]" accept=".jpg,.png,.gif,.jpeg" value="">  
                                                    </div>
                                                    <p id="error1" style="display:none; color:#FF0000;">Invalid File! File Format Must Be jpg, jpeg, png.</p>
                                                    <p id="error2" style="display:none; color:#FF0000;">Maximum File Size Limit is 500kb.</p>
                                                    <p style="color: red;">Note:<br>
                                                        Accept Files: .png,.jpg,.jpeg<br>
                                                        File size: 600px * 600px</p>
                                                   
                                                </div>

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Content</label>

                                                    <textarea cols="10" rows="4" class="form-control" name="content"><?php echo e($content); ?></textarea>
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                    <a href="image/<?php echo e($image); ?>" target="_blank"><img src="image/<?php echo e($image); ?>" alt="" srcset="" class="edit-img" width="150px" height="150px"></a>
                                                    <!-- <?php if(!empty($image)): ?>
                                                    <button type="button" onclick="window.location.href='delete_testimonial_image&<?php echo e($id); ?>'">Delete</button>
                                                    <?php endif; ?> -->
                                                   
                                                </div>
                                                
                                        <div class="col-md-6"></div>

                                </div><br/>
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>

                                            <button type="button" class="btn btn-success"  onclick="window.history.back();">Back</button>
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
<!-- <script type="text/javascript">

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
        if (width == 600 && height == 600) {
            form.submit();
        } else {
            alert("The image resolution is too low.");
        }
        }
    }
});
</script> -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/edit_testimonial.blade.php ENDPATH**/ ?>