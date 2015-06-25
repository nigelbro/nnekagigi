<?php

echo<<<_END
<!DOCTYPE html>
<!-- Website Author: Nigel Brown-Ward-->
<html>
<head>
<link rel="stylesheet" href="styles/nnekaabout.css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" lang="en">
<title> Nneka Gigi </title>
<!-- This is the javascript functions for the carousel using the jquery lib-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

	$('a > div:contains(SHOP)').hover(function(){
		$(this).addClass('tab');
		$('#message').addClass('hide');
		$('.dropdown').css('display', 'block');
		$('.dropdown').hover(function(){
		$('.dropdown').css('display', 'block');
		$('#message').addClass('hide');

		}, function(){
		$('a > div:contains(SHOP)').removeClass('tab');
		$('.dropdown').css('display', 'none');
		$('#message').removeClass('hide');
		});
	
	}, function(){

		$(this).removeClass('tab');
		$('.dropdown').css('display', 'none');
		$('#message').removeClass('hide');
	});
	
});


</script>
<!-- END OF HEAD -->
</head>
<!-- START OF BODY -->
<body>


<div id="bio">
NNEKA GIGI
</div>
<div class="navbar">



<a  href="index.php"><div style="width:140px;text-align:center; height:45px; ">HOME</div></a>
<a  href="shop.php"><div style="width:100px; height:45px; ">SHOP</div></a>
<a  href="customorderform.php"><div style="width:230px; height:45px; ">CUSTOM ORDERS</div></a>
<a  href="cosmeticsline.php"><div style="width:180px; height:45px; ">COSMETICS</div></a>
<a  href="nnekaabout.php"><div style="width:190px; height:45px;">ABOUT NNEKA</div></a>
<a  href="blog.php"><div style="width:90px; height:45px; ">BLOG</div></a>
<a  href="contactform.php"><div style="width:180px; height:45px; ">CONTACT NNEKA </div></a>


</div>
<div class="dropdown">

<div>
<a href="shopmens.html"><p class="font1">  &nbsp &nbsp &nbsp MENS </p></a>
<ul class="font2">
	<li>SWEATERS</li>
	<li>JEANS</li>
	<li>T-SHIRTS</li>
	<li>PANTS</li>
	<li>JOGGERS</li>
</ul>
</div>

<div>
<a href="shopwomens.html"><p class="font1">  &nbsp &nbsp &nbsp WOMENS </p></a>
<ul class="font2">
	<li><a href="womensweaters.html">SWEATERS/T-SHIRTS</a></li>
	<li><a href="womensjeans.html">JEANS/PANTS</a></li>
	<li><a href="womenscosmetics.html">COSMETICS</a></li>
	<li><a href="womensearrings.html">EARRINGS</a></li>
	<li><a href="womensbags.html">BAGS</a></li>
</ul>
</div>
<div>
<a href="shopsale.html"><p class="font1">  &nbsp &nbsp &nbsp SALE </p></a>
<ul class="font2">
	<li>MENS</li>
	<li>WOMENS</li>
	
</ul>
</div>
<div>
<a href="shopnewarrivals.html"><p class="font1">  &nbsp &nbsp &nbsp NEW ARRIVALS </p></a>
<ul class="font2">
	<li>MENS</li>
	<li>WOMENS</li>
	
</ul>
</div>

</div>
<div id="message">
Nneka Gigi emerged in Western New York on the eastern shores 
of Lake Erie in 2012, from custom hand carved and painted jewelry, 
and soon evolved into a creative and artistic apparel line in 2013.
Nneka Gigi is a lifestyle and gender-free brand that is committed to consumer 
satisfaction-before, during and after the buying phase,which 
aims to provide a memorable yet positive experience. Integrity , 
leadership and excellence represent core values of Nneka Gigi. 
From years of self-discovery and artistic freedom, 
Nneka Gigi captivates the essence of individuality through a 
wide representation of art ranging between and beyond the 
streets to Fifth Avenue. Inspired by the likes of Jean-Michel 
Basquiat, Keith Haring, Jeffrey Campbell, 
Jeremy Scott and various cultures, Nneka Gigi brings an 
artistic yet divergent attitude towards fashion. 
To adhere to a true sense of exclusivity and 
eccentricity, this brand primarily represents 
'capsule' pieces/collections, which is a concept that
refers to a limited supply of products.The brand has been recognized as unique
while consistently producing wearable art to those daring to 
embrace an eccentric style. 

<p>"Your wardrobe and DNA should be synonymous: 
Unique and Irreplicable.
Rather than follow a trend, stand out by becoming one with 
Nneka Gigi"</p>
</div>

<div id="footer_menu">
<div>
<p class="font1">  &nbsp &nbsp &nbsp Customer Service </p>
<ul class="font2">
	<li>Order Status</li>
	<li>Contact Nneka Gigi</li>
	<li>Shipping Rates</li>
	<li>Return Policy</li>
</ul>
</div>

<div>
<p class="font1">  &nbsp &nbsp &nbsp Follow Nneke Gigi </p>
<ul class="font2">
	<li>Facebook</li>
	<li>Instagram</li>
	<li>Pinterest</li>
	<li>Twitter</li>
</ul>
</div>

</div>


</body>
</html>
_END;
?>