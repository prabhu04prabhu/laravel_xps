
<?php $__env->startSection('content'); ?>
<div class="content-page">  
            <div class="content">
                <div class="container-fluid">
                   <div class="page-title-box">
    <div class="row align-items-center">
         <div class="col-sm-6">
    <h4 class="page-title">Edit Gallery</h4>
    
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

                                            <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

                                            <h4 class="mt-0 header-title">Choose Category</h4>
<form action="<?php echo e(url('cat_search')); ?>" method="post">
    <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                    <select class="form-control" name="cat_id_hidden">
                                                        <?php
                                                            $cat_select = DB::table('gallery_category')->get();
                                                        ?>
                                                        <?php $__currentLoopData = $cat_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($row->cat_id); ?>"><?php echo e($row->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <button type="submit" class="btn btn-success">Search</button>
                                                    </div>
                                                    </div>
                                                </div>
                                           
                                            </form>
                                        <?php 
                                        $cat_id = '';
                                        $cat_name = '';
                                        if(isset($result))
                                        {
                                            foreach ($result as $item) {
                                                $cat_name = $item->name;
                                                $cat_id = $item->cat_id;
                                            }
                                        }?>
                                            <h4 class="mt-0 header-title">Chosen Category Name</h4>
                                            <p class="text-muted m-b-30" style="color: black !important;"><?php if(!empty($cat_name)){echo $cat_name;} ?></p>
                                        <?php if(!empty($cat_name)){ ?>
                                        <a href="edit_category?id=<?php echo $cat_id; ?>" class="btn btn-info">Edit Category</a>
                                        <?php } ?>
                                        <br>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr style="text-align:center">
                                                <th style="width:12px">S.No</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>

                                             
                                                <?php $i = 1; ?>
                                                <?php if(isset($result)): ?>
                                                  <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr style="text-align:center">
                                               
                                                <td><?php echo e($i); ?></td>
                                                <td><a href="image/<?php echo e($item->image); ?>" target="_blank"><img src="image/<?php echo e($item->image); ?>" alt="" srcset="" height="52px" width="52px"></a></td>
                                               
                                                <td>
                                                  <a href="delete_image&<?php echo e($item->id); ?>"  class="btn btn-success">Delete</a>
                                                </td>
                                          
                                            </tr>
                                      
                                            <?php $i++; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>  
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                            
                </div> 
            </div> 
        </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/edit_gallery.blade.php ENDPATH**/ ?>