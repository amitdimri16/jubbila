$(function() {

	// $('.category').on('click', function() {
	// 	$('.overlay-modal').append('<div class="overlay-modal__plan-content-wrapper"></div>');
	// 	$('.overlay-modal__plan-content-wrapper').load('/jubbila/plan.php');
	// 	$(".overlay-modal__plan-content-wrapper").addClass("overlay-modal__plan-content-wrapper--open");
	// });

	var cName = "";

	$('.category').on('click', function() {
		$('.plan').append('<div class="plan__content-wrapper"></div>');
		$('.plan__content-wrapper').load('/jubbila/plan.php');
		$("#myCarousel").css({'height': '0', 'margin-top': '-138px'});
		cName = $(this).data('c-name');

		// $(".plan-category-name").html('<div class="plan-category-name"><a class="plan-selected" href="javascript:void(0)"><img class="plan-selected-icon" src="assets/images/icon.png"></i><label class="plan-selected-label"></label></a></div>');
		$(".plan-category-name").html('<div class="plan-category-name"><a class="plan-selected" href="javascript:void(0)"></i><label class="plan-selected-label"></label></a></div>');
		$(".plan-selected-label").text(cName);
		$(".plan").show();
	});

	$('#plan-close').on('click', function() {
		$("#myCarousel").css({'height': 'calc(100% - 217px)', 'margin-top': 'initial'});
		$(".plan").hide();
		$(".plan__content-wrapper").remove();
		// alert('sdfsdf');
	});

});
