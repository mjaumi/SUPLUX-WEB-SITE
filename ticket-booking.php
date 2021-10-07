<?php

include 'config.php';
// unset($_POST);


session_start();
//error_reporting(0);
error_reporting(E_ALL);
// session_regenerate_id();

// $_POST['from_city'] = "";
// $_POST['to_city'] = " " ;





if (!isset($_SESSION['user_name'])) {
    header("Location: log-in-or-sign-up.php");
}

if (isset($_POST['search_buses'])) {
    // $cookie_name = 'ticket-booking';
    // $cookie_value = true;
    // setcookie($cookie_name, $cookie_value, time() + (30 * 1), "/"); // 86400 = 1 day
    // # code...
    $_SESSION['ticket-booking'] = true;
    if(isset($_POST['from_city'])){
        $_SESSION['from_city'] = $_POST['from_city'];
        if ($_SESSION['from_city'] === "Cox's Bazar") {
                $_SESSION['from_city'] = 'Coxs Bazar';
            }
    }
    if(isset($_POST['to_city'])){
        
        $_SESSION['to_city'] = $_POST['to_city'];
        if ($_SESSION['to_city'] === "Cox's Bazar") {
            $_SESSION['to_city'] = 'Coxs Bazar';
        }
    }
    if(isset($_POST['date_of_journey'])){
        $_SESSION['date_of_journey'] = $_POST['date_of_journey'];

    }
    if(isset($_POST['date_of_return'])){
        
        $_SESSION['date_of_return'] = $_POST['date_of_return'];
    }
    if ($_POST['from_city'] !== $_POST['to_city']) {
        //unset($_POST);
        if ($_SESSION['date_of_return'] !== "") {
            # code...
            //$_SESSION['date_of_return'] = $_POST['date_of_return'];
            header("Location: search-result.php?return=y");
        } else{
            header("Location: search-result.php?return=n");
        }
        
    // 
    }


}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPLUX | BOOKING</title>

    <!-- css file integration -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <Link rel="stylesheet" href="css/main.css">
    <Link rel="stylesheet" href="css/user-nav.css">
    <Link rel="stylesheet" href="css/date-picker.css">
    <Link rel="stylesheet" href="css/footer-social-icon.css">
    <Link rel="stylesheet" href="css/sign-up-form.css">
    <Link rel="stylesheet" href="css/autocomplete-fields.css">
    <Link rel="stylesheet" href="css/ticket-booking-page.css">
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
                <li class="nav_items">
                    <div class="dropdown" data-open="false">
                        <button class="dropdown_button" aria-haspopup="true" aria-expanded="false">
                            <span>
                                <div class="nav_pro_pic">
                                    <img src="img/me.jpg" width="100%" alt="user profile image">
                                </div>
                                <p class="nav_pro_name">Milhan Joardar</p>
                            </span>
                            <i class="dropdown_button_arrow fa fa-angle-down"></i>
                        </button>
                    
                        <ul class="dropdown_menu scale" aria-role="menu" aria-hidden="true">
                            <li class="dropdown_menu_item" tabindex="-1" aria-role="menuitem">
                                <a class="logged_in_nav_btn" href="profile.php">
                                    <i class="dropdown_item_icon fa fa-user" aria-hidden="true"></i>
                                    <span>Profile</span>
                                </a>
                            </li>

                            <li class="dropdown_menu_separator" role="separator"></li>
                        
                            <li class="dropdown_menu_item" tabindex="-1" aria-role="menuitem">
                                <a class="logged_in_nav_btn" href="ticket-booking.php">
                                    <i class="dropdown_item_icon fa fa-bus" aria-hidden="true"></i>
                                    <span>Book Ticket</span>
                                </a> 
                            </li>
                        
                            <li class="dropdown_menu_item" tabindex="-1" aria-role="menuitem">
                                <a class="logged_in_nav_btn" href="#">
                                    <i class="dropdown_item_icon fa fa-ban" aria-hidden="true"></i>
                                    <span>Cancel Ticket</span>
                                </a>
                            </li>
                        
                            <li class="dropdown_menu_item" tabindex="-1" aria-role="menuitem">
                                <a class="logged_in_nav_btn" href="transaction-log-page.php">
                                    <i class="dropdown_item_icon fa fa-calendar" aria-hidden="true"></i>
                                    <span>Purchase Log</span>
                                </a>
                            </li>
                        
                            <li class="dropdown_menu_separator" role="separator"></li>
                        
                            <li class="dropdown_menu_item" tabindex="-1" aria-role="menuitem">
                                <a class="logged_in_nav_btn" href="logout.php">
                                    <i class="dropdown_item_icon fa fa-sign-out" aria-hidden="true"></i>
                                    <span>Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    <main class="booking_page_main_container">
        <div class="booking_search_box_container">
            <div class="booking_title">
                <h1>ticket booking</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="booking_search_box">
                                <div class="flexbox-col">
                                    <div class="form-wrapper">
                                        <form autocomplete="off" id="form" method="post" name="emailform" action="">
                                            <div class="form-input-max">
                                                <div class="autocomplete">
                                                    <p class="form-text">From</p>
                                                    <div class="form-input-wrapper flexbox-left">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        <input class="form-input" id="starting_point" name="from_city" type="text" placeholder="Enter city" aria-label="" required>
                                                    </div>  
                                                </div>
                                                <div class="autocomplete">
                                                    <p class="form-text">To</p>
                                                    <div class="form-input-wrapper flexbox-left">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        <input class="form-input" id="destination_point" name="to_city" type="text" placeholder="Enter City" aria-label="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-input-grid">
                                                <div>
                                                    <p class="form-text">Date of Journey</p>
                                                    <div class="form-input-wrapper flexbox-left">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <div class="text-center date_field">
                                                            <input type="text" name="date_of_journey" id="journey_datepicker" class="date form-input" readonly="readonly" placeholder="Pick a date" required>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="form-text">Date of Return (Optional)</p>
                                                    <div class="form-input-wrapper flexbox-left">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <div class="text-center date_field">
                                                            <input type="text" name="date_of_return" id="return_datepicker" class="date form-input" readonly="readonly" placeholder="Pick a date" >
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-input-max">
                                                
                                            </div>
                                            <div class="form-input-grid d-flex justify-content-center">
                                                <div class="button-wrapper">
                                                    <button id="form-button" type="submit" class="button btn-primary" name="search_buses"><i class="fa fa-search" aria-hidden="true"></i>SEARCH BUSES</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="footer_container">
                <div class="footer_content">
                    <p class="footer_title">© SUPLUX 2021. All Rights Reserved</p>
    
                    <div class="social_footer">
                        <div class="social_title">
                            <p>Find us on</p>
                        </div>
                        <div class="icon_container">
                            <a class="icon" href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a class="icon" href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a class="icon" href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- js file integration -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/header.js"></script>
    <script src="js/journey-date-picker.js"></script>
    <script src="js/autocomplete-fields.js"></script>
    <script src="js/user-nav.js"></script>
    <script>
        /**
        * this is animating the header 
        */
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").style.top = "0";
          } else {
            document.getElementById("header").style.top = "-10vh";
          }
          prevScrollpos = currentScrollPos;
        }
    </script>

    <?php
      if ($_POST['from_city'] === $_POST['to_city'] && ($_POST['from_city'] !== null || $_POST['To_city'] !== null)) {   
        echo "<script>alert('Source & Destination is same here. Please choose different cities. ')</script>";  
        }
    ?>
</body>
</html>


