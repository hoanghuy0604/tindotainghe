@extends('admin.layout')
@section('css')
    <link href="{{ asset("admin/vendors/switchery/dist/switchery.min.css") }}" rel="stylesheet">
    <script src="{{ asset("ckeditor/ckeditor.js") }}"></script>
@endsection
@section('main')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tạo mới sản phẩm </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form data-parsley-validate class="form-horizontal form-label-left" method="post">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <hr/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên sản phẩm<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="@if(isset($product->name)){{$product->name}}@endif">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Link Url<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="linkUrl" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="@if(isset($product->linkUrl)){{$product->linkUrl}}@endif">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="img" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="@if(isset($product->img)){{$product->img}}@endif">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mô tả ngắn gọn
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea class="form-control col-md-7 col-xs-12" name="description">@if(isset($product->description)){{$product->description}}@endif</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keyword">Keyword
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea class="form-control col-md-7 col-xs-12" name="keyword">@if(isset($product->keyword)){{$product->keyword}}@endif</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tin khuyến mãi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div style="margin-top: 10px">
                                <label>
                                    <input type="checkbox" name="type" @if(isset($product->type)) checked @endif/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label class="control-label" for="keyword">Nội dung chi tiết
                        </label>
                            <textarea class="form-control col-md-7 col-xs-12" name="content" id="editor1" style="min-height:500px;  ">@if(isset($product->content)){{$product->content}}@endif</textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                            </script>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <a type="submit" class="btn btn-primary" href="/article">Quay lại</a>
                            <input value="Cập nhật" type="submit" class="btn btn-success">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('admin/vendors/switchery/dist/switchery.min.js')}}"></script>
@endsection