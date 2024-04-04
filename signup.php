<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = ($_POST['password']);
    $cpassword = ($_POST['cpassword']);

    $select = " Select * from UserForm where email= '$email' && password='$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result)>0){
        $error[]='user already exists!';
    }
    else{
        if($password != $cpassword){
            $error[]="password doesn't match";
        }else{
            $insert = "insert into UserForm(email, username, password) values('$email', '$username','$password')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Sign Up</title>

</head>
<body>
   <div class="box">
    <div class="container">

        <div class="top">
 <form action="" method="post">           
            <header>Sign Up</header>
        </div>
        <?php 
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            }
        };
        ?>

        <div class="input-field">
            <input type="text" class="input" name="email" placeholder="Email" id="">
            <i class='bx bx-envelope' ></i>
        </div>

        <div class="input-field">
            <input type="text" class="input" name="username" placeholder="Username" id="">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" name="password" placeholder="Password" id="">
            <i class='bx bx-lock-alt'></i>
        </div>
        <div class="input-field">
            <input type="Password" class="input" name="cpassword" placeholder="Confirm Password" id="">
            <i class='bx bx-lock'></i>
        </div>

        <div class="input-field">
            <input type="submit" name="submit" class="submit" value="Sign up" id="">
        </div>

        <div class="center">
            
            <div class="center">
                <label> <a href="login.php">Already have an account?</a></label>
            </div>
        </div>
</form>
    </div>
</div>  
</body>
</html>