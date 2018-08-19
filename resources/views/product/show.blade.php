@extends('layouts.app')

@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Product</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="index.html">Home</a> / <span>Product</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-10 beta-coming">

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{asset('assets/shoes.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">{{$product[0]->name}}
                                <p class="single-item-price">
                                    <span>Rp. {{$product[0]->price}}</span>
                                </p>
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>

                            <div class="single-item-desc">
                                <p>{{$product[0]->description}}</p>
                            </div>
                            <div class="space20">&nbsp;</div>
                            <form action="/transaction" method="POST">
                                @crsf
                                <p>Options:</p>
                                <div class="single-item-options">
                                    <select class="wc-select" name="size">
                                        <option>Size</option>
                                        @foreach($size as $weight)
                                            <option value="{{$weight->weight}}">{{$weight->weight}}</option>
                                        @endforeach
                                    </select>
                                    <select class="wc-select" name="qty">
                                        <option>Qty</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <button type="submit" class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description">Description</a></li>
                        </ul>

                        <div class="panel" id="tab-description">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                            <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                        </div>
                            <p>No Reviews</p>
                        </div>
                    </div>
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>Related Products</h4>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="/product/shoes-{{rand(0,9)}}"><img class="center" src="{{asset('assets/shoes.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Shoes {{rand(0,9)}}</p>
                                        <p class="single-item-price">
                                            <span>Rp. {{rand(75, 300)}}000</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="/product/shoes-{{rand(0,9)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="/product/shoes-{{rand(0,9)}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="/product/shoes-{{rand(0,9)}}"><img class="center" src="{{asset('assets/shoes.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Shoes {{rand(0,9)}}</p>
                                        <p class="single-item-price">
                                            <span>Rp. {{rand(75, 300)}}000</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="/product/shoes-{{rand(0,9)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="/product/shoes-{{rand(0,9)}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="/product/shoes-{{rand(0,9)}}"><img class="center" src="{{asset('assets/shoes.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Shoes {{rand(0,9)}}</p>
                                        <p class="single-item-price">
                                            <span>Rp. {{rand(75, 300)}}000</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="/product/shoes-{{rand(0,9)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="/product/shoes-{{rand(0,9)}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div>
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