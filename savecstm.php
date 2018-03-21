<?php
include('session.php');
include('config.php');

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];
$type = $_POST['type'];
$nopol = $_POST['nopol'];

$sql = "INSERT INTO customer (nama, gender, notelp, alamat, type, nopol) VALUES ('$nama','$gender','$notelp','$alamat','$type','$nopol')";
if($bd->query($sql)){
  header("location: customer.php");
}
?>