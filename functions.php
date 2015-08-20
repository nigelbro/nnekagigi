<?php // Example 26-1: functions.php

$db_hostname = '';
$db_database = '';
$db_username = 'root';
$db_password = '';
$connection = new mysqli($db_hostname, $db_username,$db_password , $db_database );
if ($connection->connect_error) die($connection->connect_error);


  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    $lastID = $connection->insert_id;
    if($lastID){
      return array($result,$lastID);
    }else{
    return $result;
    }
  }

  function destroySession()
  {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }

  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
  }

  function showCart()
{

    if($_SESSION['SESSION_ORDERNUMBER'])
    {
      if($_SESSION['SESSION_LOGGEDIN'])
      {
      $get_customer_data = queryMysql("SELECT id, status from orders WHERE customer_id = ". $_SESSION['SESSION_CUSTOMERID']. " AND status < 2");
      
      $custrow = mysqli_fetch_array($get_customer_data,MYSQLI_ASSOC);
      $get_customer_items = queryMysql("SELECT products.*, orderitems.*, orderitems.id AS itemid FROM products, orderitems WHERE orderitems.product_id =products.product_id AND order_id = " . $custrow['id']." ");
      $itemrows = mysqli_num_rows($get_customer_items);
      }else{

        $get_customer_data = queryMysql("SELECT id, status from orders WHERE session = '". session_id()."' AND status < 2");
      
      $custrow = mysqli_fetch_array($get_customer_data,MYSQLI_ASSOC);
      $get_customer_items = queryMysql("SELECT products.*, orderitems.*, orderitems.id AS itemid FROM products, orderitems WHERE orderitems.product_id =products.product_id AND order_id = " . $custrow['id']." ");
      $itemrows = mysqli_num_rows($get_customer_items);
      }
  }else{

  $itemrows=0;


  }
  if($itemrows==0)
  {
  echo "You have not added any items to your cart";
  }else{

echo<<<_END
<div class="container-fluid" >
<div class="row">

<div  class="col-md-8"style="background-color:#E0E0E0;margin-left:17%">
<p><a href='/shop'>Continue Shopping</a></p>
<table  class="table table-default"style="background-color:#ffffff">

<thead style="display:block;background-color:#ffffff;">
        <tr>
          <th style="width:340px"></th>
          <th style="width:280px">Product</th>
          <th style="width:90px">Quantity</th>
          <th style="width:130px">Remove</th>
          <th style="width:190px">Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody id="suppressscrollX"style="overflow:hidden;position:relative;height:300px;display:block;background-color:#A0A0A0">
_END;

while($itemrows = mysqli_fetch_array($get_customer_items,MYSQLI_ASSOC)){

            $quantitytotal = $itemrows['product_price'] * $itemrows['quantity'];
            echo "<tr>";
            if(empty($itemrows['product_image'])) {
            echo "<td style='width:340px'><img src='' width='100px'  height='100px'alt='" . $itemrows['product_name'] . "'></td>";
            }
            else {
            echo "<td  style='width:340px'><img src='" .$itemrows['product_image'] . "' width='100px' height='100px' alt='". $itemrows['product_name'] . "'></td>";
            }
            echo "<td style='width:280px'>" . $itemrows['product_name'] . "</td>";
            echo "<td style='width:90px'>" . $itemrows['quantity'] . "</td>";
            echo "<td style='width:130px'>[<a href='delete.php?id=". $itemrows['itemid'] . "'>X</a>]</td>";
            echo "<td style='width:190px'><strong>&#36;" . sprintf('%.2f', $itemrows['product_price']) . "</strong></td>";
            echo "<td><strong>&#36;". sprintf('%.2f', $quantitytotal) . "</strong></td>";
            echo "</tr>";

            @$total = $total + $quantitytotal;
            list($update_order_total,$ordid) = queryMysql("UPDATE orders SET total = ". $total . " WHERE id= ". $_SESSION['SESSION_ORDERNUMBER']." ");
          }


echo<<<_END
      </tbody>
    </table>
    <div style="font-size:30px; position:relative;width:100%;text-align:right">
_END;
echo" <p>Order Total: <strong>&#36;". sprintf('%.2f', $total) . "</strong></p>";

echo <<<_END
    </div>


_END;



      echo<<<_END

</div>
</div>
</div>



_END;





        }

}

?>
