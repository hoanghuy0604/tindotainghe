@extends('home.layout')
@section('css')
    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/source/jquery.fancybox.css?v=2.1.5" media="screen" />

@endsection
@section('des')@if(isset($article)){{$article->keyword}}@endif
@endsection
@section('')@if(isset($article)){{$article->keyword}}@endif
@endsection
@section('content')
    <div class="col-sm-9 padding-right">
        {{--<h3> {{ $article->name }} </h3>--}}
        {{--@if(isset($article))--}}
            {{--{!! $article->content !!}--}}
        {{--@endif--}}
         {{--</br>--}}
                {{--<hr>--}}
                {{--</br>--}}
                    {{--<div class="fb-comments" data-href="http://stshop.vn/" data-numposts="10"></div>--}}
                {{----}}
                {{--<script>(function(d, s, id) {--}}
                  {{--var js, fjs = d.getElementsByTagName(s)[0];--}}
                  {{--if (d.getElementById(id)) return;--}}
                  {{--js = d.createElement(s); js.id = id;--}}
                  {{--js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=438910246304975";--}}
                  {{--fjs.parentNode.insertBefore(js, fjs);--}}
                {{--}(document, 'script', 'facebook-jssdk'));</script>                --}}
                <hr>
        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">Có thể bạn quan tâm</h2>

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
                                                    <a href="/st-shop-khuyen-mai/{{$ps->linkUrl}}/{{$ps->id}}"><img src="@if(isset($ps->img)){{$ps->img}}@endif" alt="" /></a>
                                                    <a href="/st-shop-khuyen-mai/{{$ps->linkUrl}}/{{$ps->id}}"><p>@if(isset($ps->name)){{$ps->name}}@endif</p></a>
                                                    <small>@if(isset($ps->description)){{$ps->description}}@endif</small>
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
                                                    <a href="/st-shop-khuyen-mai/{{$ps->linkUrl}}/{{$ps->id}}"><img src="@if(isset($ps->img)){{$ps->img}}@endif" alt="" /></a>
                                                    <a href="/st-shop-khuyen-mai/{{$ps->linkUrl}}/{{$ps->id}}"><p>@if(isset($ps->name)){{$ps->name}}@endif</p></a>
                                                    <small>@if(isset($ps->description)){{$ps->description}}@endif</small>
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
        </div><!--/recommended_items-->
    </div>    
    
@endsection

@section('js')
    <script type="text/javascript" src="/lib/jquery-1.10.1.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="/source/jquery.fancybox.js?v=2.1.5"></script>

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