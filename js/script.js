jQuery(document).ready(function($) {

	$('a[href="#product-enquiry"]').on('click', function() {
		$('.product_enquirey_tab a').trigger('click');
		$('html, body').animate({
			scrollTop: $('.product_enquirey_tab').offset().top - 30
			}, 1200);
		$('#product_enquiry_name').focus();
	});

});