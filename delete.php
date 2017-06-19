<?php
include 'db.php';

$id = (int)$_GET['id'];

$sql = "DELETE FROM tasts WHERE id = '$id'";
$retValue = $db->query($sql);

if($retValue){    
    header('location: index.php');
}

?>