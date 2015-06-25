<?php //  login.php
require_once 'functions.php';
session_start();
if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE) {
header('Location: featureditems.php');
}

if (isset($_POST['username']) && isset($_POST['submit']))
  {
    $username = sanitizeString($_POST['username']);
    $pass = sanitizeString($_POST['password']);
    $salt1 = "Qk$%!";
    $salt2 = "LHv;)^32!";
    $token = hash('ripemd128', "$salt1$pass$salt2");
    if ($username == "" || $pass == ""){
        $error = "Not all fields were entered<br>";
    }else
    {

      $result = queryMySQL("SELECT * FROM logins
        WHERE username='$username' AND password='$token'");

      if ($result->num_rows == 0)
      {
        $error = "<span class='error'>Username/Password
                  invalid</span><br><br>";
        echo $error;
      }
      else
      {

        
        
              $loginrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
              $_SESSION['SESSION_LOGGEDIN'] =1;
              $_SESSION['SESSION_USERNAME'] = $loginrow['username'];
              $_SESSION['SESSION_CUSTOMERID'] = $loginrow['customer_id'];
              $ordersresult = queryMySQL("SELECT * FROM orders WHERE customer_id =  ".$_SESSION['SESSION_CUSTOMERID']." AND status < 2 ");
    
              $orderrow = mysqli_fetch_array($ordersresult,MYSQLI_ASSOC);
       
              $_SESSION['SESSION_ORDERNUMBER'] = $orderrow['id'];
              header("Location: featureditems.php");
        
      }
    }
}







?>
