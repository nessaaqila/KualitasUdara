<?php
session_start();
@include 'config.php';



if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = ($_POST['password']);
    
    
    
    $select = " Select * from UserForm where username= '$username'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        if($password==$row['password']){
            $_SESSION['user_name'] = $row['username'];
            header('location: dashboard.php');
            exit;
        }else{
            $error[] = 'incorrect email or password!';
        }
        
    }else{
    
            $error[] = 'incorrect email or password!';}
        
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

    <title>Login</title>

</head>
<body>
   <div class="box">
    <div class="container">

        <div class="top">
        <form action="" method="post">         
            <header>Login</header>
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
        </div>

        <div class="input-field">
            <input type="text" name="username" class="input" placeholder="Username" id="">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" name="password" class="input" placeholder="Password" id="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" name="submit" class="submit" value="Login" id="">
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="signup.php">Don't have an account?</a></label>
            </div>
        </div>
    </form>
    </div>
</div>  
</body>
</html>