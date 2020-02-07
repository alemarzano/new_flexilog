const ham = document.getElementById('ham')
ham.addEventListener('click', function () {
	document.body.classList.toggle('nav-is-toggled')
})

wow = new WOW ({
	boxClass : 'wow',
})
wow.init();

function goBack() {
	window.history.back();
  }
  
