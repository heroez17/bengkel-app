<?php

if (empty($_GET)) {
    $sql = "SELECT * FROM customer";
}else{
    $sql = "SELECT * FROM customer WHERE LOWER(nama) LIKE '%".strtolower($_GET['keyword'])."%'";
}
$data = $bd->query($sql);

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td align='center'>".$no++."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['notelp']."</td>";
    echo "<td>".$row['alamat']."</td>";
    echo "<td>".$row['type']."</td>";
    echo "<td>".$row['nopol']."</td>";
    echo "<td align='center'>
    		<a href='updatecstm.php?id=".$row['custid']."'>
    			<img src='update.png' width='15' height='15'>
    		</a>
    		<a href='delcustomer.php?id=".$row['nama']."'>
    			<img src='delete.png' width='15' height='15'>
    		</a>
    	  </td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
?>