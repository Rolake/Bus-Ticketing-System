<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script>
            function validate(){
                var email=document.myForm.email.value;  
                var password=document.myForm.password.value;
                      
                    }if(email==null || email==""){
                        alert("Enter your email address");
                    }else if(password == ""){
                        alert("Enter Password");
                    }
            }  
            </script>
    </head>

    <body>
        <div class="four">
           <div class="details">
                <?php 
                    if(isset($_SESSION["errorMessage"])) {
                    ?>
                    <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                    <?php 
                    unset($_SESSION["errorMessage"]);
                    } 
                ?>
                <form method="POST" action="loginprocess.php" name="myForm" onsubmit="return validate()">
                    <label>Email</label>
                    <input type="text" placeholder="Email" class="userdetails" name="email"><br><br>
                    <label>Password</label>
                    <input type="password" placeholder="Password" class="userdetails" name="password"><br><br>
                    <a href="ticket.html" class="bussignup"><input type="submit" class="login" name="login" value="Login"></a>
                    <br>
                    </form>
        </div>    
    </div> 
    </body>
</html>