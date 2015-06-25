<?php
require_once "functions.php";
header("Location: showcart.php");
require_once "nnekagigiheader.php";

$result = queryMysql("SELECT * FROM products WHERE product_id = '".$_GET['id']."' ");

$productrow = mysqli_fetch_array($result,MYSQLI_ASSOC);

if(isset($_POST['submit'])){
	if($_SESSION['SESSION_ORDERNUMBER']){
		
		//user already has an order in progress so just  add the item to this current order
		$check_if_item_is_in_order_already = queryMysql("SELECT * FROM orderitems WHERE product_id ='". $_GET['id'] . "' AND order_id = '". $_SESSION['SESSION_ORDERNUMBER'] . "' ");
		$item_exist = mysqli_num_rows($check_if_item_is_in_order_already);
		if($item_exist != 0){
			$itemrow = mysqli_fetch_array($check_if_item_is_in_order_already,MYSQLI_ASSOC);
			list($update_item_total,$itemID) = queryMysql("UPDATE orderitems SET quantity= quantity + ".$_POST['product_qty']."  WHERE  id=".$itemrow['id']." ");

		}else{
		list($add_item_to_order_num,$orderitemid) = queryMysql("INSERT INTO orderitems(order_id,product_id, quantity)
			VALUES('". $_SESSION['SESSION_ORDERNUMBER'] . "', '". $_GET['id'] . "', '". $_POST['product_qty'] . "')");
		}
	}elseif($_SESSION['SESSION_LOGGEDIN']){
						//Since no order number session this is a new order for the user create a new order and get order number
					list($create_an_order,$orderid) = queryMysql("INSERT INTO orders(customer_id,registered,date) VALUES('".$_SESSION['SESSION_CUSTOMERID']."',1,NOW())");
					$_SESSION['SESSION_ORDERNUMBER'] = $orderid;
					
					//now add item added to cart to order number
					list($add_item_to_order_num,$orderitemid) = queryMysql("INSERT INTO orderitems(order_id,product_id, quantity)
			VALUES('". $_SESSION['SESSION_ORDERNUMBER'] . "', '". $_GET['id'] . "', '". $_POST['product_qty'] . "')");
					
	}else{
			
		//user is not loggedin and has no order number session or has never registered so since they have  no customer id store the current session
		$create_an_order = queryMysql("INSERT INTO orders(registered,date,session) VALUES(0,NOW(),".session_id().")");
					$_SESSION['SESSION_ORDERNUMBER'] = getID();
		//now we can add the  item to this customers cart 
					$add_item_to_order_num = queryMysql("INSERT INTO orderitems(order_id,product_id, quantity)
			VALUES(". $_SESSION['SESSION_ORDERNUMBER'] . ", ". $_GET['id'] . ", ". $_POST['product_qty'] . ")");
	}
}
$totalprice = $productrow['product_price'] * $_POST['product_qty'];
//now we have to update the total for this order 
list($update_order_total,$ordID) = queryMysql("UPDATE orders SET total= total + ".$totalprice."  WHERE  id=".$_SESSION['SESSION_ORDERNUMBER']." ");

?>