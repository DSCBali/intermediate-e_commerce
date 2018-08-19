<?php $__env->startSection('content'); ?>
<div class="container">
    <div id="content">
        <div class="main-content">
            <div class="dg">
                <div class="col-4 wow fadeInDown">
                    <div class="beta-banner">
                        <img src="<?php echo e(asset('assets/images/banners/banner6.jpg')); ?>" alt="">
                        <h2 
                            class="beta-banner-layer text-right"
                            data-animo='{
                                "duration" : 1000,
                                "delay" : 100,
                                "easing" : "easeOutSine",
                                "template" : {
                                    "opacity" : [0, 1],
                                    "top" : [30, 30, "px"],
                                    "right" : [-300, 25, "px"]
                                }
                            }'
                        >Sofas</h2>
                        <p 
                            class="beta-banner-layer text-right"
                            data-animo='{
                                "duration" : 1000,
                                "delay" : 400,
                                "easing" : "easeOutSine",
                                "template" : {
                                    "opacity" : [0, 1],
                                    "top" : [80, 80, "px"],
                                    "right" : [-300, 25, "px"]
                                }
                            }'
                        >Nemo enim ipsam <br /> voluptatem quia</p>
                        <a 
                            class="beta-banner-layer beta-btn text-right banner-color" 
                            href="product.html"
                            data-animo='{
                                "duration" : 1000,
                                "delay" : 300,
                                "easing" : "easeOutSine",
                                "template" : {
                                    "opacity" : [0, 1],
                                    "bottom" : [25, 25, "px"],
                                    "right" : [-300, 25, "px"]
                                }
                            }'
                        >Shop Now</a>
                    </div>
                </div>
                <div class="col-4 wow fadeInDown">
                    <div class="beta-banner">
                        <img src="<?php echo e(asset('assets/images/banners/banner7.jpg')); ?>" alt="">
                        <h2 
                            class="beta-banner-layer text-right"
                            data-animo='{
                                "duration" : 1000,
                                "delay" : 100,
                                "easing" : "easeOutSine",
                                "template" : {
                                    "opacity" : [0, 1],
                                    "top" : [30, 30, "px"],
                                    "right" : [-300, 25, "px"]
                                }
                            }'
                        >Chairs</h2>
                        <p 
                            class="beta-banner-layer text-right"
                            data-animo='{
                                "duration" : 1000,
                                "delay" : 400,
                                "easing" : "easeOutSine",
                                "template" : {
                                    "opacity" : [0, 1],
                                    "top" : [80, 80, "px"],
                                    "right" : [-300, 25, "px"]
                                }
                            }'
                        >Nemo enim ipsam <br /> voluptatem quia</p>
                        <a 
                            class="beta-banner-layer beta-btn text-right banner-color" 
                            href="product.html"
                            data-animo='{
                                "duration" : 1000,
                                "delay" : 300,
                                "easing" : "easeOutSine",
                                "template" : {
                                    "opacity" : [0, 1],
                                    "bottom" : [25, 25, "px"],
                                    "right" : [-300, 25, "px"]
                                }
                            }'
                        >Shop Now</a>
                    </div>
                </div>
                <div class="col-4 wow fadeInDown">
                    <div class="beta-banner">
                        <img src="<?php echo e(asset('assets/images/banners/banner8.jpg')); ?>" alt="">
                        <h2 
                            class="beta-banner-layer text-right"
                            data-animo='{
                                "duration" : 1000,
                                "delay" : 100,
                                "easing" : "easeOutSine",
                                "template" : {
                                    "opacity" : [0, 1],
                                    "top" : [30, 30, "px"],
                                    "right" : [-300, 25, "px"]
                                }
                            }'
                        >Light</h2>
                        <p 
                            class="beta-banner-layer text-right"
                            data-animo='{
                                "duration" : 1000,
                                "delay" : 400,
                                "easing" : "easeOutSine",
                                "template" : {
                                    "opacity" : [0, 1],
                                    "top" : [80, 80, "px"],
                                    "right" : [-300, 25, "px"]
                                }
                            }'
                        >Nemo enim ipsam <br /> voluptatem quia</p>
                        <a 
                            class="beta-banner-layer beta-btn text-right banner-color" 
                            href="product.html"
                            data-animo='{
                                "duration" : 1000,
                                "delay" : 300,
                                "easing" : "easeOutSine",
                                "template" : {
                                    "opacity" : [0, 1],
                                    "bottom" : [25, 25, "px"],
                                    "right" : [-300, 25, "px"]
                                }
                            }'
                        >Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="space50">&nbsp;</div>
            <div class="beta-products-list">
                <h4 class="wow fadeInLeft">New Products</h4>
                <div class="beta-products-details">
                    <p class="pull-left">438 styles found | <a href="#">View all</a></p>
                    <p class="pull-right">
                        <span class="sort-by">Sort by </span>
                        <select name="sortproducts" class="beta-select-primary">
                            <option value="desc">Latest</option>
                            <option value="popular">Popular</option>
                            <option value="rating">Rating</option>
                            <option value="best">Best</option>
                        </select>
                    </p>
                    <div class="clearfix"></div>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-3">
                            <div class="single-item">
                                <div class="ribbon-wrapper"><div class="ribbon">New!</div></div>
    
                                <div class="single-item-header">
                                <a href=""><img src="<?php echo e(asset('assets/images/products/home_2/1.jpg')); ?>" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title"><?php echo e($data->name); ?></p>
                                    <p class="single-item-price">
                                        <span>Rp. <?php echo e(number_format($data->price, 2)); ?></span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="<?php echo e(route('user.show', ['id' => $data->id])); ?>">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div> <!-- .beta-products-list -->

            <div class="space50">&nbsp;</div>
            <div class="beta-products-list">
                <h4>Top Products</h4>

                

               
            
            <div class="space50">&nbsp;</div>
            <div class="dg">
                <div class="col-4">
                    <div class="beta-banner">
                        <a href="custom_callout_box.html"><img class="h164" src="<?php echo e(asset('assets/images/banners/banner9.jpg')); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="beta-banner">
                        <a href="custom_callout_box.html"><img class="h164" src="<?php echo e(asset('assets/images/banners/banner10.jpg')); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="beta-banner">
                        <a href="custom_callout_box.html"><img class="h164" src="<?php echo e(asset('assets/images/banners/banner11.jpg')); ?>" alt=""></a>
                    </div>
                </div>
            </div>

        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->

<div id="footer" class="color-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Instagram Feed</h4>
                    <div id="beta-instagram-feed"><div></div></div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="widget">
                    <h4 class="widget-title">Information</h4>
                    <div>
                        <ul>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
              <div class="col-sm-10">
                <div class="widget">
                    <h4 class="widget-title">Contact Us</h4>
                    <div>
                        <div class="contact-info">
                            <i class="fa fa-map-marker"></i>
                            <p>30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Newsletter Subscribe</h4>
                    <form action="#" method="post">
                        <input type="email" name="your_email">
                        <button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
                    </form>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer -->
<div class="copyright">
    <div class="container">
        <p class="pull-left">Privacy policy. (&copy;) 2014</p>
        <p class="pull-right pay-options">
            <a href="#"><img src="<?php echo e(asset('assets/images/pay/master.jpg')); ?>" alt="" /></a>
            <a href="#"><img src="<?php echo e(asset('assets/images/pay/pay.jpg')); ?>" alt="" /></a>
            <a href="#"><img src="<?php echo e(asset('assets/images/pay/visa.jpg')); ?>" alt="" /></a>
            <a href="#"><img src="<?php echo e(asset('assets/images/pay/paypal.jpg')); ?>" alt="" /></a>
        </p>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .copyright -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>