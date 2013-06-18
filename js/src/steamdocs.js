/*
    Steam WebAPI Proposal by Seg
    
    
*/

$(document).ready(function(){
    console.log("Ready!");
    //$('.bs-docs-sidenav').affix();
    
    $('.nav-pills a, .toTop').click(function(){
        var scrollTo = 0;
        if ( $.attr(this, 'href') === "#introduction") {
            scrollTo = ($( "#navigation" ).offset().top)-30;
        } else if ( $.attr(this, 'href') === "#top") {
            scrollTo = 0;
        } else {
            scrollTo = (($( $.attr(this, 'href') ).offset().top)-70);
        }
        $('html, body').animate({
            scrollTop: scrollTo
        }, 500);
        return false;
    });
    
});
