<?php
$nameError = "";
$passwordError = "";
$emailError = "";
$mobileError = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    if (empty($username)) {
        $nameError = "Name is required";
    }

    if (empty($password)) {
        $passwordError = "Password is required";
    } elseif (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', $password)) {
        $passwordError = "Password must be at least 8 characters long and contain at least one letter, one number, and one special character.";
    }

    if (empty($email)) {
        $emailError = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
    }

    if (empty($mobile)) {
        $mobileError = "Mobile number is required";
    } elseif (!preg_match('/^\d{10}$/', $mobile)) {
        $mobileError = "Mobile number should be 10 digits";
    }

    // If no errors, proceed with form submission
    if (empty($nameError) && empty($passwordError) && empty($emailError) && empty($mobileError)) {
        // Place your database operations or other actions here
        // For this example, it redirects to index.php
        header("Location: index.php");
        exit(); // Ensure that code execution stops after redirection
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



   
    <link rel="stylesheet" href="style/style2.css">
    <title>Register</title>
    <style>
        body {
            /* Set background image */
            background-image: url('images/pexels-tobias-bjørkli-1559402.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
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
         //for including configuration etails
         include("php/config.php");
        function smtp_mailer($to,$subject, $msg){
            $mail = new PHPMailer(); 
            $mail->IsSMTP(); 
            $mail->SMTPAuth = true; 
            $mail->SMTPSecure = 'tls'; 
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587; 
            $mail->IsHTML(true);
            $mail->CharSet = 'UTF-8';
            //$mail->SMTPDebug = 2; 
            $mail->Username = "adipat200316@gmail.com";
            $mail->Password = "sgvvquedlokupzvv";
            $mail->SetFrom("adipat200316@gmail.com");
            $mail->Subject = $subject;
            $mail->Body =$msg;
            $mail->AddAddress($to);
            $mail->SMTPOptions=array('ssl'=>array(
                'verify_peer'=>false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>false
            ));
            if(!$mail->Send()){
                echo $mail->ErrorInfo;
            }else{
                session_start();
                $_SESSION['msg']= "check your mail to activate your account";
                header('location:index.php');
                }
            }
         if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
            $password = mysqli_real_escape_string($con,$_POST['password']);
            $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
// to make password encrypt
            $pass=password_hash($password,PASSWORD_BCRYPT);
            $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

            //for generating random token
            $token=bin2hex(random_bytes(15));


 
         //verifying the unique email
         $emailquery ="select * from users where email='$email'";
         $query=mysqli_query($con,$emailquery);
         $emailcount=mysqli_num_rows($query);
         if($emailcount>0){
            echo "<div class='message'>
            <p>Email Already Exist!</p>
        </div>
          <br>";
          echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }


          else{
            if($password===$cpassword){
                $insertquery="insert into users (username,email,mobile,password,cpassword,token,status) VALUES('$username','$email','$mobile','$pass','$cpass','$token','inactive')";
                $iquery=mysqli_query($con,$insertquery);
                if($iquery){


                    include('smtp/PHPMailerAutoload.php');
                    $subject="Account Activation";
                    $body="Hi, $username. Click Here to activate your account 
                    http://localhost/tutorial/activate.php?token=$token ";

                    echo smtp_mailer($email,$subject,$body);








                    
                    echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";

                } 
            }
            else{
                echo "<div class='message'>
            <p>Password and Confirm Password Doesn't match!</p>
        </div>
          <br>";
          echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";

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
                                <label for="mobile" >Mobile</label>
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
            
                  
            
            
                
            </body>
            </html>