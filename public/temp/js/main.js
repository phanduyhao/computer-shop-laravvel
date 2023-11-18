// Tăng giảm số lượng sản phẩm

$(document).ready(function() {
    $('.form-add-to-cart').each(function () {
        var formAddToCart = $(this).attr('id');
        var numberInput = $('#' + formAddToCart + ' .numberInput');
        var decreaseButton = $('#' + formAddToCart + ' .decreaseButton');
        var increaseButton = $('#' + formAddToCart + ' .increaseButton');

        decreaseButton.on('click',function () {
            var currentValue = parseInt(numberInput.val(), 10);
            if (currentValue > 0) {
               numberInput.val(currentValue - 1);
            }
        });
        increaseButton.on('click',function () {
            var currentValue = parseInt(numberInput.val(), 10);
                numberInput.val(currentValue + 1);
        })
    })

});

// Thêm vào giỏ hàng
$(document).ready(function() {
    $('.product-infor-main').each(function() {
        var productMain = $(this).attr('id');
        var addToCart = $('#' + productMain + ' .add-to-cart');
        var checkAuth = $('.check-auth').text();

        addToCart.on('click', function(e) {
            e.preventDefault();
            if(checkAuth == 1){
                var productId = $(this).data('product-id');
                var userId = $(this).data('user-id');
                var thumbProduct = $('#' + productMain + ' .thumb-product').attr("src");
                var nameProduct = $('#' + productMain + ' .title-product').text();
                var priceProduct = $('#' + productMain + ' .okPrice-product').text();
                var quantity = $('#' + productMain + ' .quantity').val();
                priceProduct =  parseFloat(priceProduct.replace(/,/g, ''))
                var subtotal = parseInt(quantity) * priceProduct;

                    // Gửi yêu cầu Ajax
                if(quantity > 0){
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/addToCart',
                        type: 'POST',
                        data: {
                            product_id: productId,
                            user_id: userId,
                            thumb: thumbProduct,
                            name: nameProduct,
                            price: priceProduct,
                            quantity: quantity,
                            subtotal: subtotal
                        },
                        success: function(response) {
                            if(response.success) {
                                toastr.success(response.message, 'Thông báo');
                            }
                        },
                        error: function(error) {
                            toastr.error('Lỗi thêm giỏ hàng !');
                        }
                    });
                }else{
                    toastr.error('Vui lòng nhập số lượng sản phẩm !');
                }
            }else{
                window.location.href = '/login';
            }
        });
    });
});


// Cập nhật giỏ hàng
$(document).ready(function () {
    $('#updateCartButton').on('click', function (e) {
        e.preventDefault();
        var cartUpdates = [];

        $('.quantity').each(function () {
            var cartId = $(this).data('cart-id');
            var newQuantity = $(this).val();

            cartUpdates.push({ id: cartId, quantity: newQuantity });
        });

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/carts/updateQuantities',
            data: { cart_updates: cartUpdates },
            success: function (data) {
                // Cập nhật trang web sau khi cập nhật
                location.reload();
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});

// Checkout
$(document).ready(function () {
    $('#buy-products').on('click', function (e) {
        e.preventDefault();

        // Create an array to store product information
        var products = [];

        // Iterate over each cart item
        $('.single-item-list').each(function () {
            var product = {
                'thumb': $(this).find('.thumb-product').attr('src'),
                'title': $(this).find('.title-product').text(),
                'price': $(this).find('.price-product').text(),
                'quantity': $(this).find('.quantity').val(),
                'subtotal': $(this).find('.subtotal').text(),
            };

            // Add the product to the array
            products.push(product);
        });

        // Send the product information to the server using AJAX
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/buyProduct', // Change this to the actual route handling the purchase
            data: { products: products },
            success: function (response) {
                // Redirect to the checkout page
                window.location.href = '/checkout';
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });
});

