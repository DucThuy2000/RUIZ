<div class="action-links">
    <a href="#" class="cart-btn" title="Thêm giỏ hàng" data-url="{{ route("cart.addToCart", ["id" => $id_cart]) }}">
        <i class="icon-basket-loaded"></i>
    </a>
    <a href="" class="wishlist-btn" title="Thêm vào danh sách yêu thích" data-url="{{ route("wishList.addWishList", ["id" => $id_cart]) }}">
        <i class="icon-heart"></i>
    </a>
</div>
