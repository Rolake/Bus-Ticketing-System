<?php
    session_start();

    $servername = "localhost";
    $user = "rolake";
    $db_password = "rolake";
    $database = "busticketingsystem";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $message="";
    if(!empty($_POST["login"])){
    //if(count($_POST)>0) {
        $conn = mysqli_connect("localhost","rolake","rolake","busticketingsystem");
        $result = mysqli_query($conn,"SELECT * FROM signup WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $count  = mysqli_num_rows($result);
        if($count==0) {
            $message = "Invalid Username or Password!";
            echo $message;
        } else {
            //echo "You are successfully authenticated!";
            header('Location: ticket.php');
        }
    }
?>