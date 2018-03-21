<?php
include('session.php');

include('config.php');

$id = $_GET['id'];

$sql = "DELETE FROM customer WHERE nama='$id'";
if($bd->query($sql)){
  header("location: customer.php");
}
?>