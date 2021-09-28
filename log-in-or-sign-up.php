<?php 

include 'config.php';

session_start();

error_reporting(0);


if(isset($_SESSION['user_name'])){
  header("Location: welcome.php");
}


if(isset($_POST['signup'])){
    $user_name = mysqli_real_escape_string($conn, $_POST['signup_user_name']);
    $user_email = mysqli_real_escape_string($conn, $_POST['signup_user_email']); 
    $user_password = mysqli_real_escape_string($conn, md5($_POST['signup_user_password']));
    $user_confirm_password = mysqli_real_escape_string($conn, md5($_POST['signup_user_confirm_password']));

    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT user_email FROM user_table WHERE user_email = '$user_email'"));
    $check_user_name = mysqli_num_rows(mysqli_query($conn, "SELECT user_name FROM user_table WHERE user_name = '$user_name'"));

    if($user_password !== $user_confirm_password){
        echo "<script>alert('Password did not match.')</script>";
    }elseif( $check_email > 0){
        echo "<script>alert('User already exist.')</script>";
    }elseif( $check_user_name > 0){
        echo "<script>alert('Username already exist. Try a different user name')</script>";
    }elseif($check_email==0 && $check_user_name==0) {
        
        $_SESSION['name'] = $user_name;
        $_SESSION['email'] = $user_email;
        $_SESSION['password'] = $user_password;
        header("Location: sign-up-form.php");
        
        
    //   $sql = "INSERT INTO user_table (user_name, user_email, user_password) VALUES ('$user_name', '$user_email', '$user_password')";
    //   $result = mysqli_query($conn, $sql);
    //   if($result){

    //     echo "<script>alert('User Registration Successful.')</script>";
    //     // $_POST['signup_user_name'] = "";
    //     // $_POST['signup_user_email'] = "";
    //     // $_POST['signup_user_password'] = "";
    //     // $_POST['signup_user_confirm_password'] = "";
    //     unset($_POST);
    //     $_SESSION['status'] = "Signup";
        

        //header("Location: ".$_SERVER['PHP_SELF']);

    }else {
        echo "<script>alert('User Registration Failed.')</script>";
    }
}




if(isset($_POST['login'])){
  
  $user_email = mysqli_real_escape_string($conn, $_POST['login_user_email']); 
  $user_password = mysqli_real_escape_string($conn, md5($_POST['login_user_password']));

  $check_email = mysqli_query($conn, "SELECT * FROM user_table WHERE user_email = '$user_email' AND user_password = '$user_password' ");

  //$check_user_name = mysqli_query($conn, "SELECT * FROM user_table WHERE user_email = '$user_email' AND user_password = '$user_password' ");
  if(mysqli_num_rows($check_email) > 0 ){
    $row = mysqli_fetch_assoc($check_email);
    $_SESSION['user_name'] = $row['user_name'];
    
    header("Location: welcome.php");

  } else{
    echo "<script>alert('Log in details incorrect.')</script>";

  }

}


if (!isset($_POST['signup']) && !isset($_POST['login'])) {
    unset($_POST);
    # code...
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPLUX | LOG IN OR SIGN UP</title>

    <!-- css file integration -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <Link rel="stylesheet" href="css/main.css">
    <Link rel="stylesheet" href="css/log-in-sign-up.css">
</head>
<body>

    <header id="header">
        <div id="suplux_logo">
            <a href="index.php#home-section">
                <svg id="logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 804.3 368">
                    <title>Suplux Home</title>
                    <path d="M515.84,283.74h-65a11.06,11.06,0,0,0-8.84-11h82.63A11.06,11.06,0,0,0,515.84,283.74Zm-77.57-11H411.73c-1.5,5.82-1.48,11,3.41,11h14.3A11.06,11.06,0,0,1,438.27,272.74Zm99,11c8.21-.2,14.68-2.35,14.78-11H528.45A11.09,11.09,0,0,1,537.28,283.72Zm11.2-14.67h3.57v1.45H412.37c2.14-6.85,4.44-13.79,4.44-13.79,3.08-7.27,5.9-12.14,9.9-14.69h6.07v-1.4h-3.07a16.36,16.36,0,0,1,4.87-.7H544c7.67,0,8.09,9.77,8.06,18.41h-3.6Zm-113.82-4.89,17.42-18.89H430c-5.15,2.64-12.06,18.89-12.06,18.89Zm109.37-19H456.91s-8,8.45-13.84,14.58h95.7c3.86,0,8.38-3.27,8.38-7.29S547.88,245.16,544,245.16ZM423.63,242h3.08a12.65,12.65,0,0,1,3-1.4h-6c-.05,0-5-.72-7.1,4.86l1.25.5C419.56,241.48,423.37,242,423.63,242Zm16.53,30.53a9.77,9.77,0,0,0-1.89.18H442A10.6,10.6,0,0,0,440.16,272.55Zm9.38,11.19h0a9.39,9.39,0,1,1-9.38-9.82,9.51,9.51,0,0,1,9.19,7.84A10,10,0,0,1,449.54,283.74Zm-4,0a5.36,5.36,0,1,0-5.36,5.59A5.51,5.51,0,0,0,445.52,283.72Zm81-11.17a9.67,9.67,0,0,0-1.88.18h3.77A10.81,10.81,0,0,0,526.56,272.55Zm9.38,11.17h0a9.39,9.39,0,1,1-18.76,0h0a9.39,9.39,0,1,1,18.76,0Zm-4,0a5.37,5.37,0,1,0-5.37,5.59A5.49,5.49,0,0,0,531.93,283.72Z" transform="translate(-72.92 -213)"/>
                    <path d="M219.33,419.5q-18.3-4.85-26.62-11.92t-8.33-17.46q0-11.76,10.18-19.44T221,363a47.3,47.3,0,0,1,19.8,4,31.85,31.85,0,0,1,13.48,10.94,27.7,27.7,0,0,1,2.94,5.48,7.07,7.07,0,0,1-6.31,9.76h0a7,7,0,0,1-6.73-5.28,16.57,16.57,0,0,0-5.61-9q-6.22-5.17-17.55-5.17-10.51,0-16.4,4.28a13.87,13.87,0,0,0-5.89,11.87q0,6.11,5.59,10.31t19,7.7q13.44,3.5,21,7.7t11.25,9.8a23.61,23.61,0,0,1,3.67,13.19q0,12.1-10.22,19.38t-27.32,7.28A54.3,54.3,0,0,1,201,461.3q-9.63-3.93-14.85-10.77a25.59,25.59,0,0,1-3.26-5.57c-2-4.68,1.33-9.94,6.24-9.94h.23a7,7,0,0,1,6.57,5.27,16.58,16.58,0,0,0,6.51,9q7.22,5.22,19.29,5.23,11.25,0,17.25-4.24a13.42,13.42,0,0,0,6-11.55,13.09,13.09,0,0,0-5.56-11.31Q233.91,423.4,219.33,419.5Z" transform="translate(-72.92 -213)"/>
                    <path d="M361.65,293.06a6.93,6.93,0,0,1,6.78,7.06L368.57,432q-.07,14.08-9.59,23t-25.8,10l-3.77.14q-17.7,0-28.21-8.82t-10.66-24.26V371.43a6.93,6.93,0,0,1,6.77-7.08h.51a6.93,6.93,0,0,1,6.78,7.08v60.31q0,10.8,6.44,16.78t18.37,6q12.06,0,18.47-5.95t6.4-16.74l.59-131.71a6.92,6.92,0,0,1,6.78-7Z" transform="translate(-72.92 -213)"/>
                    <path d="M538,481.39l319.86,0a6.91,6.91,0,0,1,6.76,7.06h0a6.91,6.91,0,0,1-6.76,7H523.75a6.91,6.91,0,0,1-6.76-7V371.41a6.92,6.92,0,0,1,6.76-7.06h.77a6.92,6.92,0,0,1,6.76,7.06V474.33A6.92,6.92,0,0,0,538,481.39Z" transform="translate(-72.92 -213)"/>
                    <path d="M666.14,364.35a6.93,6.93,0,0,1,6.77,7.07V432q-.07,14.08-9.59,23t-25.8,10l-3.78.14q-17.68,0-28.21-8.82t-10.66-24.26l.19-132a6.92,6.92,0,0,1,6.77-7.05h0a6.92,6.92,0,0,1,6.78,7.05l.33,131.63q0,10.8,6.44,16.78t18.36,6q12.07,0,18.48-5.95t6.4-16.74V371.42a6.93,6.93,0,0,1,6.77-7.07Z" transform="translate(-72.92 -213)"/>
                    <path d="M763.92,394.34l18.29-27a6.72,6.72,0,0,1,5.53-3h0c5.53,0,8.73,6.53,5.5,11.2l-23.46,34a7.32,7.32,0,0,0,0,8.29L875.91,569.77c3.26,4.67.06,11.23-5.48,11.23h-2.27a6.7,6.7,0,0,1-5.52-3L763.9,433.11a6.62,6.62,0,0,0-11,0l-19.1,27.82a6.69,6.69,0,0,1-5.5,2.95h0c-5.54,0-8.74-6.55-5.48-11.23L747,417.83a7.31,7.31,0,0,0,0-8.28L652.1,271.89c-3.23-4.68,0-11.2,5.49-11.2h.78a6.69,6.69,0,0,1,5.53,3l89,130.69A6.62,6.62,0,0,0,763.92,394.34Z" transform="translate(-72.92 -213)"/>
                    <path d="M420.36,432.35l-.22,55.74a7.33,7.33,0,0,1-7.16,7.44h0a7.32,7.32,0,0,1-7.16-7.49l.33-116.24a7.32,7.32,0,0,1,7.16-7.45h32.62q17.69,0,27.73,8.34t10,22.08q0,14.48-9.81,22.31t-28.1,7.82H427.52A7.32,7.32,0,0,0,420.36,432.35Zm0-25.65a7.32,7.32,0,0,0,7.17,7.47h18.38q11.4,0,17.47-5t6.07-14.34q0-8.91-6.07-14.24t-16.66-5.55H427.55a7.33,7.33,0,0,0-7.17,7.48Z" transform="translate(-72.92 -213)"/>
                    <path d="M361.6,293.06H601.89a6.67,6.67,0,0,1,6.7,6.63h0a6.67,6.67,0,0,1-6.7,6.64H361.6a6.67,6.67,0,0,1-6.7-6.64h0A6.67,6.67,0,0,1,361.6,293.06Z" transform="translate(-72.92 -213)"/>
                    <path d="M162.44,490.36" transform="translate(-72.92 -213)"/>
                    <path d="M406.3,474.33V371.41a6.92,6.92,0,0,1,6.76-7.06h.77a6.91,6.91,0,0,1,6.76,7.06V488.48a6.91,6.91,0,0,1-6.76,7H79.68a6.91,6.91,0,0,1-6.76-7h0a6.92,6.92,0,0,1,6.76-7.06l319.86,0A6.91,6.91,0,0,0,406.3,474.33Z" transform="translate(-72.92 -213)"/>
                    <polyline class="logo_hover_line" points="6.08 276 6.08 6 422.08 6"/>
                    <polyline class="logo_hover_line" points="786.08 276 786.08 6 370.08 6"/>
                </svg>
            </a>
           
        </div>
        <div id="nav_toggle_btn">

        </div>
        <div id="nav">
            <ul class="nav_menu">
                <li class="nav_items"><a class="nav_link" href="index.php#about-us-section">about us</a></li>
                <li class="nav_items"><a class="nav_link" href="index.php#destinations-section">destinations</a></li>
                <li class="nav_items"><a class="nav_link" href="index.php#contact-us-section">contact us</a></li>
            </ul>
        </div>
    </header>

    <div class="main_container">
        <div class="forms_container">
            <div class="login_signup">
                <form action="" class="log_in_form" method="POST">
                    <h2 class="form_title">Log In</h2>
                    <div class="input_field">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="email" name="login_user_email" value="" placeholder="Username">
                    </div>
                    <div class="input_field">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="login_user_password" id="log_password_field" value="" placeholder="Password">
                        <!-- <i id="toggler_log" class="fa fa-eye" aria-hidden="true"></i> -->
                    </div>
                    <input type="submit" value="log in" class="btn solid" name="login">
                </form>

                <form action="" class="sign_up_form" method="POST">
                    <h2 class="form_title">Sign Up</h2>
                    <div class="input_field">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="signup_user_name" value="" placeholder="Username" required>
                    </div>
                    <div class="input_field">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" name="signup_user_email" value="" placeholder="Email" required>
                    </div>
                    <div class="input_field">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="signup_user_password" id="sign_password_field" value="" placeholder="Password" required>
                        <!-- <i id="toggler_sign" class="fa fa-eye" aria-hidden="true"></i> -->
                    </div>
                    <div class="input_field">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="signup_user_confirm_password" id="confirm_password_field" value="" placeholder="Confirm Password" required>
                        <!-- <i id="toggler_con" class="fa fa-eye" aria-hidden="true"></i> -->
                    </div>
                    <input type="submit" value="sign up" class="btn solid" name = "signup">
                </form>
            </div>
        </div>

        <div class="panels_container">
            <div class="panel left_panel">
                <div class="panel_content">
                    <h3>New here ?</h3>
                    <p>Then sign up right now to join our community.</p>
                    <button class="btn transparent" id="sign_up_btn">Sign up</button>
                </div>
                <img src="img/log.svg" alt="" class="log_sign_image">
            </div>

            <div class="panel right_panel">
                <div class="panel_content">
                    <h3>One of us ?</h3>
                    <p>Then log in to our portal using your email and password.</p>
                    <button class="btn transparent" id="log_in_btn">Log in</button>
                </div>
                <img src="img/sign.svg" alt="" class="log_sign_image">
            </div>
        </div>
    </div>

    <!-- js file integration -->
    <script src="js/log-sign.js"></script>
    <script src="js/header.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>