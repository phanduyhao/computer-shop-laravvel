$('.toast-success').addClass('bg-success')
// Tăng giảm số lượng sản phẩm

$(document).ready(function() {
    $("#decreaseButton").on("click", function() {
        var currentValue = parseInt($("#numberInput").val(), 10);
        if (currentValue > 0) {
            $("#numberInput").val(currentValue - 1);
        }
    });
    $("#increaseButton").on("click", function() {
        var currentValue = parseInt($("#numberInput").val(), 10);
        $("#numberInput").val(currentValue + 1);
    });
});

// Thêm vào giỏ hàng
$(document).ready(function() {
    $('.product-infor-main').each(function() {
        var productMain = $(this).attr('id');
        var addToCart = $('#' + productMain + ' .add-to-cart');
        addToCart.on('click', function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            var userId = $(this).data('user-id');
            var thumbProduct = $('#' + productMain + ' .thumb-product').attr("src");
            var nameProduct = $('#' + productMain + ' .title-product').text();
            var priceProduct = $('#' + productMain + ' .okPrice-product').text();
            priceProduct =  parseFloat(priceProduct.replace(/,/g, ''))
            var quantity = $('#' + productMain + ' .quantity').val();
            var subtotal = parseInt(quantity) * priceProduct;

            // Gửi yêu cầu Ajax
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
        });

    });
});




