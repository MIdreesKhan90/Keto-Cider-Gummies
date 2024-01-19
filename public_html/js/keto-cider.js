jQuery(document).ready(function($) {
    /*~~~~~~~ * 01. Mobile Menu   ~~~~~~~~*/
  $(".menuIcon").click(function () {
    $(this).toggleClass("menu-close");
    $(".menuMain").slideToggle("slow");
  });
  $(".menuMain ul li:has(ul)").prepend('<span class="arrow"></span>');
  $(".arrow").click(function () {
    $(this).parents().toggleClass("show");
    $(this).siblings("ul.sub-menu").slideToggle("slow");
    $(this).toggleClass("minus");
  });

	$(window).scroll(function () {
    $('.progress-animation .percent').each(function () {
        if (!$(this).hasClass('done')) {
            var hT = $(this).offset().top,
                hH = $(this).outerHeight(),
                wH = $(window).height(),
                wS = $(window).scrollTop();

            if (wS > (hT + hH - wH)) {
                var num = $(this), countTo = num.attr('data-percent');

                $({ countNum: num.find('b').text() }).animate({ countNum: countTo }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function () {
                        num.find('b').text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        num.find('b').text(this.countNum);
                    }
                });
                $(this).addClass('done');
            }
        }
    });
});

$(".field-orderform-payment_processor input[type=radio]").change(function () {
    update_products_value($('input[name="product_id"]:checked'));
  });

  $('input[name="product_id"]').change(function () {

    update_products_value($('input[name="product_id"]:checked'));
  }).change();


  // Update Order page terms text
  function update_products_value(selectedProduct) {
    var termsText = $('.terms_text');
    var data = selectedProduct.data();
    data.days = ($("[name='OrderForm[payment_processor]']:checked").val() == "credit_card") ? 30 : 30;

    if (data.months == 'one-month') data.days *= 1;
    if (data.months == 'two-month') data.days *= 2;
    if (data.months == 'three-month') data.days *= 3;

    // $('.product_type').html(data.type);
    // $('#product_price').html((data.amount).toFixed(2));
    // $(".product_image").attr('src', data.img);

    //var shippingcost = $("#shipping_price").html();
    //var productPrice = $('#product_price').html();
    //$(".cart_total").html((+productPrice).toFixed(2));

    termsText.find('.terms_product').html(data.type);
    termsText.find('.terms_amount').html('$' + data.amount.toFixed(2));
    termsText.find('.terms_day').html(data.days);
    termsText.find('.terms_month').html(data.months);
  }
});