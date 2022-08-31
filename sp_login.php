<?php 
session_start();     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/regi.css">
    <style type="text/css">
        .signup-img1 {
            margin-bottom: 20%;
            margin-top: 10%; 
            margin-left: 10%;
            margin-right: 10%;}
    </style>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img1">
                  <img src="Authentication/images/signup-image.jpg" alt="">
               
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                        <h2>Sign In</h2>
                            <div class="form-group">
                                <label for="father_name">Contact No. :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                            </div>
                             <a href="registration.php" class="signup-image-link">Create an account As User</a>
                             <a href="sp_registration.php" class="signup-image-link">Create an account As Service provider</a>
                                <div class="form-submit" style="width:100%;">
                                    <input type="submit" value="Login" class="submit1" name="submit1" id="submit1" />
                                </div>
                        </form>
                    </div>
            </div>
        </div>

    </div>
<?php
    $con = mysqli_connect("localhost", 'root', '', 'homis');
if(!$con){
    die("Please check your connection");
}

if (isset($_POST['submit1'])){
$contact = $_POST['name'];  
$password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $password = stripcslashes($password);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT *FROM service_provider WHERE contact_no = '$contact' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          

        if($result){ 
         $_SESSION["sp_login"] = $contact;
         
         header("location:ordered_user.php");
          
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   
    }  

?>  

    <!-- JS -->
    <script src="jquery.min.js"></script>
    <script src="main.js"></script>
    
</body>
</html>