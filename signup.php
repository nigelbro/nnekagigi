<?php
require_once "functions.php";
session_start();


 $error = $username = $password = "";
  if (isset($_SESSION['SESSION_USERNAME'])) destroySession();

  if (isset($_POST['submit'])&& isset($_POST['username']))
  {
   $username = sanitizeString($_POST['username']);
    $pass = sanitizeString($_POST['password']);
    $salt1 = "Qk$%!";
    $salt2 = "LHv;)^32!";
    $token = hash('ripemd128', "$salt1$pass$salt2");
    if ($username == "" || $pass == ""){
      $error = "Not all fields were entered<br><br>";
  	}
    else
    {
      $result = queryMysql("SELECT * FROM logins WHERE username='$username'");

      if ($result->num_rows){
        $error = "That username address already exists<br><br>";
 
    }

      else
      {
        queryMysql("INSERT INTO logins (username,password)VALUES('$username','$token')");
        $_SESSION['SESSION_LOGGEDIN'] =1;
        $_SESSION['SESSION_CUSTOMERID'] = mysqli_insert_id();
        $_SESSION['SESSION_USERNAME'] = $username;
        header('location: featureditems.php');
      }
  }
 }
  



?>




?>