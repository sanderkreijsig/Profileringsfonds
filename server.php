<?php

//variable init
$email = "";
$errors = array();


//db variables
$host = 'localhost';
$name = 'root';
$pass = 'root';
$database = 'profileringsfonds';

    $conn = mysqli_connect('localhost', 'root', 'root', 'profileringsfonds');
    $query = "SELECT * FROM users";

     if(mysqli_connect_errno()){
         echo "Kon geen verbinding maken met de database: " . mysqli_connect_error();
         exit();
     }
     $result = mysqli_query($conn, $query);
     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
         echo $row['email'];
         echo $row['password'];
         echo $row['uID'];
         echo $row['type'];
     }


//register account
function generateRandomString($length = 10) {
return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

 if ($result-> num_rows)
?>