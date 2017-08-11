<?php

include 'db.php';

if(isset($_SERVER["CONTENT_TYPE"]) && strpos($_SERVER["CONTENT_TYPE"], "application/json") !== false) {
    $_POST = array_merge($_POST, (array) json_decode(trim(file_get_contents('php://input')), true));
}
echo $_POST['name'];

if(isset($_POST['name'])){
    $name = htmlspecialchars($_POST['name']);
   /* echo $name;*/

    $sql = "INSERT INTO tasts (name) VALUES ('$name')";
    $retValue = $db->query($sql);
echo $retValue; 

    // if($retValue){
               
    //     header('location: index.php');
    // }
}

// if(isset($_POST['send'])){
//     $name = htmlspecialchars($_POST['task']);
//    /* echo $name;*/

//     $sql = "INSERT INTO tasts (name) VALUES ('$name')";
//     $retValue = $db->query($sql);

//     if($retValue){
//         header('location: index.php');
//     }
// }

?>