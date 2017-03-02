// If the document is ready
$(document).ready(function () {
    // Setup the x-csrf-token
    $.ajaxSetup({ headers: { 'X-CSRF-Token': $('meta[name="_token"]').attr('content') } });
    // If the user is clicked to cart
    $('.to-cart').unbind().click(function () {
        var product_id = this.getAttribute('product-id');
        $.ajax({
            url     : "/addToCart",
            method  : 'POST',
            data    : {
                'id': product_id,
            },
            success: function(result){ alert(result); }
        });
    });
});