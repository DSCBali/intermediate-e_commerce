@extends('layouts.app')

@section('content')
<div class="container">
    <div id="content">
        <div class="main-content">
            <div>&nbsp;</div>
            <div class="beta-products-list">
                <h4>Top Products</h4>

                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-sm-3 mt30">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="/product/{{str_slug($category->name)}}"><img src="{{asset('assets/shoes.jpg')}}" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$category->name}}</p>
                                    <p class="single-item-price">
                                        <span>Rp.{{$category->price}}</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="/product/{{str_slug($category->name)}}"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="/product/{{str_slug($category->name)}}">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <!-- .beta-products-list -->
            
            <div class="space50">&nbsp;</div>
            <div class="dg">
                <div class="col-4">
                    <div class="beta-banner">
                        <a href="custom_callout_box.html"><img class="h164" src="{{asset('assets/images/banners/banner9.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="beta-banner">
                        <a href="custom_callout_box.html"><img class="h164" src="{{asset('assets/images/banners/banner10.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="beta-banner">
                        <a href="custom_callout_box.html"><img class="h164" src="{{asset('assets/images/banners/banner11.jpg')}}" alt=""></a>
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
            <div class="col-sm-5">
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
            <div class="col-sm-4">
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
            <a href="#"><img src="{{asset('assets/images/pay/master.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('assets/images/pay/pay.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('assets/images/pay/visa.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('assets/images/pay/paypal.jpg')}}" alt="" /></a>
        </p>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .copyright -->
@endsection