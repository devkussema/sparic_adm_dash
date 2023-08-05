
	$(function() {
		$('.main-sidebar .with-sub').on('click', function(e) {
			e.preventDefault();
			$(this).parent().toggleClass('show');
			$(this).parent().siblings().removeClass('show');
		})	
	});
	
	 $(document).ready(function() {
		var url = window.location; 
		var element = $('.menu.main-sidebar .list .nav-item a').filter(function() {
		return this.href == url || url.href.indexOf(this.href) == 0; }).parent().addClass('active');
		if (element.is('li a')) { 
			 element.addClass('active').parent().parent('li').addClass('active')
		 }
	});

	$(document).scroll(function() {
		var url = window.location; 
		let elem = $('.theme-blush .sidebar .menu .list li');
		elem.map((ind, el)=>{
			if(el.children[0].href !== url.href){
				el.classList.remove('active')
			}
			else{
				el.classList.add('active')
			}
		})
	});
	
	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) { 
		event.preventDefault();
		$('body').toggleClass('ls-closed');
	});
	
	
	
	
	
	
	