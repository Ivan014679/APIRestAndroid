<?php
    include('connetcionDB.php');
    $email = $_POST['email'];

    $sql = "INSERT INTO users (email) VALUES ('$email')";

    if($conn -> query($sql) == true){
        echo "User has been created";
    }else{
        echo "Error: ".$sql." ".$conn -> error;
    }
    $conn -> close();
?>