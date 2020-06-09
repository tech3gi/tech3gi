<?php

function opencon(){




$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Tech3gi@us";
$db = "form_database";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn ->error);

return $conn;

}

function CloseCon($conn)
 {
 $conn -> close();
 }




?>