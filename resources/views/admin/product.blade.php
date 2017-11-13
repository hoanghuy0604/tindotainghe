@extends('admin.layout')

@section('main')
    <div class="col-md-12 col-sm-12 col-xs-12">
        </br>
        <a href="{{ url('/product-create') }}" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i>  THÊM MỚI SẢN PHẨM</a>
        </br></br>
        <div class="x_panel">
            <div class="x_title">
                <h2>Danh sách sản phẩm</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form data-parsley-validate class="form-horizontal form-label-left" method="get">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="category_id">
                            <option>Tìm kiếm theo danh mục </option>
                            @if(isset($category))
                                @foreach($category as $ct)
                                    <option value="{{$ct->id}}">{{$ct->name}}</option>
                                @endforeach
                            @endif
                            <option value="all">Tất cả </option>
                        </select>
                    </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                            <input value="Tìm kiếm" type="submit" class="btn btn-success">
                        </div>
                </form>
                <hr/>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th>
                                <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">STT </th>
                            <th class="column-title">Tên Sản Phẩm</th>
                            <th class="column-title">Giá</th>
                            <th class="column-title">Sản phẩm nổi bật</th>
                            <th class="column-title">Sản phẩm HOT DM</th>
                            <th class="column-title">Còn hàng</th>
                            <th class="column-title">Sản phẩm mới</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @if(isset($products))
                            @foreach($products as $index => $ct)
                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">{{ $index + 1 }}</td>
                                    <td class=" ">{{ $ct->name }}</td>
                                    <td class=" ">{{ $ct->price }}K</td>
                                    <td class=" ">
                                        @if(isset($ct->type))
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        @else
                                        <i class="fa fa-ban" aria-hidden="true"></i>
                                        @endif
                                    </td>
                                    <td class=" ">
                                        @if(isset($ct->type_category))
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-ban" aria-hidden="true"></i>
                                        @endif
                                    </td>
                                    <td class=" ">
                                        @if(isset($ct->type_product))
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-ban" aria-hidden="true"></i>
                                        @endif
                                    </td>

                                    <td class=" ">
                                        @if(isset($ct->new))
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-ban" aria-hidden="true"></i>
                                        @endif
                                    </td>

                                    <td class=" last">
                                        <a href="product-edit/{{ $ct->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="#" data-toggle="modal" data-target=".{{$ct->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <div class="modal fade {{$ct->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="gridSystemModalLabel">Bạn có thực sự muốn xoá sản phẩm?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-danger"> {{$ct->name}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">QUAY LẠI</button>
                                                <a type="button" class="btn btn-danger" href="/product-del/{{$ct->id}}">XOÁ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <div class="text-center">
                        {!! $products->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection