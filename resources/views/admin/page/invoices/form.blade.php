@extends("admin.layout")
@section('content_main')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-dark">
                <form
                    action="{{ route("admin." . $controllerName . ".store") }}" method="POST"
                    enctype="multipart/form-data"
                    class="px-2 invoices-form">
                    @csrf
                    <div class="invoice-group my-4 d-flex flex-column">
                        <h4 class="font-weight-bold mb-2 text-uppercase">Sản phẩm 1</h4>
                        <div class="card p-3">
                            <div class="row">
                                <div class="col-lg-3 mb-20">
                                    <div class="form-group">
                                        <label for="" class="mb-1 font-weight-bold">Nhà cung cấp</label>
                                        <select class="form-control form-checkout" id="select-province" name="partner_id">
                                            @foreach($partners as $item)
                                                <option value="{{ $item -> id }}">{{ $item -> name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-20">
                                    <div class="form-group">
                                        <label for="" class="mb-1 font-weight-bold">Sản phẩm</label>
                                        <select class="form-control form-checkout" id="select-province" name="partner_id">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-20">
                                    <div class="form-group">
                                        <label for="" class="mb-1 font-weight-bold">Số lượng</label>
                                        <input type="number" name="amount" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-20">
                                    <div class="form-group">
                                        <label for="" class="mb-1 font-weight-bold">Giá nhập</label>
                                        <input type="text" name="price" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body justify-content-end d-flex">
                        <button type="button" class="btn btn-info add-new-pd-for-invoice">Thêm mới sản phẩm</button>
                        <button type="submit" class="btn btn-success ml-2">Lưu</button>
                        <a class="btn btn-secondary ml-2" href="{{ route("admin." . $controllerName . ".index") }}">hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
