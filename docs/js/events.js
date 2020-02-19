const ham = document.getElementById('ham')
ham.addEventListener('click', function () {
	document.body.classList.toggle('nav-is-toggled')
})

wow = new WOW({
	boxClass: 'wow',
})
wow.init();

function goBack() {
	window.history.back();
}

jQuery('input[type=file]').change(function(){
	var filename = jQuery(this).val().split('\\').pop();
	var idname = jQuery(this).attr('id');
	$(this).prev().text(filename);	
	$(this).prev().css("background-color", "#CAD3F3");
	jQuery('span.'+idname).next().find('span').html(filename);
   });
