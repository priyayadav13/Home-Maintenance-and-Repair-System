<?php
$con = mysqli_connect("localhost", 'root', '', 'homis');
if (isset($_POST['submit'])){
  $n=$_POST['name'];
  $u=$_POST['username'];
  $g=$_POST['gender'];
  $a=$_POST['address'];
  $p=$_POST['pincode'];
  $c=$_POST['city'];
  $cn=$_POST['contact'];
  $m=$_POST['mail'];
  $pass=$_POST['password'];

  $sql='INSERT INTO users(name,username,gender,address,pincode,city,contact,mail,password) VALUES("'.$n.'","'.$u.'","'.$g.'","'.$a.'","'.$p.'","'.$c.'","'.$m.'","'.$cn.'","'.$pass.'")';
  if(mysqli_query( $con,$sql) or trigger_error(mysqli_error($con)))
  {
     $_SESSION['username'] = $username;
         
        // Welcome message
        $_SESSION['success'] = "You have logged in";
    echo '<a href="Authentication/login.php"></a>';
  }
  else
  {
    echo "Error: ".$sql."</br>".mysqli_error($con);
  }
  mysqli_close($con);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!-- Font Icon -->
    <link rel="stylesheet" href="material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/regi.css">
    </head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                  <img src="Authentication/images/signin-image.jpg" alt="">
                  <a href="login.php" class="signup-image-link"> I am already member</a>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form";>
                        <h2>sign up</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Username :</label>
                                <input type="text" name="username" id="username" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                       <option value=""></option>
                                        <option value="surat">Surat</option>
                                        <option value="navsari">Navsari</option>
                                        <option value="ahmedabad">Ahmedabad</option>
                                        <option value="vadodara">Vadodara</option>
                                        <option value="rajkot">Rajkot</option>
                                        <option value="jamnagar">Jamnagar</option>
                                        <option value="bhavnagar">Bhavnagar</option>
                                        <option value="junagadh">Junagadh</option>
                                        <option value="Gandhidham">Gandhinagar</option>
                                        <option value="anand">Anand</option>
                                        <option value="Gandhidham">Gandhidham</option>
                                        <option value="nadiad">Nadiad</option>
                                        <option value="surendranagar">Surendranagar</option>
                                        <option value="bharuch">Bharuch</option>
                                        <option value="valsad">Valsad</option>
                                        <option value="vapi">Vapi</option>
                                        <option value="patan">Patan</option>
                                        <option value="kalol">Kalol</option>
                                    </select>
                                    <span class="select-icon"><i class="fa-thin fa-city"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="pincode">Pincode :</label>
                              <input type="text" name="pincode" id="pincode">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number :</label>
                            <input type="number" name="contact" id="contact">
                        </div>
                        
                        <div class="form-group">
                            <label for="course">Email ID :</label>
                            <input type="email" name="mail" id="mail" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password:</label>
                            <input type="password" name="confirm_password" id="confirm_password" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit"/>

                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="jquery.min.js"></script>
    <script src="main.js"></script>
    
</body>
</html>