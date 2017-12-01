$(function() {

    $('ol li').bind('click', function() {

        var elm = jQuery(this);
        if (elm.hasClass('highlight')) {
            elm.removeClass('highlight').addClass('no-highlight')
        } else {
            jQuery('.highlight').removeClass('highlight');
            elm.addClass('highlight').removeClass('no-highlight');
        }
    });

});
