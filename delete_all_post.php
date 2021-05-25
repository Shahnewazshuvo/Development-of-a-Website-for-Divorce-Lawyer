<?php
require_once 'includes/db_connect.php';
$id = $_GET['id'];
$delete_all_edit = "DELETE FROM registration ";
mysqli_query($db_connect, $delete_all_edit);
header('location:admin.php');
?>