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
<body onclick="clearForm()">
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
<div id="wrapper" >
	<h2>REKAP DATA CUSTOMER</h2>
	<p class="button">
		<a href="addcstm.php"><input name="submit" value="Add New Customer" tabindex="100" type="submit"></a>
		<form action="customer.php" method="get" id="formsearch">
			<input onmouseout="submit()" id="cari" name="keyword" type="text" placeholder="person search" size="7">
		</form>
	</p>
	<table width='850' class='table-list'>
			<tr><th>No.</th><th>Nama</th><th>Gender</th><th>No Telp</th><th>Alamat</th><th>type motor</th><th>no polisi</th><th>action</th></tr>
		<tbody>
			<?php
				include('config.php');
				include('showcustomer.php');
			?>		 
		</tbody>
	</table>
</div>
</body>
</html>

<script type="text/javascript" >
	function clearForm(){
		// console.log('clear');
	 // 	document.getElementById('cari').value = '';
	 // 	document.getElementById('formsearch').submit();
	}
</script>