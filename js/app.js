$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled fixed-top', $(this).scrollTop() > $nav.height());
    });
});
