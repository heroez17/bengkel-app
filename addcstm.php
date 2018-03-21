<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="table.css" />
</head>
<body>
<div id="top">
   <div id="topbar">
		<ul id="menu">
		   	<li><a href="home.php">Home</a></li>
		    <li><a href="">About</a></li>
		    <li><a href="logout.php">Logout</a></li>
		</ul>
		<ul class="topmenu">
		    <img src="bengkel logo.png" width="70" height="70">
	        <li>Gear Motor</li>
      	</ul>
   </div>
</div>
<div id="sidebar">
	<h2>Dashboard</h2>
	<ul>
		<li><a href="customer.php"><img src="cstm.png" width="25" height="15">Customer</a></li>
<!--		<li><a href=""><img src="tools.png" width="25" height="25">Sparepart</a></li> -->
	</ul>
</div>
<div id="wrapper">
	<h2>ADD NEW CUSTOMER</h2>
	<form action="savecstm.php" method="post">
		<p>
			<label>Nama Customer<br><input id="user" type="text" name="nama"></label>
		</p>
		<p>
			<label>Gender<br>
				<select name="gender" id="user">
					<option></option>
					<option value="laki-laki">laki-laki</option>
					<option value="perempuan">perempuan</option>
				</select>
			</label>
		</p>
		<p>
			<label>Nomer Telepon<br><input id="user" type="text" name="notelp"></input></label>
		</p>
		<p>
			<label>Alamat<br><textarea id="user" name="alamat"></textarea></label>
		</p>
		<p>
			<label>Type Motor<br>
				<select name="type" id="user">
					<option></option>
					<option value="supra 125cc">Supra 125cc</option>
					<option value="supra 150cc">Supra 150cc</option>
					<option value="Beat 125cc">Beat 125cc</option>
					<option value="Vario 125cc">Vario 125cc</option>
					<option value="supra 125cc pgm-fi">Supra 125cc PGM-FI</option>
					<option value="supra 150cc pgm-fi">Supra 150cc PGM-FI</option>
					<option value="Beat 125cc pgm-fi">Beat 125cc PGM-FI</option>
					<option value="Vario 125cc pgm-fi">Vario 125cc PGM-FI</option>
					<option value="Vario 150cc pgm-fi">Vario 150cc PGM-FI</option>
				</select>
			</label>
		</p>
		<p>
			<label>Nomer Polisi<br>
				<input id="user" name="nopol" type="text" ></input></label>
		</p>
		<p class="submit">
         <input name="submit" id="submit" value="Save" tabindex="100" type="submit">
         <input type="hidden" name="id" value="" />
      </p>
	</form>
</div>
</body>
</html>