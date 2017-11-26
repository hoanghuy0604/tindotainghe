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
    <title>SONY store </title>
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
    {{--<script>--}}
        {{--(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
                    {{--(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
                {{--m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
        {{--})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}

        {{--ga('create', 'UA-80133423-1', 'auto');--}}
        {{--ga('send', 'pageview');--}}

    {{--</script>--}}
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">

        </div>
    </div><!--/header_top-->
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        {{--<a href="http://stshop.vn/"><img src="/images/home/logo.png" alt="SONY STORE" width="100px" /></a>--}}
                    </div>
                    <div class="btn-group pull-right">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            {{--<li><a href="#"><i class="fa fa-star"></i> Chương trình khuyến mãi</a></li>--}}
                            <li><a href="#" data-toggle="modal" data-target=".lh"><i class="fa fa-phone-square" aria-hidden="true" ></i> Liên hệ</a></li>
                            {{--<li><a href="#"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12" >
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu col-sm-offset-3">
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
                    {{--<div class="search_box pull-right">--}}
                        {{--<input type="text" placeholder="Tìm kiếm"/>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

@yield('slider')


<section>
    <div class="container">
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
                        <h2><span>TÍN ĐỒ SONY SHOP</span></h2>
                        <p>Chúng tôi luôn cố gắng, nỗ lực, để mang lại giá trị tốt nhất cho khách hàng.</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe1.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <a href="#"> <h2>SHOP TÍN ĐỒ SONY</h2></a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe2.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <a href="#"> <h2>SHOP TÍN ĐỒ SONY</h2></a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe3.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <a href="#"> <h2>SHOP TÍN ĐỒ SONY Hà Nội</h2></a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <a href="#"> <h2>SHOP TÍN ĐỒ SONY</h2></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="/images/home/map.png" alt="" />
                        <p>SHOP TÍN ĐỒ SONY nhận giao hàng toàn quốc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li class="visible-xs" style="margin-left: 20px"></li>
                                <li><a href="tel:0974-432-555" style="font-weight: bold"><i class="fa fa-phone"></i>0969 849 848 || 0979 118 680 </a></li>
                                <li><a href="mailto:tindosony@gmail.com"><i class="fa fa-envelope"></i> tindosony@gmail.com</a></li>
                                <li><a href="https://www.google.com/maps/place/Sony+Store/@21.0261094,105.8118835,14z/data=!4m8!1m2!2m1!1ssony+store!3m4!1s0x3135ab6dc4e91f1b:0x359f10a0a982817d!8m2!3d21.0290116!4d105.8153283"><i class="fa fa-map-marker" aria-hidden="true"></i>  Số 101 ban đối ngoại Trung Ương (khu nhà 5 tầng) ngõ 409 Kim Mã Hà Nội</a></li>
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
        </div>
    </div>
    <div class="modal fade lh" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><span style="color: #FE980F">TÍN ĐỒ</span> SONY </h4>
                    <small><i class="fa fa-map-marker" aria-hidden="true"></i> Shop TÍN ĐỒ SONY cam kết tất cả các hàng bán ra đều là chính hãng. <p style="color: red">Hàng luôn được bao test FAKE trọn đời và hoàn lại tiền bất kỳ lúc nào nếu phát hiện FAKE!</p> Sản Phẩm được Bảo Hành lỗi 1 đổi 1 tróng 1 tháng </small>
                </div>
                <div class="modal-body">
                    <h4>Cám ơn quý khách đã ghé thăm - <span style="color: #FE980F">SHOP TÍN ĐỒ SONY </span></h4>
                    <a href="tel:0969-849-848"><h3 style="color: #FE980F"> <i class="fa fa-phone" aria-hidden="true"></i>0969 849 848</h3></a>
                    hoặc
                    <a href="tel:0979-118-680"><h3 style="color: #FE980F"> <i class="fa fa-phone" aria-hidden="true"></i>0979 118 680</h3></a>
                    <h4 class="fa fa-map-marker" aria-hidden="true"></h4> Số 101 ban đối ngoại Trung Ương (khu nhà 5 tầng) ngõ 409 Kim Mã Hà Nội
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
                    <h4 class="modal-title"><span style="color: #FE980F">TÍN ĐỒ</span> SONY </h4>
                    <small><i class="fa fa-map-marker" aria-hidden="true"></i> Shop TÍN ĐỒ SONY cam kết tất cả các hàng bán ra đều là chính hãng. <p style="color: red">Hàng luôn được bao test FAKE trọn đời và hoàn lại tiền bất kỳ lúc nào nếu phát hiện FAKE!</p> Sản Phẩm được Bảo Hành lỗi 1 đổi 1 tróng 1 tháng </small>
                </div>
                <div class="modal-body">
                    <h4>Cám ơn quý khách đã ghé thăm - <span style="color: #FE980F">SHOP TÍN ĐỒ SONY </span></h4>
                    <a href="tel:0969-849-848"><h3 style="color: #FE980F"> <i class="fa fa-phone" aria-hidden="true"></i>0969 849 848</h3></a>
                    hoặc
                    <a href="tel:0979-118-680"><h3 style="color: #FE980F"> <i class="fa fa-phone" aria-hidden="true"></i>0979 118 680</h3></a>
                    <h4 class="fa fa-map-marker" aria-hidden="true"></h4> Số 101 ban đối ngoại Trung Ương (khu nhà 5 tầng) ngõ 409 Kim Mã Hà Nội
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