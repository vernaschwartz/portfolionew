$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled fixed-top', $(this).scrollTop() > $nav.height());
    });
});
/* 
$(function() {
    $("#headingOne").on('click', function() {   
       $(".rotate").toggleClass("down");
    });
});

$(function() {
    $("#headingTwo").on('click', function() {   
       $(".rotate2").toggleClass("down2");
    });
});
 */
