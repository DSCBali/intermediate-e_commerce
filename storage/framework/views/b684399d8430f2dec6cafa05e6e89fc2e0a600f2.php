<?php $__env->startSection('content'); ?>
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">View Product</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">View Product</li>
            </ol>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                
                <div class="jumbotron">
                    <p>Name Product : <?php echo e($data->name); ?></p>
                    <p>Weigth : <?php echo e($data->weight); ?></p>
                    <p>Stock : <?php echo e($data->stock); ?></p>
                    <p>Price : Rp. <?php echo e($data->price); ?></p>
                    <p>Discount : <?php echo e($data->discount); ?> %</p>
                    <p>Description : <?php echo e($data->description); ?></p>
                    <p>Size : <?php echo e($data->size); ?></p>
                    <p>Color : <?php echo e($data->color); ?></p>
                    <p>Image:</p>
                    <img style="max-width:300px" src="<?php echo e(asset($data->image)); ?>" alt="">   
                </div>
                <a href="<?php echo e(route('admin.product.edit', ['id' => $data->id])); ?>" class="btn btn-success">Edit</a>
                <form class="fix-form" action="<?php echo e(route('admin.product.destroy', ['id' => $data->id])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn waves-effect waves-light btn-sm btn-danger">Delete</button>
                </form>
                <a href="<?php echo e(route('admin.product.index')); ?>" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>