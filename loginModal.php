<?php

echo<<<_END
  <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login to your account</h4>
                </div>
                <div class="modal-body">
      <div class="row">
      <div  style="float:left"class="col-md-6">
      <p style="font-size:20px">Already a member? </p>
      <form  id="login"method='POST' action='login.php'>
        Username<br> <input form="login" style="box-shadow:5px 5px 5px #000000;font-size:18px;border-style:solid;border-color:#000000" type='text' name='username'><br>
		    Password<br> <input form="login" style="box-shadow:5px 5px 5px #000000;border-style:solid;border-color:#000000;font-size:18px" type='password' name='password'  ><br><br>
        <input class="btn btn-primary" style="position:relative;box-shadow:5px 5px 5px #000000;border-style:solid;border-color:#000000;font-size:18px"  type='submit' name='submit' value='Login' >
      </form>
      </div>
      
      <div class="col-md-6">
      <p style="font-size:20px">Dont have an account? </p>
      <form  id="signup"method='POST' action='signup.php'>
        Create a username<br> <input  style="box-shadow:5px 5px 5px #000000;font-size:18px;border-style:solid;border-color:#000000" type='text' name='username'><br>
        Create a password<br> <input  style="box-shadow:5px 5px 5px #000000;border-style:solid;border-color:#000000;font-size:18px" type='password' name='password'  ><br><br>
        <input class="btn btn-primary" style="position:relative;box-shadow:5px 5px 5px #000000;border-style:solid;border-color:#000000;font-size:18px"  type='submit' name='submit' value='Signup' >
      </form>
      </div>
      </div>
      </div>  
    </div>
  </div>

_END;
?>