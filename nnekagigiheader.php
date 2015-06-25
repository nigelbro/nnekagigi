<?php
require_once "functions.php";
session_start();
if(isset($_SESSION['SESS_CHANGEID']) == TRUE) {
session_unset();
session_regenerate_id();
}
if(isset($_SESSION['SESSION_LOGGEDIN']) == TRUE)

{
	if($_SESSION['SESSION_ORDERNUMBER']){
	$get_the_num_of_shopping_cart_items = queryMysql("SELECT * FROM orderitems WHERE order_id = '".$_SESSION['SESSION_ORDERNUMBER']."' ");
	$numOfItems = mysqli_num_rows($get_the_num_of_shopping_cart_items);
	}else{
		$numOfItems =0;
	}

	$username= $_SESSION['SESSION_USERNAME'];
echo<<<_END
<!-- Website Author: Nigel Brown-Ward-->
<html>
<head>
<link rel="stylesheet" href="styles/featureditems.css" >
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" >
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<meta charset="utf-8" lang="en">
<title> Nneka Gigi </title>
<!-- This is the javascript functions for the carousel using the jquery lib-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery/shoppingdropdownmenu.js"></script>
<script src="perfectscrollbar/src/perfect-scrollbar.js"></script>
<link href="perfectscrollbar/src/perfect-scrollbar.css" rel="stylesheet">
<script>
$(document).ready(function () {
       "use strict";
       $('#suppressscrollX').perfectScrollbar({suppressScrollX: true});
 });
</script>
<script>
$(document).ready(function(){
$('form > a:contains(LOGIN)').on('click', function(){
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myModal").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","loginModal.php",true);
        xmlhttp.send();
        $('#myModal').modal('show');

});


});


</script>
</head>

<body 
style="background-color:#A0A0A0
">
<div class="container-fluid">

<div class="row">
			<div class="col-md-12" style="text-align:center">
			
                <img  src="images/logo2.png" width="500px" height="500px"alt="MyCareersSpot | Your Career . Your Way">
             </div>         
</div>


	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
      <a class="navbar-brand" href="index.php">Brand</a>
   

    <!-- Collect the nav links, forms, and other content for toggling -->
    
      <ul class="nav nav-tabs" >
        <li><a  href="featureditems.php">HOME</a></li>
        <li><a  href="shop.php">SHOP</a></li>
        <li><a  href="customorderform.php">CUSTOM ORDERS</a></li>
        <li><a  href="cosmeticsline.php">COSMETICS</a></li>
        <li><a  href="nnekaabout.php">ABOUT NNEKA</a></li>
        <li><a  href="contactform.php">CONTACT NNEKA</a></li>
      </ul>
      
		

      <form class="navbar-form navbar-right" role="search">
	  		<p>Logged in as <strong>$username</strong> <a href="logout.php">Sign Out</a></p>
	        <div class="form-group">
	        
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav  navbar-right">

      	<li><a  href="showcart.php"><img src="images/shopping_bag.png" width="50px" height="50px" alt="Cart">Shopping Cart <span id="numOfItems" class="badge">$numOfItems</span></a>  </li>
      <ul>
    <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		
	</div>

                

</div>

<!-- NAVIGATION END -->

<!-- DROPDOWN MENU START -->
<div class="containter-fluid">
	<div class="row dropdown"  style="position:absolute;z-index:2;width:70%;margin-left:15%">
		<div class="col-sm-3 col-md-3" style="text-align:left">
			<ul class="font2">
				<li><a href="shopmens.html"><p class="font1">MENS</p></a></li>
				<li>SWEATERS</li>
				<li>JEANS</li>
				<li>T-SHIRTS</li>
				<li>PANTS</li>
				<li>JOGGERS</li>
			</ul>
		</div>

		<div class="col-sm-3 col-md-3" style="text-align:left">
			<ul class="font2">
				<li><a href="shopwomens.html"><p class="font1">WOMENS</p></a></li>
				<li><a href="womensweaters.html">SWEATERS/T-SHIRTS</a></li>
				<li><a href="womensjeans.html">JEANS/PANTS</a></li>
				<li><a href="womenscosmetics.html">COSMETICS</a></li>
				<li><a href="womensearrings.html">EARRINGS</a></li>
				<li><a href="womensbags.html">BAGS</a></li>
			</ul>
		</div>
		<div class="col-sm-3 col-md-3" style="text-align:left">
			<ul class="font2">
				<li><a href="shopsale.html"><p class="font1">SALE</p></a></li>
				<li>MENS</li>
				<li>WOMENS</li>
			</ul>
		</div>
		<div class="col-sm-3 col-md-3"style="text-align:left">
			<ul class="font2">
				<li><a href="shopnewarrivals.html"><p class="font1">NEW ARRIVALS</p></a></li>
				<li>MENS</li>
				<li>WOMENS</li>
			</ul>
		</div>
	</div>
</div>
<!-- DROPDOWN MENU END -->
_END;
}else{

echo<<<_END
<!-- Website Author: Nigel Brown-Ward-->
<html>
<head>
<link rel="stylesheet" href="styles/featureditems.css" >
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" >
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<meta charset="utf-8" lang="en">
<title> Nneka Gigi </title>
<!-- This is the javascript functions for the carousel using the jquery lib-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery/shoppingdropdownmenu.js"></script>
<script src="perfectscrollbar/src/perfect-scrollbar.js"></script>
<link href="perfectscrollbar/src/perfect-scrollbar.css" rel="stylesheet">
<script>
$(document).ready(function () {
       "use strict";
       $('#suppressscrollX').perfectScrollbar({suppressScrollX: true});
 });
</script>
<script>
$(document).ready(function(){
$('form > a:contains(LOGIN)').on('click', function(){
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myModal").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","loginModal.php",true);
        xmlhttp.send();
        $('#myModal').modal('show');

});


});


</script>
</head>

<body 
style="background-color:#A0A0A0
">
<div class="container-fluid">

<div class="row">
			<div class="col-md-12" style="text-align:center">
			
                <img  src="images/logo2.png" width="500px" height="500px"alt="MyCareersSpot | Your Career . Your Way">
             </div>         
</div>


	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
      <a class="navbar-brand" href="index.php">Brand</a>
   

    <!-- Collect the nav links, forms, and other content for toggling -->
    
      <ul class="nav nav-tabs" >
        <li><a  href="featureditems.php">HOME</a></li>
        <li><a  href="shop.php">SHOP</a></li>
        <li><a  href="customorderform.php">CUSTOM ORDERS</a></li>
        <li><a  href="cosmeticsline.php">COSMETICS</a></li>
        <li><a  href="nnekaabout.php">ABOUT NNEKA</a></li>
        <li><a  href="contactform.php">CONTACT NNEKA</a></li>
      </ul>
      
		

      <form class="navbar-form navbar-right" role="search">
	     	<a  href="#">LOGIN</a>
	  		<a  href="showcart.php"><img src="images/shopping_bag.png" width="50px" height="50px" alt="Cart">Shopping Cart <span id="numOfItems" class="badge">0</span></a>
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
    <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		
	</div>

                

</div>

<!-- NAVIGATION END -->

<!-- DROPDOWN MENU START -->
<div class="containter-fluid">
	<div class="row dropdown"  style="position:absolute;z-index:2;width:70%;margin-left:15%">
		<div class="col-sm-3 col-md-3" style="text-align:left">
			<ul class="font2">
				<li><a href="shopmens.html"><p class="font1">MENS</p></a></li>
				<li>SWEATERS</li>
				<li>JEANS</li>
				<li>T-SHIRTS</li>
				<li>PANTS</li>
				<li>JOGGERS</li>
			</ul>
		</div>

		<div class="col-sm-3 col-md-3" style="text-align:left">
			<ul class="font2">
				<li><a href="shopwomens.html"><p class="font1">WOMENS</p></a></li>
				<li><a href="womensweaters.html">SWEATERS/T-SHIRTS</a></li>
				<li><a href="womensjeans.html">JEANS/PANTS</a></li>
				<li><a href="womenscosmetics.html">COSMETICS</a></li>
				<li><a href="womensearrings.html">EARRINGS</a></li>
				<li><a href="womensbags.html">BAGS</a></li>
			</ul>
		</div>
		<div class="col-sm-3 col-md-3" style="text-align:left">
			<ul class="font2">
				<li><a href="shopsale.html"><p class="font1">SALE</p></a></li>
				<li>MENS</li>
				<li>WOMENS</li>
			</ul>
		</div>
		<div class="col-sm-3 col-md-3"style="text-align:left">
			<ul class="font2">
				<li><a href="shopnewarrivals.html"><p class="font1">NEW ARRIVALS</p></a></li>
				<li>MENS</li>
				<li>WOMENS</li>
			</ul>
		</div>
	</div>
</div>
<!-- DROPDOWN MENU END -->
_END;
}



?>