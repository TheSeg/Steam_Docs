/*
    Steam WebAPI Proposal by Seg
    
    
*/
Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:11, font: "Monaco"});
Holder.add_theme("SteamDocs", {background:"#333", foreground:"#aaa", size:11, font: "Menlo, Monaco, Consolas, \"Courier New\", monospace"});

window.fbAsyncInit = function() {
    FB.init({
        appId      : '250811168365558',
        status     : false,
        xfbml      : true,
    });
};

$(document).ready(function(){
    var mastheadHeight = $("#masthead").height();
    var navHeight = $("#navigation").height();
    $('a[data-toggle|="tooltip"]').tooltip();
    $('.nav-pills a, .toTop, .enableScroll').click(function(){
        var scrollTo = 0;
        if ( $.attr(this, 'href') === "#top") {
            scrollTo = 0;
        } else {
            scrollTo = (($( $.attr(this, 'href') ).offset().top)-(mastheadHeight+navHeight-40));
        }
        $('html, body').animate({
            scrollTop: scrollTo
        }, 500);
        return false;
    });
    
    
    // Facebook Loading Functions
    (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/all.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
    // Twitter Loading Functions
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    
    // Google+ Loading Functions
    (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
    
});
