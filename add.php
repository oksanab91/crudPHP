<?php

include 'db.php';

if(isset($_POST['send'])){
    $name = htmlspecialchars($_POST['task']);
   /* echo $name;*/

    $sql = "INSERT INTO tasts (name) VALUES ('$name')";
    $retValue = $db->query($sql);

    if($retValue){
        header('location: index.php');
    }
}

?>