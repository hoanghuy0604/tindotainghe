<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('des')">
    <meta name="keywords" content="@yield('key')" />
    <meta name="author" content="TÍN ĐỒ TAI NGHE |Tai nghe, loa di động, phụ kiện và các sản phẩm SONY chính hãng giá tốt">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta http-equiv="content-language" content="vi" />
    <title>TÍN ĐỒ TAI NGHE |Tai nghe, loa di động, phụ kiện và các sản phẩm SONY chính hãng giá tốt.</title>
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
    @yield('css')
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/price-range.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript" src="/source/jquery.fancybox.js"></script>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    @yield('js')
</head><!--/head-->

<body style="font-family: Arial">
<header id="header"><!--header-->
    <div class="header_top" style="background-color: #9c1010">
        <div class="container">
            <ul id="menu-top" class="nav navbar-nav collapse navbar-collapse">
                <li><a href="/"><icon class="fa fa-home"></icon></a></li>
                <li><a href="/tin-tuc-sony">Tin tức</a></li>

                <li><a href="#" data-toggle="modal" data-target=".lh">Liên hệ</a></li>
                <li><a href="/huong-dan-sony">Hướng dẫn mua hàng</a> </li>
                <li><a href="/bao-hanh-sony">Bảo hành</a> </li>
                <li><a>Giờ mở cửa: 9h - 21h</a></li>
            </ul>
            <div class="col-sm-3 col-md-3 pull-right" style="padding: 10px 15px;color: white">
                <span style="color: white">Liên Kết | </span>
                <a href="https://www.facebook.com/shoptindosony"><img src="/images/home/facebook.png"/></a> |
                <a href="/"><img src="/images/home/youtube.png"/></a> |
                <a href="https://shopee.vn/sonyvn"><img src="/images/home/shoppe.png"/></a> |
                <a href="#"/><img src="/images/home/lazada.png"/></a>
            </div>
        </div>
    </div>
    <div class="header-bottom" style="padding: 5px 0 0 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" >

                    <div class="logo pull-left">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <a href="http://tindotainghe.com/"><img src="/images/home/logo.png" alt="TÍN ĐỒ TAI NGHE" width="160px" height="80px" /></a>
                    </div>
                    <div class="mainmenu col-sm-offset-3">

                        <ul class="nav navbar-nav collapse navbar-collapse" style="padding-top: 50px">
                            <li><a href="/" class="active"><p style="font-weight: 700">TRANG CHỦ</p></a></li>
                            <li><a href="#" data-toggle="modal" data-target=".gt"><p style="font-weight: 700">GIỚI THIỆU</p></a></li>
                            <li class="dropdown"><a href="#"><p style="font-weight: 700">SẢN PHẨM</p><i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @if(isset($categorymn))
                                        @foreach($categorymn as $ct)
                                            @if($ct->type === 0)
                                            <li><a href="/category/{{$ct->description}}/{{$ct->id}}">{{($ct->name)}}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li><a href="/tin-tuc-sony"><p style="font-weight: 700">TIN TỨC</p></a></li>
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
                <div class="col-sm-3">
                    <div class="companyinfo" style="text-align: center">
                        <h3><span style="font-family: Arial;color: #9c1010"><B>SHOP <br>TÍN ĐỒ TAI NGHE</B></span></h3>
                        <p>Chúng tôi luôn cố gắng, nỗ lực, để mang lại giá trị tốt nhất cho khách hàng.</p>
                    </div>
                </div>
                <div class="col-sm-6">
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
                            <a href="#"> <h2>SHOP TÍN ĐỒ TAI NGHE</h2></a>
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
                            <a href="#"> <h2>SHOP TÍN ĐỒ TAI NGHE</h2></a>
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
                            <a href="#"> <h2>SHOP TÍN ĐỒ TAI NGHE Hà Nội</h2></a>
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
                            <a href="#"> <h2>SHOP TÍN ĐỒ TAI NGHE</h2></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="row" style="padding-top: 15px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5345.039164896585!2d105.81590889024953!3d20.979510972863096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acefdc7ec0c3%3A0x8e7e98ddd14210f!2zVMOtbiDEkOG7kyBUYWkgTmdoZQ!5e0!3m2!1svi!2s!4v1523814068002" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen class="pull-left"></iframe>
                    </div>
                        <div class="row" style="padding-bottom: 25px;text-align: center">
                        <p>SHOP TÍN ĐỒ TAI NGHE nhận giao hàng toàn quốc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-lg-offset-2">
                    <div class="col-sm-8">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li class="visible-xs" style="margin-left: 20px"></li>
                                <li><a href="tel:094-365-6286" style="font-weight: bold;color: #9c1010"><i class="fa fa-phone"></i> 094 365 6286 || 0979 118 680 </a></li>
                                <li><a href="mailto:tindotainghe@gmail.com" style="color: #9c1010"><i class="fa fa-envelope"></i> tindosony@gmail.com</a></li>
                                <li><a href="https://goo.gl/maps/H48SQvkEUCS2"><i class="fa fa-map-marker" aria-hidden="true"></i> Số 142 Kim Giang (gần cầu Lủ), Thanh Xuân, Hà Nội.</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><div class="fb-share-button" data-href="http://tindosony.com" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftindosony.com%2F&amp;src=sdkpreparse">Share</a></div></li>
                                <br><br>
                                <li><g:plusone size="large"></g:plusone></li>
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
                    <h4 class="modal-title"><span style="color: #9c1010">TÍN ĐỒ</span> TAI NGHE </h4>
                    <small><i class="fa fa-map-marker" aria-hidden="true"></i> Shop TÍN ĐỒ TAI NGHE cam kết tất cả các hàng bán ra đều là chính hãng. <p style="color: red">Hàng luôn được bao test FAKE trọn đời và hoàn lại tiền bất kỳ lúc nào nếu phát hiện FAKE!</p></small>
                </div>
                <div class="modal-body">
                    <h4>Cám ơn quý khách đã ghé thăm - <span style="color: #9c1010">SHOP TÍN ĐỒ TAI NGHE </span></h4>
                    <a href="tel:094-365-6286"><h3 style="color: #9c1010"> <i class="fa fa-phone" aria-hidden="true"></i> 094 365 6286</h3></a>
                    hoặc
                    <a href="tel:0979-118-680"><h3 style="color: #9c1010"> <i class="fa fa-phone" aria-hidden="true"></i> 0979 118 680</h3></a>
                    <h4 class="fa fa-map-marker" aria-hidden="true"></h4> Số 142 Kim Giang (gần cầu Lủ), Thanh Xuân, Hà Nội.
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
                    <h4 class="modal-title"><span style="color: #FE980F">TÍN ĐỒ</span> TAI NGHE </h4>
                    <small><i class="fa fa-map-marker" aria-hidden="true"></i> Shop TÍN ĐỒ TAI NGHE cam kết tất cả các hàng bán ra đều là chính hãng. <p style="color: red">Hàng luôn được bao test FAKE trọn đời và hoàn lại tiền bất kỳ lúc nào nếu phát hiện FAKE!</p> Sản Phẩm được Bảo Hành lỗi 1 đổi 1 trong vòng 1 tháng </small>
                </div>
                <div class="modal-body">
                    <h4>Cám ơn quý khách đã ghé thăm - <span style="color: #FE980F">SHOP TÍN ĐỒ TAI NGHE </span></h4>
                    <a href="tel:094.365.6286"><h3 style="color: #FE980F"> <i class="fa fa-phone" aria-hidden="true"></i>094 365 6286</h3></a>
                    hoặc
                    <a href="tel:0979-118-680"><h3 style="color: #FE980F"> <i class="fa fa-phone" aria-hidden="true"></i>0979 118 680</h3></a>
                    <h4 class="fa fa-map-marker" aria-hidden="true"></h4> Số 142 Kim Giang (gần cầu Lủ), Thanh Xuân, Hà Nội.
                    <p>Liên hệ số điện thoại đặt hàng và tư vấn tốt nhất nhé <i class="fa fa-heart" aria-hidden="true"></i></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>

        </div>
    </div>

</footer><!--/Footer-->
<div class="btn btn-danger btn-primary btn-blue" style="bottom: 50px;left:0px;position: fixed;width: 120px; border-radius: 15px;">
    <i style="color: white" class="fa fa-phone"> </i><span> </span> <a style="color: white" href="tel:094.365.6286" title="094.365.6286"><b>094.365.6286</b> </a>
</div>
<div class="btn btn-danger btn-primary btn-blue" style="bottom: 5px;left:0px;position: fixed;width: 120px;border-radius: 15px">
    <i style="color: white" class="fa fa-phone"> </i><span> </span> <a style="color: white" href="tel:0979.118.680" title="0979.118.680"><b>0979.118.680</b></a>
</div>

<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=334789113661675';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
</body>
</html>