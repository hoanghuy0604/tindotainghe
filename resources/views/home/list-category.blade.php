@extends('home.layout')
@section('des')@if(isset($keyword)){{$keyword}}@endif
@endsection
@section('key')@if(isset($keyword)){{$keyword}}@endif
@endsection
@section('content')    
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">@if(isset($name)) {{$name}} @endif</h2>
            @if(isset($products))
                @foreach($products as $index => $pd)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}"><img src="{{$pd->img1}}" alt="{{$pd->name}}" /></a>
                                    @if(isset($pd->sale))
                                        <h4> <span style="text-decoration: line-through">${{$pd->price}}K</span> <span style="color: #fdb45e;">{{$pd->price - $pd->price * $pd->sale /100}}K </span></h4>
                                    @else
                                        <h4><span style="color: #008ffe;">{{$pd->price}}K </span></h4>
                                    @endif
                                    <a href="/phu-kien/{{$pd->id}}/{{$pd->link}}">{{$pd->name}}</a>
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
                            <div class="choose">
                                </br>
                                <div class="text-center">
                                    <a href="#" class="btn btn-default add-to-cart" data-toggle="modal" data-target=".lh"><i class="fa fa-shopping-cart"></i>Liên Hệ</a>
                                </div>
                                @if(isset($pd->sale))
                                    <b class="text-center pull-right text-success"> (-{{$pd->sale}}%</b>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if($index == 2)
                        <div class="clearfix"></div>
                    @endif
                @endforeach
            @endif
            <div>
                {!! $products->render() !!}
            </div>
        </div><!--features_items-->

            </div>
        </div><!--/category-tab-->
    </div>
@endsection