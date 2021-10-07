<?php


include 'config.php';

session_start();
error_reporting(0);
$user_logged_in = "no";


if(isset($_SESSION['user_name'])){
    $user_logged_in = "yes";
    //header("Location: profile.php");
}

unset($_POST['name']);
unset($_POST['email']);
unset($_POST['message']);




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPLUX | HOME</title>

    <!-- css file integration -->
    <link rel="stylesheet" href="css/user-nav.css">
    <Link rel="stylesheet" href="css/about-us-card.css">
    <Link rel="stylesheet" href="css/destination-cards.css">
    <Link rel="stylesheet" href="css/testimonials-card.css">
    <Link rel="stylesheet" href="css/contact-us-form.css">
    <Link rel="stylesheet" href="css/developers-card.css">
    <Link rel="stylesheet" href="css/footer-social-icon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css" integrity="sha512-4rPgyv5iG0PZw8E+oRdfN/Gq+yilzt9rQ8Yci2jJ15rAyBmF0HBE4wFjBkoB72cxBeg63uobaj1UcNt/scV93w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <Link rel="stylesheet" href="css/main.css">
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

    <div id="main_content">
        <div class="section" id="home">
            <video id="hero_video" class="video_bg" data-autoplay data-keepplaying muted loop>
                <source src="vdo/hero_video.webm" type="video/webm">
            </video>
            <div class="hero_title">
                <h1 id="hero_title_1">Planning a <br/>trip?</h1>
                <h1 id="hero_title_2">don't worry, <br/>we got your back.</h1> 
            </div>
        </div>

        <div class="section" id="about_us">
            <div class="title_top">
                <h1>ABOUT US</h1>
            </div> 

            <div class="about_us_cards">
                <div class="about_us_card">
                    <div class="flip">
                        <div class="front" style="background-image: url(img/luxury.jpg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                           <h1 class="text-shadow">WE OFFER LUXURY</h1>
                        </div>
                        <div class="back">
                           <h2>Luxury everywhere</h2>
                           <p>It doesn't matter whether you board on our bus or hotel room. You will find the touch of luxury everywhere.</p>
                        </div>
                    </div>
                </div>
                <div class="about_us_card">
                    <div class="flip flip-vertical">
                        <div class="front" style="background-image: url(img/seats.jpg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                           <h1 class="text-shadow">COMFORTABLE SEATS</h1>
                        </div>
                        <div class="back">
                           <h2>We ensure comfort for you</h2>
                           <p>We have very large leg space in between seats.You can spend 12 hours without any discomfort on our seats.</p>
                        </div>
                    </div>
                </div>
                <div class="about_us_card">
                    <div class="flip">
                        <div class="front" style="background-image: url(img/entertainment.jpg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                           <h1>ENTERTAINMENT ON BOARD</h1>
                        </div>
                        <div class="back">
                           <h2>Enjoyable journey</h2>
                           <p>Our buses are equipped with full HD Display to entertain our passengers and to make the journey more enjoyable.</p>
                        </div>
                    </div>
                </div>
                <div class="about_us_card">
                    <div class="flip flip-vertical">
                        <div class="front" style="background-image: url(img/hassle-free.jpg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                           <h1 class="text-shadow">HASSLE-FREE</h1>
                        </div>
                        <div class="back">
                           <h2>Simple & easy</h2>
                           <p>Choose your favorite seats from anywhere. No need to go to the counter anymore. It's that simple!!!</p>
                        </div>
                    </div>
                </div>
                <div class="about_us_card">
                    <div class="flip">
                        <div class="front" style="background-image: url(img/satisfaction.jpeg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                           <h1 class="text-shadow">SATISFACTION GUARANTEED</h1>
                        </div>
                        <div class="back">
                           <h2>Premium satisfaction</h2>
                           <p>Our first priority is our clients and we try satisfy our clients with premium services.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="about_us_card_slides">
                <div class="slide">
                    <div class="about_us_container">
                        <div class="about_us_card">
                            <div class="flip">
                                <div class="front" style="background-image: url(img/luxury.jpg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                                <h1 class="text-shadow">WE OFFER LUXURY</h1>
                                </div>
                                <div class="back">
                                <h2>Luxury everywhere</h2>
                                <p>It doesn't matter whether you board on our bus or hotel room. You will find the touch of luxury everywhere.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="about_us_container">
                        <div class="about_us_card">
                            <div class="flip flip-vertical">
                                <div class="front" style="background-image: url(img/seats.jpg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                                <h1 class="text-shadow">COMFORTABLE SEATS</h1>
                                </div>
                                <div class="back">
                                <h2>We ensure comfort for you</h2>
                                <p>We have very large leg space in between seats.You can spend 12 hours without any discomfort on our seats.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="about_us_container">
                        <div class="about_us_card">
                            <div class="flip">
                                <div class="front" style="background-image: url(img/entertainment.jpg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                                <h1>ENTERTAINMENT ON BOARD</h1>
                                </div>
                                <div class="back">
                                <h2>Enjoyable journey</h2>
                                <p>Our buses are equipped with full HD Display to entertain our passengers and to make the journey more enjoyable.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="about_us_container">
                        <div class="about_us_card">
                            <div class="flip flip-vertical">
                                <div class="front" style="background-image: url(img/hassle-free.jpg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                                <h1 class="text-shadow">HASSLE-FREE</h1>
                                </div>
                                <div class="back">
                                <h2>Simple & easy</h2>
                                <p>Choose your favorite seats from anywhere. No need to go to the counter anymore. It's that simple!!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="about_us_container">
                        <div class="about_us_card">
                            <div class="flip">
                                <div class="front" style="background-image: url(img/satisfaction.jpeg); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply;">
                                <h1 class="text-shadow">SATISFACTION GUARANTEED</h1>
                                </div>
                                <div class="back">
                                <h2>Premium satisfaction</h2>
                                <p>Our first priority is our clients and we try satisfy our clients with premium services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="destinations">
            <div class="title_top">
                <h1>DESTINATIONS</h1>
            </div> 
            
            <div class="slide">
                <div class="destination_card_container">
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/bandarban.jpg" alt="bandarban" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Bandarban</h2>
                            <p class="destination_card_body">One of the three hill districts of Bangladesh and a part of Chattogram hill tracts and also a polular tourist spot.</p>  
                            <a href="destination-description.php?q=bandarban" class="destination_card_button">View details</a>
                        </div>
                    </div>
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/bogura.jpg" alt="bogura" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Bogura</h2>
                            <p class="destination_card_body">A city which is famous for its many ancient Buddhist stupas, Hindu temples, and many ancient palaces.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/chittagong.jpg" alt="Chattogram" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Chattogram</h2>
                            <p class="destination_card_body">The major coastal city and financial centre of Bangladesh.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/coxs-bazar.jpg" alt="cox's bazar" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Cox's Bazar</h2>
                            <p class="destination_card_body">The longest sea beach in the world. Every year millions of tourists come to visit cox's bazar from all around the world.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="destination_card_container">
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/dhaka.jpg" alt="dhaka" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Dhaka</h2>
                            <p class="destination_card_body">The capital of Bangladesh and also one of the main tourist attraction of the country.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/khulna.jpg" alt="khulna" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Khulna</h2>
                            <p class="destination_card_body">The third leargest city in Bangladesh. Here the leargest mangrove forest in the world is situated.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/khagrachari.jpg" alt="khagrachari" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Khagrachhari</h2>
                            <p class="destination_card_body">The city of valleys is enriched with natural beauty and attracts tourists all over the world.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/kuakata.jpg" alt="kuakata" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Kuakata</h2>
                            <p class="destination_card_body">The daughter of sea where you can enjoy the scenic beauty of sunrise and sunset.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="destination_card_container">
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/rangamati.jpg" alt="rangamati" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Rangamati</h2>
                            <p class="destination_card_body">The lake city of Bangladesh is also the leargest district of the country.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/saint-martin.jpg" alt="saint martin" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Saint Martin</h2>
                            <p class="destination_card_body">The small island of the soutest part of Bangladesh full of scenic beauty.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/srimangal.jpg" alt="sreemangal" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Sreemangal</h2>
                            <p class="destination_card_body">The tea capital of bangladesh situated on the north east side of Bangladesh is full of greenery.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                    <div class="destination_card">
                        <figure class="destination_card_image">
                            <img src="img/sylhet.jpg" alt="sylhet" >
                        </figure>
                        <div class="destination_card_content">
                            <h2 class="destination_card_title">Sylhet</h2>
                            <p class="destination_card_body">The London of Bangladesh is full of tourist spots and natural beauty.</p>  
                            <a href="#" class="destination_card_button">View details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="testimonials">
            <div class="title_top">
                <h1>TESTIMONIALS</h1>
            </div>

            <div class="testimonials_card_container">
                <figure class="testimonials_card_content">
                    <figcaption>
                        <img src="img/me.jpg" alt="profile-sample" class="profile"/>
                        <blockquote>This site is too good. They provide premium services to their clients. Clients satisfaction is their first priority.</blockquote>
                    </figcaption>
                    <h3>Milhan Joardar<span>Engineer</span></h3>
                </figure>
                <figure class="testimonials_card_content">
                    <figcaption>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample7.jpg" alt="profile-sample" class="profile"/>
                        <blockquote>Calvin: I'm a genius, but I'm a misunderstood genius. Hobbes: What's misunderstood about you? Calvin: Nobody thinks I'm a genius.</blockquote>
                    </figcaption>
                    <h3>Wisteria Widget<span>Photographer</span></h3>
                </figure>
                <figure class="testimonials_card_content">
                    <figcaption>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample9.jpg" alt="profile-sample" class="profile"/>
                        <blockquote>Sorry to say but if you want to stay dad you've got to polish your image. I think the image we need to create for you is "repentant but learning".</blockquote>
                    </figcaption>
                    <h3>Desmond Eagle<span>Accountant</span></h3>
                </figure>
            </div>

            <div id="testimonials_cards_slider">
                <div class="slide">
                    <div class="testimonials_slides">
                        <figure class="testimonials_card_content">
                            <figcaption>
                                <img src="img/me.jpg" alt="profile-sample" class="profile"/>
                                <blockquote>This site is too good. They provide premium services to their clients. Clients satisfaction is their first priority.</blockquote>
                            </figcaption>
                            <h3>Milhan Joardar<span>Engineer</span></h3>
                        </figure>
                    </div>
                </div>
                <div class="slide">
                    <div class="testimonials_slides">
                        <figure class="testimonials_card_content">
                            <figcaption>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample7.jpg" alt="profile-sample" class="profile"/>
                                <blockquote>Calvin: I'm a genius, but I'm a misunderstood genius. Hobbes: What's misunderstood about you? Calvin: Nobody thinks I'm a genius.</blockquote>
                            </figcaption>
                            <h3>Wisteria Widget<span>Photographer</span></h3>
                        </figure>
                    </div>
                </div>
                <div class="slide">
                    <div class="testimonials_slides">
                        <figure class="testimonials_card_content">
                            <figcaption>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample9.jpg" alt="profile-sample" class="profile"/>
                                <blockquote>Sorry to say but if you want to stay dad you've got to polish your image. I think the image we need to create for you is "repentant but learning".</blockquote>
                            </figcaption>
                            <h3>Desmond Eagle<span>Accountant</span></h3>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="call_to_action">
            <div class="action_content">
                <h1 class="action_title">Become a member now. <br> Experience the difference.</h1>
                <a href="#" id="action_btn">Join us</a>
            </div>
        </div>

        <div class="section" id="contact_us">
            <div class="title_top">
                <h1>CONTACT US</h1>
            </div>
            
            <div class="contact">
                <div class="container-contact">
                    <div class="contact-pic js-tilt" data-tilt>
                        <img src="img/envelope.png" alt="IMG">
                    </div>
        
                    <form class="contact-form validate-form" method="POST" action="">
                        <span class="contact-form-title">
                            Say Hello!
                        </span>
        
                        <div class="wrap-input validate-input" data-validate = "Name is required">
                            <input class="input" type="text" name="name" placeholder="Name">
                            <span class="shadow-input"></span>
                        </div>
        
                        <div class="wrap-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input" type="text" name="email" placeholder="Email">
                            <span class="shadow-input"></span>
                        </div>
        
                        
        
                        <div class="wrap-input validate-input" data-validate = "Message is required">
                            <textarea class="input" name="message" placeholder="Message"></textarea>
                            <span class="shadow-input"></span>
                        </div>
        
                        <div class="container-contact-form-btn">
                            <button class="contact-form-btn" type="submit" name="submit">
                                <span>
                                    Send Email
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="section" id="developers">
            <div class="title_top">
                <h1>DEVELOPERS</h1>
            </div>
            
            <div class="developer_card_container">
                <div class="developers_card">
                    <div class="image_dev_profile">
                        <img src="img/me.jpg" alt="profile picture">
                    </div>
                    <div class="developer_card_content">
                        <div class="developer_details">
                            <h2>Milhan Joardar Aumi<br><span>Front-End Developer</span></h2>
                            <ul class="developer_social_icons">
                                <li><a href="https://www.facebook.com/mj.aumi/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/milhan-joardar-aumi-667b651b1/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="https://github.com/mjaumi" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="developers_card">
                    <div class="image_dev_profile">
                        <img src="img/saleh.jpg" alt="profile picture">
                    </div>
                    <div class="developer_card_content">
                        <div class="developer_details">
                            <h2>Saleh Shakib<br><span>Back-End Developer</span></h2>
                            <ul class="developer_social_icons">
                                <li><a href="https://www.facebook.com/Saleh.Shakib0123/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/saleh-shakib-251118198/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="https://github.com/salehshakib" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="developer_slide_container">
                <div class="slide">
                    <div class="slide_container">
                        <div class="developers_card">
                            <div class="image_dev_profile">
                                <img src="img/me.jpg" alt="profile picture">
                            </div>
                            <div class="developer_card_content">
                                <div class="developer_details">
                                    <h2>Milhan Joardar Aumi<br><span>Front-End Developer</span></h2>
                                    <ul class="developer_social_icons">
                                        <li><a href="https://www.facebook.com/mj.aumi/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/milhan-joardar-aumi-667b651b1/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="https://github.com/mjaumi" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide_container">
                        <div class="developers_card">
                            <div class="image_dev_profile">
                                <img src="img/saleh.jpg" alt="profile picture">
                            </div>
                            <div class="developer_card_content">
                                <div class="developer_details">
                                    <h2>Saleh Shakib<br><span>Back-End Developer</span></h2>
                                    <ul class="developer_social_icons">
                                        <li><a href="https://www.facebook.com/Saleh.Shakib0123/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/saleh-shakib-251118198/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="https://github.com/salehshakib" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section fp-auto-height" id="footer">
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
    </div>
    
    <!-- js file integration -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js" integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TimelineMax.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/user-nav.js"></script>
    <script src="js/home.js"></script>
    <script src="jquery/tilt.jquery.min.js"></script>
    <script src="js/header.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
    <script>
        /**
         * this is to tell the browser that user wants to sign up 
         */
        var value="signup";
        var queryString = "?param=" + value;
        
        var signUpBtn = document.getElementById('nav_link_btn'); 
        var actionBtn = document.getElementById('action_btn');

        signUpPressed = () => {

            window.location.href = "log-in-or-sign-up.php" + queryString;
        };

        signUpBtn.addEventListener('click', signUpPressed);
        actionBtn.addEventListener('click', signUpPressed);
    </script> 

</body>
</html>

<?php
if (isset($_POST['submit'])) {
    if($_POST['name'] !== "" && $_POST['email'] !== "" && $_POST['name'] !== ""){
        
        $r_name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        $sql = "INSERT INTO `contact_us`(`u_name`, `email`, `msg`) VALUES ('$r_name','$email','$msg')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('We have accepted your msg.')</script>";
            unset($_POST['submit']);
        }
        
        
    }


    # code...
}

?>