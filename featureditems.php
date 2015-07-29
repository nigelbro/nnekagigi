<?php
require_once "nnekagigiheader.php";
echo<<<_END
<div class="container-fluid" >
<div id="shopmenu" class="row" >
	<div class="col-md-12">
		<div  id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  
		  

		  <!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
				      <img  style="opacity:.5;filter:alpha(opacity=50);width:100%;height:618px"src="images/womens/chloe.jpg" alt="...">
				      <div id="chloe"style="left:45%;width:10%" class="carousel-caption">
				        <h3 style="font-size:30px;color:#ffffff;font-family:ariel">Chloe</h3>
				    	<p style="font-size:24px;color:#ffffff;font-family:ariel">$15.00 USD</p>
				      </div>
				</div>
				<div class="item">
				  <img  style="opacity:.7;filter:alpha(opacity=70);width:100%;height:618px"src="images/womens/chrissy.jpg" alt="...">
				  <div id="chrissy"style="left:45%;width:10%"class="carousel-caption">
				    <h3 style="font-size:30px;color:#ffffff;font-family:ariel">Chrissy</h3>
				    <p style="font-size:24px;color:#ffffff;font-family:ariel">$29.97 USD</p>
				  </div>
				</div>
				<div class="item">
				  	<img style="opacity:.7;filter:alpha(opacity=70);width:100%;height:618px"src="images/womens/almondmilk3.jpg" alt="...">
				  	<div id="almondmilk" style="left:45%;width:10%"class="carousel-caption">
				    	<h3 style="font-size:30px;color:#ffffff;font-family:ariel">Fur Hooded Cloak</h3>
				    	<p style="font-size:24px;color:#ffffff;font-family:ariel">$50.00 USD</p>
				  	</div>
				</div>
				<div class="item">
				  <img style="opacity:.7;filter:alpha(opacity=70);width:100%;height:618px"src="images/womens/90210.jpg" alt="...">
				  <div id="90210" style="left:45%;width:10%"class="carousel-caption">
				    <h3 style="font-size:30px;color:#ffffff;font-family:ariel">Casual Fitted Dress</h3>
				    <p style="font-size:24px;color:#ffffff;font-family:ariel">$30.00 USD<h3 style="backgroud-color:#ff0000"><span class="label label-danger">Sale</span></h3></p>
				  </div>
				</div>
			</div>


		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
</div>
<!-- Products Container-->


<!-- Products START-->




<!-- WOMENS CLOTHES ROW START -->
	 

<!-- WOMENS CLOTHES ROW END -->


<!--EARRINGS ROW START -->
	 
	

<!-- EARRINGS ROW END -->
<!-- WOMENS BAGS ROW START -->

	 
<!-- WOMENS BAGS ROW END -->

<!-- WOMENS COSMETICS ROW START-->

 


<!-- WOMENS COSMETICS ROW END -->

<!-- Mens ROW START -->


	 

<!--MENS ROW END -->

	




<!-- PRODUCTS END -->
<!--STORE INFO START -->



<!-- STORE INFO END -->

<!--BootStrap Scripts -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>




_END;
require_once "nnekafooter.php";
?>