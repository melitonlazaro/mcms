<?php 
include "config.inc.php";

$item_no = $_POST['del_id'];
$query = "DELETE FROM stock_monitoring WHERE item_no = '$item_no' ";
$result = mysqli_query($conn, $query);

if(isset($result))
{
	echo "YES";
}
else
{
	echo "NO";
}

?>