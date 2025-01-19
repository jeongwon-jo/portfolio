$(function () { 
	$('.shorts-close-btn').click(function () {
		$('.shorts').slideUp()
		$('.shorts-headline').hide()
		$('.not-showing').show()
	})

	$('.cancel-btn').click(function () {
		$('.shorts').slideDown()
		$('.shorts-headline').show()
		$('.not-showing').hide()
	})
});