<?php
$nameError="";
$passwordError="";
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

if(empty($username)){
    $nameError="name is required";
}

if (empty($password)) {
    $passwordError = "Password is required";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>

    
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php
include("php/config.php");
if (isset($_POST['submit'])) {
    $username =mysqli_real_escape_string($con, $_POST['username']);
    $email =mysqli_real_escape_string($con, $_POST['email']);
    $mobile =mysqli_real_escape_string($con, $_POST['mobile']); 
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
    

    
     $pass=password_hash($password, PASSWORD_BCRYPT);
     $cpass=password_hash($cpassword, PASSWORD_BCRYPT);


    // Verify the unique email
    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

    if (mysqli_num_rows($verify_query) != 0) {
        echo "<div class='message'>
                  <p>This email is used, Try another One Please!</p>
              </div><br>";
        echo "<a href='javascript:history.back()'><button class='btn'>Go Back</button></a>";
    } 
    else {


       
        // Ensure the column names in the database match the ones used in the query
        $insert_query = mysqli_query($con, "INSERT INTO users(username, email, mobile, password,cpassword) VALUES ('$username','$email','$mobile','$pass','$cpass')") or die("Error Occurred");

        if ($insert_query) {
            echo "<div class='message'>
                      <p>Registration successful!</p>
                  </div><br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button></a>";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
else {
?>
 <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    
                    <input type="text" name="username" id="username"  autocomplete="off" required>
                    
                    <span style="color:red;"><?php echo $nameError ?></span>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email"  autocomplete="off" required>
                    <span style="color:red;"><?php echo $passwordError ?></span>
                </div>

                <div class="field input">
                    <label for="mobile">Mobile</label>
                    <input type="tel" name="mobile" id="mobile" autocomplete="off" required>

                </div>

                    <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

            
                <div class="field input">
    <label for="cpassword">Confirm Password</label>
    <input type="password" name="cpassword" id="cpassword" autocomplete="off" required>
</div>
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>

      
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    
</body>
</html>