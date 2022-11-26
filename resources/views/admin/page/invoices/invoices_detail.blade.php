@extends("admin.layout")
@section("content_main")
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-dark">
                <div class="box-body">
                    <div class="order-address">
                        <h6 class="text-uppercase mt-3 mb-3">Thông tin đơn hàng nhập</h6>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Tên</th>
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Phường\Xã</th>
                                    <th>Quận\Huyện</th>
                                    <th>Phường\Xã</th>
                                </tr>
                                <tr>
                                    <td>{{ @$order_address -> name }}</td>
                                    <td>{{ @$order_address -> phone }}</td>
                                    <td>{{ @$order_address -> email }}</td>
                                    <td>{{ @$order_address -> home_address }}</td>
                                    <td>{{ @$order_address -> ward }}</td>
                                    <td>{{ @$order_address -> district }}</td>
                                    <td>{{ @$order_address -> province }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-detail">
                        <h6 class="text-uppercase mt-3 mb-3">Danh sách đơn hàng cần vận chuyển</h6>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Ảnh</th>
                                <th style="width: 500px">Tên</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng giá</th>
                            </tr>

                            @foreach($order_details as $item)
                                <tr>
                                    <td>
                                        <img src="{{ \App\Helper\Functions::getImage("product", @$item -> product_picture, "thumbnail") }}" alt="{{ @$item -> product_name }}">
                                    </td>
                                    <td>{{ @$item -> product_name }}</td>
                                    <td>{{ number_format(@$item -> product_price) }} VND</td>
                                    <td>{{ @$item -> product_quantity }}</td>
                                    <td>{{ number_format(@$item -> price_total) }} VND</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <a href="{{ route("admin.order.index") }}" class="btn btn-info">Trở về</a>
                </div>
            </div>
        </div>
    </div>
@stop
