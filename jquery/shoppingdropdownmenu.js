$(document).ready(function(){

	$('li > a:contains(SHOP)').hover(function(){
		

		$('.dropdown').css('display', 'block');
		
	});
	$('li > a:contains(HOME)').hover(function(){
		

		$('.dropdown').css('display', 'none');
		
	});
	$('li > a:contains(CUSTOM ORDERS)').hover(function(){
		

		$('.dropdown').css('display', 'none');
		
	});
	$('li > a:contains(COSMETICS)').hover(function(){
		

		$('.dropdown').css('display', 'none');
		
	});
	$('li > a:contains(ABOUT NNEKA)').hover(function(){
		

		$('.dropdown').css('display', 'none');
		
	});
	$('li > a:contains(CONTACT NNEKA)').hover(function(){
		

		$('.dropdown').css('display', 'none');
		
	});
	$('.dropdown').hover(function(){
				
		}, function(){
		
		$('.dropdown').css('display', 'none');
		
		});
	
	
});
