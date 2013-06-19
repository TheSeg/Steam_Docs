/*
    Steam WebAPI Proposal by Seg
    
    
*/

$(document).ready(function(){
    var mastheadHeight = $("#masthead").height();
    var navHeight = $("#navigation").height();
    $('.nav-pills a, .toTop').click(function(){
        var scrollTo = 0;
        var topThing = $( $.attr(this, 'href') ).offset().top;
        if ( $.attr(this, 'href') === "#top") {
            scrollTo = 0;
        } else {
            scrollTo = (($( $.attr(this, 'href') ).offset().top)-(mastheadHeight+navHeight));
        }
        $('html, body').animate({
            scrollTop: scrollTo
        }, 500);
        return false;
    });
});
