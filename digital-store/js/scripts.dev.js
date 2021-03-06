/* Digital Store scripts by Easy Digital Downloads - http://easydigitaldownloads.com */

var digitalstore_theme_js_params;
(function ($, digitalstore_theme_js_params) {

    // DROPDOWN NAV
    var $access = $('#access'),
        $select  = $("<select />");
    $("<option />", {
        "selected": "selected",
        "value": "",
        "text": digitalstore_theme_js_params.in_goto
    }).appendTo($select);
    $("a", $access).each(function () {
        var el = $(this);
        $("<option />", {
            "value": el.prop("href"),
            "text": el.text()
        }).appendTo($select);
    });
    $select.appendTo($access);
    $("select", $access).change(function () {
        window.location = $(this).find("option:selected").val();
    });

    //ADD TO CART DROPDOWNS
    var $dropdowns = $('[data-toggle="dropdown"]');
    $dropdowns.on('click', function () {
        var self = $(this), menu = $(this).parent().find('.dropdown-menu');
        self.toggleClass('active');
        menu.toggle();
    });
    $('body').on('click.eddAddToCart', '.edd-add-to-cart',function (e) {
        var drop = $('.dropdown-menu a[href=#addtocart]');
        if ( drop.length > 0 && digitalstore_theme_js_params.checkout_uri.length > 0 ) {
                drop.text(digitalstore_theme_js_params.in_gotocheckout).attr('href',digitalstore_theme_js_params.checkout_uri);
        }
    });
    $('.dropdown-menu a[href=#addtocart]').on('click', function (e) {
        var self = $(this);
        if ( self.attr('href') === '#addtocart' ) {
            self.parents('.add-to-cart').find('.edd-add-to-cart').click();
            if ( digitalstore_theme_js_params.checkout_uri.length > 0 ) {
                self.text(digitalstore_theme_js_params.in_gotocheckout).attr('href',digitalstore_theme_js_params.checkout_uri);
            }
            e.preventDefault();
        }
    });

    // COMMENTS FORM VALIDATOR 
    var $comments = $('#commentform');
    if ($comments.length > 0 && $.isFunction($.validator)) {
        $comments.validate({
            rules: {
                author: { required: true, minlength: 2 },
                email: { required: true, email: true },
                url: { url: true },
                comment: { required: true, minlength: 2 }
            },
            messages: {
                author: digitalstore_theme_js_params.in_author,
                email: digitalstore_theme_js_params.in_email,
                url: digitalstore_theme_js_params.in_url,
                comment: digitalstore_theme_js_params.in_comment
            }
        });
    }
    
    // HOMESLIDESHOW
    var $slideshow = $('.slideshow');
    if ( $slideshow.length > 0 && $.isFunction($.flexslider) ) {
        $slideshow.flexslider();
    }

})(jQuery, digitalstore_theme_js_params);