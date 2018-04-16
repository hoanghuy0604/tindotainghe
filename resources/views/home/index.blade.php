@extends('home.layout')
@section('des')
@endsection
@section('key')
@endsection
@section('slider')

    <section id="slider"><!--slider-->
        <div class="">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @if(isset($slider))
                                @foreach($slider as $sl)
                                    <div class="item @if($sl->active == 1) active @endif">
                                        {{--<div class="col-sm-3" style="text-align: center">--}}
                                            {{--<h2><span style="color: orange">SHOP<br><br></span>TÍN ĐỒ SONY</h2><br>--}}
                                            {{--<h3>{{$sl->name}}</h3>--}}
                                            {{--<p>{{ $sl->description }}</p>--}}
                                            {{--<a class="btn btn-default get" href="{{$sl->link}}">Xem</a>--}}
                                        {{--</div>--}}
                                        <div class="col-sm-11" style="padding-right: 15px">
                                            <a href="{{$sl->link}}">
                                                <img src="{{$sl->images}}" class="girl img-responsive" alt="{{$sl->name}}" style="width: 100%"/>
                                            </a>
                                            {{--<img src="images/home/pricing.png"  class="pricing" alt="" />--}}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <br>
                        {{--<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">--}}
                            {{--<i class="fa fa-angle-left"></i>--}}
                        {{--</a>--}}
                        {{--<a href="#slider-carousel" class="right control-carousel hidden-xs" style="padding-left: 30px" data-slide="next">--}}
                            {{--<i class="fa fa-angle-right"></i>--}}
                        {{--</a>--}}
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
@endsection

@section('content')

    <div class="col-md-12 padding-right col-lg-12">
        <div class="features_items" style="padding-top: 7px"><!--features_items-->
            <h2 class="title text-center">Sản phẩm Nổi Bật</h2>
            @if(isset($productHot))
                @foreach($productHot as $index => $pd)
                    <div class="col-sm-3 col-xs-6">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="/{{$pd->id}}/{{$pd->link}}"><img style="max-height: 175px" src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                    @if(($pd->price_sale))
                                        <h4>  <span style="color: red;">{{number_format($pd->price_sale, 0, ',', '.')}} đ </span><span style="text-decoration: line-through; color: #CCCCCC">{{number_format($pd->price, 0, ',', '.')}} đ</span></h4>
                                    @else
                                        <h4><span style="color: red;">{{number_format($pd->price, 0, ',', '.')}} đ</span></h4>
                                    @endif
                                    <a href="/{{$pd->id}}/{{$pd->link}}">@if(isset($pd->name))<h5 style="color: black">{{$pd->name}}</h5>@endif</a>
                                    <div class="clearfix"></div>
                                    </br>
                                </div>
                                @if(isset($pd->new))
                                    <img src="/images/home/new.png" class="new" alt="" />
                                @endif
                                @if(isset($pd->sale))
                                    <img src="/images/home/sale.png" class="new" alt="" />
                                @endif
                            </div>
                                </br>
                            <div class="col-md-12 col-lg-12 group-cart">
                                <div class="desktop-right">
                                    @if($pd->shopee)
                                        <a class="btn btn-xs btn-shopee" href="{{$pd->shopee}}">
                                            <i class="fa fa-shopping-cart"></i>
                                            Qua Shopee
                                        </a>
                                    @endif
                                </div>
                                <div class="desktop-right">
                                    <br>
                                    @if($pd->lazada)
                                        <a class="btn btn-xs bg-red" style="background-color: #bc5a20" href="{{$pd->lazada}}">
                                            <i class="fa fa-shopping-cart"></i>
                                            Qua Lazada
                                        </a>
                                    @endif
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    {{--@if($index == 3)--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--@endif--}}
                    {{--@if($index == 7)--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--@endif--}}
                @endforeach
            @endif
        </div><!--features_items-->

        <div class="recommended_items" style="padding-top: 7px"><!--recommended_items-->
            <h2 class="title text-center">Sản Phẩm Bán Chạy</h2>
            @if(isset($productTop))
                @foreach($productTop as $index => $pd)
                    <div class="col-sm-3 col-xs-6">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="/{{$pd->id}}/{{$pd->link}}"><img style="max-height: 175px" src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                    @if(($pd->price_sale))
                                        <h4>  <span style="color: red;">{{number_format($pd->price_sale, 0, ',', '.')}} đ </span><span style="text-decoration: line-through; color: #CCCCCC">{{number_format($pd->price, 0, ',', '.')}} đ</span></h4>
                                    @else
                                        <h4><span style="color: red;">{{number_format($pd->price, 0, ',', '.')}} đ</span></h4>
                                    @endif
                                    <a href="/{{$pd->id}}/{{$pd->link}}">@if(isset($pd->name))<h5 style="color: black">{{$pd->name}}</h5>@endif</a>
                                    <div class="clearfix"></div>
                                    </br>
                                </div>
                                @if(isset($pd->new))
                                    <img src="/images/home/new.png" class="new" alt="" />
                                @endif
                                @if(isset($pd->sale))
                                    <img src="/images/home/sale.png" class="new" alt="" />
                                @endif
                            </div>
                            </br>
                            <div class="col-md-12 col-lg-12 group-cart">
                                <div class="desktop-right">
                                    @if($pd->shopee)
                                        <a class="btn btn-xs  btn-shopee" href="{{$pd->shopee}}">
                                            <i class="fa fa-shopping-cart"></i>
                                            Qua Shopee
                                        </a>
                                    @endif
                                </div>
                                <div class="desktop-right">
                                    <br>
                                    @if($pd->lazada)
                                        <a class="btn btn-xs  bg-red" href="{{$pd->lazada}}">
                                            <i class="fa fa-shopping-cart"></i>
                                            Qua Shopee
                                        </a>
                                    @endif
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    {{--@if($index == 2)--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--@endif--}}
                    {{--@if($index == 5)--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--@endif--}}
                @endforeach
            @endif
        </div><!--/recommended_items-->
    </div>
    <div class="col-md-12 col-lg-12 padding-right">
        <div class="col-md-8 padding-right col-lg-9">
        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#new" data-toggle="tab">Sản phẩm mới về</a></li>
                    <li><a href="#high" data-toggle="tab">Top sản phẩm cao cấp </a></li>
                    <li><a href="#cheap" data-toggle="tab">Sản phẩm giá rẻ</a></li>
                    <li><a href="#speaker" data-toggle="tab">Loa</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="new" >
                        @if(isset($productNew))
                            @foreach($productNew as $pd)
                            <div class="col-sm-3 col-xs-6">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/{{$pd->id}}/{{$pd->link}}"><img style="max-height: 115px" src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                            <div style="padding: 5%;height: 100px">
                                            @if(($pd->price_sale))
                                                <span style="color: red;font-size: large">{{number_format($pd->price_sale, 0, ',', '.')}} đ </span><span style="text-decoration: line-through; color: #CCCCCC">{{number_format($pd->price, 0, ',', '.')}} đ</span>
                                            @else
                                                <span style="color: red;font-size: large">{{number_format($pd->price, 0, ',', '.')}} đ</span>
                                            @endif
                                            <a href="/{{$pd->id}}/{{$pd->link}}">@if(isset($pd->name))<h5 style="color: black">{{$pd->name}}</h5>@endif</a>
                                            </div>
                                            <hr>
                                            {{--<a href="#" class="btn btn-xs btn-default add-to-cart" data-toggle="modal" data-target=".lh"><i class="fa fa-shopping-cart"></i>Liên Hệ</a>--}}
                                            @if($pd->shopee)
                                                <a class="btn btn-xs add-to-cart btn-shopee" href="{{$pd->shopee}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Qua Shopee
                                                </a>
                                            @endif
                                            @if($pd->lazada)
                                                <br>
                                                <a class="btn btn-xs add-to-cart  bg-red" href="{{$pd->lazada}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Qua Lazada
                                                </a>
                                            @endif
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                </div>
                            @endforeach
                        @endif
                </div>
                <div class="tab-pane fade in" id="speaker" >
                    @if(isset($speaker))
                        @foreach($speaker as $pd)
                            <div class="col-sm-3 col-xs-6">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/{{$pd->id}}/{{$pd->link}}"><img style="max-height: 115px" src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                            <div style="padding: 5%;height: 100px">
                                                @if(($pd->price_sale))
                                                    <span style="color: red;font-size: large">{{number_format($pd->price_sale, 0, ',', '.')}} đ </span><span style="text-decoration: line-through; color: #CCCCCC">{{number_format($pd->price, 0, ',', '.')}} đ</span>
                                                @else
                                                    <span style="color: red;font-size: large">{{number_format($pd->price, 0, ',', '.')}} đ</span>
                                                @endif
                                                <a href="/{{$pd->id}}/{{$pd->link}}">@if(isset($pd->name))<h5 style="color: black">{{$pd->name}}</h5>@endif</a>
                                            </div>
                                            <hr>
                                            @if($pd->shopee)
                                                <a class="btn btn-xs add-to-cart  btn-shopee" href="{{$pd->shopee}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Qua Shopee
                                                </a>
                                            @endif
                                            @if($pd->lazada)
                                                <br>
                                                <a class="btn btn-xs add-to-cart bg-red" href="{{$pd->lazada}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Qua Lazada
                                                </a>
                                            @endif
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="tab-pane fade" id="high" >
                    @if(isset($productCC))
                        @foreach($productCC as $pd)
                            <div class="col-sm-3 col-xs-6">
                                <div class="product-image-wrapper">
                                    <div class="productinfo text-center">
                                        <a href="/{{$pd->id}}/{{$pd->link}}"><img style="max-height: 115px" src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                        <div style="padding: 5%;height: 100px">
                                            @if(($pd->price_sale))
                                                <span style="color: red;font-size: large">{{number_format($pd->price_sale, 0, ',', '.')}} đ </span><span style="text-decoration: line-through; color: #CCCCCC">{{number_format($pd->price, 0, ',', '.')}} đ</span>
                                            @else
                                                <span style="color: red;font-size: large">{{number_format($pd->price, 0, ',', '.')}} đ</span>
                                            @endif
                                            <a href="/{{$pd->id}}/{{$pd->link}}">@if(isset($pd->name))<h5 style="color: black">{{$pd->name}}</h5>@endif</a>
                                        </div>
                                        <hr>
                                        @if($pd->shopee)
                                            <a class="btn btn-xs add-to-cart  btn-shopee" href="{{$pd->shopee}}">
                                                <i class="fa fa-shopping-cart"></i>
                                                Qua Shopee
                                            </a>
                                        @endif
                                        @if($pd->lazada)
                                            <br>
                                            <a class="btn btn-xs add-to-cart  bg-red" href="{{$pd->lazada}}">
                                                <i class="fa fa-shopping-cart"></i>
                                                Qua Lazada
                                            </a>
                                        @endif
                                    </div>
                                    <br>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="tab-pane fade" id="cheap" >
                    @if(isset($productGR))
                        @foreach($productGR as $pd)
                            <div class="col-sm-3 col-xs-6">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/{{$pd->id}}/{{$pd->link}}"><img style="max-height: 115px" src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                            <div style="padding: 5%;height: 100px">
                                                @if(($pd->price_sale))
                                                    <span style="color: red;font-size: large">{{number_format($pd->price_sale, 0, ',', '.')}} đ </span><span style="text-decoration: line-through; color: #CCCCCC">{{number_format($pd->price, 0, ',', '.')}} đ</span>
                                                @else
                                                    <span style="color: red;font-size: large">{{number_format($pd->price, 0, ',', '.')}} đ</span>
                                                @endif
                                                <a href="/{{$pd->id}}/{{$pd->link}}">@if(isset($pd->name))<h5 style="color: black">{{$pd->name}}</h5>@endif</a>
                                            </div>
                                            <hr>
                                            @if($pd->shopee)
                                                <a class="btn btn-xs add-to-cart btn-shopee" href="{{$pd->shopee}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                     Qua Shopee
                                                </a>
                                            @endif
                                            @if($pd->lazada)
                                                <br>
                                                <a class="btn btn-xs add-to-cart bg-red" href="{{$pd->lazada}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Qua Shopee
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="tab-pane fade" id="kids" >

                </div>
            </div>
        </div>
        </div>
        @include('home.right')
        </div>
@endsection