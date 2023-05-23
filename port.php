<?php
    $server_name = "localhost";
    $username="root";
    $password="";
    $databasename ="portfolio";
    $connection = mysqli_connect($server_name,$username,$password,$databasename,3306);
    if(mysqli_connect_error()){
        echo "failed";
    }

   
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];

    echo "hello";

    $query = "insert into port(fname, email, phone, sub, msg) values 
    ('$fname','$email','$phone','$sub','$msg')";

   $sql= mysqli_query($connection, $query);
   if($sql){
    header('location:index.html');

   }else {
    echo "failed";
   }
?>