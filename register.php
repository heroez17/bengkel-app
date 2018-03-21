<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $myuser= mysqli_real_escape_string($bd,$_POST['username']);
      $mypass= mysqli_real_escape_string($bd,$_POST['password']);
      
      $sql = "INSERT INTO member (username, password) VALUES ('$myuser','$mypass')";
      if($bd->query($sql)){
        header("location: index.php");
      }else{
        echo "Data Customer GAGAL ditambah : ".$bd->error."<br/>";
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
 
</head>
<body class="login" onload="document.loginform.user.focus();">

<div id="top">
   <div id="topbar">
      <ul class="topmenu">
	        <img src="bengkel logo.png" width="70" height="70">
         <li>Gear Motor</li>
      </ul>
   </div>
</div>


<div id="login">
	<div id="cs">
      <img src="admin.png" width="50" height="50">
   	<br><br>
      <h1>Please fill this form to create an account.</h1>
	</div>
   <form name="loginform" id="loginform" action="" method="post">
      <p>
         <label>Username<br>
         <input name="username" id="user_login" class="input" size="20" tabindex="10" type="text"></label>
      </p>
      <p>
         <label>Password<br>
         <input name="password" id="user_pass" class="input" value="" size="20" tabindex="20" type="password"></label>
      </p>
      <p>
         <label>Confirm Password<br>
         <input name="confirm_pasword" id="user_pass" class="input" value="" size="20" tabindex="20" type="password"></label>
      </p>
      <p class="submit">
         <input name="submit" id="submit" value="Log In" tabindex="100" type="submit">
         <input type="hidden" name="id" value="" />
      </p>
   </form>
   <div id="out">
      <p>Already have an account? <a href="index.php">Login here</a>.</p>
   </div>
</div>
</body>
</html>

