@extends("enduser.layout")
@section("front_content")

    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb cart-page">
        <div class="container">
            <div class="notification-wrapper">
                <i class="fas fa-shopping-basket"></i>
                <span class="cart-notification mb-4">Đặt hàng thành công, chúng tôi sẽ sớm liên hệ vói bạn</span>
                <a href="{{ route("page.index") }}" class="btn-back">Quay Về Trang Chủ</a>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
@stop

<style>
    .notification-wrapper{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid #ccc;
        padding: 50px 0;
    }

    .notification-wrapper i {
        display: block;
        color: #cccccc;
        font-size: 150px;
        pointer-events: none;
        opacity: .8;
        margin-bottom: 30px;
    }

    .cart-notification{
        font-size: 16px;
        color: #c89979;
        opacity: .9;
        pointer-events: none;
    }
    .btn-back{
        padding: 8px;
        text-align: center;
        border: 1px solid #ccc;
        background: #C89979;
        border-radius: 10px;
        width: 220px;
        font-size: 16px;
        color: #ffffff;
        transition: all .3s ease-in-out;
    }

    .btn-back:hover{
        background: #333333;
        color: #ffffff;
    }
</style>
