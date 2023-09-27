var check = false;

function changeVal(el) {
    var qt = parseFloat(el.parent().children(".qt").html());
    var price = parseFloat(el.parent().children(".price").html());
    var eq = Math.round(price * qt * 100) / 100;

    el.parent()
        .children(".full-price")
        .html(eq + "$");

    changeTotal();
}

function changeTotal() {
    var price = 0;

    $(".full-price").each(function (index) {
        price += parseFloat($(".full-price").eq(index).html());
    });

    price = Math.round(price * 100) / 100;
    var tax = Math.round(price * 0.05 * 100) / 100;
    var shipping = parseFloat($(".shipping span").html());
    var fullPrice = Math.round((price + tax + shipping) * 100) / 100;

    if (price == 0) {
        fullPrice = 0;
    }

    $(".subtotal span").html(price);
    $(".tax span").html(tax);
    $(".total span").html(fullPrice);
}

$(document).ready(function () {
    $(".remove").click(function () {
        var el = $(this);
        var productId = el.closest(".product").data("product-id"); // Get the product ID

        // Retrieve the CSRF token from the window.Laravel object

        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        // Make an AJAX request to remove the product ID from the session
        $.ajax({
            url: "/remove-product-from-cart", // Replace with your actual route
            type: "POST",
            data: { productId: productId },
            headers: {
                "X-CSRF-TOKEN": csrfToken, // Include the CSRF token in the headers
            },

            success: function (response) {
                // Check if the removal was successful in the response (you can define this in your Laravel controller)
                if (response.success) {
                    el.parent().parent().addClass("removed");

                    window.setTimeout(function () {
                        el.parent()
                            .parent()
                            .slideUp("fast", function () {
                                el.parent().parent().remove();
                                if ($(".product").length == 0) {
                                    if (check) {
                                        $("#cart").html(
                                            "<h1>No products!</h1>"
                                        );
                                    }
                                }
                                changeTotal();
                            });
                    }, 200);
                } else {
                    console.error("Product removal failed");
                }
            },
            error: function (error) {
                console.error(error);
            },
        });
    });

    $(".qt-plus").click(function () {
        var el = $(this); // Store $(this) in a variable
    
        var productId = el.closest('.product').data('product-id'); // Get the product ID
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        
        // Make an AJAX request to add the product ID to the session
        $.ajax({
            url: '/add-value-to-session-array', // Replace with your actual route for adding products
            type: 'POST',
            data: { data: productId }, // Send the product ID as 'data' in the request
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
            },
            success: function (response) {
                // Check if the addition was successful in the response (you can define this in your Laravel controller)
                if (response.message === 'Value added to session array successfully') {
                    // Update the quantity displayed on the page
                    var quantityElement = el.parent().children(".qt");
                    var newQuantity = parseInt(quantityElement.html()) + 1;
                    quantityElement.html(newQuantity);
    
                    // Add the "added" class and perform animation
                    var fullPriceElement = el.parent().children(".full-price");
                    fullPriceElement.addClass("added");
                    window.setTimeout(function () {
                        fullPriceElement.removeClass("added");
                        changeVal(el);
                    }, 150);
                } else {
                    console.error('Product addition failed');
                }
            },
            error: function (error) {
                console.error(error);
            }
        });
    });
    
    
    

    $(".qt-minus").click(function () {
        var el = $(this); // Store $(this) in a variable
    
        var productId = el.closest('.product').data('product-id'); // Get the product ID
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
    
        // Make an AJAX request to remove the product ID from the session
        $.ajax({
            url: '/remove-value-from-session-array', // Replace with your actual route for removing products
            type: 'POST',
            data: { data: productId }, // Send the product ID as 'data' in the request
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
            },
            success: function (response) {
                // Check if the removal was successful in the response (you can define this in your Laravel controller)
                if (response.message === 'Value removed from session array successfully') {
                    var quantityElement = el.parent().children(".qt");
                    var newQuantity = parseInt(quantityElement.html()) - 1;
                    
                    if (newQuantity >= 1) {
                        quantityElement.html(newQuantity);
                    } else {
                        // If the quantity becomes zero or negative, remove the product from the UI
                        el.closest('.product').addClass("removed");
                        window.setTimeout(function () {
                            el.closest('.product').slideUp('fast', function () {
                                el.closest('.product').remove();
                                if ($(".product").length == 0) {
                                    if (check) {
                                        $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
                                    } else {
                                        $("#cart").html("<h1>No products!</h1>");
                                    }
                                }
                                changeTotal();
                            });
                        }, 200);
                    }
    
                    // Add the "minused" class and perform animation
                    el.parent().children(".full-price").addClass("minused");
                    window.setTimeout(function () {
                        el.parent().children(".full-price").removeClass("minused");
                        changeVal(el);
                    }, 150);
                } else {
                    console.error('Product removal failed');
                }
            },
            error: function (error) {
                console.error(error);
            }
        });
    });
    

   
});
