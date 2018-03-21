    <?php
      //Start session
      session_start();  
      //Unset the variables stored in session
      unset($_SESSION['SESS_FIRST_NAME']);
      unset($_SESSION['SESS_LAST_NAME']);
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

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
      <h1>Please fill in your credentials to login.</h1>
      <h2>
         <?php
            if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
               echo $msg; 
               }
            unset($_SESSION['ERRMSG_ARR']);
         }
         ?>
      </h2>
	</div>
   <form name="loginform" action="login.php" method="post">
      <p>
         <label>Username<br>
         <input name="username" id="user_login" class="input" size="20" tabindex="10" type="text"></label>
      </p>
      <p>
         <label>Password<br>
         <input name="password" id="user_pass" class="input" value="" size="20" tabindex="20" type="password"></label>
      </p>
      <p class="submit">
         <input name="submit" id="submit" value="Log In" tabindex="100" type="submit">
         <input type="hidden" name="id" value="" />
      </p>
   </form>
   <div id="out">
      <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
   </div>
</div>
</body>
</html>


