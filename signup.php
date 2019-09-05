<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" type="text/css" href="busdesign.css">-->
        <link rel="stylesheet" type="text/css" href="signup.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script>
            function validate(){
                var username=document.myForm.username.value;  
                var email=document.myForm.email.value;  
                var password=document.myForm.password.value;
                var password2=document.myForm.password2.value;
                    
                    if (username==null || username==""){  
                    alert("Enter your username");  
                    return false;  
                    }else if(email==null || email==""){
                        alert("Enter your email address");
                    }else if(password2 != password){
                        alert("Confirm Password");
                    }
                    else if(password.length<6){  
                    alert("Password must be at least 6 characters long");  
                    return false;  
                    }  
            }  
            </script>
    </head>

    <body>
        <div class="four">
            <div class="details">
                <form method="POST" action="formprocess.php" name="myForm" onsubmit="return validate()">
                    <h2>Sign Up</h2><br>
                    <h4>Please fill in this form to create an account!</h4><br><hr>
                    <label>Username</label>
                    <input type="text" placeholder="Username" class="userdetails" name="username"><br><br>
                    <label>Email</label>
                    <input type="text" placeholder="Email" class="userdetails" name="email"><br><br>
                    <label>Password</label>
                    <input type="password" placeholder="Password" class="userdetails" name="password"><br><br>
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" class="userdetails" name="password2"><br><br>
                    <a href="index.html" class="bussignup"><input type="submit" class="signup" name="submit" value="Sign Up"></a>
                    <br> <br>
                    
                <div class="login">
                    <h4>Already have an account? <a href="login.php" style="color:black">Login Here</a></h4>
                </div>    
            </form>
            </div>    
        </div> 
    </body>
</html>