<?php
    $servername = "localhost";
    $user = "rolake";
    $db_password = "rolake";
    $database = "busticketingsystem";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $link = mysqli_connect("$servername", "$user","$db_password", "$database");

   if (isset($_POST['submit'])){    
    $insert = "INSERT into signup (username, email, password, confirmpassword) VALUES 
    ('$username','$email', '$password', '$password2')";

    if(!mysqli_query($link, $insert)){
        echo("Eror:".mysqli_error($link));
    }else{
        //echo "Connected";
        header('Location: index.html');
    }
    }
?>