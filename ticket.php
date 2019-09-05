<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="ticket.css">
        <title>Ticket Page</title>

        <script>
            function validate(){
                var trip_type=document.ticketform.location.value;  
                var location=document.ticketform.location.value;  
                var destination=document.ticketform.destination.value;
                var time=document.ticketform.time.value;
                var persons=document.ticketform.persons.value;

                    if (trip_type==null){  
                    alert("Select trip type");  
                    return false;  
                    }else if(location == "" || location == null){
                        alert("Enter your location");
                    }else if(location == destination){
                        alert("Location and Destination cannot be the same");
                    }
                    else if(password.length<6){  
                    alert("Password must be at least 6 characters long");  
                    return false;  
                    }  
            }  
            </script>
    </head>

    <body>
        <div class="container">
            <form name="ticketform" action="ticketbooking.php" method="POST">
            <div class="one">
                <div class="buttons">
                    <input type="submit" value="One Way" class="submit" name="trip_type">
                    <input type="submit" value="Round Trip" class="submit" name="trip_type">
                </div>
                <label class="text">Location:</label>
                <select name="states_of_nigeria" id="select">
                        <option>SELECT</option>
                        <option>ABUJA FCT</option>
                        <option>ABIA</option>
                        <option>ADAMAWA</option>
                        <option>AKWA IBOM</option>
                        <option>ANAMBRA</option>
                        <option>BAUCHI</option>
                        <option>BAYELSA</option>
                        <option>BENUE</option>
                        <option>BORNO</option>
                        <option>CROSS RIVER</option>
                        <option>DELTA</option>
                        <option>EBONYI</option>
                        <option>EDO</option>
                        <option>EKITI</option>
                        <option>ENUGU</option>
                        <option>GOMBE</option>
                        <option>IMO</option>
                        <option>JIGAWA</option>
                        <option>KADUNA</option>
                        <option>KANO</option>
                        <option>KATSINA</option>
                        <option>KEBBI</option>
                        <option>KOGI</option>
                        <option>KWARA</option>
                        <option>LAGOS</option>
                        <option>NASSARAWA</option>
                        <option>NIGER</option>
                        <option>OGUN</option>
                        <option>ONDO</option>
                        <option>OSUN</option>
                        <option>OYO</option>
                        <option>PLATEAU</option>
                        <option>RIVERS</option>
                        <option>SOKOTO</option>
                        <option>TARABA</option>
                        <option>YOBE</option>
                        <option>ZAMFARA</option>
                        </select>
                <label class="text">Destination:</label>
                <select name="states_of_nigeria2" id="select">
                        <option>SELECT</option>
                        <option>ABUJA FCT</option>
                        <option>ABIA</option>
                        <option>ADAMAWA</option>
                        <option>AKWA IBOM</option>
                        <option>ANAMBRA</option>
                        <option>BAUCHI</option>
                        <option>BAYELSA</option>
                        <option>BENUE</option>
                        <option>BORNO</option>
                        <option>CROSS RIVER</option>
                        <option>DELTA</option>
                        <option>EBONYI</option>
                        <option>EDO</option>
                        <option>EKITI</option>
                        <option>ENUGU</option>
                        <option>GOMBE</option>
                        <option>IMO</option>
                        <option>JIGAWA</option>
                        <option>KADUNA</option>
                        <option>KANO</option>
                        <option>KATSINA</option>
                        <option>KEBBI</option>
                        <option>KOGI</option>
                        <option>KWARA</option>
                        <option>LAGOS</option>
                        <option>NASSARAWA</option>
                        <option>NIGER</option>
                        <option>OGUN</option>
                        <option>ONDO</option>
                        <option>OSUN</option>
                        <option>OYO</option>
                        <option>PLATEAU</option>
                        <option>RIVERS</option>
                        <option>SOKOTO</option>
                        <option>TARABA</option>
                        <option>YOBE</option>
                        <option>ZAMFARA</option>
                        </select><br><br>
                <label class="text" >Time:</label>
                <input type="time" class="time" name="time">
                <label class="text">Persons:</label>
                    <select name="persons">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                
                <!--<input type="submit" value="Book Ticket" class="bookticket" name="bookticket">-->
            </div>
        </form>
        </div>
    </body>
</html>