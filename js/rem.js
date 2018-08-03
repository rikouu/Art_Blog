function defaultfont() {
    var sw = $(window).width();
    var pw = 750;
    var f = 100 * sw / pw;
	if(f >= 70){ f= 70}
    $('html').css({
        'fontSize': f + 'px',
        'transtion': '0.35s'
    })
}
setTimeout(function() {
    defaultfont()
},
100);
var w_height = $(window).width();
$(window).resize(function() {
    if ($(window).width() != w_height) {
        setTimeout(function() {
            defaultfont()
        },
        100)
    }
});