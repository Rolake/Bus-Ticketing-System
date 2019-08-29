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
    //mysqli_query($link, $insert);

    if(!mysqli_query($link, $insert)){
        echo("Eror:".mysqli_error($link));
    }else{
        echo "Connected";
    }
    }
    /*mysqli_select_db($link, $database);
    if(mysqli_connect_errno()){
        echo "Failed to connect";
        mysqli_connect_error();
    }else{
        echo "Connect";
    }*/
    //echo mysql_fetch_row($link);
?>