<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('des')">
    <meta name="keywords" content="@yield('key')" />
    <meta name="author" content="ST Shop">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta http-equiv="content-language" content="vi" />
    <title>Bánh Pía, Bánh Pía Sầu Riêng </title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/prettyPhoto.css") }}" rel="stylesheet">
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/price-range.css") }}" rel="stylesheet">
    <link href="{{ asset("css/animate.css") }}" rel="stylesheet">
    <link href="{{ asset("css/main.css") }}" rel="stylesheet">
    <link href="{{ asset("css/responsive.css") }}" rel="stylesheet">
    <link href="{{ asset("css/animate.css") }}" rel="stylesheet">
    <link href="{{ asset("css/responsive.css") }}" rel="stylesheet">
    <link href="{{ asset("js/html5shiv.js") }}" rel="stylesheet">
    {{--    <link href="{{ asset("js/respond.min.js") }}" rel="stylesheet">--}}

    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="css/font-awesome.min.css" rel="stylesheet">--}}
    {{--<link href="css/prettyPhoto.css" rel="stylesheet">--}}
    {{--<link href="css/price-range.css" rel="stylesheet">--}}
    {{--<link href="css/animate.css" rel="stylesheet">--}}
    {{--<link href="css/main.css" rel="stylesheet">--}}
    {{--<link href="css/responsive.css" rel="stylesheet">--}}
    @yield('css')
    @yield('css')   
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-80133423-1', 'auto');
        ga('send', 'pageview');

    </script>
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                        <li class="visible-xs" style="margin-left: 20px"></li>
                            <li><a href="tel:0974-432-555" style="font-weight: bold"><i class="fa fa-phone"></i>0971-183-686 || 0974-432-555 </a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> bachphi88@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>  Số 2 - Ngõ hòa bình 3 - Minh Khai - Hai Bà Trưng - Hà Nội</a></li>                                   
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="http://stshop.vn/"><img src="/images/home/logo.png" alt="ST SHOP" width="100px" /></a>
                    </div>
                    <div class="btn-group pull-right">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-star"></i> Chương trình khuyến mãi</a></li>
                            <li><a href="#" data-toggle="modal" data-target=".lh"><i class="fa fa-phone-square" aria-hidden="true" ></i> Liên hệ</a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active"><p style="font-weight: 700">TRANG CHỦ</p></a></li>
                            <li><a href="#" data-toggle="modal" data-target=".gt"><p style="font-weight: 700">GIỚI THIỆU</p></a></li>
                            <li class="dropdown"><a href="#"><p style="font-weight: 700">SẢN PHẨM</p><i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @if(isset($categorymn))
                                        @foreach($categorymn as $ct)
                                            <li><a href="/{{$ct->description}}/{{$ct->id}}">{{strtoupper($ct->name)}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li><a href="/tin-tuc-stshop"><p style="font-weight: 700">TIN TỨC</p></a></li>
                            <li><a href="#" data-toggle="modal" data-target=".lh"><p style="font-weight: 700">LIÊN HỆ</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Tìm kiếm"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

@yield('slider')


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Danh Mục Sản phẩm</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @if(isset($categorymn))
                            @foreach($categorymn as $ct)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="/{{$ct->description}}/{{$ct->id}}">{{$ct->name}}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div><!--/category-products-->

                    <div class="brands_products hidden-xs"><!--brands_products-->
                        <h2>Hàng mới về</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                @if(isset($productsmn))
                                    @foreach($productsmn as $ps)
                                        <li><a href="/phu-kien/{{$ps->id}}/{{$ps->link}}"> <small>{{$ps->name}}</small></a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div><!--/brands_products-->
                    <br/><br/>
                     <div class="left-sidebar tab-pane" >
                     <h2>TAG</h2>
                    <a href="http://stshop.vn/"><span class="label label-primary">Bánh Pía</span></a>
                    <a href="http://stshop.vn/"><span class="label label-primary">Bánh Pía Sầu Riêng</span></a>
                    <a href="http://stshop.vn/"><span class="label label-primary">Bánh Pía Sóc Trăng</span></a>
                    <a href="http://stshop.vn/"><span class="label label-primary">Bánh Pía Tân Huê Viên</span></a>
                    <a href="http://stshop.vn/"><span class="label label-primary">Chăn Lông Cừu</span></a>                    
                    <a href="http://stshop.vn/"><span class="label label-primary">Chăn Lông Cừu Ultimate</span></a>
                    <a href="http://stshop.vn/"><span class="label label-primary">Phụ Kiện Điện Thoại</span></a>                    
                    <a href="http://stshop.vn/"><span class="label label-primary">Ốp Iphone</span></a>                    
                    <a href="http://stshop.vn/"><span class="label label-primary">Ốp Lưng Iphone</span></a>
                    <a href="http://stshop.vn/"><span class="label label-primary">St shop</span></a>
                    <a href="http://stshop.vn/"><span class="label label-primary">Mic Kèm Loa Bluetooth</span></a                                                    
                    <br/><br/>
                </div>                         
                </div>
            </div>

            @yield('content')
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>ST</span>-shop</h2>
                        <p>Chúng tôi luôn cố gắng, nỗ lực, để mang lại giá trị tốt nhất cho khách hàng.</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="http://stshop.vn/">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe1.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <a href="http://stshop.vn/"> <h2>ST Shop Phụ kiện điện thoại</h2></a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="http://stshop.vn/">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe2.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <a href="http://stshop.vn/"> <h2>ST Shop Phụ kiện giá rẻ</h2></a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="http://stshop.vn/">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe3.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <a href="http://stshop.vn/"> <h2>ST Shop Phụ kiện điện thoại Hà Nội</h2></a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="http://stshop.vn/">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <a href="http://stshop.vn/"> <h2>ST Shop phụ kiện thời trang</h2></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="/images/home/map.png" alt="" />
                        <p>ST Shop nhận giao hàng toàn quốc sau 1,2 ngày (24/7)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Chăn Lông Cừu</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="http://stshop.vn/">Chăn Lông Cừu</a></li>
                            <li><a href="http://stshop.vn/">Bánh Pía Sóc Trăng</a></li>
                            <li><a href="http://stshop.vn/">Chăn siêu nhệ</a></li>
                            <li><a href="http://stshop.vn/">Phụ kiện điện thoại giá rẻ</a></li>
                            <li><a href="http://stshop.vn/">Miễn phí giao hàng toàn quốc</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Bánh Pía Sóc Trăng</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="http://stshop.vn/">Bánh Pía</a></li>
                            <li><a href="http://stshop.vn/">Bánh Pía Sầu Riêng</a></li>
                            <li><a href="http://stshop.vn/">Bánh Pía thương hiệu SÓc Trăng</a></li>
                            <li><a href="http://stshop.vn/">Kính cường lực thế hệ mới</a></li>
                            <li><a href="http://stshop.vn/">Phụ kiện giá rẻ Hà Nội</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Phụ kiện điện thoại</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="http://stshop.vn/">Chăn Lông Cừu</a></li>
                            <li><a href="http://stshop.vn/">Chăn giá rẻ</a></li>
                            <li><a href="http://stshop.vn/">Ấm áp mùa đông</a></li>
                            <li><a href="http://stshop.vn/">Tấm dán chân không</a></li>
                            <li><a href="http://stshop.vn/">Pin Iphone 6</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="single-widget hidden-xs">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FST-Shop-Ph%E1%BB%A5-Ki%E1%BB%87n-%C4%90i%E1%BB%87n-Tho%E1%BA%A1i-1689805417961919%2F&tabs=timeline&width=500&height=370&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=438910246304975" width="500" height="370" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                    <div class="single-widget visible-xs">
                       <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fstshop.vnn%2F&tabs=timeline&width=300px&height=400px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=438910246304975" width="300px" height="400px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left"><span style="font-weight: bold"><i class="fa fa-phone"></i> 0974-432-555</span></p>
                <p class="pull-left"><i class="fa fa-map-marker" aria-hidden="true"></i> Số 2 - Ngõ hòa bình 3 - Minh Khai - Hai Bà Trưng - Hà Nội </p>                
                <p class="pull-right">Thiết kế bởi <span><a target="_blank" href="https://www.facebook.com/tienvm2705">ST SHOP </a></span></p>
            </div>
        </div>
    </div>
    <div class="modal fade lh" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><span style="color: #FE980F">ST</span> SHOP <i class="fa fa-shopping-cart" aria-hidden="true"></i></h4>
                    <small><i class="fa fa-plane" aria-hidden="true"></i> Chúng tôi cam kết giá STSHOP luôn và sẽ <span style="color: #FE980F">rẻ nhất thị trường</span> </small>
                </div>
                <div class="modal-body">
                    <h4>Cám ơn quý khách đã ghé thăm - <span style="color: #FE980F">ST </span>Shop</h4>
                    <a href="tel:0868-888-336"><h3 style="color: #FE980F"> <i class="fa fa-phone" aria-hidden="true"></i>0971-999-389</h3></a>
                    <h4 class="fa fa-map-marker" aria-hidden="true"></h4> Số 2 - Ngõ hòa bình 3 - Minh Khai - Hai Bà Trưng - Hà Nội
                    <p>Liên hệ số điện thoại đặt hàng và tư vấn tốt nhất nhé <i class="fa fa-heart" aria-hidden="true"></i></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade gt" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><span style="color: #FE980F">ST</span> SHOP <i class="fa fa-shopping-cart" aria-hidden="true"></i></h4>
                    <small><i class="fa fa-plane" aria-hidden="true"></i> Giới thiệu về STSHOP .... </small>
                </div>
                <div class="modal-body">
                    <h4>Cám ơn quý khách đã ghé thăm - <span style="color: #FE980F">ST </span>Shop</h4>
                    <a href="tel:0974-432-555"><h3 style="color: #FE980F"> <i class="fa fa-phone" aria-hidden="true"></i>0974432555</h3></a>
                    <h4 class="fa fa-map-marker" aria-hidden="true"></h4> Số 2 - Ngõ hòa bình 3 - Minh Khai - Hai Bà Trưng - Hà Nội
                    <p>Liên hệ số điện thoại đặt hàng và tư vấn tốt nhất nhé <i class="fa fa-heart" aria-hidden="true"></i></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>

        </div>
    </div>

</footer><!--/Footer-->

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/price-range.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('js')
</body>
</html>