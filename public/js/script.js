$(document).ready(function () {
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    
    $('.bxslider').bxSlider({
        auto: true,
        stopAutoOnClick: true,
        pager: true,
        mode: 'fade',
        captions: true,
        // slideWidth: 800
    });
    
    
});