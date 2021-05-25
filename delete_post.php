<?php
require_once 'includes/db_connect.php';
$id=$_GET['id'];
$delete_edit="DELETE FROM registration WHERE id='$id' ";
mysqli_query($db_connect,$delete_edit);
header('location:admin.php');

?>