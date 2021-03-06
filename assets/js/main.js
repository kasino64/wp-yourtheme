$(document).ready(function() {
	
	jQuery.extend(jQuery.validator.messages, {
      required: "Campo obrigatório.",
      email: "Email inválido."
    });
	
    jQuery("#gallery").unitegallery({
        tiles_space_between_cols: 0,
        tiles_max_columns: 3,
    });

    jQuery("#clients-gallery").unitegallery({
        tiles_space_between_cols: 0,
        tiles_max_columns: 3,
        tile_enable_textpanel: true,
        lightbox_slider_control_zoom: true,
        tile_enable_action: false
    });

    $('a[href^="#"]').each(function() {
        var href = $(this).attr("href");
        $(this).attr("href", "javascript:void(0)");
        $(this).attr("data-link", href);
    });
	
    $('#menu-menu-principal a').first().parent().addClass('active');
	
    $(document).on("scroll", onScroll);
    $('a[data-link^="#"]').on('click', function(e) {
        var target = $(this).attr("data-link"),
            menu = target;
        $target = $(target);
        var position = $target.position().top;
        console.log(position);
        $('html, body').stop().animate({
            'scrollTop': position
        }, 500, 'swing', function() {
            //window.location.hash = target;
            //$(document).on("scroll", onScroll);
        });
        $('a').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop() + 150;
    $('#menu-menu-principal a').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("data-link"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu-center ul li a').parent().removeClass("active");
            currLink.parent().addClass("active");
        } else {
            currLink.parent().removeClass("active");
        }
    });
}