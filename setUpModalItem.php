<?php
require_once 'functions.php';


$image_hovered_over = $_GET['product'];

$thumbnail_images = queryMysql("SELECT thumbnail FROM product_thumbnail_images WHERE product_name = '$image_hovered_over'");
$product_info = queryMysql("SELECT * FROM products WHERE product_name = '$image_hovered_over'");
$rows = $product_info->num_rows;
$thumbnail_rows = $thumbnail_images->num_rows;

        
                $productrow = mysqli_fetch_array($product_info,MYSQLI_ASSOC);
                $description= $productrow['product_description'];
                $image= $productrow['product_image'];
                $product_id = $productrow['product_id'];
       	






echo<<<_END

<div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Chrissy</h4>
                </div>
                <div class="modal-body">
	                <div id="thumbnails" style="background-color:#ffffff"class="container-fluid">
		                <div class="row">
_END;

while($thumbnail_image = $thumbnail_images->fetch_array(MYSQLI_ASSOC)){

	echo' <div class="col-md-3">
		<img src="'.$thumbnail_image['thumbnail'].'"class="img-thumbnail" width="150px"height="150px" alt="Chrissy">
		</div><br>' ;

}

echo<<<_END
		                </div>
	                </div>
	                <div  style="background-color:#ffffff"class="container-fluid">
	                	<div class="row" >
		                	<div class="col-sm-3 col-md-6" style="float:left">
		                	<img id="showEnlarged" src='$image'class="img-thumbnail"  alt='Chrissy'>
		                	</div>
		                	<div class="col-sm-3 col-md-6" style="position:relative; top:60px;">
		                	<form method="post" action="cart.php?id=$product_id">
		                		<div style="text-align:center"><button style="background-color:#ff0000;height:30px"class="badge">SM</button>
		                		<button style="background-color:#ff0000;height:30px;margin-left:10px"class="badge">M</button>
		                		<button style="background-color:#ff0000;height:30px;margin-left:10px"class="badge">LG</button>
		                		<button style="background-color:#ff0000;height:30px;margin-left:10px"class="badge">XL</button></div><br><br>
		                		<p>$description</p><br>
					            <br><br>
								<div style="text-align:center">Qty <input style="margin-right:20px"type="text" name="product_qty" value="1" size="3">
									<input type="submit" style="background-color:#343EC4;color:#ffffff"class="btn btn-default" name="submit" value="Add To Cart"btn-lg">
								</div>
	            			</form>
		                	</div>
	                	</div>
	                </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
                </div>

_END;

?>
