$("#guest-num").ionRangeSlider({
    grid: true,
    min: 5,
    max: 2000,
    from: 20,
    step: 1,
    prettify_enabled: false
});

$("#budget").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 5000,
    from: 800,
    to: 1000,
    prefix: "₹ ",
    prettify_enabled: false
});

$('.date-pick').multiDatesPicker({
	minDate: 0,
	maxPicks: 5
});

$(".time-pick__item").on('click', function(){
	$(".time-pick__item").css({
		'background': '#fff',
		'border-radius': '10px'
	});

	$(this).css({
		'background': '#EDEDED',
		'border-radius': '10px'
	});
});

$("#guest-num").on("change", function () {
    var $this = $(this),
        value = $this.prop("value");

    $(".guests-value").text(value);
});

$("#budget").on("change", function () {
    var $this = $(this),
        value = $this.prop("value").split(";");

    $(".budget-value").text(value[0] + " - " + value[1]);
});

var count = 1;
$(".plan__bottom-bar__right").on('click', function() {
	count = count + 1;
	$(this).attr('data-sec-no', count);
	$(this).prev().attr('data-sec-no', count);
	if(count == 5) {
		$(this).hide();
	}
	if(count < 5) {
		$(this).prev().show();
	}
	$('.plan__main-content__section').removeClass('animated bounceOutLeft bounceOutRight bounceInRight bounceInLeft');
	var secActive = $('.plan__main-content-wrapper').find('.plan__main-content__section.section--active');
	$(secActive).removeClass('animated bounceOutLeft bounceOutRight bounceInRight bounceInLeft section--active');
	$(secActive).addClass('animated bounceOutLeft').fadeOut();
	$(secActive).next().addClass(' animated bounceInRight section--active').fadeIn();
});

$(".plan__bottom-bar__left").on('click', function() {
	count = count - 1;
	$(this).attr('data-sec-no', count);
	$(this).next().attr('data-sec-no', count);
	if(count == 1) {
		$(this).hide();
	}
	if(count > 1) {
		$(this).next().show();
	}
	$('.plan__main-content__section').removeClass('animated bounceOutLeft bounceOutRight bounceInRight bounceInLeft');    		
	var secActive = $('.plan__main-content-wrapper').find('.plan__main-content__section.section--active');
	$(secActive).removeClass('animated bounceOutLeft bounceOutRight bounceInRight bounceInLeft section--active');
	$(secActive).addClass('animated bounceOutRight').fadeOut();
	$(secActive).prev().addClass(' animated bounceInLeft section--active').fadeIn();
});




$('.plan__top-bar--close').on('click', function() {
	$(".overlay-modal__plan-content-wrapper").removeClass("overlay-modal__plan-content-wrapper--open");
});




//PLAN SELECTED OPTIONS
