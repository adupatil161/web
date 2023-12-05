<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <link rel="stylesheet" href="style/style2.css">
    <title>Login</title>
    <style>
        body {
            /* Set background image */
            background-image: url('images/pexels-eberhard-grossgasteiger-1183021.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
            background-size: cover; /* Cover the entire background */
            background-position: center; /* Center the background image */
            /* Optionally, you can add more properties like background-repeat, background-attachment, etc. */
        }

        /* Other styles for your content */
        /* ... */
    </style>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("php/config.php");
              if(isset($_POST['submit'])){

                /*
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['mobile'] = $row['mobile'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }*/

                $email =$_POST['email'];
                    $password =$_POST['password'];
                    $email_search ="select * from users where email='$email'";
                    $query=mysqli_query($con,$email_search);
                    $email_count=mysqli_num_rows($query);
                    if($email_count){
                        $email_pass =mysqli_fetch_assoc($query);
                        $db_pass=$email_pass['password'];
                        $_SESSION['username']=$email_pass['username'];
                        $pass_decode=password_verify($password,$db_pass);
                        if($pass_decode){
                            echo "login successfully";
                            ?>
                            <script>
                                location.replace("home1.php");
                                </script>
                            <?php
                        }else{
                            echo "password incorrect";
                        }
                    }else{
                        echo "invalid email";
                    }


              }else{

            
            ?>
            <header>Login</header>

            <?php 
if (isset($_SESSION['msg'])) {
    echo "<p class='bg-success text-white px-4'>{$_SESSION['msg']}</p>";
    unset($_SESSION['msg']); // unset the session message to clear it after displaying
}
?>


<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                    


                <br>
                <a href="recover_email.php"  class="forgot-password-link">Forgot password?</a>
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                
                <div class="links">
                    Don't have account? <a href="register1.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>