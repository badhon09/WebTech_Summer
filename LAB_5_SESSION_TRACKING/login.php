<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['userName'];
		$password 	= $_POST['password'];

    if(isset($_SESSION['userName']) && isset($_SESSION['password'])){

			if($uname == $_SESSION['userName'] && $password == $_SESSION['password']){
					$_SESSION['status'] = "OK";
					header('location: homekkk.php');
				}else{
          echo "don't have any account!";
				}
    }
    else{
      echo "failed";
    }
		

  }




?>
<table style="width:100% ; border:1px solid;" >
    <tr>
      <th width="100px"><img src="./logo (1).png"></th>
      <th width="auto"></th>
      <th width="200px"><a href="">login | </a><a href="">login | </a><a href="">login</a></th>
    </tr>
    
    <tr>
        
      <td></td>
      <hr>
      <td><fieldset>
        <legend><b>LOGIN</b></legend>
        <form method="post">
            <table>
                <tr>
                    <td>User Name</td>
                    <td>:</td>
                    <td><input name="userName" type="text"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input name="password" type="password"></td>
                </tr>
            </table>
            <hr />
            <input name="remember" type="checkbox">Remember Me
            <br/><br/>
            <input name="submit" type="submit" value="Submit">        
            <a href="forgot_password.html">Forgot Password?</a>
        </form>
    </fieldset></td>
      <td></td>
    </tr>
    
    <tr>
      <td></td>
      <td>copyright</td>
      <td></td>
    </tr>
  </table>


