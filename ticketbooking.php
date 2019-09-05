<!DOCTYPE html>
<html>
    <head>
        <title>Booking Details</title>
        <link rel="stylesheet" type="text/css" href="ticketbooking.css">
    </head>

    <body>
        <?php
            $servername = "localhost";
            $user = "rolake";
            $db_password = "rolake";
            $database = "busticketingsystem";

            $trip_type = $_POST['trip_type'];
            $location = $_POST['states_of_nigeria'];
            $destination = $_POST['states_of_nigeria2'];
            $time = $_POST['time'];
            $persons = $_POST['persons'];
            $price;
            $username;

            $link = mysqli_connect("$servername", "$user","$db_password", "$database");

            if($trip_type == ""){
                echo "Select trip type";
            }else if($location == ""){
                echo "Enter location";
            }else if($destination == ""){
                echo "Enter destination";
            }else if($time == ""){
                echo "Enter time";
            }else if($persons == ""){
                echo "Pick the number of persons";
            }
            if($location == $destination){
                echo "Location and destination cannot be the same";
            }
            if($_POST['trip_type'] == 'One Way'){
                $price = 5000 * $persons;
            }else if($_POST['trip_type'] == "Round Trip"){
                $price = (5000 * $persons) * 2;
            }

            if(isset($_POST['trip_type'])){
                $insert = "INSERT into ticketdetails (Trip_type, Location, Destination, Time, Persons, Price) VALUES 
            ('$trip_type','$location', '$destination', '$time', '$persons', '$price')";
            // $select = "SELECT $username from signup";

            if(!mysqli_query($link, $insert)){
                echo("Eror:".mysqli_error($link));
            }else{
                //echo "Connected";
                //header('Location: index.html');
                //header('Location: bookingdetails.php');  
            }
            }
        ?>

    <div class="four">
        <div class="details">

            <label>Trip type</label>
            <input type="text" name="trip_type" class="userdetails" value="<?php echo $trip_type; ?>">

            <label>Location</label>
            <input type="text" name="location" class="userdetails" value="<?php echo $location; ?>">

            <label>Destination</label>
            <input type="text" name="trip_type" class="userdetails" value="<?php echo $destination; ?>">

            <label>Time</label>
            <input type="text" name="time" class="userdetails" value="<?php echo $time; ?>">

            <label>Persons</label>
            <input type="text" name="persons" class="userdetails" value="<?php echo $persons; ?>">

            <label>Price</label>
            <input type="text" name="price" class="userdetails" value="<?php echo $price; ?>">
        </div>
    </div>
</body>
</html>