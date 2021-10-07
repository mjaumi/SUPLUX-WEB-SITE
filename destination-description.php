<?php

session_start();
error_reporting(0);
$user_logged_in = "no";


if(isset($_SESSION['user_name'])){
    $user_logged_in = "yes";
    


    //header("Location: profile.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPLUX | DESTINATION DESCRIPTION</title>

    <!-- css file integration -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <Link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/user-nav.css">
    <Link rel="stylesheet" href="css/destination-description-page.css">
    <Link rel="stylesheet" href="css/weather-card.css">
    <Link rel="stylesheet" href="css/footer-social-icon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.12/css/weather-icons.min.css" integrity="sha512-r/Gan7PMSRovDus++vDS2Ayutc/cSdl268u047n4z+k7GYuR7Hiw71FsT3QQxdKJBVHYttOJ6IGLnlM9IoMToQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<header id="header">
        <div id="suplux_logo">
            <a href="#home-section">
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

            

            <?php if ($user_logged_in === "yes") {
                # code...
                include 'header-logged-in.php'; 
                
            } else{
                include 'header.php'; 

            }
            
            ?>

            </ul>
        </div>
    </header>

    <main id="main">
        <div class="destination_intro d-flex align-items-center" style="background-image: url('img/coxs-bazar.jpg');">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="destination_intro_title">Cox's Bazar</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="description_container">
            <div class="destination_description">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="descripion_title">Description</h3>
                            <p class="description_text">
                                Cox's Bazar is a city, fishing port, tourism centre, and district headquarters in southeastern Bangladesh. It is famous mostly for its long natural sandy beach. It is located 150 km (93 mi) south of the city of Chittagong. Cox's Bazar is also known by the name Panowa, which translates literally as "yellow flower". Another old name was "Palongkee". It has one of the longest sea beaches in the world.
                                The modern Cox's Bazar derives its name from Captain Hiram Cox, an officer of the British East India Company, a Superintendent of Palongkee outpost. To commemorate his role in refugee rehabilitation work, a market was established and named after him.
                                The city covers an area of 23.4 km2 (9.0 sq mi) with 27 mahallas and 9 wards and as of 2011 had a population of 265,500. Cox's Bazar is connected by road and air with Chittagong.
                            </p>
                        </div>
                    </div>
                </div>  
            </div>
    
            <div class="weather_details">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="descripion_title">Current Weather</h3>
                            <div class="weather_carrd_container d-flex align-items-center justify-content-center">
                                <div class='box'>
                                    <div class='wave -one'></div>
                                    <div class='wave -two'></div>
                                    <div class='wave -three'></div>
                                    <div class="weathercon"><i class='wi wi-day-sunny'></i></div>
                                    <div class="info">
                                        <h2 class="location">SUNNYVILLE</h2>
                                        <h2 class="weather">SUNNYVILLE</h2>
                                        <p class="date">MONDAY | SEP 12 | 12:34</p>
                                        <h1 class="temp">25 &deg;C | 77 &deg;F</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row spot_title">
            <div class="col-md-12 text-center">
                <h3 class="descripion_title mt-5">Famous Tourist Spots</h3>
            </div>
        </div>
            
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/inani.jpg" class="d-block w-100" id="carousel_1" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 id="carousel_caption_1">Inani Sea Beach</h3>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/marine.jpg" class="d-block w-100" id="carousel_2"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 id="carousel_caption_2">Marine Drive</h3>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/himchori.jpg" class="d-block w-100" id="carousel_3"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 id="carousel_caption_3">Himchori</h3>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="destination_fare_info">
            <div class="container_fluid">
                <div class="row">
                    <div class="col-md-12 text-center d-flex flex-column align-items-center justify-content-center">
                        <h3 class="descripion_title">Coach Fare Per Person</h3>
                        <table class="table fare_card">
                            <thead>
                                <tr>
                                    <th width="33.33%" scope="col"><h4 class="coach_type">NON-AC</h4></th>
                                    <th width="33.33%" scope="col"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></th>
                                    <th width="33.33%"scope="col"><h4 class="fare" id="fare_non">800 BDT</h4></th>
                                </tr>
                                <tr>
                                    <th scope="col"><h4 class="coach_type">AC (Bi)</h4></th>
                                    <th scope="col"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></th>
                                    <th scope="col"><h4 class="fare" id="fare_bi">1800 BDT</h4></th>
                                </tr>
                                <tr>
                                    <th scope="col"><h4 class="coach_type">AC (Multi)</h4></th>
                                    <th scope="col"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></th>
                                    <th scope="col"><h4 class="fare" id="fare_multi">1800 BDT</h4></th>
                                </tr>
                                <tr>
                                    <th scope="col"><h4 class="coach_type">Double Decker</h4></th>
                                    <th scope="col"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></th>
                                    <th scope="col"><h4 class="fare" id="fare_dd">1800 BDT</h4></th>
                                </tr>
                                <tr>
                                    <th scope="col"><h4 class="coach_type">Sleeper</h4></th>
                                    <th scope="col"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></th>
                                    <th scope="col"><h4 class="fare" id="fare_sleeper">2500 BDT</h4></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="destination_book_now_btn">
            <div class="container_fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="ticket-booking.php">BOOK NOW</a>
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
    <script src="https://unpkg.com/smooth-scrollbar@latest/dist/smooth-scrollbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/weather.js"></script>
    <script src="js/user-nav.js"></script>
    <script src="js/destination-description.js"></script>
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

        /**
         * this is to tell the browser that user wants to sign up 
         */
         var value="signup";
        var queryString = "?param=" + value;
        
        var signUpBtn = document.getElementById('nav_link_btn'); 

        signUpPressed = () => {

            window.location.href = "log-in-or-sign-up.php" + queryString;
        };

        signUpBtn.addEventListener('click', signUpPressed);
    </script>
</body>
</html>