﻿@extends('home.layout')
@section('des')@if(isset($product->keyword)){{$product->keyword}}@endif
@endsection
@section('key')@if(isset($product->keyword)){{$product->keyword}}@endif
@endsection
@section('css')
    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }
        #detial-a a{
            color: #9c1010;
            display: inline-block;
        }
        #detial-a ul li a:hover{
            background: none;
        }
        #detial-a ul{
            background: #FFF;
            border-bottom: none;
        }
        #detial-a li{
            /*color: #FFF;*/
        }

    </style>
    <link rel="stylesheet" type="text/css" href="/source/jquery.fancybox.css?v=2.1.5" media="screen" />

@endsection

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5" style="margin-top: 20px">
                <p>
                                        {{--@if(isset($product->img1)){{$product->img1}}@endif--}}
                    <a class="fancybox" href="@if(isset($product->img1)){{$product->img1}}@endif" data-fancybox-group="gallery" title="@if(isset($product->name)){{$product->name}}@endif"><img src="@if(isset($product->img1)){{$product->img1}}@endif" alt="@if(isset($product->name)){{$product->name}}@endif"  width="350px" /></a>

                    <a class="fancybox" href="@if(isset($product->img2)){{$product->img2}}@endif" data-fancybox-group="gallery" title="@if(isset($product->name)){{$product->name}}@endif"><img src="@if(isset($product->img2)){{$product->img2}}@endif" alt="@if(isset($product->name)){{$product->name}}@endif" width="100px"/></a>

                    <a class="fancybox" href="@if(isset($product->img3)){{$product->img3}}@endif" data-fancybox-group="gallery" title="@if(isset($product->name)){{$product->name}}@endif"><img src="@if(isset($product->img3)){{$product->img3}}@endif" alt="@if(isset($product->name)){{$product->name}}@endif" width="100px" /></a>

                    <a class="fancybox" href="@if(isset($product->img4)){{$product->img4}}@endif" data-fancybox-group="gallery" title="@if(isset($product->name)){{$product->name}}@endif"><img src="@if(isset($product->img4)){{$product->img4}}@endif" alt="@if(isset($product->name)){{$product->name}}@endif" width="100px"/></a>
                </p>
            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    @if(isset($product->name))<p style="color: #008ffe;font-weight: bold;font-size: x-large">{{$product->name}}</p>@endif
                    <p>(Giao hàng toàn quốc)</p>
                    <span>
                        <h4>
                            @if($product->price_sale)
                            <span style="color: red;">{{number_format($product->price_sale, 0, ',', '.')}} đ </span><span style="text-decoration: line-through; color: #CCCCCC">{{number_format($product->price, 0, ',', '.')}} đ</span>
                            @else
                                <span style="color: red;">{{number_format($product->price, 0, ',', '.')}} đ</span>
                            @endif
                        </h4>
                    </span>
                    <p><b>Tình trạng: </b> @if(isset($product->type_product)) <i class="fa fa-check-square-o" style="color: green" aria-hidden="true"></i> Còn hàng @else <i class="fa fa-minus-square" style="color: red" aria-hidden="true"></i> Hết hàng @endif</p>
                    <p><b>Bảo hành: </b> @if(isset($product->sale))  {{$product->sale}} @endif tháng</p>
                    </br>
                    <button  class="btn btn-danger cart" style="margin-left: 0" data-toggle="modal" data-target=".lh">
                        <i class="fa fa-shopping-cart"></i>
                        Liên Hệ
                    </button>
                    @if($product->shopee)
                    <a class="btn btn-shopee" href="{{$product->shopee}}" style="margin-bottom: 10px">
                        <i class="fa fa-shopping-cart"></i>
                        Mua qua Shopee
                    </a>
                    @endif
                    @if($product->lazada)
                        <a class="btn bg-red" href="{{$product->lazada}}" style="margin-bottom: 10px">
                            <i class="fa fa-shopping-cart"></i>
                            Mua qua Lazada
                        </a>
                    @endif
                    <br>
                    <span class="clearfix" style="font-size: medium">
                        @if(isset($product->description))
                            {{$product->description}}
                        @endif
                    </span>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->

        <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">Chi tiết</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details" >
                <div id="detial-a">
                    {!! $product->content !!}
                </div>
                </br>
                <hr>
                </br>

                </div>
                <div class="tab-pane fade" id="tag" >
                    <a href="http://tindotainghe.com/"><span class="label label-primary">TÍN ĐỒ TAI NGHE|Tai nghe, loa di động, phụ kiện và các sản phẩm SONY chính hãng giá tốt.</span></a>
                </div>
            </div>

                @if($product->id)
                <div class="fb-comments" data-href="http://tindosony.com/{{$product->id}}/{{$product->link}}" data-numposts="10"></div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=334789113661675';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    @endif
                </div>
                <div><!--recommended_items-->
            <h2 class="title text-center">Sản phẩm liên quan</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                    @if(isset($productCare))
                        @foreach($productCare as $index => $ps)
                            @if($index < 3)
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a href="/{{$ps->id}}/{{$ps->link}}"><img src="@if(isset($ps->img1)){{$ps->img1}}@endif" alt="" /></a>
                                                    <h2>  <span>
                                                     <h4>
                                                         @if($ps->price_sale)
                                                         <span style="color: red;">{{number_format($ps->price_sale, 0, ',', '.')}} đ </span><span style="text-decoration: line-through; color: #CCCCCC">{{number_format($ps->price, 0, ',', '.')}} đ</span>
                                                         @else
                                                             <span style="color: red;">{{number_format($ps->price, 0, ',', '.')}} đ</span>
                                                         @endif
                                                     </h4>
                                                     </span></h2>
                                                    <a href="/{{$ps->id}}/{{$ps->link}}"> @if(isset($ps->name))<h5 style="color: black">{{$ps->name}}</h5>@endif </a>
                                                    <button type="button" class="btn btn-default add-to-cart" data-toggle="modal" data-target=".lh"><span style="color: white"><i class="fa fa-shopping-cart"></i>Liên hệ</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                        @endforeach
                    </div>
                    @endif
                    <div class="item">
                    @if(isset($productCare))
                        @foreach($productCare as $index => $ps)
                            @if($index < 3)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="/{{$ps->id}}/{{$ps->link}}"><img src="@if(isset($ps->img1)){{$ps->img1}}@endif" alt="" /></a>
                                                <h2>  <span>
                                                     <h4>
                                                         @if($ps->price_sale)
                                                         <span style="color: red;">{{number_format($ps->price_sale, 0, ',', '.')}} đ </span><span style="text-decoration: line-through; color: #CCCCCC">{{number_format($ps->price, 0, ',', '.')}} đ</span>
                                                         @else
                                                             <span style="color: red;">{{number_format($ps->price, 0, ',', '.')}} đ</span>
                                                         @endif
                                                     </h4>
                                                     </span></h2>
                                                <a href="/{{$ps->id}}/{{$ps->link}}">@if(isset($ps->name))<h5 style="color: black">{{$ps->name}}</h5>@endif</a>
                                                <button type="button" class="btn btn-default add-to-cart" data-toggle="modal" data-target=".lh"><span style="color: white"><i class="fa fa-shopping-cart"></i>Liên hệ</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        </div><!--/category-tab-->
        <!--/recommended_items-->
    @include('home.right')
    {{--</div>--}}
@endsection
@section('js')
    {{--<script type="text/javascript" src="/lib/jquery-1.10.1.min.js"></script>--}}

    <!-- Add mousewheel plugin (this is optional) -->
    {{--<script type="text/javascript" src="/lib/jquery.mousewheel-3.0.6.pack.js"></script>--}}

    <!-- Add fancyBox main JS and CSS files -->
    <!-- Add Button helper (this is optional) -->
    {{--<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />--}}
    {{--<script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>--}}

    {{--<!-- Add Thumbnail helper (this is optional) -->--}}
    {{--<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />--}}
    {{--<script type="text/javascript" src="../source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>--}}

    {{--<!-- Add Media helper (this is optional) -->--}}
    {{--<script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>--}}

    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

            /*
             *  Different effects
             */

            // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect	: 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons	: {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });

            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
             */
            $('.fancybox-media')
                    .attr('rel', 'media-gallery')
                    .fancybox({
                        openEffect : 'none',
                        closeEffect : 'none',
                        prevEffect : 'none',
                        nextEffect : 'none',

                        arrows : false,
                        helpers : {
                            media : {},
                            buttons : {}
                        }
                    });

            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });

    </script>

@endsection