<?php

include 'config.php';

session_start();
//error_reporting(0);
error_reporting(E_ALL);

if (!isset($_SESSION['user_name'])) {
    # code...
    header("Location: log-in-or-sign-up.php");
}

if($_SESSION['ticket-booking'] !== true){
    header("Location: ticket-booking.php");
} else {
    
}



$from_city = $_SESSION['from_city'];
$to_city = $_SESSION['to_city'];
$date_of_journey = $_SESSION['date_of_journey'];
//
    # code...
    $date_of_return = $_SESSION['date_of_return'];
    
//}








if (isset($_POST['search_buses'])) {
    // # code...
    if(isset($_POST['from_city'])){
        $from_city = $_POST['from_city'];
        //$_SESSION['from_city'] = $_POST['from_city'];
        if($from_city === "Cox's Bazar"){
            $from_city = 'Coxs Bazar';
        }
    }
    if(isset($_POST['to_city'])){
        $to_city = $_POST['to_city'];
        //$_SESSION['to_city'] = $_POST['to_city'];
        if($to_city === "Cox's Bazar"){
            $to_city = 'Coxs Bazar';
        }
    }
    if(isset($_POST['date_of_journey'])){
        $date_of_journey = $_POST['date_of_journey'];
        //$_SESSION['date_of_journey'] = $_POST['date_of_journey'];
    }
    if(isset($_POST['date_of_return'])){
        $_SESSION['date_of_return'] = $date_of_return = $_POST['date_of_return'];
        echo "<script>
        window.location.href = 'search-result.php?return=y'</script>";
        //$_SESSION['date_of_return'] = $_POST['date_of_return'];
    } 

}

if (isset($_POST['modify_search'])) {
    # code...
    //unset($_POST);
}

// echo "<script>if (confirm('Are you sure you want to go back? You will lose all your data...')) {
//     // Save it!
//     //console.log('Thing was saved to the database.');
//     window.location.href = 'ticket-booking.php';
    
//   } else {
//     // Do nothing!
//     // console.log('Thing was not saved to the database.');
//     window.location.href = 'ticket-booking.php';
    
//   }</script>";












?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <?php
    //"upper case"
    ?> -->


    <title>SUPLUX | <?php echo $from_city ?> TO <?php echo $to_city ?> BUS SEARCH RESULT</title>

    <!-- css file integration -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.12/css/weather-icons.min.css" integrity="sha512-r/Gan7PMSRovDus++vDS2Ayutc/cSdl268u047n4z+k7GYuR7Hiw71FsT3QQxdKJBVHYttOJ6IGLnlM9IoMToQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <Link rel="stylesheet" href="css/main.css">
    <Link rel="stylesheet" href="css/user-nav.css">
    <Link rel="stylesheet" href="css/sign-up-form.css">
    <Link rel="stylesheet" href="css/autocomplete-fields.css">
    <Link rel="stylesheet" href="css/date-picker.css">
    <Link rel="stylesheet" href="css/footer-social-icon.css">
    <Link rel="stylesheet" href="css/search-result.css">
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

                            <li class="dropdown_menu_item" tabindex="-1" aria-role="menuitem">
                                <a class="logged_in_nav_btn" href="#">
                                    <i class="dropdown_item_icon fa fa-pencil" aria-hidden="true"></i>
                                    <span>Edit Password</span>
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

    <main class="search_result_main_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="modify_search_container" id="travel_info">
                        <div class="departure_wrapper">
                            <p class="modify_title selected">Departure</p>
                            <div class="departure_content">
                                <svg class="bus_icon departure selected">
                                    <use href="#bus_icon_svg"></use> 
                                </svg>
                                <div class="departure_data_content">
                                    <h1 class="from_to selected"><?php echo $from_city; ?> - <?php echo $to_city; ?></h1>
                                    <h3 class="travel_date selected"><?php echo $date_of_journey; ?></h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="departure_wrapper">
                            <p class="modify_title">Return</p>
                            <div class="departure_content" id="return_trip">
                                <svg class="bus_icon">
                                    <use href="#bus_icon_svg"></use> 
                                </svg>
                                <div class="departure_data_content">
                                    <h1 class="from_to"><?php echo $to_city; ?> - <?php echo $from_city; ?></h1>
                                    <h3 class="travel_date"><?php echo $date_of_return; ?></h3>
                                </div>
                            </div>
                            <div class="add_return_btn_wrapper">
                                <button id="add_return_ticket_btn" class="button add_return_btn" name="modify_search"><i class="fa fa-ticket" aria-hidden="true"></i>ADD RETURN TICKET</button>
                            </div>
                        </div>

                        <div class="button_wrapper">
                            <button id="modify_search_btn" class="button" name="modify_search"><i class="fa fa-search" aria-hidden="true"></i>MODIFY SEARCH</button>
                        </div>
                    </div>   
                    
                    <div class="modify_search_box_container d-none" id="search_modify_form">
                        <form autocomplete="off" id="form" method="post" name="emailform" action="">
                            
                            <div class="from_to_wrapper">
                                <div class="autocomplete">
                                    <p class="form-text">From</p>
                                    <div class="form-input-wrapper flexbox-left">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        <input class="form-input" id="starting_point" name="from_city" type="text" value = "<?php echo $from_city; ?> "placeholder="" aria-label="" required>
                                    </div>  
                                </div>
                                <div class="autocomplete">
                                    <p class="form-text">To</p>
                                    <div class="form-input-wrapper flexbox-left">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        <input class="form-input" id="destination_point" name="to_city" type="text" placeholder="" value = "<?php echo $to_city; ?>" aria-label="" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="date_wrapper">
                                <div class="date_of_journey">
                                    <p class="form-text">Date of Journey</p>
                                    <div class="form-input-wrapper flexbox-left">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <div class="text-center date_field">
                                            <input type="text" name="date_of_journey" id="journey_datepicker" class="date form-input" readonly="readonly" value = "<?php echo $date_of_journey; ?>" placeholder="Pick a date" required>
                                        </div> 
                                    </div>
                                </div>
                                
                                <div class="date_of_return">
                                    <p class="form-text">Date of Return</p>
                                    <div class="form-input-wrapper flexbox-left">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <div class="text-center date_field">
                                            <input type="text" name="date_of_return" id="return_datepicker" class="date form-input" readonly="readonly" value = "<?php echo $date_of_return; ?>" placeholder="Pick a date" >
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-input-grid d-flex flex-column justify-content-center align-items-center search_btn_wrapper">
                                <button type="submit" class="button btn-primary" name="search_buses"><i class="fa fa-search" aria-hidden="true"></i>SEARCH BUSES</button>
                       
                                <button id="cancel_btn" class="button btn-danger" name="cancel"><i class="fa fa-ban" aria-hidden="true"></i>CANCEL</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="filter_container">
                        <div class="coach_filter">
                            <div class="filter_icon_wrapper">
                                <svg class="filter_icon departure selected">
                                    <use href="#filter_icon_svg"></use> 
                                </svg>
                                <p class="filter_text">Filter</p>
                            </div>

                            
                            <form method="POST" action="">
                                <div class="coach_filter_wrapper">
                                    <button type="submit" id="non_ac_btn" class="coach_btn" value="NON-AC" name="non_ac">NON-AC</button>
                                    <button type="submit" id="ac_bi_btn" class="coach_btn" value="AC (Bi)" name="ac_bi">AC </br>(Bi)</button>
                                    <button type="submit" id="ac_multi_btn" class="coach_btn" value="AC (Multi)" name="ac_multi">AC (Multi)</button>
                                    <button type="submit" id="dd_btn" class="coach_btn" value="DD" name="dd">Double Decker</button>
                                    <button type="submit" id="sleeper_btn" class="coach_btn" value="Sleeper" name="sleeper">Sleeper Coach</button>
                                </div>
                            </form>
                        </div>

                        <div class="trip_time_filter">
                            <form method="POST" action="">
                                <div class="trip_time_wrapper">
                                    <button type="submit" id="morning_btn" class="coach_btn" value="morning" name="morning"><i class='wi wi-day-sunny'></i><br>06-12</button>
                                    <button type="submit" id="afternoon_btn" class="coach_btn" value="afternoon" name="afternoon"><i class='wi wi-sunset'></i><br>12-18</button>
                                    <button type="submit" id="night_btn" class="coach_btn" value="night" name="night"><i class='wi wi-night-clear'></i><br>18-00</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="search_results_container">

                    <?php

                    if (!isset($_POST['non_ac']) && 
                    !isset($_POST['ac_bi']) && 
                    !isset($_POST['ac_multi']) && 
                    !isset($_POST['dd']) && 
                    !isset($_POST['sleeper']) && 
                    !isset($_POST['morning']) && 
                    !isset($_POST['afternoon']) && 
                    !isset($_POST['night'])) {
                        $sql = "SELECT * FROM tripData WHERE starting_from = '$from_city' AND destination = '$to_city'";
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) {

                            $_SESSION['coach_no'] = $coach_no = $row['coach_no'];
                            $_SESSION['starting_from'] = $starting_from = $row['starting_from'];
                            $_SESSION['boarding_point'] = $boarding_point = $row['boarding_point'];
                            $_SESSION['destination'] = $destination = $row['destination'];
                            $_SESSION['departure_time'] = $departure_time = $row['departure_time'];
                            $_SESSION['coach_type'] = $coach_type = $row['coach_type'];
                            $_SESSION['fare_per_seat'] = $fare_per_seat = $row['fare_per_seat'];
                            $_SESSION['date_of_journey'] = $date_of_journey;

                            if(isset($_GET['return']) === 'y1'){
                                $date = date('d-M-Y', strtotime($date_of_return)); 
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }else {
                                $date = date('d-M-Y', strtotime($date_of_journey));
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }
                            
                            $result_for_available_seats = mysqli_query($conn, $sql_query_for_available_seats);

                            $i = 0;
                            while($booked_seats = $result_for_available_seats ->fetch_assoc()){
                                $i++;
                            }
                            if($coach_type === "NON-AC"){
                                $i = 41-$i;
                            } else if ($coach_type === "AC (Bi)") {
                                # code...
                                $i = 28-$i;
                            } else if ($coach_type === "AC (Multi)") {
                                # code...
                                $i = 34-$i;
                            } else if ($coach_type === "DD") {
                                # code...
                                $i = 43-$i;
                            } else if ($coach_type === "Sleeper") {
                                # code...
                                $i = 30-$i;
                            }

                            $_SESSION['available_seats'] = $i;

                            include 'coach-result.php';
                            }
                        # code...
                    }
                    if (isset($_POST['non_ac'])) {
                        //echo "<script>alert('User Registration Failed.')</script>";
                        $sql = "SELECT * FROM tripData WHERE starting_from = '$from_city' AND destination = '$to_city' AND coach_type = 'NON-AC'";
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) {

                            $_SESSION['coach_no'] = $coach_no = $row['coach_no'];
                            $_SESSION['starting_from'] = $starting_from = $row['starting_from'];
                            $_SESSION['boarding_point'] = $boarding_point = $row['boarding_point'];
                            $_SESSION['destination'] = $destination = $row['destination'];
                            $_SESSION['departure_time'] = $departure_time = $row['departure_time'];
                            $_SESSION['coach_type'] = $coach_type = $row['coach_type'];
                            $_SESSION['fare_per_seat'] = $fare_per_seat = $row['fare_per_seat'];
                            $_SESSION['date_of_journey'] = $date_of_journey;
                            if(isset($_GET['return']) === 'y1'){
                                $date = date('d-M-Y', strtotime($date_of_return)); 
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }else {
                                $date = date('d-M-Y', strtotime($date_of_journey));
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }
                            $result_for_available_seats = mysqli_query($conn, $sql_query_for_available_seats);

                            $i = 0;
                            while($booked_seats = $result_for_available_seats ->fetch_assoc()){
                                $i++;
                            }
                            if($coach_type === "NON-AC"){
                                $i = 41-$i;
                            } else if ($coach_type === "AC (Bi)") {
                                # code...
                                $i = 28-$i;
                            } else if ($coach_type === "AC (Multi)") {
                                # code...
                                $i = 34-$i;
                            } else if ($coach_type === "DD") {
                                # code...
                                $i = 43-$i;
                            } else if ($coach_type === "Sleeper") {
                                # code...
                                $i = 30-$i;
                            }

                            $_SESSION['available_seats'] = $i;

                            include 'coach-result.php';

                        }

                    }  
                    if (isset($_POST['ac_bi'])) {
                        //echo "<script>alert('User Registration Failed.')</script>";
                        $sql = "SELECT * FROM tripData WHERE starting_from = '$from_city' AND destination = '$to_city' AND coach_type = 'AC (Bi)'";
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) {

                            $_SESSION['coach_no'] = $coach_no = $row['coach_no'];
                            $_SESSION['starting_from'] = $starting_from = $row['starting_from'];
                            $_SESSION['boarding_point'] = $boarding_point = $row['boarding_point'];
                            $_SESSION['destination'] = $destination = $row['destination'];
                            $_SESSION['departure_time'] = $departure_time = $row['departure_time'];
                            $_SESSION['coach_type'] = $coach_type = $row['coach_type'];
                            $_SESSION['fare_per_seat'] = $fare_per_seat = $row['fare_per_seat'];
                            $_SESSION['date_of_journey'] = $date_of_journey;
                            if(isset($_GET['return']) === 'y1'){
                                $date = date('d-M-Y', strtotime($date_of_return)); 
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }else {
                                $date = date('d-M-Y', strtotime($date_of_journey));
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }
                            $result_for_available_seats = mysqli_query($conn, $sql_query_for_available_seats);

                            $i = 0;
                            while($booked_seats = $result_for_available_seats ->fetch_assoc()){
                                $i++;
                            }
                            if($coach_type === "NON-AC"){
                                $i = 41-$i;
                            } else if ($coach_type === "AC (Bi)") {
                                # code...
                                $i = 28-$i;
                            } else if ($coach_type === "AC (Multi)") {
                                # code...
                                $i = 34-$i;
                            } else if ($coach_type === "DD") {
                                # code...
                                $i = 43-$i;
                            } else if ($coach_type === "Sleeper") {
                                # code...
                                $i = 30-$i;
                            }

                            $_SESSION['available_seats'] = $i;

                            include 'coach-result.php';

                        }

                    }
                    if (isset($_POST['ac_multi'])) {
                        //echo "<script>alert('User Registration Failed.')</script>";
                        $sql = "SELECT * FROM tripData WHERE starting_from = '$from_city' AND destination = '$to_city' AND coach_type = 'AC (Multi)'";
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) {

                            $_SESSION['coach_no'] = $coach_no = $row['coach_no'];
                            $_SESSION['starting_from'] = $starting_from = $row['starting_from'];
                            $_SESSION['boarding_point'] = $boarding_point = $row['boarding_point'];
                            $_SESSION['destination'] = $destination = $row['destination'];
                            $_SESSION['departure_time'] = $departure_time = $row['departure_time'];
                            $_SESSION['coach_type'] = $coach_type = $row['coach_type'];
                            $_SESSION['fare_per_seat'] = $fare_per_seat = $row['fare_per_seat'];
                            $_SESSION['date_of_journey'] = $date_of_journey;
                            if(isset($_GET['return']) === 'y1'){
                                $date = date('d-M-Y', strtotime($date_of_return)); 
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }else {
                                $date = date('d-M-Y', strtotime($date_of_journey));
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }
                            $result_for_available_seats = mysqli_query($conn, $sql_query_for_available_seats);

                            $i = 0;
                            while($booked_seats = $result_for_available_seats ->fetch_assoc()){
                                $i++;
                            }
                            if($coach_type === "NON-AC"){
                                $i = 41-$i;
                            } else if ($coach_type === "AC (Bi)") {
                                # code...
                                $i = 28-$i;
                            } else if ($coach_type === "AC (Multi)") {
                                # code...
                                $i = 34-$i;
                            } else if ($coach_type === "DD") {
                                # code...
                                $i = 43-$i;
                            } else if ($coach_type === "Sleeper") {
                                # code...
                                $i = 30-$i;
                            }

                            $_SESSION['available_seats'] = $i;

                            include 'coach-result.php';

                        }

                    }
                    if (isset($_POST['dd'])) {
                        //echo "<script>alert('User Registration Failed.')</script>";
                        $sql = "SELECT * FROM tripData WHERE starting_from = '$from_city' AND destination = '$to_city' AND coach_type = 'DD'";
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) {

                            $_SESSION['coach_no'] = $coach_no = $row['coach_no'];
                            $_SESSION['starting_from'] = $starting_from = $row['starting_from'];
                            $_SESSION['boarding_point'] = $boarding_point = $row['boarding_point'];
                            $_SESSION['destination'] = $destination = $row['destination'];
                            $_SESSION['departure_time'] = $departure_time = $row['departure_time'];
                            $_SESSION['coach_type'] = $coach_type = $row['coach_type'];
                            $_SESSION['fare_per_seat'] = $fare_per_seat = $row['fare_per_seat'];
                            $_SESSION['date_of_journey'] = $date_of_journey;
                            if(isset($_GET['return']) === 'y1'){
                                $date = date('d-M-Y', strtotime($date_of_return)); 
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }else {
                                $date = date('d-M-Y', strtotime($date_of_journey));
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }
                            $result_for_available_seats = mysqli_query($conn, $sql_query_for_available_seats);

                            $i = 0;
                            while($booked_seats = $result_for_available_seats ->fetch_assoc()){
                                $i++;
                            }
                            if($coach_type === "NON-AC"){
                                $i = 41-$i;
                            } else if ($coach_type === "AC (Bi)") {
                                # code...
                                $i = 28-$i;
                            } else if ($coach_type === "AC (Multi)") {
                                # code...
                                $i = 34-$i;
                            } else if ($coach_type === "DD") {
                                # code...
                                $i = 43-$i;
                            } else if ($coach_type === "Sleeper") {
                                # code...
                                $i = 30-$i;
                            }

                            $_SESSION['available_seats'] = $i;

                            include 'coach-result.php';

                        }

                    }
                    if (isset($_POST['sleeper'])) {
                        //echo "<script>alert('User Registration Failed.')</script>";
                        $sql = "SELECT * FROM tripData WHERE starting_from = '$from_city' AND destination = '$to_city' AND coach_type = 'Sleeper'";
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) {

                            $_SESSION['coach_no'] = $coach_no = $row['coach_no'];
                            $_SESSION['starting_from'] = $starting_from = $row['starting_from'];
                            $_SESSION['boarding_point'] = $boarding_point = $row['boarding_point'];
                            $_SESSION['destination'] = $destination = $row['destination'];
                            $_SESSION['departure_time'] = $departure_time = $row['departure_time'];
                            $_SESSION['coach_type'] = $coach_type = $row['coach_type'];
                            $_SESSION['fare_per_seat'] = $fare_per_seat = $row['fare_per_seat'];
                            $_SESSION['date_of_journey'] = $date_of_journey;
                            if(isset($_GET['return']) === 'y1'){
                                $date = date('d-M-Y', strtotime($date_of_return)); 
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }else {
                                $date = date('d-M-Y', strtotime($date_of_journey));
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }
                            $result_for_available_seats = mysqli_query($conn, $sql_query_for_available_seats);

                            $i = 0;
                            while($booked_seats = $result_for_available_seats ->fetch_assoc()){
                                $i++;
                            }
                            if($coach_type === "NON-AC"){
                                $i = 41-$i;
                            } else if ($coach_type === "AC (Bi)") {
                                # code...
                                $i = 28-$i;
                            } else if ($coach_type === "AC (Multi)") {
                                # code...
                                $i = 34-$i;
                            } else if ($coach_type === "DD") {
                                # code...
                                $i = 43-$i;
                            } else if ($coach_type === "Sleeper") {
                                # code...
                                $i = 30-$i;
                            }

                            $_SESSION['available_seats'] = $i;

                            include 'coach-result.php';

                        }

                    }  
                    if (isset($_POST['morning'])) {
                        //echo "<script>alert('User Registration Failed.')</script>";
                        $sql = "SELECT * FROM tripData WHERE starting_from = '$from_city' AND destination = '$to_city' AND departure_time LIKE '%AM' AND departure_time BETWEEN '08' AND '12'";
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) {

                            $_SESSION['coach_no'] = $coach_no = $row['coach_no'];
                            $_SESSION['starting_from'] = $starting_from = $row['starting_from'];
                            $_SESSION['boarding_point'] = $boarding_point = $row['boarding_point'];
                            $_SESSION['destination'] = $destination = $row['destination'];
                            $_SESSION['departure_time'] = $departure_time = $row['departure_time'];
                            $_SESSION['coach_type'] = $coach_type = $row['coach_type'];
                            $_SESSION['fare_per_seat'] = $fare_per_seat = $row['fare_per_seat'];
                            $_SESSION['date_of_journey'] = $date_of_journey;
                            if(isset($_GET['return']) === 'y1'){
                                $date = date('d-M-Y', strtotime($date_of_return)); 
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }else {
                                $date = date('d-M-Y', strtotime($date_of_journey));
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }
                            $result_for_available_seats = mysqli_query($conn, $sql_query_for_available_seats);

                            $i = 0;
                            while($booked_seats = $result_for_available_seats ->fetch_assoc()){
                                $i++;
                            }
                            if($coach_type === "NON-AC"){
                                $i = 41-$i;
                            } else if ($coach_type === "AC (Bi)") {
                                # code...
                                $i = 28-$i;
                            } else if ($coach_type === "AC (Multi)") {
                                # code...
                                $i = 34-$i;
                            } else if ($coach_type === "DD") {
                                # code...
                                $i = 43-$i;
                            } else if ($coach_type === "Sleeper") {
                                # code...
                                $i = 30-$i;
                            }

                            $_SESSION['available_seats'] = $i;

                            include 'coach-result.php';

                        }

                    }
                    if (isset($_POST['afternoon'])) {
                        //echo "<script>alert('User Registration Failed.')</script>";
                        $sql = "SELECT * FROM tripData WHERE starting_from = '$from_city' AND destination = '$to_city' AND departure_time LIKE '%PM' AND departure_time BETWEEN '04' AND '06'";
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) {

                            $_SESSION['coach_no'] = $coach_no = $row['coach_no'];
                            $_SESSION['starting_from'] = $starting_from = $row['starting_from'];
                            $_SESSION['boarding_point'] = $boarding_point = $row['boarding_point'];
                            $_SESSION['destination'] = $destination = $row['destination'];
                            $_SESSION['departure_time'] = $departure_time = $row['departure_time'];
                            $_SESSION['coach_type'] = $coach_type = $row['coach_type'];
                            $_SESSION['fare_per_seat'] = $fare_per_seat = $row['fare_per_seat'];
                            $_SESSION['date_of_journey'] = $date_of_journey;
                            if(isset($_GET['return']) === 'y1'){
                                $date = date('d-M-Y', strtotime($date_of_return)); 
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }else {
                                $date = date('d-M-Y', strtotime($date_of_journey));
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }
                            $result_for_available_seats = mysqli_query($conn, $sql_query_for_available_seats);

                            $i = 0;
                            while($booked_seats = $result_for_available_seats ->fetch_assoc()){
                                $i++;
                            }
                            if($coach_type === "NON-AC"){
                                $i = 41-$i;
                            } else if ($coach_type === "AC (Bi)") {
                                # code...
                                $i = 28-$i;
                            } else if ($coach_type === "AC (Multi)") {
                                # code...
                                $i = 34-$i;
                            } else if ($coach_type === "DD") {
                                # code...
                                $i = 43-$i;
                            } else if ($coach_type === "Sleeper") {
                                # code...
                                $i = 30-$i;
                            }

                            $_SESSION['available_seats'] = $i;

                            include 'coach-result.php';

                        }

                    }
                    if (isset($_POST['night'])) {
                        //echo "<script>alert('User Registration Failed.')</script>";
                        $sql = "SELECT * FROM tripData WHERE starting_from = '$from_city' AND destination = '$to_city' AND departure_time LIKE '%PM' AND departure_time BETWEEN '08' AND '12'";
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) {

                            $_SESSION['coach_no'] = $coach_no = $row['coach_no'];
                            $_SESSION['starting_from'] = $starting_from = $row['starting_from'];
                            $_SESSION['boarding_point'] = $boarding_point = $row['boarding_point'];
                            $_SESSION['destination'] = $destination = $row['destination'];
                            $_SESSION['departure_time'] = $departure_time = $row['departure_time'];
                            $_SESSION['coach_type'] = $coach_type = $row['coach_type'];
                            $_SESSION['fare_per_seat'] = $fare_per_seat = $row['fare_per_seat'];
                            $_SESSION['date_of_journey'] = $date_of_journey;
                            if(isset($_GET['return']) === 'y1'){
                                $date = date('d-M-Y', strtotime($date_of_return)); 
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }else {
                                $date = date('d-M-Y', strtotime($date_of_journey));
                                $sql_query_for_available_seats = "SELECT * FROM reservation JOIN tripData ON tripData.coach_no = reservation.coach_no WHERE reservation.coach_no = '$coach_no' AND date_of_journey = '$date'";
                            }
                            $result_for_available_seats = mysqli_query($conn, $sql_query_for_available_seats);

                            $i = 0;
                            while($booked_seats = $result_for_available_seats ->fetch_assoc()){
                                $i++;
                            }
                            if($coach_type === "NON-AC"){
                                $i = 41-$i;
                            } else if ($coach_type === "AC (Bi)") {
                                # code...
                                $i = 28-$i;
                            } else if ($coach_type === "AC (Multi)") {
                                # code...
                                $i = 34-$i;
                            } else if ($coach_type === "DD") {
                                # code...
                                $i = 43-$i;
                            } else if ($coach_type === "Sleeper") {
                                # code...
                                $i = 30-$i;
                            }

                            $_SESSION['available_seats'] = $i;

                            include 'coach-result.php';

                        }

                    }         


                    ?>
                        

                        
                        
                    </div>       
                </div>     
            
            </div>
        </div>
    </main>

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

    <svg version="1.1" id="main_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 52.758 52.758" style="enable-background:new 0 0 52.758 52.758;" xml:space="preserve">
        <symbol id="bus_icon_svg"> 
            <g>
            <path d="M39.222,32.475h-24.27c0-1.968-1.428-3.604-3.301-3.938H42.52C40.647,28.871,39.221,30.507,39.222,32.475z M10.242,28.536
                H0.327c-0.562,2.086-0.552,3.938,1.274,3.938h5.34C6.942,30.507,8.369,28.871,10.242,28.536z M47.231,32.468
                c3.067-0.07,5.483-0.841,5.521-3.935h-8.82C45.802,28.871,47.227,30.505,47.231,32.468z M51.416,27.214h1.334v0.521H0.567
                c0.799-2.452,1.657-4.938,1.657-4.938c1.152-2.602,2.204-4.346,3.7-5.258h2.268v-0.503H7.043c0.545-0.162,1.143-0.251,1.819-0.251
                h40.886c2.867,0,3.021,3.499,3.01,6.592h-1.34h-0.002V27.214z M8.894,25.464l6.508-6.764c0,0-5.124,0-8.265,0
                c-1.925,0.946-4.506,6.764-4.506,6.764H8.894z M49.751,18.664H17.206c0,0-2.983,3.022-5.173,5.217h35.755
                c1.442,0,3.13-1.171,3.13-2.609C50.918,19.832,51.192,18.664,49.751,18.664z M4.771,17.537h1.153
                c0.347-0.211,0.717-0.378,1.119-0.501l-2.235,0.003c-0.019-0.002-1.879-0.258-2.65,1.742l0.467,0.18
                C3.25,17.343,4.674,17.527,4.771,17.537z M10.948,28.468c-0.242,0-0.478,0.023-0.706,0.064h1.409
                C11.422,28.495,11.188,28.468,10.948,28.468z M14.452,32.475H14.45c-0.004,1.929-1.576,3.497-3.503,3.497
                c-1.932,0-3.505-1.574-3.505-3.504c0-1.934,1.573-3.507,3.505-3.507c1.692,0,3.108,1.207,3.433,2.807
                C14.428,31.998,14.452,32.233,14.452,32.475z M12.95,32.468c-0.002-1.104-0.9-2.004-2.002-2.004c-1.105,0-2.003,0.897-2.003,2.004
                c0,1.104,0.898,2,2.003,2C12.051,34.468,12.95,33.571,12.95,32.468z M43.225,28.468c-0.242,0-0.475,0.023-0.703,0.064h1.408
                C43.701,28.495,43.466,28.468,43.225,28.468z M46.731,32.468c0,0,0,0.002,0,0.004c0,0.001,0,0.002,0,0.004l0,0
                c-0.004,1.929-1.576,3.497-3.507,3.497c-1.928,0-3.499-1.568-3.503-3.497H39.72c0-0.001,0-0.002,0-0.004s0-0.002,0-0.004
                c0-1.934,1.573-3.507,3.504-3.507C45.158,28.963,46.731,30.537,46.731,32.468z M45.231,32.468c0-1.104-0.897-2.004-2.006-2.004
                c-1.104,0-2.001,0.897-2.001,2.004c0,1.104,0.898,2,2.001,2C44.33,34.468,45.231,33.571,45.231,32.468z"/>
            </g>
        </symbol>
    </svg>

    <svg fill="none" id="main_svg" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
        <symbol id="filter_icon_svg">
            <path clip-rule="evenodd" d="M4.40675 7.25H3C2.44772 7.25 2 6.80228 2 6.25C2 5.69772 2.44772 5.25 3 5.25H4.40675C4.82853 3.94437 6.05398 3 7.5 3C8.94602 3 10.1715 3.94437 10.5933 5.25H25C25.5523 5.25 26 5.69772 26 6.25C26 6.80228 25.5523 7.25 25 7.25H10.5933C10.1715 8.55563 8.94602 9.5 7.5 9.5C6.05398 9.5 4.82853 8.55563 4.40675 7.25ZM5.75 6.25C5.75 5.2835 6.5335 4.5 7.5 4.5C8.4665 4.5 9.25 5.2835 9.25 6.25C9.25 7.2165 8.4665 8 7.5 8C6.5335 8 5.75 7.2165 5.75 6.25Z" fill="black" fill-rule="evenodd"/>
            <path clip-rule="evenodd" d="M3 15.25H17.4458C17.8676 16.5556 19.093 17.5 20.5391 17.5C21.9851 17.5 23.2105 16.5556 23.6323 15.25H25C25.5523 15.25 26 14.8023 26 14.25C26 13.6977 25.5523 13.25 25 13.25H23.6323C23.2105 11.9444 21.9851 11 20.5391 11C19.093 11 17.8676 11.9444 17.4458 13.25H3C2.44772 13.25 2 13.6977 2 14.25C2 14.8023 2.44772 15.25 3 15.25ZM20.5391 12.5C19.5726 12.5 18.7891 13.2835 18.7891 14.25C18.7891 15.2165 19.5726 16 20.5391 16C21.5056 16 22.2891 15.2165 22.2891 14.25C22.2891 13.2835 21.5056 12.5 20.5391 12.5Z" fill="black" fill-rule="evenodd"/>
            <path clip-rule="evenodd" d="M10.4067 23.25H3C2.44772 23.25 2 22.8023 2 22.25C2 21.6977 2.44772 21.25 3 21.25H10.4067C10.8285 19.9444 12.054 19 13.5 19C14.946 19 16.1715 19.9444 16.5933 21.25H25C25.5523 21.25 26 21.6977 26 22.25C26 22.8023 25.5523 23.25 25 23.25H16.5933C16.1715 24.5556 14.946 25.5 13.5 25.5C12.054 25.5 10.8285 24.5556 10.4067 23.25ZM11.75 22.25C11.75 21.2835 12.5335 20.5 13.5 20.5C14.4665 20.5 15.25 21.2835 15.25 22.25C15.25 23.2165 14.4665 24 13.5 24C12.5335 24 11.75 23.2165 11.75 22.25Z" fill="black" fill-rule="evenodd"/>
        </symbol>
    </svg>

    <svg id="main_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;" xml:space="preserve">
        <symbol id="seat_icon_svg">
            <path d="M87.7,12.5c-0.8-3.7-4.1-6.6-8.2-6.6H36.9c-4,0-7.4,2.8-8.2,6.5h-17C8,12.5,5,15.4,5,19.1v61.7c0,3.7,3,6.6,6.7,6.6h16.9  c0.7,3.9,4.1,6.8,8.2,6.8h42.7c3.8,0,7-2.5,8-5.8c4.2-0.4,7.5-3.9,7.5-8.2V20.6C95,16.5,91.8,13,87.7,12.5z M36.9,8.8h42.7  c2.5,0,4.5,1.6,5.2,3.8c-3.3,0.8-5.8,3.5-6.3,6.8H36.9c-3,0-5.4-2.4-5.4-5.3S33.9,8.8,36.9,8.8z M28.7,84.5h-17  c-2.1,0-3.8-1.7-3.8-3.7V19.1c0-2.1,1.7-3.7,3.8-3.7h16.9c0.6,4,4.1,7,8.2,7h41.4v55.5H36.9C32.8,77.8,29.4,80.7,28.7,84.5z   M79.5,91.4H36.9c-3,0-5.4-2.4-5.4-5.3s2.4-5.3,5.4-5.3h41.5c0.2,3.6,2.8,6.5,6.2,7.4C83.7,90,81.8,91.4,79.5,91.4z M92.1,80.2  c0,2.9-2.4,5.3-5.4,5.3s-5.4-2.4-5.4-5.3V20.6c0-2.9,2.4-5.3,5.4-5.3s5.4,2.4,5.4,5.3V80.2z"/>
        </symbol>
    </svg>

    <svg id="main_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;" xml:space="preserve">
        
        <symbol id="sleeper_seat_icon_svg">
            <path d="M89,18.7c-0.6-3.1-3.4-5.4-6.8-5.4H46.7c-3.3,0-6.1,2.3-6.8,5.4H10.6c-3.1,0-5.6,2.5-5.6,5.5v51.4c0,3,2.5,5.5,5.6,5.5h29.3  c0.6,3.2,3.4,5.7,6.8,5.7h35.4c3.1,0,5.8-2.1,6.6-4.9c3.5-0.4,6.2-3.3,6.2-6.8V25.4C95.1,22,92.5,19.1,89,18.7z M46.7,15.6h35.4  c2,0,3.8,1.3,4.3,3.2c-2.7,0.6-4.8,2.9-5.3,5.6H46.7c-2.5,0-4.5-2-4.5-4.4S44.2,15.6,46.7,15.6z M39.9,78.5H10.6  c-1.7,0-3.2-1.4-3.2-3.1V24.1c0-1.7,1.4-3.1,3.2-3.1h29.3c0.5,3.3,3.4,5.8,6.8,5.8h34.4v46.1H46.7C43.3,72.9,40.5,75.3,39.9,78.5z   M82.3,84.2H46.7c-2.5,0-4.5-2-4.5-4.4c0-2.4,2-4.4,4.5-4.4h34.4c0.2,3,2.3,5.4,5.1,6.2C85.7,83.1,84.1,84.2,82.3,84.2z M92.7,74.9  c0,2.4-2,4.4-4.5,4.4c-2.5,0-4.5-2-4.5-4.4V25.4c0-2.4,2-4.4,4.5-4.4c2.5,0,4.5,2,4.5,4.4V74.9z"/>
        </symbol>
    </svg>


    <!-- js file integration -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/header.js"></script>
    <script src="js/user-nav.js"></script>
    <script src="js/autocomplete-fields.js"></script>
    <script src="js/journey-date-picker.js"></script>
    <script src="js/search-result.js"></script>
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
            document.getElementById("header").style.top = "-11vh";
        }
        prevScrollpos = currentScrollPos;
        }
    </script> 
    <script>
        var seatsString = '';

        const continueBtn = document.querySelectorAll('.continue_btn');

        for (const [i, element] of continueBtn.entries()){

            element.onclick = function(){

                alert(seatTableBody[i].rows.length);

                if(seatTableBody[i].rows.length === 0){

                    alert("FUCK YOU!!");
                } else{

                    

                    for (var j = 0; j < seatTableBody[i].rows.length; j++) {
                    
                        if(j === 0){

                            seatsString = seatTableBody[i].rows[j].cells[0].innerHTML;
                        }else{

                            seatsString += ', ' + seatTableBody[i].rows[j].cells[0].innerHTML;
                        }

                        
                
                    }

                    alert(seatsString);

                    // <?php
                    //     echo 'header("Location: profile.php?seats="+seatsString)';

                    // ?>

                   
                    // window.location.href = "profile.php?seats="+ seatsString;
                }
                
            }
        }  

    </script>

    
            
</body>
</html>

<?php

echo $_COOKIE["seats"];   
?>