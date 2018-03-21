<?php
include('session.php');
include('config.php');

$custid=$_POST['custid'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];
$type = $_POST['type'];
$nopol = $_POST['nopol'];

$sql = "UPDATE customer SET nama='$nama',gender='$gender',notelp='$notelp',alamat='$alamat',type='$type',nopol='$nopol' WHERE custid='$custid'";
if($bd->query($sql)){
  header("location: customer.php");
}
?>