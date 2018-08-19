<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span>Hi, <?php echo e(Auth::user()->name); ?></span>
        <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Product</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('admin.category.index')); ?>">Category <i class="icon-envelope-open"></i></a></li>
                        <li><a href="<?php echo e(route('admin.product.index')); ?>">Product <i class="ti-layout-media-left-alt"></i></a></li>
                    </ul>
                </li>
             
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Account</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('admin.seller.index')); ?>">Seller<i class="ti-align-left"></i></a></li>
                        <li><a href="javascript:void(0)">item 1.2<i class="ti-align-left"></i></a></li>
                        
                        
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>