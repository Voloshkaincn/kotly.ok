$(document).ready(function(){

    $('.big-board').slick({
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 4000,
        cssEase: 'linear',
        prevArrow: '<button type="button" class="slick-prev big-board__nav-arrow big-board__nav-arrow_left"></button>',
        nextArrow: '<button type="button" class="slick-next big-board__nav-arrow big-board__nav-arrow_right"></button>',
        responsive: [{
            breakpoint: 766,
            settings: {
                arrows: false
            }
        }]
    });


    $('#products-slider-1').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        dotsClass: 'nav-dots',
        // autoplay: true,
        // autoplaySpeed: 3000,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        responsive: [
        {
            breakpoint: 766,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 560,
            settings: {
                slidesToShow: 2,
                dots: false,
                arrows: false
            }
        }
        ]
    });
    $('.nav-dots > li > button').html('');

    $('#products-slider-2').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        dotsClass: 'nav-dots',
        // autoplay: true,
        // autoplaySpeed: 3000,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        responsive: [
        {
            breakpoint: 766,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 560,
            settings: {
                slidesToShow: 2,
                dots: false,
                arrows: false
            }
        }
        ]
    });
    $('.nav-dots > li > button').html('');


    /*--------modal box------*/
    $('#enter').click(function () {
        $('#modal-enter').show();
        $('.modal-overall').show();
    });
    $('#close').click(function () {
        $('.modal').hide();
        $('.modal-overall').hide();
    });
    $('.modal-overall').click(function () {
        $('.modal').hide();
        $('.modal-overall').hide();
    });

    /*-----price slider-------*/
    var maxP = 22000;
    $("#price-slider").slider({
        min: 0,
        max: maxP,
        values: [0,maxP],
        range: true,
        stop: function(event, ui) {
            $("input#minCost").val($("#price-slider").slider("values",0));
            $("input#maxCost").val($("#price-slider").slider("values",1));
        },
        slide: function(event, ui){
            $("input#minCost").val($("#price-slider").slider("values",0));
            $("input#maxCost").val($("#price-slider").slider("values",1));
        }
    });
    $("input#minCost").change(function(){
        var value1=$("input#minCost").val();
        var value2=$("input#maxCost").val();
        if(parseInt(value1) > parseInt(value2)){
            value1 = value2;
            $("input#minCost").val(value1);
        }
        $("#price-slider").slider("values",0,value1);
    });

    $("input#maxCost").change(function(){
        var value1=$("input#minCost").val();
        var value2=$("input#maxCost").val();
        if (value2 > maxP) { value2 =maxP; jQuery("input#maxCost").val(maxP)}
        if(parseInt(value1) > parseInt(value2)){
            value2 = value1;
            $("input#maxCost").val(value2);
        }
        $("#price-slider").slider("values",1,value2);
    });

    /*-----height slider-------*/
    var maxH;
    maxH = 2150;
    $("#height-slider").slider({
        min: 0,
        max: maxH,
        values: [0,maxH],
        range: true,
        stop: function(event, ui) {
            $("input#minHeight").val($("#height-slider").slider("values",0));
            $("input#maxHeight").val($("#height-slider").slider("values",1));
        },
        slide: function(event, ui){
            $("input#minHeight").val($("#height-slider").slider("values",0));
            $("input#maxHeight").val($("#height-slider").slider("values",1));
        }
    });
    $("input#minHeight").change(function(){
        var value1=$("input#minHeight").val();
        var value2=$("input#maxHeight").val();
        if(parseInt(value1) > parseInt(value2)){
            value1 = value2;
            $("input#minHeight").val(value1);
        }
        $("#height-slider").slider("values",0,value1);
    });

    $("input#maxHeight").change(function(){
        var value1=$("input#minHeight").val();
        var value2=$("input#maxHeight").val();
        if (value2 > maxH) { value2 =maxH; jQuery("input#maxHeight").val(maxH)}
        if(parseInt(value1) > parseInt(value2)){
            value2 = value1;
            $("input#maxHeight").val(value2);
        }
        $("#height-slider").slider("values",1,value2);
    });

    /*-----width slider-------*/
    var maxW;
    maxW = 1460;
    $("#width-slider").slider({
        min: 0,
        max: maxW,
        values: [0,maxW],
        range: true,
        stop: function(event, ui) {
            $("input#minWidth").val($("#width-slider").slider("values",0));
            $("input#maxWidth").val($("#width-slider").slider("values",1));
        },
        slide: function(event, ui){
            $("input#minWidth").val($("#width-slider").slider("values",0));
            $("input#maxWidth").val($("#width-slider").slider("values",1));
        }
    });
    $("input#minWidth").change(function(){
        var value1=$("input#minWidth").val();
        var value2=$("input#maxWidth").val();
        if(parseInt(value1) > parseInt(value2)){
            value1 = value2;
            $("input#minWidth").val(value1);
        }
        $("#width-slider").slider("values",0,value1);
    });

    $("input#maxWidth").change(function(){
        var value1=$("input#minWidth").val();
        var value2=$("input#maxWidth").val();
        if (value2 > maxW) { value2 =maxW; jQuery("input#maxWidth").val(maxW)}
        if(parseInt(value1) > parseInt(value2)){
            value2 = value1;
            $("input#maxWidth").val(value2);
        }
        $("#width-slider").slider("values",1,value2);
    });

    /*-----length slider-------*/
    var maxL = 2680;
    $("#length-slider").slider({
        min: 0,
        max: maxL,
        values: [0,maxL],
        range: true,
        stop: function(event, ui) {
            $("input#minLength").val($("#length-slider").slider("values",0));
            $("input#maxLength").val($("#length-slider").slider("values",1));
        },
        slide: function(event, ui){
            $("input#minLength").val($("#length-slider").slider("values",0));
            $("input#maxLength").val($("#length-slider").slider("values",1));
        }
    });
    $("input#minLength").change(function(){
        var value1=$("input#minLength").val();
        var value2=$("input#maxLength").val();
        if(parseInt(value1) > parseInt(value2)){
            value1 = value2;
            $("input#minLength").val(value1);
        }
        $("#length-slider").slider("values",0,value1);
    });

    $("input#maxLength").change(function(){
        var value1=$("input#minLength").val();
        var value2=$("input#maxLength").val();
        if (value2 > maxL) { value2 =maxL; jQuery("input#maxLength").val(maxL)}
        if(parseInt(value1) > parseInt(value2)){
            value2 = value1;
            $("input#maxLength").val(value2);
        }
        $("#length-slider").slider("values",1,value2);
    });

/*------------select-----------------*/

    var selectDefaultHeight = $('#selectBox').height();
    // var rotateDefault = "rotate(0deg)";
    $('#selectBox .valueTag').click(function() {        
        var currentHeight = $('#selectBox').height();
        if (currentHeight < 100 || currentHeight == selectDefaultHeight) {            
            $('#selectBox').height("240px"); 
            // $('img.arrow').css({borderRadius: "1000px", transition: ".2s", transform: "rotate(180deg)"});
            $('#selectBox').css({boxShadow: "0 1px #fdbf36"});
        }       
        if (currentHeight >= 240) {
            $('#selectBox').height(selectDefaultHeight);
            // $('img.arrow').css({transform: rotateDefault});
        }
    });  
    $('li.option').click(function() {
        $('#selectBox').height(selectDefaultHeight);
        // $('img.arrow').css({transform: rotateDefault});
        $('.valueTag').text($(this).text());
    });
/*-------popover------------*/

    $('#itemsOnPage').click(function() {
            $('#itemsOnPage .options').toggleClass('options_visible');
            $('#itemsOnPage .options  > li').click(function() {
                $('#itemsOnPage .selected').text($(this).text())
            });
        });

    $('#sortBy').click(function() {
        $('#sortBy .options').toggleClass('options_visible');
        $('#sortBy .options  > li').click(function() {
            $('#sortBy .selected').text($(this).text());
        });
    });
    /*----------------------product-card--------------------*/
    $('.catalog-option-control-view__grid').click(function(){
       $('.catalog-option-control-view__grid').addClass('catalog-option-control-view__grid_active');
       $('.catalog-option-control-view__list').removeClass('catalog-option-control-view__list_active');
       $('.catalog-products > div').removeClass('product-card-list').addClass('product-card-grid');
    });
    $('.catalog-option-control-view__list').click(function(){
        $('.catalog-option-control-view__list').addClass('catalog-option-control-view__list_active');
        $('.catalog-option-control-view__grid').removeClass('catalog-option-control-view__grid_active');
        $('.catalog-products > div').removeClass('product-card-grid').addClass('product-card-list');
    });
    /*---------Quantity-------*/

    $('.quantity_minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.quantity_plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
    /*----------description-tags--------*/
    $('.description-tags .tag-description').click(function(){
        $('.description-tags > div').removeClass('active');
        $('.tag-description').addClass('active');
        $('.description-text > div').removeClass('show');
        $('.text_tag-description').addClass('show');
    });
    $('.description-tags .tag-specifications').click(function(){
        $('.description-tags > div').removeClass('active');
        $('.tag-specifications').addClass('active');
        $('.description-text > div').removeClass('show');
        $('.text_tag-specifications').addClass('show');
    });
    $('.description-tags .tag-comments').click(function(){
        $('.description-tags > div').removeClass('active');
        $('.tag-comments').addClass('active');
        $('.description-text > div').removeClass('show');
        $('.text_tag-comments').addClass('show');
    });
/*-----------------search-filter----------*/

    $('.show-all').click(function () {
        if ($(this).hasClass('wrap')){
            $(this).parent().find('div:nth-child(5n) ~ div').hide('25','swing');
            $(this).html("Показать все").removeClass('wrap');
        } else {
            $(this).parent().find('div:nth-child(5n) ~ div').show('25','swing');
            $(this).html("Свернуть").addClass('wrap');
        }
    });
    /*----------------mobile-button---------*/
    $(".main-menu-mobil-button").click(function () {
        if ($('.quick-search').css('display') == 'block'){
            $('.quick-search').toggle();
            $(".quick-search-mobil-button").toggleClass("active");
        }

        $(".main-menu-mobil-button").toggleClass("active");
        $(".main-nav").toggle();

        $(".main-menu-item_has-children > a").click(function () {
            $(this).parent().find(".main-menu-subitem").toggle();
            return false;
        });
    });
    $(".quick-search-mobil-button").click(function () {
        if ($('.main-nav').css('display') == 'block'){
            $(".main-menu-mobil-button").toggleClass("active");
            $('.main-nav').toggle();
        }
        $(".quick-search-mobil-button").toggleClass("active");
        $(".quick-search").toggle();
    });
/*-----------mobal filter---------*/
    $('.modal-button').click(function () {
        var modal = $('#'+$(this).data('modal'));
        modal.show();
        $('.modal-overall').show();
        $('body').css('overflow','hidden');
        $(modal).find('.close').click(function () {
            $(modal).hide();
            $('body').css('overflow','auto');
            $('.modal-overall').hide();
        });
        $('.modal-overall').click(function () {
            $(modal).hide();
            $('body').css('overflow','auto');
            $('.modal-overall').hide();
        })

    });

    var w = $(window).width();

    if (w < 1200){
        $('#sidebar-filters').find('.catalog-filter:nth-child(n+3) .catalog-filter__expander').removeAttr('checked');
    }

    /*----radio tabs------*/
    $('.switch input').click(function() {
        var switch_id = $(this).val();
        $('.cart-module>div').hide();
        $('#' + switch_id).show();
    });

    /*----comparison scroll-----*/
    
    $(window).scroll(function(){
        if ($("#compare-info-header").length){
            var header = $("#compare-info-header");
            var height = $('.comparison-header').offset().top + 50;
            //alert (height);
            if ( $(this).scrollTop() > height && header.hasClass("default") ){
             header.removeClass("default").addClass("fixed");
             $('.compare-info').addClass('fixed-margin');
            } else if($(this).scrollTop() <= height && header.hasClass("fixed")) {
                header.removeClass("fixed").addClass("default");
                $('.compare-info').removeClass('fixed-margin');
            }
        }
        
    });



})




