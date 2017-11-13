@extends('home.layout')
@section('des')@if(isset($keyword)){{$keyword}}@endif
@endsection
@section('key')@if(isset($keyword)){{$keyword}}@endif
@endsection
@section('content')   
    <div class="col-sm-9 padding-right">    
    <h2 class="title text-center">Tin tức STSHOP</h2>
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">@if(isset($name)) {{$name}} @endif</h2>
            @if(isset($article))
                @foreach($article as $index => $pd)
                    <div class="col-sm-10 col-sm-offset-1 product-image-wrapper" style="margin-bottom: 10px">
                        <div class="col-sm-4">
                            <a href="/st-shop-khuyen-mai/{{$pd->linkUrl}}/{{ $pd->id }}"><img src="{{$pd->img}}" width="150px"></a>
                        </div>
                        <div class="col-sm-8">
                            <a href="/st-shop-khuyen-mai/{{$pd->linkUrl}}/{{ $pd->id }}"><h4> {{$pd->name}}</h4></a>
                            <small> {{$pd->description}}</small>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                @endforeach
            @endif
        </div><!--features_items-->
        <hr/>
        <div class="col-md-offset-1">
            {!! $article->render() !!}
        </div>
    </div>
        </div><!--/category-tab-->
    </div>
@endsection