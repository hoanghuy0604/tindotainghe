@extends('home.layout')
@section('des')
@endsection
@section('key')
@endsection
@section('slider')

    <section id="slider"><!--slider-->
        <div class="container">
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
                                            <img src="{{$sl->images}}" class="girl img-responsive" alt="{{$sl->name}}" style="width: 100%"/>
                                            {{--<img src="images/home/pricing.png"  class="pricing" alt="" />--}}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <br>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" style="padding-left: 30px" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
@endsection

@section('content')

    <div class="col-md-8 padding-right col-lg-9">
        <div class="features_items" style="padding-top: 7px"><!--features_items-->
            <h2 class="title text-center">Sản phẩm Nổi Bật</h2>
            @if(isset($productHot))
                @foreach($productHot as $index => $pd)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}"><img src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                    @if(isset($pd->sale))
                                        <h4> <span style="text-decoration: line-through">${{$pd->price}}K</span> <span style="color: #008ffe;">{{$pd->price - $pd->price * $pd->sale /100}}K </span></h4>
                                    @else
                                        <h4><span style="color: #fdb45e;">{{$pd->price}}K </span></h4>
                                    @endif
                                    <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}">{{$pd->name}}</a>
                                    <div class="clearfix"></div>
                                    </br>
                                </div>
                                @if(isset($pd->new))
                                    <img src="images/home/new.png" class="new" alt="{{$sl->name}}" />
                                @endif
                                @if(isset($pd->sale))
                                    <img src="images/home/sale.png" class="new" alt="{{$sl->name}}" />
                                @endif
                            </div>
                            <div class="choose">
                                </br>
                                <div class="text-center">
                                    <a href="#" class="btn btn-default add-to-cart" data-toggle="modal" data-target=".lh"><i class="fa fa-shopping-cart"></i>Liên Hệ</a>
                                </div>
                                @if(isset($pd->sale))
                                    <b class="text-center pull-right text-success"> -{{$pd->sale}}% </b>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if($index == 2)
                        <div class="clearfix"></div>
                    @endif
                    @if($index == 5)
                        <div class="clearfix"></div>
                    @endif
                @endforeach
            @endif
        </div><!--features_items-->

        <div class="recommended_items" style="padding-top: 7px"><!--recommended_items-->
            <h2 class="title text-center">Sản Phẩm Bán Chạy</h2>
        </div><!--/recommended_items-->

        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tshirt" data-toggle="tab">Sản phẩm mới về</a></li>
                    <li><a href="#blazers" data-toggle="tab">Top sản phẩm cao cấp </a></li>
                    <li><a href="#sunglass" data-toggle="tab">Sản phẩm giá rẻ</a></li>
                    <li><a href="#kids" data-toggle="tab">Về chúng tôi</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="tshirt" >
                        @if(isset($productNew))
                            @foreach($productNew as $pd)
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}"><img src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                            @if(isset($pd->sale))
                                                <h2> <span style="text-decoration: line-through; color: #CCCCCC">{{$pd->price}}K</span> <span style="color: #008ffe;">{{$pd->price - $pd->price * $pd->sale /100}}K </span></h2>
                                            @else
                                                <h2><span style="color: #fdb45e;">{{$pd->price}}K </span></h2>
                                            @endif
                                            <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}">{{$pd->name}}</a>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <a href="#" class="btn btn-default add-to-cart" data-toggle="modal" data-target=".lh"><i class="fa fa-shopping-cart"></i>Liên Hệ</a>
                                        </div>

                                    </div>
                                </div>
                                </div>
                            @endforeach
                        @endif
                </div>

                <div class="tab-pane fade" id="blazers" >
                    @if(isset($productCC))
                        @foreach($productCC as $pd)
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}"><img src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                            @if(isset($pd->sale))
                                                <h2> <span style="text-decoration: line-through; color: #CCCCCC">{{$pd->price}}K</span> <span style="color: #fdb45e;">{{$pd->price - $pd->price * $pd->sale /100}}K </span></h2>
                                            @else
                                                <h2><span style="color: #fdb45e;">{{$pd->price}}K </span></h2>
                                            @endif
                                            <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}">{{$pd->name}}</a>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <a href="#" class="btn btn-default add-to-cart" data-toggle="modal" data-target=".lh"><i class="fa fa-shopping-cart"></i>Liên Hệ</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="tab-pane fade" id="sunglass" >
                    @if(isset($productGR))
                        @foreach($productGR as $pd)
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}"><img src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                            @if(isset($pd->sale))
                                                <h2> <span style="text-decoration: line-through; color: #CCCCCC">{{$pd->price}}K</span> <span style="color: #fdb45e;">{{$pd->price - $pd->price * $pd->sale /100}}K </span></h2>
                                            @else
                                                <h2><span style="color: #fdb45e;">{{$pd->price}}K </span></h2>
                                            @endif
                                            <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}">{{$pd->name}}</a>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <a href="#" class="btn btn-default add-to-cart" data-toggle="modal" data-target=".lh"><i class="fa fa-shopping-cart"></i>Liên Hệ</a>
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
        </div><!--/category-tab-->
    </div>
    @include('home.right')
@endsection