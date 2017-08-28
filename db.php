<?php

$db = new mysqli("localhost", "root","oWb8MJoCjKHnagPA","crud");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

if(!$db){
    echo "fail connect db";
}
else{
    echo "db connected"."<br>";
}

?>