<?php
   
   include "db_connection.php";
    $conn = opencon();

    echo "Connection Sucessfully established";

    CloseCon();

      
    mysqli_select_db[$conn,"form_database"];

    $FirstName=$_POST["FirstName"];
    $LastName=$_POST["LastName"];
    $Email=$_POST["Email"];

    $query = "insert into user info database(FirstName, LastName, Email)"
    values ("$FirstName","$LastName","$Email");

    mysqli_query($conn,$query);

    header("location:index.html");



    if($FirstName==NULL){
        echo "First Name is required.";
    }elseif($LastName==NULL){
        echo "Last Name is required.";
    }elseif($Email==NULL){
        echo "Email is required.";
    }else
        echo "Response has been sent sucessfully."



   


?>