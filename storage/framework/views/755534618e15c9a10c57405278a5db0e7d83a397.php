<?php $__env->startSection('content'); ?>
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Create Seller</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Create Seller</li>
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
                <form action="<?php echo e(route('admin.seller.store')); ?>" class="needs-validation" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                <div class="col-12">
                                    <input class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" type="text" value="<?php echo e(old('name')); ?>" name="name">
                                    <?php if($errors->has('name')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('name')); ?>

                                    </div> 
                                    <?php endif; ?>
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <div class="row">
                                <label for="email" class="col-2 col-form-label">Email</label>
                                <div class="col-12">
                                    <input class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" id="email" type="email" value="<?php echo e(old('email')); ?>" name="email">
                                    <?php if($errors->has('email')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('email')); ?>

                                    </div> 
                                    <?php endif; ?>
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Password</label>
                                <div class="col-12">
                                    <input class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>" type="password" value="" name="password">
                                    <?php if($errors->has('password')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('password')); ?>

                                    </div> 
                                    <?php endif; ?>
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="<?php echo e(route('admin.seller.index')); ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>