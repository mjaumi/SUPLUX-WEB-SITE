<?php

error_reporting(0);

// function bus_coach_details($start,
// $c_no,
// $b_point,
// $dest,
// $depart_time,
// $c_type,
// $fare,
// $available){

//     
// }
if($_GET['return'] === 'y' || $_GET['return'] === 'n'){

    $starting_from = $_SESSION['starting_from'];
    $coach_no = $_SESSION['coach_no'];
    $boarding_point = $_SESSION['boarding_point'];
    $destination = $_SESSION['destination'];
    $departure_time = $_SESSION['departure_time'];
    $coach_type = $_SESSION['coach_type'];
    $fare_per_seat = $_SESSION['fare_per_seat'];
    $date_of_journey = $_SESSION['date_of_journey'];
    $available_seats = $_SESSION['available_seats'];
    $date_of_return = $_SESSION['date_of_return'];
    
}

// if($date_of_return !== ""){
//     if(isset($_POST['continue_btn'])){
//         echo "<script>
//         window.location.href = 'search-result.php?return=y'</script>";
//     }
        
// //echo "<script>alert('$c')</script>";
// // unset($_POST);
        
// }



if($_GET['return'] === 'y1'){
    $_SESSION['starting_from_r'] = $starting_from = $_SESSION['destination'];
    $_SESSION['coach_no_r'] = $coach_no = $_SESSION['coach_no'].'-R';
    $_SESSION['boarding_point_r'] = $boarding_point ="";// $_SESSION['boarding_point'];
    $_SESSION['destination_r'] = $destination = $_SESSION['starting_from'];
    $_SESSION['departure_time_r'] = $departure_time = $_SESSION['departure_time'];
    $_SESSION['coach_type_r'] = $coach_type = $_SESSION['coach_type'];
    $_SESSION['fare_per_seat_r'] = $fare_per_seat = $_SESSION['fare_per_seat'];
    $_SESSION['date_of_return'] = $date_of_journey = $_SESSION['date_of_return'];
    $_SESSION['available_seats_r'] = $available_seats = $_SESSION['available_seats'];
    
    
    
}

if($_GET['return'] === 'n'){
    if(isset($_POST['continue_btn']) && $_COOKIE["seats"] !== "" ){

        // $p = $_COOKIE["seats"];
        //echo "<script>alert('Choose  one seat.')</script>";


        echo "<script>
        window.location.href = 'booking-confirmation-page.php?return=n'</script>";
        // header("Location: booking-confirmation-page.php?");
    }
}
if($_GET['return'] === 'y1'){
    if(isset($_POST['continue_btn']) && $_COOKIE["seats"] !== ""){
        

         echo "<script>
         window.location.href = 'booking-confirmation-page.php?return=y'</script>";
        //header("Location: booking-confirmation-page.php?return=y");
    }
}
if($_GET['return'] === 'y'){
    if(isset($_POST['continue_btn']) && $_COOKIE["seats"] !== ""){
        //echo "<script>alert('Choose at least one seat.')</script>";
         echo "<script>
         window.location.href = 'search-result.php?return=y1'</script>";
        //header("Location: search-result.php?return=y1");

        //}
        
    }
    
}else if($_GET['return'] === 'y1'){
    if(isset($_POST["continue_btn"]) && $_COOKIE["seats"] !== null){
        //echo "<script>alert('Choose at least one seat.')</script>";

        echo "<script>
        window.location.href = 'booking-confirmation-page.php?return=y'</script>";
        //header("Location: booking-confirmation-page.php");
    }
}else if($_GET['return'] === 'y'){
    if(isset($_POST["continue_btn"]) && $_COOKIE["seats"] !== null){
        //echo "<script>alert('Choose at least one seat.')</script>";
        echo "<script>
        window.location.href = 'search-result.php?return=y1'</script>";

        //}
        
    }

}


// } else{
//     if(isset($_POST['continue_btn'])){

//     }
// }





?>

<div class="result_container">
    <div class="result_wrapper">
        <div class="origin_destination_wrapper">
            <div class="origin_container wrapper_33">
                <h1 class="destination_short"><?php echo  strtoupper(substr($starting_from,0,3))  ?></h1>
                <p class="destination_full starting"><?php echo "$starting_from"?></p>
            </div>

            <div class="trip_icon wrapper_33">
                <svg version="1.1" class="steering" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 612.074 612.074" style="enable-background:new 0 0 612.074 612.074;" xml:space="preserve">

                    <path d="M306.037,0C136.997,0,0,136.997,0,306.037s136.997,306.037,306.037,306.037s306.037-136.997,306.037-306.037
                        S475.077,0,306.037,0z M306.037,582.405c-153.019,0-276.368-124.165-276.368-276.368S153.019,29.669,306.037,29.669
                        s276.368,124.165,276.368,276.368S458.24,582.405,306.037,582.405z M426.197,276.368c5.637,5.637,5.637,15.205,0,20.843
                        c-3.189,3.189-6.379,4.005-10.384,4.005c-4.005,0-7.195-1.632-10.384-4.005l-85.002-84.928v234.683
                        c0,8.011-6.379,14.39-14.39,14.39c-8.011,0-14.39-6.379-14.39-14.39V212.283l-84.186,84.112c-5.637,5.637-15.205,5.637-20.843,0
                        s-5.637-15.205,0-20.843l108.96-108.886c0.816-0.816,1.632-1.632,2.374-1.632l0.816-0.816c0.816,0,0.816-0.816,1.632-0.816
                        c0.816,0,0.816,0,1.632-0.816c0.816,0,0.816,0,1.632,0c1.632,0,4.005,0,5.637,0c0.816,0,0.816,0,1.632,0s0.816,0,1.632,0.816
                        c0.816,0,0.816,0.816,1.632,0.816c0,0,0.816,0,0.816,0.816c0.816,0.816,1.632,0.816,2.374,1.632L426.197,276.368z"/>
                </svg>
            </div>

            <div class="destination_container wrapper_33">
                <h1 class="destination_short"><?php echo  strtoupper(substr($destination,0,3))  ?></h1>
                <p class="destination_full ending"><?php echo "$destination" ?></p>
            </div>
        </div>
        
        <div class="coach_no_container">
            <p class="result_title">Coach No</p>
            <h1 class="result_data coach_no"><?php echo "$coach_no" ?></h1>
        </div>

        <div class="departure_type_container">
            <div class="departure_result_wrapper wrapper_50">
                <p class="result_title">Departure</p>
                <h1 class="result_data"><?php echo "$departure_time" ?></h1>
            </div>

            <div class="type_result_wrapper wrapper_50">
                <p class="result_title">Type</p>
                <h1 class="result_data coach_type"><?php echo "$coach_type" ?></h1>
            </div>
        </div>

        <div class="seat_fare_wrapper">
            <div class="available_seat_container">
                <div class="available_seat_result_wrapper">
                    <p class="result_title">Available Seats</p>
                    <h1 class="result_data"><?php echo "$available_seats" ?></h1>
                </div>
            </div>

            <div class="fare_container">
                <div class="fare_result_wrapper">
                    <p class="result_title">Fare</p>
                    <h1 class="result_data fare_per_seat">BDT <?php echo "$fare_per_seat" ?></h1>
                </div>
            </div>
        </div>

        <div class="view_seats_btn_container">
            <button id="view_seats_btn" class="button seat_map_btn" name="view_seats">VIEW SEATS</button>
        </div>
    </div>

    <div class="coach_info_details d-none">

        <div class="coach_details_container">

            <div class="seat_details_container">

                <h1 class="trip_details_title">Trip Details</h1>

                <table class="table table-borderless coach_details_table">
                    <tbody>
                        <tr>
                            <td class="details_title">Coach No:</td>
                            <td class="details_data coach_no_trip_details">M4055</td>
                            <td class="blank_table_cell"></td>
                            <td class="details_title">Fare:</td>
                            <td class="details_data fare_per_seat_table">BDT 1500</td>
                        </tr>
                        <tr>
                            <td class="details_title">Starting Point:</td>
                            <td class="details_data starting_trip_details">Dhaka</td>
                            <td class="blank_table_cell"></td>
                            <td class="details_title">Ending Point:</td>
                            <td class="details_data ending_trip_details">Cox's Bazar</td>
                        </tr>
                        <tr>
                            <td class="details_title">Coach Type:</td>
                            <td class="details_data coach_type_trip_details">Sleeper</td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td class="blank_row" colspan="5"></td>
                        </tr>
                        <tr>
                            <td class="details_title">Reporting Time:</td>
                            <td class="details_data reporting_time" colspan="4"><?php echo "$departure_time, $date_of_journey";?></td>
                        </tr>
                        <tr>
                            <td class="details_title">Departure Time:</td>
                            <td class="details_data departure_time" colspan="4"><?php echo "$departure_time, $date_of_journey";?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="boarding_point_container">
                <div class="form-input-max">
                    <div class="boarding_box">
                        <p class="boarding-text-required">Boarding Point</p>
                        <div class="form-input-wrapper flexbox-left boarding_point_selector">
                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                            <select class="form-input-boarding select_field" id="boarding_point_selector">
                                <?php
                                if($starting_from === 'Dhaka'){
                                    include 'dhaka-boarding-point.php';
                                }else{
                                    # code...
                                    //echo $starting_from;
                                    $_SESSION['s'] = $starting_from;
                                    include 'other-boarding-point.php';
                                }
                                
                                
                                ?>
                            
                            </select>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="seat_details_container">

                <table class="table table-borderless table-striped seat_details_table">
                    <thead>
                        <tr>
                            <th scope="col">Selected Seat (Maximum 4)</th>
                            <th scope="col">Type</th>
                            <th scope="col">Fare</th>
                        </tr>
                        </thead>
                    <tbody class="seat_details_table_body">
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="details_title total" colspan="2">Total</td>
                            <td class="details_data total_fare_amount">BDT 0</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="continue_btn_container">
                <form action="" method="POST">
                <button class="button continue_btn" type="submit" name="continue_btn">CONTINUE</button>    
                </form>
                
            </div>

        </div>

        <div class="seat_container">

            <div class="seat_indication">
                <p><i class="fa fa-square available_indicator" aria-hidden="true"></i> Available</p>
                <p><i class="fa fa-square selected_indicator" aria-hidden="true"></i> Selected</p> 
                <p><i class="fa fa-square booked_indicator" aria-hidden="true"></i> Booked</p>
                <p><i class="fa fa-square sold_indicator" aria-hidden="true"></i> Sold</p>  
            </div>

            <div class="deck_selector_container d-none">
                <div class="form-input-max">
                    <div class="deck_selector_box">
                        <p class="boarding-text">Choose Deck</p>
                        <div class="form-input-wrapper flexbox-left boarding_point_selector">
                            <i class="fa fa-bus" aria-hidden="true"></i>
                            <select class="form-input-boarding select_field deck_selector">
                                <option selected value="lower">Lower Deck</option>
                                <option value="upper">Upper Deck</option>
                            </select>
                        </div> 
                    </div>
                </div>
            </div>


            <div class="seat_wrapper_non_ac d-none">
    
                <div class="driver_container">
                    <div class="door_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="">
                            <path d="M477.681,277.819c-21.996-52.05-53.489-98.781-93.604-138.896S297.23,67.315,245.181,45.319    C195.869,24.481,143.736,13.049,90,11.256V11H0v450h45h45V41.27c49.699,1.779,97.905,12.414,143.502,31.683    c48.471,20.483,91.994,49.816,129.361,87.183c37.367,37.367,66.7,80.891,87.184,129.361C471.249,339.669,482,392.998,482,448h30    C512,388.964,500.453,331.707,477.681,277.819z M60,431H30V41h30V431z" fill="#000000" data-original="#000000"/>
                            <circle cx="45" cy="481" r="20" fill="#000000" data-original="#000000"/>
                        </svg>
                    </div>

                    <div class="steering_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="206 206 100 100" xml:space="preserve" fill="#000000">
                            <path d="M297.02,235.208c-3.248-6.28-7.982-11.821-13.69-16.023c-7.96-5.862-17.41-8.961-27.33-8.961s-19.371,3.099-27.33,8.961   c-5.71,4.202-10.442,9.743-13.689,16.023c-3.356,6.491-5.129,13.812-5.129,21.169c0,8.856,2.514,17.462,7.274,24.882   c4.632,7.225,11.161,13.008,18.877,16.723c6.264,3.016,12.99,4.547,19.997,4.547c7.005,0,13.734-1.531,19.995-4.547   c7.719-3.715,14.246-9.498,18.88-16.723c4.759-7.42,7.273-16.025,7.273-24.882C302.149,249.019,300.375,241.698,297.02,235.208z    M282.703,264.925c-0.811,4.2-1.384,8.192-0.383,11.094c-1.807,3.592-3.956,6.781-6.4,9.495c-1.841-0.984-4.027-1.698-6.271-2.217   c7.401-6.503,11.84-17.891,11.698-30.376c-0.023-1.928-0.157-3.847-0.396-5.725c0.675,0.077,1.33,0.14,1.97,0.186   c0.89,0.063,1.746,0.096,2.561,0.096c0.723,0,1.418-0.025,2.084-0.075h0.017c0.246-0.019,0.489-0.042,0.727-0.069   c0.011,0.376,0.019,0.752,0.023,1.128c0.029,2.508-0.086,5.019-0.336,7.468C285.727,257.428,283.626,260.13,282.703,264.925z    M270.358,291.296c-4.517,1.861-9.375,2.828-14.356,2.828h-0.002c-4.983,0-9.841-0.967-14.36-2.828   c-0.008-0.004-0.015-0.006-0.023-0.01c-2.051-0.846-4.031-1.876-5.921-3.085c0.215-0.159,0.44-0.313,0.677-0.46   c0.033-0.019,0.067-0.04,0.098-0.06c2.245-1.369,5.322-2.225,8.367-2.76c0.056-0.006,0.113-0.015,0.167-0.029   c5.483-0.943,10.806-0.854,10.898-0.852h0.021c0.027,0,0.052-0.005,0.077-0.007c0.032,0.002,0.065,0.009,0.099,0.007   c0.091-0.003,5.415-0.09,10.899,0.852c0.055,0.015,0.108,0.023,0.163,0.029c3.045,0.535,6.121,1.389,8.366,2.757   c0.033,0.022,0.067,0.044,0.101,0.063c0.236,0.148,0.461,0.301,0.676,0.46c-1.888,1.209-3.868,2.239-5.919,3.085   C270.377,291.29,270.365,291.295,270.358,291.296z M229.678,276.016c1-2.898,0.428-6.892-0.383-11.092   c-0.925-4.795-3.023-7.496-5.293-8.995c-0.251-2.454-0.366-4.962-0.337-7.466c0.004-0.376,0.011-0.752,0.021-1.13   c0.211,0.023,0.424,0.042,0.639,0.059c0.063,0.006,0.125,0.01,0.188,0.015c0.273,0.021,0.551,0.036,0.835,0.046   c0.08,0.004,0.159,0.006,0.238,0.008c0.282,0.008,0.568,0.015,0.859,0.015c0.022,0,0.043,0.002,0.067,0.002   c0.14,0,0.28-0.002,0.422-0.004c0.042-0.002,0.085-0.002,0.127-0.002c0.155-0.002,0.313-0.006,0.47-0.012   c0.065-0.002,0.13-0.002,0.197-0.004c0.144-0.006,0.288-0.012,0.435-0.019c0.083-0.004,0.167-0.009,0.252-0.015   c0.134-0.006,0.268-0.014,0.403-0.023c0.103-0.006,0.207-0.014,0.312-0.021c0.119-0.009,0.24-0.019,0.361-0.027   c0.13-0.011,0.259-0.023,0.389-0.036c0.103-0.008,0.203-0.017,0.303-0.027c0.167-0.017,0.336-0.034,0.505-0.052   c0.069-0.006,0.138-0.015,0.207-0.023c0.05-0.004,0.101-0.01,0.152-0.017c-0.238,1.878-0.372,3.797-0.395,5.727   c-0.142,12.483,4.296,23.871,11.697,30.374c-2.243,0.519-4.429,1.233-6.27,2.217C233.634,282.8,231.483,279.611,229.678,276.016z    M255.999,218.63c7.775,0,15.239,2.343,21.589,6.777c0.211,0.148,0.422,0.299,0.629,0.451c0.068,0.05,0.136,0.101,0.204,0.151   c0.14,0.104,0.278,0.207,0.416,0.311c0.081,0.063,0.161,0.125,0.241,0.188c0.124,0.094,0.248,0.19,0.368,0.287   c0.086,0.068,0.169,0.137,0.255,0.207c0.114,0.094,0.231,0.186,0.345,0.28c0.088,0.073,0.173,0.146,0.259,0.219   c0.11,0.092,0.221,0.186,0.33,0.28c0.088,0.075,0.176,0.153,0.261,0.23c0.107,0.092,0.213,0.186,0.318,0.28   c0.087,0.08,0.173,0.159,0.26,0.238c0.103,0.094,0.206,0.188,0.306,0.282c0.088,0.082,0.174,0.165,0.259,0.246   c0.101,0.096,0.201,0.19,0.299,0.287c0.085,0.083,0.169,0.169,0.254,0.252l0.291,0.291c0.084,0.085,0.167,0.173,0.25,0.259   c0.095,0.098,0.191,0.196,0.285,0.296c0.081,0.085,0.162,0.176,0.246,0.263c0.092,0.1,0.184,0.201,0.276,0.301   c0.081,0.087,0.16,0.179,0.239,0.269c0.093,0.1,0.182,0.203,0.27,0.305c0.079,0.09,0.159,0.182,0.238,0.274   c0.087,0.102,0.176,0.207,0.261,0.309c0.078,0.094,0.154,0.188,0.232,0.282c0.085,0.103,0.171,0.207,0.254,0.313   c0.075,0.095,0.152,0.19,0.229,0.285c0.083,0.106,0.165,0.213,0.248,0.319c0.073,0.096,0.146,0.192,0.219,0.291   c0.082,0.106,0.164,0.215,0.243,0.323c0.07,0.096,0.144,0.194,0.215,0.292c0.08,0.111,0.157,0.219,0.234,0.33   c0.07,0.098,0.139,0.196,0.208,0.296c0.078,0.111,0.155,0.224,0.23,0.334c0.065,0.101,0.136,0.201,0.202,0.301   c0.075,0.113,0.148,0.226,0.222,0.341c0.066,0.1,0.132,0.2,0.196,0.303c0.073,0.115,0.146,0.229,0.217,0.347   c0.063,0.101,0.126,0.203,0.188,0.305c0.07,0.117,0.142,0.236,0.213,0.355c0.059,0.1,0.119,0.203,0.178,0.303   c0.071,0.121,0.14,0.242,0.209,0.365c0.057,0.1,0.114,0.201,0.171,0.303c0.068,0.125,0.136,0.25,0.202,0.375   c0.055,0.101,0.109,0.199,0.161,0.299c0.069,0.129,0.136,0.261,0.204,0.395c0.049,0.094,0.099,0.19,0.146,0.286   c0.071,0.142,0.141,0.282,0.209,0.424c0.042,0.087,0.088,0.175,0.129,0.265c0.08,0.167,0.154,0.334,0.232,0.501   c0.031,0.065,0.061,0.129,0.09,0.194c0.106,0.234,0.209,0.468,0.31,0.704c0.022,0.05,0.043,0.102,0.063,0.152   c0.077,0.186,0.155,0.369,0.23,0.558c0.036,0.083,0.067,0.171,0.101,0.255c0.06,0.154,0.121,0.305,0.18,0.459   c0.037,0.099,0.072,0.197,0.108,0.297c0.053,0.14,0.106,0.282,0.156,0.426c0.038,0.103,0.071,0.207,0.109,0.312   c0.04,0.117,0.081,0.236,0.12,0.355c-0.105,0.042-0.214,0.083-0.325,0.125c-0.027,0.008-0.057,0.019-0.083,0.027   c-0.099,0.036-0.199,0.069-0.302,0.103c-0.037,0.01-0.074,0.023-0.112,0.033c-0.112,0.036-0.225,0.069-0.342,0.1   c-0.021,0.006-0.038,0.011-0.059,0.017c-0.136,0.036-0.274,0.071-0.414,0.104c-0.037,0.009-0.077,0.017-0.115,0.025   c-0.108,0.025-0.22,0.048-0.332,0.071c-0.042,0.008-0.085,0.017-0.127,0.025c-0.147,0.029-0.299,0.056-0.453,0.082   c-2.403,0.396-5.435,0.357-8.92-0.117c-0.115-0.017-0.229-0.031-0.347-0.048c-1.789-0.257-3.714-0.627-5.741-1.105   c-0.675-0.159-1.361-0.33-2.059-0.512c-6.448-1.689-15.564-2.153-15.95-2.172c-0.013-0.002-0.036-0.002-0.048-0.002h-0.002   c0,0-0.03,0-0.078,0.002c-0.048-0.002-0.075-0.002-0.075-0.002c-0.002,0-0.002,0-0.002,0h-0.048c0,0,0,0-0.002,0   c-0.384,0.019-9.5,0.485-15.95,2.172c-2.788,0.733-5.413,1.276-7.798,1.619c-0.635,0.089-1.251,0.165-1.853,0.228   c-2.423,0.25-4.595,0.275-6.451,0.069c-0.332-0.038-0.654-0.082-0.965-0.131c-0.161-0.028-0.317-0.055-0.472-0.086   c-0.027-0.004-0.054-0.011-0.083-0.017c-0.129-0.025-0.257-0.052-0.382-0.082c-0.027-0.006-0.052-0.01-0.077-0.017   c-0.148-0.035-0.292-0.07-0.435-0.108c-0.006-0.002-0.012-0.004-0.019-0.006c-0.131-0.035-0.259-0.073-0.384-0.11   c-0.029-0.01-0.061-0.019-0.092-0.029c-0.111-0.036-0.222-0.073-0.33-0.111c-0.019-0.006-0.038-0.013-0.058-0.019   c-0.113-0.042-0.224-0.086-0.333-0.127c0.031-0.094,0.064-0.186,0.096-0.278c0.046-0.136,0.09-0.27,0.138-0.401   c0.038-0.108,0.08-0.215,0.119-0.323c0.048-0.131,0.096-0.266,0.146-0.397c0.04-0.109,0.084-0.215,0.125-0.323   c0.052-0.13,0.1-0.261,0.153-0.391c0.043-0.104,0.087-0.208,0.131-0.315c0.112-0.274,0.229-0.545,0.349-0.817   c0.04-0.088,0.077-0.177,0.117-0.265c0.052-0.115,0.106-0.231,0.161-0.347c0.054-0.117,0.106-0.234,0.163-0.349   c0.053-0.113,0.109-0.226,0.165-0.338c0.056-0.117,0.113-0.236,0.171-0.351c0.057-0.113,0.113-0.224,0.171-0.334   c0.059-0.117,0.119-0.234,0.18-0.349c0.059-0.111,0.117-0.22,0.175-0.328c0.063-0.115,0.125-0.232,0.19-0.349   c0.061-0.109,0.122-0.215,0.182-0.322c0.064-0.115,0.129-0.232,0.196-0.345c0.063-0.106,0.125-0.213,0.188-0.319   c0.069-0.113,0.136-0.228,0.205-0.34c0.064-0.107,0.129-0.211,0.194-0.315c0.069-0.113,0.14-0.226,0.211-0.336   c0.064-0.105,0.131-0.207,0.2-0.312c0.071-0.111,0.144-0.221,0.217-0.332c0.069-0.103,0.138-0.205,0.207-0.307   c0.073-0.109,0.148-0.219,0.224-0.328c0.071-0.103,0.142-0.203,0.213-0.303c0.078-0.108,0.155-0.217,0.232-0.323   c0.073-0.101,0.144-0.199,0.217-0.297c0.079-0.108,0.159-0.215,0.24-0.321c0.074-0.099,0.148-0.195,0.224-0.293   c0.082-0.104,0.163-0.21,0.245-0.315c0.077-0.096,0.152-0.192,0.229-0.289c0.084-0.104,0.167-0.208,0.253-0.311   c0.077-0.094,0.154-0.188,0.234-0.282c0.085-0.103,0.173-0.207,0.261-0.309c0.077-0.092,0.157-0.184,0.235-0.276   c0.09-0.1,0.18-0.203,0.27-0.303c0.08-0.092,0.161-0.182,0.242-0.269c0.092-0.103,0.184-0.203,0.276-0.301   c0.081-0.087,0.163-0.178,0.246-0.265c0.094-0.099,0.188-0.196,0.284-0.294c0.082-0.087,0.165-0.173,0.248-0.259   c0.099-0.098,0.195-0.194,0.293-0.292c0.083-0.083,0.168-0.167,0.252-0.25c0.1-0.096,0.201-0.192,0.301-0.289   c0.085-0.082,0.171-0.163,0.256-0.244c0.102-0.096,0.205-0.19,0.309-0.284c0.085-0.079,0.171-0.159,0.257-0.236   c0.106-0.096,0.213-0.19,0.319-0.284c0.088-0.075,0.173-0.15,0.26-0.226c0.11-0.096,0.221-0.188,0.332-0.282   c0.085-0.073,0.171-0.146,0.257-0.217c0.115-0.094,0.232-0.188,0.347-0.282c0.086-0.069,0.169-0.138,0.253-0.204   c0.123-0.098,0.246-0.192,0.372-0.289c0.08-0.063,0.159-0.125,0.238-0.186c0.14-0.106,0.28-0.211,0.422-0.315   c0.066-0.048,0.131-0.098,0.198-0.146c0.209-0.152,0.418-0.302,0.631-0.451C240.76,220.973,248.224,218.63,255.999,218.63z    M255.922,265.605c-4.029,0-7.308-3.276-7.308-7.307c0-4.029,3.279-7.308,7.308-7.308c4.03,0,7.308,3.279,7.308,7.308   C263.23,262.329,259.952,265.605,255.922,265.605z M218.25,256.377c0-0.05,0.002-0.098,0.002-0.148   c1.347,0.055,2.774,0.351,4.1,1.095c0.086,0.07,0.182,0.129,0.286,0.169c2.034,1.255,3.795,3.613,4.607,7.827   c1.587,8.229,1.063,11.48-2.218,12.643C220.592,271.612,218.25,264.165,218.25,256.377z M284.754,265.319   c0.813-4.215,2.574-6.572,4.608-7.827c0.103-0.04,0.196-0.099,0.282-0.167c1.326-0.746,2.755-1.042,4.102-1.097   c0,0.05,0.003,0.098,0.003,0.148c0,7.788-2.342,15.232-6.777,21.585C283.691,276.8,283.166,273.548,284.754,265.319z"/><path d="M255.923,252.925c-2.963,0-5.374,2.411-5.374,5.374c0,2.962,2.411,5.373,5.374,5.373s5.374-2.411,5.374-5.373   C261.297,255.336,258.886,252.925,255.923,252.925z M255.923,261.583c-1.812,0-3.285-1.474-3.285-3.284   c0-1.812,1.474-3.285,3.285-3.285c1.812,0,3.285,1.474,3.285,3.285S257.735,261.583,255.923,261.583z"/>
                        </svg>
                        <p class="driver_text">Driver</p>
                    </div>
                </div>
                    
                <div class="seat_map_container">
                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-2</p>
                        </div>
                        <div class="non_ac_seat blank">
                
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-4</p>
                        </div>
                    </div>

                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-2</p>
                        </div>
                        <div class="non_ac_seat blank">
                
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-4</p>
                        </div>
                    </div>

                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-2</p>
                        </div>
                        <div class="non_ac_seat blank">
                
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-4</p>
                        </div>
                    </div>

                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-2</p>
                        </div>
                        <div class="non_ac_seat blank">
                
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-4</p>
                        </div>
                    </div>

                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-2</p>
                        </div>
                        <div class="non_ac_seat blank">
                
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-4</p>
                        </div>
                    </div>

                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-2</p>
                        </div>
                        <div class="non_ac_seat blank">
                
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-4</p>
                        </div>
                    </div>

                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-2</p>
                        </div>
                        <div class="non_ac_seat blank">
                
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-4</p>
                        </div>
                    </div>

                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-2</p>
                        </div>
                        <div class="non_ac_seat blank">
                
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-4</p>
                        </div>
                    </div>

                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-2</p>
                        </div>
                        <div class="non_ac_seat blank">
                
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-4</p>
                        </div>
                    </div>

                    <div class="seat_container_non_ac">
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-1</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-2</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-3</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-4</p>
                        </div>
                        <div class="non_ac_seat economy_class_seat">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-5</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="seat_wrapper_ac_multi d-none">
                <div class="driver_container ac">
                    <div class="door_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="">
                            <path d="M477.681,277.819c-21.996-52.05-53.489-98.781-93.604-138.896S297.23,67.315,245.181,45.319    C195.869,24.481,143.736,13.049,90,11.256V11H0v450h45h45V41.27c49.699,1.779,97.905,12.414,143.502,31.683    c48.471,20.483,91.994,49.816,129.361,87.183c37.367,37.367,66.7,80.891,87.184,129.361C471.249,339.669,482,392.998,482,448h30    C512,388.964,500.453,331.707,477.681,277.819z M60,431H30V41h30V431z" fill="#000000" data-original="#000000"/>
                            <circle cx="45" cy="481" r="20" fill="#000000" data-original="#000000"/>
                        </svg>
                    </div>
    
                    <div class="steering_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="206 206 100 100" xml:space="preserve" fill="#000000">
                            <path d="M297.02,235.208c-3.248-6.28-7.982-11.821-13.69-16.023c-7.96-5.862-17.41-8.961-27.33-8.961s-19.371,3.099-27.33,8.961   c-5.71,4.202-10.442,9.743-13.689,16.023c-3.356,6.491-5.129,13.812-5.129,21.169c0,8.856,2.514,17.462,7.274,24.882   c4.632,7.225,11.161,13.008,18.877,16.723c6.264,3.016,12.99,4.547,19.997,4.547c7.005,0,13.734-1.531,19.995-4.547   c7.719-3.715,14.246-9.498,18.88-16.723c4.759-7.42,7.273-16.025,7.273-24.882C302.149,249.019,300.375,241.698,297.02,235.208z    M282.703,264.925c-0.811,4.2-1.384,8.192-0.383,11.094c-1.807,3.592-3.956,6.781-6.4,9.495c-1.841-0.984-4.027-1.698-6.271-2.217   c7.401-6.503,11.84-17.891,11.698-30.376c-0.023-1.928-0.157-3.847-0.396-5.725c0.675,0.077,1.33,0.14,1.97,0.186   c0.89,0.063,1.746,0.096,2.561,0.096c0.723,0,1.418-0.025,2.084-0.075h0.017c0.246-0.019,0.489-0.042,0.727-0.069   c0.011,0.376,0.019,0.752,0.023,1.128c0.029,2.508-0.086,5.019-0.336,7.468C285.727,257.428,283.626,260.13,282.703,264.925z    M270.358,291.296c-4.517,1.861-9.375,2.828-14.356,2.828h-0.002c-4.983,0-9.841-0.967-14.36-2.828   c-0.008-0.004-0.015-0.006-0.023-0.01c-2.051-0.846-4.031-1.876-5.921-3.085c0.215-0.159,0.44-0.313,0.677-0.46   c0.033-0.019,0.067-0.04,0.098-0.06c2.245-1.369,5.322-2.225,8.367-2.76c0.056-0.006,0.113-0.015,0.167-0.029   c5.483-0.943,10.806-0.854,10.898-0.852h0.021c0.027,0,0.052-0.005,0.077-0.007c0.032,0.002,0.065,0.009,0.099,0.007   c0.091-0.003,5.415-0.09,10.899,0.852c0.055,0.015,0.108,0.023,0.163,0.029c3.045,0.535,6.121,1.389,8.366,2.757   c0.033,0.022,0.067,0.044,0.101,0.063c0.236,0.148,0.461,0.301,0.676,0.46c-1.888,1.209-3.868,2.239-5.919,3.085   C270.377,291.29,270.365,291.295,270.358,291.296z M229.678,276.016c1-2.898,0.428-6.892-0.383-11.092   c-0.925-4.795-3.023-7.496-5.293-8.995c-0.251-2.454-0.366-4.962-0.337-7.466c0.004-0.376,0.011-0.752,0.021-1.13   c0.211,0.023,0.424,0.042,0.639,0.059c0.063,0.006,0.125,0.01,0.188,0.015c0.273,0.021,0.551,0.036,0.835,0.046   c0.08,0.004,0.159,0.006,0.238,0.008c0.282,0.008,0.568,0.015,0.859,0.015c0.022,0,0.043,0.002,0.067,0.002   c0.14,0,0.28-0.002,0.422-0.004c0.042-0.002,0.085-0.002,0.127-0.002c0.155-0.002,0.313-0.006,0.47-0.012   c0.065-0.002,0.13-0.002,0.197-0.004c0.144-0.006,0.288-0.012,0.435-0.019c0.083-0.004,0.167-0.009,0.252-0.015   c0.134-0.006,0.268-0.014,0.403-0.023c0.103-0.006,0.207-0.014,0.312-0.021c0.119-0.009,0.24-0.019,0.361-0.027   c0.13-0.011,0.259-0.023,0.389-0.036c0.103-0.008,0.203-0.017,0.303-0.027c0.167-0.017,0.336-0.034,0.505-0.052   c0.069-0.006,0.138-0.015,0.207-0.023c0.05-0.004,0.101-0.01,0.152-0.017c-0.238,1.878-0.372,3.797-0.395,5.727   c-0.142,12.483,4.296,23.871,11.697,30.374c-2.243,0.519-4.429,1.233-6.27,2.217C233.634,282.8,231.483,279.611,229.678,276.016z    M255.999,218.63c7.775,0,15.239,2.343,21.589,6.777c0.211,0.148,0.422,0.299,0.629,0.451c0.068,0.05,0.136,0.101,0.204,0.151   c0.14,0.104,0.278,0.207,0.416,0.311c0.081,0.063,0.161,0.125,0.241,0.188c0.124,0.094,0.248,0.19,0.368,0.287   c0.086,0.068,0.169,0.137,0.255,0.207c0.114,0.094,0.231,0.186,0.345,0.28c0.088,0.073,0.173,0.146,0.259,0.219   c0.11,0.092,0.221,0.186,0.33,0.28c0.088,0.075,0.176,0.153,0.261,0.23c0.107,0.092,0.213,0.186,0.318,0.28   c0.087,0.08,0.173,0.159,0.26,0.238c0.103,0.094,0.206,0.188,0.306,0.282c0.088,0.082,0.174,0.165,0.259,0.246   c0.101,0.096,0.201,0.19,0.299,0.287c0.085,0.083,0.169,0.169,0.254,0.252l0.291,0.291c0.084,0.085,0.167,0.173,0.25,0.259   c0.095,0.098,0.191,0.196,0.285,0.296c0.081,0.085,0.162,0.176,0.246,0.263c0.092,0.1,0.184,0.201,0.276,0.301   c0.081,0.087,0.16,0.179,0.239,0.269c0.093,0.1,0.182,0.203,0.27,0.305c0.079,0.09,0.159,0.182,0.238,0.274   c0.087,0.102,0.176,0.207,0.261,0.309c0.078,0.094,0.154,0.188,0.232,0.282c0.085,0.103,0.171,0.207,0.254,0.313   c0.075,0.095,0.152,0.19,0.229,0.285c0.083,0.106,0.165,0.213,0.248,0.319c0.073,0.096,0.146,0.192,0.219,0.291   c0.082,0.106,0.164,0.215,0.243,0.323c0.07,0.096,0.144,0.194,0.215,0.292c0.08,0.111,0.157,0.219,0.234,0.33   c0.07,0.098,0.139,0.196,0.208,0.296c0.078,0.111,0.155,0.224,0.23,0.334c0.065,0.101,0.136,0.201,0.202,0.301   c0.075,0.113,0.148,0.226,0.222,0.341c0.066,0.1,0.132,0.2,0.196,0.303c0.073,0.115,0.146,0.229,0.217,0.347   c0.063,0.101,0.126,0.203,0.188,0.305c0.07,0.117,0.142,0.236,0.213,0.355c0.059,0.1,0.119,0.203,0.178,0.303   c0.071,0.121,0.14,0.242,0.209,0.365c0.057,0.1,0.114,0.201,0.171,0.303c0.068,0.125,0.136,0.25,0.202,0.375   c0.055,0.101,0.109,0.199,0.161,0.299c0.069,0.129,0.136,0.261,0.204,0.395c0.049,0.094,0.099,0.19,0.146,0.286   c0.071,0.142,0.141,0.282,0.209,0.424c0.042,0.087,0.088,0.175,0.129,0.265c0.08,0.167,0.154,0.334,0.232,0.501   c0.031,0.065,0.061,0.129,0.09,0.194c0.106,0.234,0.209,0.468,0.31,0.704c0.022,0.05,0.043,0.102,0.063,0.152   c0.077,0.186,0.155,0.369,0.23,0.558c0.036,0.083,0.067,0.171,0.101,0.255c0.06,0.154,0.121,0.305,0.18,0.459   c0.037,0.099,0.072,0.197,0.108,0.297c0.053,0.14,0.106,0.282,0.156,0.426c0.038,0.103,0.071,0.207,0.109,0.312   c0.04,0.117,0.081,0.236,0.12,0.355c-0.105,0.042-0.214,0.083-0.325,0.125c-0.027,0.008-0.057,0.019-0.083,0.027   c-0.099,0.036-0.199,0.069-0.302,0.103c-0.037,0.01-0.074,0.023-0.112,0.033c-0.112,0.036-0.225,0.069-0.342,0.1   c-0.021,0.006-0.038,0.011-0.059,0.017c-0.136,0.036-0.274,0.071-0.414,0.104c-0.037,0.009-0.077,0.017-0.115,0.025   c-0.108,0.025-0.22,0.048-0.332,0.071c-0.042,0.008-0.085,0.017-0.127,0.025c-0.147,0.029-0.299,0.056-0.453,0.082   c-2.403,0.396-5.435,0.357-8.92-0.117c-0.115-0.017-0.229-0.031-0.347-0.048c-1.789-0.257-3.714-0.627-5.741-1.105   c-0.675-0.159-1.361-0.33-2.059-0.512c-6.448-1.689-15.564-2.153-15.95-2.172c-0.013-0.002-0.036-0.002-0.048-0.002h-0.002   c0,0-0.03,0-0.078,0.002c-0.048-0.002-0.075-0.002-0.075-0.002c-0.002,0-0.002,0-0.002,0h-0.048c0,0,0,0-0.002,0   c-0.384,0.019-9.5,0.485-15.95,2.172c-2.788,0.733-5.413,1.276-7.798,1.619c-0.635,0.089-1.251,0.165-1.853,0.228   c-2.423,0.25-4.595,0.275-6.451,0.069c-0.332-0.038-0.654-0.082-0.965-0.131c-0.161-0.028-0.317-0.055-0.472-0.086   c-0.027-0.004-0.054-0.011-0.083-0.017c-0.129-0.025-0.257-0.052-0.382-0.082c-0.027-0.006-0.052-0.01-0.077-0.017   c-0.148-0.035-0.292-0.07-0.435-0.108c-0.006-0.002-0.012-0.004-0.019-0.006c-0.131-0.035-0.259-0.073-0.384-0.11   c-0.029-0.01-0.061-0.019-0.092-0.029c-0.111-0.036-0.222-0.073-0.33-0.111c-0.019-0.006-0.038-0.013-0.058-0.019   c-0.113-0.042-0.224-0.086-0.333-0.127c0.031-0.094,0.064-0.186,0.096-0.278c0.046-0.136,0.09-0.27,0.138-0.401   c0.038-0.108,0.08-0.215,0.119-0.323c0.048-0.131,0.096-0.266,0.146-0.397c0.04-0.109,0.084-0.215,0.125-0.323   c0.052-0.13,0.1-0.261,0.153-0.391c0.043-0.104,0.087-0.208,0.131-0.315c0.112-0.274,0.229-0.545,0.349-0.817   c0.04-0.088,0.077-0.177,0.117-0.265c0.052-0.115,0.106-0.231,0.161-0.347c0.054-0.117,0.106-0.234,0.163-0.349   c0.053-0.113,0.109-0.226,0.165-0.338c0.056-0.117,0.113-0.236,0.171-0.351c0.057-0.113,0.113-0.224,0.171-0.334   c0.059-0.117,0.119-0.234,0.18-0.349c0.059-0.111,0.117-0.22,0.175-0.328c0.063-0.115,0.125-0.232,0.19-0.349   c0.061-0.109,0.122-0.215,0.182-0.322c0.064-0.115,0.129-0.232,0.196-0.345c0.063-0.106,0.125-0.213,0.188-0.319   c0.069-0.113,0.136-0.228,0.205-0.34c0.064-0.107,0.129-0.211,0.194-0.315c0.069-0.113,0.14-0.226,0.211-0.336   c0.064-0.105,0.131-0.207,0.2-0.312c0.071-0.111,0.144-0.221,0.217-0.332c0.069-0.103,0.138-0.205,0.207-0.307   c0.073-0.109,0.148-0.219,0.224-0.328c0.071-0.103,0.142-0.203,0.213-0.303c0.078-0.108,0.155-0.217,0.232-0.323   c0.073-0.101,0.144-0.199,0.217-0.297c0.079-0.108,0.159-0.215,0.24-0.321c0.074-0.099,0.148-0.195,0.224-0.293   c0.082-0.104,0.163-0.21,0.245-0.315c0.077-0.096,0.152-0.192,0.229-0.289c0.084-0.104,0.167-0.208,0.253-0.311   c0.077-0.094,0.154-0.188,0.234-0.282c0.085-0.103,0.173-0.207,0.261-0.309c0.077-0.092,0.157-0.184,0.235-0.276   c0.09-0.1,0.18-0.203,0.27-0.303c0.08-0.092,0.161-0.182,0.242-0.269c0.092-0.103,0.184-0.203,0.276-0.301   c0.081-0.087,0.163-0.178,0.246-0.265c0.094-0.099,0.188-0.196,0.284-0.294c0.082-0.087,0.165-0.173,0.248-0.259   c0.099-0.098,0.195-0.194,0.293-0.292c0.083-0.083,0.168-0.167,0.252-0.25c0.1-0.096,0.201-0.192,0.301-0.289   c0.085-0.082,0.171-0.163,0.256-0.244c0.102-0.096,0.205-0.19,0.309-0.284c0.085-0.079,0.171-0.159,0.257-0.236   c0.106-0.096,0.213-0.19,0.319-0.284c0.088-0.075,0.173-0.15,0.26-0.226c0.11-0.096,0.221-0.188,0.332-0.282   c0.085-0.073,0.171-0.146,0.257-0.217c0.115-0.094,0.232-0.188,0.347-0.282c0.086-0.069,0.169-0.138,0.253-0.204   c0.123-0.098,0.246-0.192,0.372-0.289c0.08-0.063,0.159-0.125,0.238-0.186c0.14-0.106,0.28-0.211,0.422-0.315   c0.066-0.048,0.131-0.098,0.198-0.146c0.209-0.152,0.418-0.302,0.631-0.451C240.76,220.973,248.224,218.63,255.999,218.63z    M255.922,265.605c-4.029,0-7.308-3.276-7.308-7.307c0-4.029,3.279-7.308,7.308-7.308c4.03,0,7.308,3.279,7.308,7.308   C263.23,262.329,259.952,265.605,255.922,265.605z M218.25,256.377c0-0.05,0.002-0.098,0.002-0.148   c1.347,0.055,2.774,0.351,4.1,1.095c0.086,0.07,0.182,0.129,0.286,0.169c2.034,1.255,3.795,3.613,4.607,7.827   c1.587,8.229,1.063,11.48-2.218,12.643C220.592,271.612,218.25,264.165,218.25,256.377z M284.754,265.319   c0.813-4.215,2.574-6.572,4.608-7.827c0.103-0.04,0.196-0.099,0.282-0.167c1.326-0.746,2.755-1.042,4.102-1.097   c0,0.05,0.003,0.098,0.003,0.148c0,7.788-2.342,15.232-6.777,21.585C283.691,276.8,283.166,273.548,284.754,265.319z"/><path d="M255.923,252.925c-2.963,0-5.374,2.411-5.374,5.374c0,2.962,2.411,5.373,5.374,5.373s5.374-2.411,5.374-5.373   C261.297,255.336,258.886,252.925,255.923,252.925z M255.923,261.583c-1.812,0-3.285-1.474-3.285-3.284   c0-1.812,1.474-3.285,3.285-3.285c1.812,0,3.285,1.474,3.285,3.285S257.735,261.583,255.923,261.583z"/>
                        </svg>
                        <p class="driver_text">Driver</p>
                    </div>
                </div>
                
                <div class="seat_map_container">
    
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-1</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-3</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_multi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-4</p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="seat_wrapper_ac_bi d-none">
                <div class="driver_container ac">
                    <div class="door_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="">
                            <path d="M477.681,277.819c-21.996-52.05-53.489-98.781-93.604-138.896S297.23,67.315,245.181,45.319    C195.869,24.481,143.736,13.049,90,11.256V11H0v450h45h45V41.27c49.699,1.779,97.905,12.414,143.502,31.683    c48.471,20.483,91.994,49.816,129.361,87.183c37.367,37.367,66.7,80.891,87.184,129.361C471.249,339.669,482,392.998,482,448h30    C512,388.964,500.453,331.707,477.681,277.819z M60,431H30V41h30V431z" fill="#000000" data-original="#000000"/>
                            <circle cx="45" cy="481" r="20" fill="#000000" data-original="#000000"/>
                        </svg>
                    </div>
    
                    <div class="steering_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="206 206 100 100" xml:space="preserve" fill="#000000">
                            <path d="M297.02,235.208c-3.248-6.28-7.982-11.821-13.69-16.023c-7.96-5.862-17.41-8.961-27.33-8.961s-19.371,3.099-27.33,8.961   c-5.71,4.202-10.442,9.743-13.689,16.023c-3.356,6.491-5.129,13.812-5.129,21.169c0,8.856,2.514,17.462,7.274,24.882   c4.632,7.225,11.161,13.008,18.877,16.723c6.264,3.016,12.99,4.547,19.997,4.547c7.005,0,13.734-1.531,19.995-4.547   c7.719-3.715,14.246-9.498,18.88-16.723c4.759-7.42,7.273-16.025,7.273-24.882C302.149,249.019,300.375,241.698,297.02,235.208z    M282.703,264.925c-0.811,4.2-1.384,8.192-0.383,11.094c-1.807,3.592-3.956,6.781-6.4,9.495c-1.841-0.984-4.027-1.698-6.271-2.217   c7.401-6.503,11.84-17.891,11.698-30.376c-0.023-1.928-0.157-3.847-0.396-5.725c0.675,0.077,1.33,0.14,1.97,0.186   c0.89,0.063,1.746,0.096,2.561,0.096c0.723,0,1.418-0.025,2.084-0.075h0.017c0.246-0.019,0.489-0.042,0.727-0.069   c0.011,0.376,0.019,0.752,0.023,1.128c0.029,2.508-0.086,5.019-0.336,7.468C285.727,257.428,283.626,260.13,282.703,264.925z    M270.358,291.296c-4.517,1.861-9.375,2.828-14.356,2.828h-0.002c-4.983,0-9.841-0.967-14.36-2.828   c-0.008-0.004-0.015-0.006-0.023-0.01c-2.051-0.846-4.031-1.876-5.921-3.085c0.215-0.159,0.44-0.313,0.677-0.46   c0.033-0.019,0.067-0.04,0.098-0.06c2.245-1.369,5.322-2.225,8.367-2.76c0.056-0.006,0.113-0.015,0.167-0.029   c5.483-0.943,10.806-0.854,10.898-0.852h0.021c0.027,0,0.052-0.005,0.077-0.007c0.032,0.002,0.065,0.009,0.099,0.007   c0.091-0.003,5.415-0.09,10.899,0.852c0.055,0.015,0.108,0.023,0.163,0.029c3.045,0.535,6.121,1.389,8.366,2.757   c0.033,0.022,0.067,0.044,0.101,0.063c0.236,0.148,0.461,0.301,0.676,0.46c-1.888,1.209-3.868,2.239-5.919,3.085   C270.377,291.29,270.365,291.295,270.358,291.296z M229.678,276.016c1-2.898,0.428-6.892-0.383-11.092   c-0.925-4.795-3.023-7.496-5.293-8.995c-0.251-2.454-0.366-4.962-0.337-7.466c0.004-0.376,0.011-0.752,0.021-1.13   c0.211,0.023,0.424,0.042,0.639,0.059c0.063,0.006,0.125,0.01,0.188,0.015c0.273,0.021,0.551,0.036,0.835,0.046   c0.08,0.004,0.159,0.006,0.238,0.008c0.282,0.008,0.568,0.015,0.859,0.015c0.022,0,0.043,0.002,0.067,0.002   c0.14,0,0.28-0.002,0.422-0.004c0.042-0.002,0.085-0.002,0.127-0.002c0.155-0.002,0.313-0.006,0.47-0.012   c0.065-0.002,0.13-0.002,0.197-0.004c0.144-0.006,0.288-0.012,0.435-0.019c0.083-0.004,0.167-0.009,0.252-0.015   c0.134-0.006,0.268-0.014,0.403-0.023c0.103-0.006,0.207-0.014,0.312-0.021c0.119-0.009,0.24-0.019,0.361-0.027   c0.13-0.011,0.259-0.023,0.389-0.036c0.103-0.008,0.203-0.017,0.303-0.027c0.167-0.017,0.336-0.034,0.505-0.052   c0.069-0.006,0.138-0.015,0.207-0.023c0.05-0.004,0.101-0.01,0.152-0.017c-0.238,1.878-0.372,3.797-0.395,5.727   c-0.142,12.483,4.296,23.871,11.697,30.374c-2.243,0.519-4.429,1.233-6.27,2.217C233.634,282.8,231.483,279.611,229.678,276.016z    M255.999,218.63c7.775,0,15.239,2.343,21.589,6.777c0.211,0.148,0.422,0.299,0.629,0.451c0.068,0.05,0.136,0.101,0.204,0.151   c0.14,0.104,0.278,0.207,0.416,0.311c0.081,0.063,0.161,0.125,0.241,0.188c0.124,0.094,0.248,0.19,0.368,0.287   c0.086,0.068,0.169,0.137,0.255,0.207c0.114,0.094,0.231,0.186,0.345,0.28c0.088,0.073,0.173,0.146,0.259,0.219   c0.11,0.092,0.221,0.186,0.33,0.28c0.088,0.075,0.176,0.153,0.261,0.23c0.107,0.092,0.213,0.186,0.318,0.28   c0.087,0.08,0.173,0.159,0.26,0.238c0.103,0.094,0.206,0.188,0.306,0.282c0.088,0.082,0.174,0.165,0.259,0.246   c0.101,0.096,0.201,0.19,0.299,0.287c0.085,0.083,0.169,0.169,0.254,0.252l0.291,0.291c0.084,0.085,0.167,0.173,0.25,0.259   c0.095,0.098,0.191,0.196,0.285,0.296c0.081,0.085,0.162,0.176,0.246,0.263c0.092,0.1,0.184,0.201,0.276,0.301   c0.081,0.087,0.16,0.179,0.239,0.269c0.093,0.1,0.182,0.203,0.27,0.305c0.079,0.09,0.159,0.182,0.238,0.274   c0.087,0.102,0.176,0.207,0.261,0.309c0.078,0.094,0.154,0.188,0.232,0.282c0.085,0.103,0.171,0.207,0.254,0.313   c0.075,0.095,0.152,0.19,0.229,0.285c0.083,0.106,0.165,0.213,0.248,0.319c0.073,0.096,0.146,0.192,0.219,0.291   c0.082,0.106,0.164,0.215,0.243,0.323c0.07,0.096,0.144,0.194,0.215,0.292c0.08,0.111,0.157,0.219,0.234,0.33   c0.07,0.098,0.139,0.196,0.208,0.296c0.078,0.111,0.155,0.224,0.23,0.334c0.065,0.101,0.136,0.201,0.202,0.301   c0.075,0.113,0.148,0.226,0.222,0.341c0.066,0.1,0.132,0.2,0.196,0.303c0.073,0.115,0.146,0.229,0.217,0.347   c0.063,0.101,0.126,0.203,0.188,0.305c0.07,0.117,0.142,0.236,0.213,0.355c0.059,0.1,0.119,0.203,0.178,0.303   c0.071,0.121,0.14,0.242,0.209,0.365c0.057,0.1,0.114,0.201,0.171,0.303c0.068,0.125,0.136,0.25,0.202,0.375   c0.055,0.101,0.109,0.199,0.161,0.299c0.069,0.129,0.136,0.261,0.204,0.395c0.049,0.094,0.099,0.19,0.146,0.286   c0.071,0.142,0.141,0.282,0.209,0.424c0.042,0.087,0.088,0.175,0.129,0.265c0.08,0.167,0.154,0.334,0.232,0.501   c0.031,0.065,0.061,0.129,0.09,0.194c0.106,0.234,0.209,0.468,0.31,0.704c0.022,0.05,0.043,0.102,0.063,0.152   c0.077,0.186,0.155,0.369,0.23,0.558c0.036,0.083,0.067,0.171,0.101,0.255c0.06,0.154,0.121,0.305,0.18,0.459   c0.037,0.099,0.072,0.197,0.108,0.297c0.053,0.14,0.106,0.282,0.156,0.426c0.038,0.103,0.071,0.207,0.109,0.312   c0.04,0.117,0.081,0.236,0.12,0.355c-0.105,0.042-0.214,0.083-0.325,0.125c-0.027,0.008-0.057,0.019-0.083,0.027   c-0.099,0.036-0.199,0.069-0.302,0.103c-0.037,0.01-0.074,0.023-0.112,0.033c-0.112,0.036-0.225,0.069-0.342,0.1   c-0.021,0.006-0.038,0.011-0.059,0.017c-0.136,0.036-0.274,0.071-0.414,0.104c-0.037,0.009-0.077,0.017-0.115,0.025   c-0.108,0.025-0.22,0.048-0.332,0.071c-0.042,0.008-0.085,0.017-0.127,0.025c-0.147,0.029-0.299,0.056-0.453,0.082   c-2.403,0.396-5.435,0.357-8.92-0.117c-0.115-0.017-0.229-0.031-0.347-0.048c-1.789-0.257-3.714-0.627-5.741-1.105   c-0.675-0.159-1.361-0.33-2.059-0.512c-6.448-1.689-15.564-2.153-15.95-2.172c-0.013-0.002-0.036-0.002-0.048-0.002h-0.002   c0,0-0.03,0-0.078,0.002c-0.048-0.002-0.075-0.002-0.075-0.002c-0.002,0-0.002,0-0.002,0h-0.048c0,0,0,0-0.002,0   c-0.384,0.019-9.5,0.485-15.95,2.172c-2.788,0.733-5.413,1.276-7.798,1.619c-0.635,0.089-1.251,0.165-1.853,0.228   c-2.423,0.25-4.595,0.275-6.451,0.069c-0.332-0.038-0.654-0.082-0.965-0.131c-0.161-0.028-0.317-0.055-0.472-0.086   c-0.027-0.004-0.054-0.011-0.083-0.017c-0.129-0.025-0.257-0.052-0.382-0.082c-0.027-0.006-0.052-0.01-0.077-0.017   c-0.148-0.035-0.292-0.07-0.435-0.108c-0.006-0.002-0.012-0.004-0.019-0.006c-0.131-0.035-0.259-0.073-0.384-0.11   c-0.029-0.01-0.061-0.019-0.092-0.029c-0.111-0.036-0.222-0.073-0.33-0.111c-0.019-0.006-0.038-0.013-0.058-0.019   c-0.113-0.042-0.224-0.086-0.333-0.127c0.031-0.094,0.064-0.186,0.096-0.278c0.046-0.136,0.09-0.27,0.138-0.401   c0.038-0.108,0.08-0.215,0.119-0.323c0.048-0.131,0.096-0.266,0.146-0.397c0.04-0.109,0.084-0.215,0.125-0.323   c0.052-0.13,0.1-0.261,0.153-0.391c0.043-0.104,0.087-0.208,0.131-0.315c0.112-0.274,0.229-0.545,0.349-0.817   c0.04-0.088,0.077-0.177,0.117-0.265c0.052-0.115,0.106-0.231,0.161-0.347c0.054-0.117,0.106-0.234,0.163-0.349   c0.053-0.113,0.109-0.226,0.165-0.338c0.056-0.117,0.113-0.236,0.171-0.351c0.057-0.113,0.113-0.224,0.171-0.334   c0.059-0.117,0.119-0.234,0.18-0.349c0.059-0.111,0.117-0.22,0.175-0.328c0.063-0.115,0.125-0.232,0.19-0.349   c0.061-0.109,0.122-0.215,0.182-0.322c0.064-0.115,0.129-0.232,0.196-0.345c0.063-0.106,0.125-0.213,0.188-0.319   c0.069-0.113,0.136-0.228,0.205-0.34c0.064-0.107,0.129-0.211,0.194-0.315c0.069-0.113,0.14-0.226,0.211-0.336   c0.064-0.105,0.131-0.207,0.2-0.312c0.071-0.111,0.144-0.221,0.217-0.332c0.069-0.103,0.138-0.205,0.207-0.307   c0.073-0.109,0.148-0.219,0.224-0.328c0.071-0.103,0.142-0.203,0.213-0.303c0.078-0.108,0.155-0.217,0.232-0.323   c0.073-0.101,0.144-0.199,0.217-0.297c0.079-0.108,0.159-0.215,0.24-0.321c0.074-0.099,0.148-0.195,0.224-0.293   c0.082-0.104,0.163-0.21,0.245-0.315c0.077-0.096,0.152-0.192,0.229-0.289c0.084-0.104,0.167-0.208,0.253-0.311   c0.077-0.094,0.154-0.188,0.234-0.282c0.085-0.103,0.173-0.207,0.261-0.309c0.077-0.092,0.157-0.184,0.235-0.276   c0.09-0.1,0.18-0.203,0.27-0.303c0.08-0.092,0.161-0.182,0.242-0.269c0.092-0.103,0.184-0.203,0.276-0.301   c0.081-0.087,0.163-0.178,0.246-0.265c0.094-0.099,0.188-0.196,0.284-0.294c0.082-0.087,0.165-0.173,0.248-0.259   c0.099-0.098,0.195-0.194,0.293-0.292c0.083-0.083,0.168-0.167,0.252-0.25c0.1-0.096,0.201-0.192,0.301-0.289   c0.085-0.082,0.171-0.163,0.256-0.244c0.102-0.096,0.205-0.19,0.309-0.284c0.085-0.079,0.171-0.159,0.257-0.236   c0.106-0.096,0.213-0.19,0.319-0.284c0.088-0.075,0.173-0.15,0.26-0.226c0.11-0.096,0.221-0.188,0.332-0.282   c0.085-0.073,0.171-0.146,0.257-0.217c0.115-0.094,0.232-0.188,0.347-0.282c0.086-0.069,0.169-0.138,0.253-0.204   c0.123-0.098,0.246-0.192,0.372-0.289c0.08-0.063,0.159-0.125,0.238-0.186c0.14-0.106,0.28-0.211,0.422-0.315   c0.066-0.048,0.131-0.098,0.198-0.146c0.209-0.152,0.418-0.302,0.631-0.451C240.76,220.973,248.224,218.63,255.999,218.63z    M255.922,265.605c-4.029,0-7.308-3.276-7.308-7.307c0-4.029,3.279-7.308,7.308-7.308c4.03,0,7.308,3.279,7.308,7.308   C263.23,262.329,259.952,265.605,255.922,265.605z M218.25,256.377c0-0.05,0.002-0.098,0.002-0.148   c1.347,0.055,2.774,0.351,4.1,1.095c0.086,0.07,0.182,0.129,0.286,0.169c2.034,1.255,3.795,3.613,4.607,7.827   c1.587,8.229,1.063,11.48-2.218,12.643C220.592,271.612,218.25,264.165,218.25,256.377z M284.754,265.319   c0.813-4.215,2.574-6.572,4.608-7.827c0.103-0.04,0.196-0.099,0.282-0.167c1.326-0.746,2.755-1.042,4.102-1.097   c0,0.05,0.003,0.098,0.003,0.148c0,7.788-2.342,15.232-6.777,21.585C283.691,276.8,283.166,273.548,284.754,265.319z"/><path d="M255.923,252.925c-2.963,0-5.374,2.411-5.374,5.374c0,2.962,2.411,5.373,5.374,5.373s5.374-2.411,5.374-5.373   C261.297,255.336,258.886,252.925,255.923,252.925z M255.923,261.583c-1.812,0-3.285-1.474-3.285-3.284   c0-1.812,1.474-3.285,3.285-3.285c1.812,0,3.285,1.474,3.285,3.285S257.735,261.583,255.923,261.583z"/>
                        </svg>
                        <p class="driver_text">Driver</p>
                    </div>
                </div>
                
                <div class="seat_map_container">
    
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-1</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-3</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_bi">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-4</p>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="seat_wrapper_ac_sleeper_lower d-none">

                <div class="driver_container ac">
                    <div class="door_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="">
                            <path d="M477.681,277.819c-21.996-52.05-53.489-98.781-93.604-138.896S297.23,67.315,245.181,45.319    C195.869,24.481,143.736,13.049,90,11.256V11H0v450h45h45V41.27c49.699,1.779,97.905,12.414,143.502,31.683    c48.471,20.483,91.994,49.816,129.361,87.183c37.367,37.367,66.7,80.891,87.184,129.361C471.249,339.669,482,392.998,482,448h30    C512,388.964,500.453,331.707,477.681,277.819z M60,431H30V41h30V431z" fill="#000000" data-original="#000000"/>
                            <circle cx="45" cy="481" r="20" fill="#000000" data-original="#000000"/>
                        </svg>
                    </div>
    
                    <div class="steering_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="206 206 100 100" xml:space="preserve" fill="#000000">
                            <path d="M297.02,235.208c-3.248-6.28-7.982-11.821-13.69-16.023c-7.96-5.862-17.41-8.961-27.33-8.961s-19.371,3.099-27.33,8.961   c-5.71,4.202-10.442,9.743-13.689,16.023c-3.356,6.491-5.129,13.812-5.129,21.169c0,8.856,2.514,17.462,7.274,24.882   c4.632,7.225,11.161,13.008,18.877,16.723c6.264,3.016,12.99,4.547,19.997,4.547c7.005,0,13.734-1.531,19.995-4.547   c7.719-3.715,14.246-9.498,18.88-16.723c4.759-7.42,7.273-16.025,7.273-24.882C302.149,249.019,300.375,241.698,297.02,235.208z    M282.703,264.925c-0.811,4.2-1.384,8.192-0.383,11.094c-1.807,3.592-3.956,6.781-6.4,9.495c-1.841-0.984-4.027-1.698-6.271-2.217   c7.401-6.503,11.84-17.891,11.698-30.376c-0.023-1.928-0.157-3.847-0.396-5.725c0.675,0.077,1.33,0.14,1.97,0.186   c0.89,0.063,1.746,0.096,2.561,0.096c0.723,0,1.418-0.025,2.084-0.075h0.017c0.246-0.019,0.489-0.042,0.727-0.069   c0.011,0.376,0.019,0.752,0.023,1.128c0.029,2.508-0.086,5.019-0.336,7.468C285.727,257.428,283.626,260.13,282.703,264.925z    M270.358,291.296c-4.517,1.861-9.375,2.828-14.356,2.828h-0.002c-4.983,0-9.841-0.967-14.36-2.828   c-0.008-0.004-0.015-0.006-0.023-0.01c-2.051-0.846-4.031-1.876-5.921-3.085c0.215-0.159,0.44-0.313,0.677-0.46   c0.033-0.019,0.067-0.04,0.098-0.06c2.245-1.369,5.322-2.225,8.367-2.76c0.056-0.006,0.113-0.015,0.167-0.029   c5.483-0.943,10.806-0.854,10.898-0.852h0.021c0.027,0,0.052-0.005,0.077-0.007c0.032,0.002,0.065,0.009,0.099,0.007   c0.091-0.003,5.415-0.09,10.899,0.852c0.055,0.015,0.108,0.023,0.163,0.029c3.045,0.535,6.121,1.389,8.366,2.757   c0.033,0.022,0.067,0.044,0.101,0.063c0.236,0.148,0.461,0.301,0.676,0.46c-1.888,1.209-3.868,2.239-5.919,3.085   C270.377,291.29,270.365,291.295,270.358,291.296z M229.678,276.016c1-2.898,0.428-6.892-0.383-11.092   c-0.925-4.795-3.023-7.496-5.293-8.995c-0.251-2.454-0.366-4.962-0.337-7.466c0.004-0.376,0.011-0.752,0.021-1.13   c0.211,0.023,0.424,0.042,0.639,0.059c0.063,0.006,0.125,0.01,0.188,0.015c0.273,0.021,0.551,0.036,0.835,0.046   c0.08,0.004,0.159,0.006,0.238,0.008c0.282,0.008,0.568,0.015,0.859,0.015c0.022,0,0.043,0.002,0.067,0.002   c0.14,0,0.28-0.002,0.422-0.004c0.042-0.002,0.085-0.002,0.127-0.002c0.155-0.002,0.313-0.006,0.47-0.012   c0.065-0.002,0.13-0.002,0.197-0.004c0.144-0.006,0.288-0.012,0.435-0.019c0.083-0.004,0.167-0.009,0.252-0.015   c0.134-0.006,0.268-0.014,0.403-0.023c0.103-0.006,0.207-0.014,0.312-0.021c0.119-0.009,0.24-0.019,0.361-0.027   c0.13-0.011,0.259-0.023,0.389-0.036c0.103-0.008,0.203-0.017,0.303-0.027c0.167-0.017,0.336-0.034,0.505-0.052   c0.069-0.006,0.138-0.015,0.207-0.023c0.05-0.004,0.101-0.01,0.152-0.017c-0.238,1.878-0.372,3.797-0.395,5.727   c-0.142,12.483,4.296,23.871,11.697,30.374c-2.243,0.519-4.429,1.233-6.27,2.217C233.634,282.8,231.483,279.611,229.678,276.016z    M255.999,218.63c7.775,0,15.239,2.343,21.589,6.777c0.211,0.148,0.422,0.299,0.629,0.451c0.068,0.05,0.136,0.101,0.204,0.151   c0.14,0.104,0.278,0.207,0.416,0.311c0.081,0.063,0.161,0.125,0.241,0.188c0.124,0.094,0.248,0.19,0.368,0.287   c0.086,0.068,0.169,0.137,0.255,0.207c0.114,0.094,0.231,0.186,0.345,0.28c0.088,0.073,0.173,0.146,0.259,0.219   c0.11,0.092,0.221,0.186,0.33,0.28c0.088,0.075,0.176,0.153,0.261,0.23c0.107,0.092,0.213,0.186,0.318,0.28   c0.087,0.08,0.173,0.159,0.26,0.238c0.103,0.094,0.206,0.188,0.306,0.282c0.088,0.082,0.174,0.165,0.259,0.246   c0.101,0.096,0.201,0.19,0.299,0.287c0.085,0.083,0.169,0.169,0.254,0.252l0.291,0.291c0.084,0.085,0.167,0.173,0.25,0.259   c0.095,0.098,0.191,0.196,0.285,0.296c0.081,0.085,0.162,0.176,0.246,0.263c0.092,0.1,0.184,0.201,0.276,0.301   c0.081,0.087,0.16,0.179,0.239,0.269c0.093,0.1,0.182,0.203,0.27,0.305c0.079,0.09,0.159,0.182,0.238,0.274   c0.087,0.102,0.176,0.207,0.261,0.309c0.078,0.094,0.154,0.188,0.232,0.282c0.085,0.103,0.171,0.207,0.254,0.313   c0.075,0.095,0.152,0.19,0.229,0.285c0.083,0.106,0.165,0.213,0.248,0.319c0.073,0.096,0.146,0.192,0.219,0.291   c0.082,0.106,0.164,0.215,0.243,0.323c0.07,0.096,0.144,0.194,0.215,0.292c0.08,0.111,0.157,0.219,0.234,0.33   c0.07,0.098,0.139,0.196,0.208,0.296c0.078,0.111,0.155,0.224,0.23,0.334c0.065,0.101,0.136,0.201,0.202,0.301   c0.075,0.113,0.148,0.226,0.222,0.341c0.066,0.1,0.132,0.2,0.196,0.303c0.073,0.115,0.146,0.229,0.217,0.347   c0.063,0.101,0.126,0.203,0.188,0.305c0.07,0.117,0.142,0.236,0.213,0.355c0.059,0.1,0.119,0.203,0.178,0.303   c0.071,0.121,0.14,0.242,0.209,0.365c0.057,0.1,0.114,0.201,0.171,0.303c0.068,0.125,0.136,0.25,0.202,0.375   c0.055,0.101,0.109,0.199,0.161,0.299c0.069,0.129,0.136,0.261,0.204,0.395c0.049,0.094,0.099,0.19,0.146,0.286   c0.071,0.142,0.141,0.282,0.209,0.424c0.042,0.087,0.088,0.175,0.129,0.265c0.08,0.167,0.154,0.334,0.232,0.501   c0.031,0.065,0.061,0.129,0.09,0.194c0.106,0.234,0.209,0.468,0.31,0.704c0.022,0.05,0.043,0.102,0.063,0.152   c0.077,0.186,0.155,0.369,0.23,0.558c0.036,0.083,0.067,0.171,0.101,0.255c0.06,0.154,0.121,0.305,0.18,0.459   c0.037,0.099,0.072,0.197,0.108,0.297c0.053,0.14,0.106,0.282,0.156,0.426c0.038,0.103,0.071,0.207,0.109,0.312   c0.04,0.117,0.081,0.236,0.12,0.355c-0.105,0.042-0.214,0.083-0.325,0.125c-0.027,0.008-0.057,0.019-0.083,0.027   c-0.099,0.036-0.199,0.069-0.302,0.103c-0.037,0.01-0.074,0.023-0.112,0.033c-0.112,0.036-0.225,0.069-0.342,0.1   c-0.021,0.006-0.038,0.011-0.059,0.017c-0.136,0.036-0.274,0.071-0.414,0.104c-0.037,0.009-0.077,0.017-0.115,0.025   c-0.108,0.025-0.22,0.048-0.332,0.071c-0.042,0.008-0.085,0.017-0.127,0.025c-0.147,0.029-0.299,0.056-0.453,0.082   c-2.403,0.396-5.435,0.357-8.92-0.117c-0.115-0.017-0.229-0.031-0.347-0.048c-1.789-0.257-3.714-0.627-5.741-1.105   c-0.675-0.159-1.361-0.33-2.059-0.512c-6.448-1.689-15.564-2.153-15.95-2.172c-0.013-0.002-0.036-0.002-0.048-0.002h-0.002   c0,0-0.03,0-0.078,0.002c-0.048-0.002-0.075-0.002-0.075-0.002c-0.002,0-0.002,0-0.002,0h-0.048c0,0,0,0-0.002,0   c-0.384,0.019-9.5,0.485-15.95,2.172c-2.788,0.733-5.413,1.276-7.798,1.619c-0.635,0.089-1.251,0.165-1.853,0.228   c-2.423,0.25-4.595,0.275-6.451,0.069c-0.332-0.038-0.654-0.082-0.965-0.131c-0.161-0.028-0.317-0.055-0.472-0.086   c-0.027-0.004-0.054-0.011-0.083-0.017c-0.129-0.025-0.257-0.052-0.382-0.082c-0.027-0.006-0.052-0.01-0.077-0.017   c-0.148-0.035-0.292-0.07-0.435-0.108c-0.006-0.002-0.012-0.004-0.019-0.006c-0.131-0.035-0.259-0.073-0.384-0.11   c-0.029-0.01-0.061-0.019-0.092-0.029c-0.111-0.036-0.222-0.073-0.33-0.111c-0.019-0.006-0.038-0.013-0.058-0.019   c-0.113-0.042-0.224-0.086-0.333-0.127c0.031-0.094,0.064-0.186,0.096-0.278c0.046-0.136,0.09-0.27,0.138-0.401   c0.038-0.108,0.08-0.215,0.119-0.323c0.048-0.131,0.096-0.266,0.146-0.397c0.04-0.109,0.084-0.215,0.125-0.323   c0.052-0.13,0.1-0.261,0.153-0.391c0.043-0.104,0.087-0.208,0.131-0.315c0.112-0.274,0.229-0.545,0.349-0.817   c0.04-0.088,0.077-0.177,0.117-0.265c0.052-0.115,0.106-0.231,0.161-0.347c0.054-0.117,0.106-0.234,0.163-0.349   c0.053-0.113,0.109-0.226,0.165-0.338c0.056-0.117,0.113-0.236,0.171-0.351c0.057-0.113,0.113-0.224,0.171-0.334   c0.059-0.117,0.119-0.234,0.18-0.349c0.059-0.111,0.117-0.22,0.175-0.328c0.063-0.115,0.125-0.232,0.19-0.349   c0.061-0.109,0.122-0.215,0.182-0.322c0.064-0.115,0.129-0.232,0.196-0.345c0.063-0.106,0.125-0.213,0.188-0.319   c0.069-0.113,0.136-0.228,0.205-0.34c0.064-0.107,0.129-0.211,0.194-0.315c0.069-0.113,0.14-0.226,0.211-0.336   c0.064-0.105,0.131-0.207,0.2-0.312c0.071-0.111,0.144-0.221,0.217-0.332c0.069-0.103,0.138-0.205,0.207-0.307   c0.073-0.109,0.148-0.219,0.224-0.328c0.071-0.103,0.142-0.203,0.213-0.303c0.078-0.108,0.155-0.217,0.232-0.323   c0.073-0.101,0.144-0.199,0.217-0.297c0.079-0.108,0.159-0.215,0.24-0.321c0.074-0.099,0.148-0.195,0.224-0.293   c0.082-0.104,0.163-0.21,0.245-0.315c0.077-0.096,0.152-0.192,0.229-0.289c0.084-0.104,0.167-0.208,0.253-0.311   c0.077-0.094,0.154-0.188,0.234-0.282c0.085-0.103,0.173-0.207,0.261-0.309c0.077-0.092,0.157-0.184,0.235-0.276   c0.09-0.1,0.18-0.203,0.27-0.303c0.08-0.092,0.161-0.182,0.242-0.269c0.092-0.103,0.184-0.203,0.276-0.301   c0.081-0.087,0.163-0.178,0.246-0.265c0.094-0.099,0.188-0.196,0.284-0.294c0.082-0.087,0.165-0.173,0.248-0.259   c0.099-0.098,0.195-0.194,0.293-0.292c0.083-0.083,0.168-0.167,0.252-0.25c0.1-0.096,0.201-0.192,0.301-0.289   c0.085-0.082,0.171-0.163,0.256-0.244c0.102-0.096,0.205-0.19,0.309-0.284c0.085-0.079,0.171-0.159,0.257-0.236   c0.106-0.096,0.213-0.19,0.319-0.284c0.088-0.075,0.173-0.15,0.26-0.226c0.11-0.096,0.221-0.188,0.332-0.282   c0.085-0.073,0.171-0.146,0.257-0.217c0.115-0.094,0.232-0.188,0.347-0.282c0.086-0.069,0.169-0.138,0.253-0.204   c0.123-0.098,0.246-0.192,0.372-0.289c0.08-0.063,0.159-0.125,0.238-0.186c0.14-0.106,0.28-0.211,0.422-0.315   c0.066-0.048,0.131-0.098,0.198-0.146c0.209-0.152,0.418-0.302,0.631-0.451C240.76,220.973,248.224,218.63,255.999,218.63z    M255.922,265.605c-4.029,0-7.308-3.276-7.308-7.307c0-4.029,3.279-7.308,7.308-7.308c4.03,0,7.308,3.279,7.308,7.308   C263.23,262.329,259.952,265.605,255.922,265.605z M218.25,256.377c0-0.05,0.002-0.098,0.002-0.148   c1.347,0.055,2.774,0.351,4.1,1.095c0.086,0.07,0.182,0.129,0.286,0.169c2.034,1.255,3.795,3.613,4.607,7.827   c1.587,8.229,1.063,11.48-2.218,12.643C220.592,271.612,218.25,264.165,218.25,256.377z M284.754,265.319   c0.813-4.215,2.574-6.572,4.608-7.827c0.103-0.04,0.196-0.099,0.282-0.167c1.326-0.746,2.755-1.042,4.102-1.097   c0,0.05,0.003,0.098,0.003,0.148c0,7.788-2.342,15.232-6.777,21.585C283.691,276.8,283.166,273.548,284.754,265.319z"/><path d="M255.923,252.925c-2.963,0-5.374,2.411-5.374,5.374c0,2.962,2.411,5.373,5.374,5.373s5.374-2.411,5.374-5.373   C261.297,255.336,258.886,252.925,255.923,252.925z M255.923,261.583c-1.812,0-3.285-1.474-3.285-3.284   c0-1.812,1.474-3.285,3.285-3.285c1.812,0,3.285,1.474,3.285,3.285S257.735,261.583,255.923,261.583z"/>
                        </svg>
                        <p class="driver_text">Driver</p>
                    </div>
                </div>

                <div class="seat_map_container">

                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-3</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="seat_wrapper_ac_sleeper_upper d-none">

                <div class="driver_container ac">
                    <div class="door_icon">
                        
                    </div>
    
                    <div class="steering_icon">
                        
                    </div>
                </div>

                <div class="seat_map_container">

                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-2</p>
                        </div>
                        <div class="sleeper_seat bussiness_class_seat_sleeper_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#sleeper_seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-3</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="seat_wrapper_ac_dd_lower d-none">
                <div class="driver_container ac">
                    <div class="door_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="">
                            <path d="M477.681,277.819c-21.996-52.05-53.489-98.781-93.604-138.896S297.23,67.315,245.181,45.319    C195.869,24.481,143.736,13.049,90,11.256V11H0v450h45h45V41.27c49.699,1.779,97.905,12.414,143.502,31.683    c48.471,20.483,91.994,49.816,129.361,87.183c37.367,37.367,66.7,80.891,87.184,129.361C471.249,339.669,482,392.998,482,448h30    C512,388.964,500.453,331.707,477.681,277.819z M60,431H30V41h30V431z" fill="#000000" data-original="#000000"/>
                            <circle cx="45" cy="481" r="20" fill="#000000" data-original="#000000"/>
                        </svg>
                    </div>
    
                    <div class="steering_icon">
                        <svg class="steering" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="206 206 100 100" xml:space="preserve" fill="#000000">
                            <path d="M297.02,235.208c-3.248-6.28-7.982-11.821-13.69-16.023c-7.96-5.862-17.41-8.961-27.33-8.961s-19.371,3.099-27.33,8.961   c-5.71,4.202-10.442,9.743-13.689,16.023c-3.356,6.491-5.129,13.812-5.129,21.169c0,8.856,2.514,17.462,7.274,24.882   c4.632,7.225,11.161,13.008,18.877,16.723c6.264,3.016,12.99,4.547,19.997,4.547c7.005,0,13.734-1.531,19.995-4.547   c7.719-3.715,14.246-9.498,18.88-16.723c4.759-7.42,7.273-16.025,7.273-24.882C302.149,249.019,300.375,241.698,297.02,235.208z    M282.703,264.925c-0.811,4.2-1.384,8.192-0.383,11.094c-1.807,3.592-3.956,6.781-6.4,9.495c-1.841-0.984-4.027-1.698-6.271-2.217   c7.401-6.503,11.84-17.891,11.698-30.376c-0.023-1.928-0.157-3.847-0.396-5.725c0.675,0.077,1.33,0.14,1.97,0.186   c0.89,0.063,1.746,0.096,2.561,0.096c0.723,0,1.418-0.025,2.084-0.075h0.017c0.246-0.019,0.489-0.042,0.727-0.069   c0.011,0.376,0.019,0.752,0.023,1.128c0.029,2.508-0.086,5.019-0.336,7.468C285.727,257.428,283.626,260.13,282.703,264.925z    M270.358,291.296c-4.517,1.861-9.375,2.828-14.356,2.828h-0.002c-4.983,0-9.841-0.967-14.36-2.828   c-0.008-0.004-0.015-0.006-0.023-0.01c-2.051-0.846-4.031-1.876-5.921-3.085c0.215-0.159,0.44-0.313,0.677-0.46   c0.033-0.019,0.067-0.04,0.098-0.06c2.245-1.369,5.322-2.225,8.367-2.76c0.056-0.006,0.113-0.015,0.167-0.029   c5.483-0.943,10.806-0.854,10.898-0.852h0.021c0.027,0,0.052-0.005,0.077-0.007c0.032,0.002,0.065,0.009,0.099,0.007   c0.091-0.003,5.415-0.09,10.899,0.852c0.055,0.015,0.108,0.023,0.163,0.029c3.045,0.535,6.121,1.389,8.366,2.757   c0.033,0.022,0.067,0.044,0.101,0.063c0.236,0.148,0.461,0.301,0.676,0.46c-1.888,1.209-3.868,2.239-5.919,3.085   C270.377,291.29,270.365,291.295,270.358,291.296z M229.678,276.016c1-2.898,0.428-6.892-0.383-11.092   c-0.925-4.795-3.023-7.496-5.293-8.995c-0.251-2.454-0.366-4.962-0.337-7.466c0.004-0.376,0.011-0.752,0.021-1.13   c0.211,0.023,0.424,0.042,0.639,0.059c0.063,0.006,0.125,0.01,0.188,0.015c0.273,0.021,0.551,0.036,0.835,0.046   c0.08,0.004,0.159,0.006,0.238,0.008c0.282,0.008,0.568,0.015,0.859,0.015c0.022,0,0.043,0.002,0.067,0.002   c0.14,0,0.28-0.002,0.422-0.004c0.042-0.002,0.085-0.002,0.127-0.002c0.155-0.002,0.313-0.006,0.47-0.012   c0.065-0.002,0.13-0.002,0.197-0.004c0.144-0.006,0.288-0.012,0.435-0.019c0.083-0.004,0.167-0.009,0.252-0.015   c0.134-0.006,0.268-0.014,0.403-0.023c0.103-0.006,0.207-0.014,0.312-0.021c0.119-0.009,0.24-0.019,0.361-0.027   c0.13-0.011,0.259-0.023,0.389-0.036c0.103-0.008,0.203-0.017,0.303-0.027c0.167-0.017,0.336-0.034,0.505-0.052   c0.069-0.006,0.138-0.015,0.207-0.023c0.05-0.004,0.101-0.01,0.152-0.017c-0.238,1.878-0.372,3.797-0.395,5.727   c-0.142,12.483,4.296,23.871,11.697,30.374c-2.243,0.519-4.429,1.233-6.27,2.217C233.634,282.8,231.483,279.611,229.678,276.016z    M255.999,218.63c7.775,0,15.239,2.343,21.589,6.777c0.211,0.148,0.422,0.299,0.629,0.451c0.068,0.05,0.136,0.101,0.204,0.151   c0.14,0.104,0.278,0.207,0.416,0.311c0.081,0.063,0.161,0.125,0.241,0.188c0.124,0.094,0.248,0.19,0.368,0.287   c0.086,0.068,0.169,0.137,0.255,0.207c0.114,0.094,0.231,0.186,0.345,0.28c0.088,0.073,0.173,0.146,0.259,0.219   c0.11,0.092,0.221,0.186,0.33,0.28c0.088,0.075,0.176,0.153,0.261,0.23c0.107,0.092,0.213,0.186,0.318,0.28   c0.087,0.08,0.173,0.159,0.26,0.238c0.103,0.094,0.206,0.188,0.306,0.282c0.088,0.082,0.174,0.165,0.259,0.246   c0.101,0.096,0.201,0.19,0.299,0.287c0.085,0.083,0.169,0.169,0.254,0.252l0.291,0.291c0.084,0.085,0.167,0.173,0.25,0.259   c0.095,0.098,0.191,0.196,0.285,0.296c0.081,0.085,0.162,0.176,0.246,0.263c0.092,0.1,0.184,0.201,0.276,0.301   c0.081,0.087,0.16,0.179,0.239,0.269c0.093,0.1,0.182,0.203,0.27,0.305c0.079,0.09,0.159,0.182,0.238,0.274   c0.087,0.102,0.176,0.207,0.261,0.309c0.078,0.094,0.154,0.188,0.232,0.282c0.085,0.103,0.171,0.207,0.254,0.313   c0.075,0.095,0.152,0.19,0.229,0.285c0.083,0.106,0.165,0.213,0.248,0.319c0.073,0.096,0.146,0.192,0.219,0.291   c0.082,0.106,0.164,0.215,0.243,0.323c0.07,0.096,0.144,0.194,0.215,0.292c0.08,0.111,0.157,0.219,0.234,0.33   c0.07,0.098,0.139,0.196,0.208,0.296c0.078,0.111,0.155,0.224,0.23,0.334c0.065,0.101,0.136,0.201,0.202,0.301   c0.075,0.113,0.148,0.226,0.222,0.341c0.066,0.1,0.132,0.2,0.196,0.303c0.073,0.115,0.146,0.229,0.217,0.347   c0.063,0.101,0.126,0.203,0.188,0.305c0.07,0.117,0.142,0.236,0.213,0.355c0.059,0.1,0.119,0.203,0.178,0.303   c0.071,0.121,0.14,0.242,0.209,0.365c0.057,0.1,0.114,0.201,0.171,0.303c0.068,0.125,0.136,0.25,0.202,0.375   c0.055,0.101,0.109,0.199,0.161,0.299c0.069,0.129,0.136,0.261,0.204,0.395c0.049,0.094,0.099,0.19,0.146,0.286   c0.071,0.142,0.141,0.282,0.209,0.424c0.042,0.087,0.088,0.175,0.129,0.265c0.08,0.167,0.154,0.334,0.232,0.501   c0.031,0.065,0.061,0.129,0.09,0.194c0.106,0.234,0.209,0.468,0.31,0.704c0.022,0.05,0.043,0.102,0.063,0.152   c0.077,0.186,0.155,0.369,0.23,0.558c0.036,0.083,0.067,0.171,0.101,0.255c0.06,0.154,0.121,0.305,0.18,0.459   c0.037,0.099,0.072,0.197,0.108,0.297c0.053,0.14,0.106,0.282,0.156,0.426c0.038,0.103,0.071,0.207,0.109,0.312   c0.04,0.117,0.081,0.236,0.12,0.355c-0.105,0.042-0.214,0.083-0.325,0.125c-0.027,0.008-0.057,0.019-0.083,0.027   c-0.099,0.036-0.199,0.069-0.302,0.103c-0.037,0.01-0.074,0.023-0.112,0.033c-0.112,0.036-0.225,0.069-0.342,0.1   c-0.021,0.006-0.038,0.011-0.059,0.017c-0.136,0.036-0.274,0.071-0.414,0.104c-0.037,0.009-0.077,0.017-0.115,0.025   c-0.108,0.025-0.22,0.048-0.332,0.071c-0.042,0.008-0.085,0.017-0.127,0.025c-0.147,0.029-0.299,0.056-0.453,0.082   c-2.403,0.396-5.435,0.357-8.92-0.117c-0.115-0.017-0.229-0.031-0.347-0.048c-1.789-0.257-3.714-0.627-5.741-1.105   c-0.675-0.159-1.361-0.33-2.059-0.512c-6.448-1.689-15.564-2.153-15.95-2.172c-0.013-0.002-0.036-0.002-0.048-0.002h-0.002   c0,0-0.03,0-0.078,0.002c-0.048-0.002-0.075-0.002-0.075-0.002c-0.002,0-0.002,0-0.002,0h-0.048c0,0,0,0-0.002,0   c-0.384,0.019-9.5,0.485-15.95,2.172c-2.788,0.733-5.413,1.276-7.798,1.619c-0.635,0.089-1.251,0.165-1.853,0.228   c-2.423,0.25-4.595,0.275-6.451,0.069c-0.332-0.038-0.654-0.082-0.965-0.131c-0.161-0.028-0.317-0.055-0.472-0.086   c-0.027-0.004-0.054-0.011-0.083-0.017c-0.129-0.025-0.257-0.052-0.382-0.082c-0.027-0.006-0.052-0.01-0.077-0.017   c-0.148-0.035-0.292-0.07-0.435-0.108c-0.006-0.002-0.012-0.004-0.019-0.006c-0.131-0.035-0.259-0.073-0.384-0.11   c-0.029-0.01-0.061-0.019-0.092-0.029c-0.111-0.036-0.222-0.073-0.33-0.111c-0.019-0.006-0.038-0.013-0.058-0.019   c-0.113-0.042-0.224-0.086-0.333-0.127c0.031-0.094,0.064-0.186,0.096-0.278c0.046-0.136,0.09-0.27,0.138-0.401   c0.038-0.108,0.08-0.215,0.119-0.323c0.048-0.131,0.096-0.266,0.146-0.397c0.04-0.109,0.084-0.215,0.125-0.323   c0.052-0.13,0.1-0.261,0.153-0.391c0.043-0.104,0.087-0.208,0.131-0.315c0.112-0.274,0.229-0.545,0.349-0.817   c0.04-0.088,0.077-0.177,0.117-0.265c0.052-0.115,0.106-0.231,0.161-0.347c0.054-0.117,0.106-0.234,0.163-0.349   c0.053-0.113,0.109-0.226,0.165-0.338c0.056-0.117,0.113-0.236,0.171-0.351c0.057-0.113,0.113-0.224,0.171-0.334   c0.059-0.117,0.119-0.234,0.18-0.349c0.059-0.111,0.117-0.22,0.175-0.328c0.063-0.115,0.125-0.232,0.19-0.349   c0.061-0.109,0.122-0.215,0.182-0.322c0.064-0.115,0.129-0.232,0.196-0.345c0.063-0.106,0.125-0.213,0.188-0.319   c0.069-0.113,0.136-0.228,0.205-0.34c0.064-0.107,0.129-0.211,0.194-0.315c0.069-0.113,0.14-0.226,0.211-0.336   c0.064-0.105,0.131-0.207,0.2-0.312c0.071-0.111,0.144-0.221,0.217-0.332c0.069-0.103,0.138-0.205,0.207-0.307   c0.073-0.109,0.148-0.219,0.224-0.328c0.071-0.103,0.142-0.203,0.213-0.303c0.078-0.108,0.155-0.217,0.232-0.323   c0.073-0.101,0.144-0.199,0.217-0.297c0.079-0.108,0.159-0.215,0.24-0.321c0.074-0.099,0.148-0.195,0.224-0.293   c0.082-0.104,0.163-0.21,0.245-0.315c0.077-0.096,0.152-0.192,0.229-0.289c0.084-0.104,0.167-0.208,0.253-0.311   c0.077-0.094,0.154-0.188,0.234-0.282c0.085-0.103,0.173-0.207,0.261-0.309c0.077-0.092,0.157-0.184,0.235-0.276   c0.09-0.1,0.18-0.203,0.27-0.303c0.08-0.092,0.161-0.182,0.242-0.269c0.092-0.103,0.184-0.203,0.276-0.301   c0.081-0.087,0.163-0.178,0.246-0.265c0.094-0.099,0.188-0.196,0.284-0.294c0.082-0.087,0.165-0.173,0.248-0.259   c0.099-0.098,0.195-0.194,0.293-0.292c0.083-0.083,0.168-0.167,0.252-0.25c0.1-0.096,0.201-0.192,0.301-0.289   c0.085-0.082,0.171-0.163,0.256-0.244c0.102-0.096,0.205-0.19,0.309-0.284c0.085-0.079,0.171-0.159,0.257-0.236   c0.106-0.096,0.213-0.19,0.319-0.284c0.088-0.075,0.173-0.15,0.26-0.226c0.11-0.096,0.221-0.188,0.332-0.282   c0.085-0.073,0.171-0.146,0.257-0.217c0.115-0.094,0.232-0.188,0.347-0.282c0.086-0.069,0.169-0.138,0.253-0.204   c0.123-0.098,0.246-0.192,0.372-0.289c0.08-0.063,0.159-0.125,0.238-0.186c0.14-0.106,0.28-0.211,0.422-0.315   c0.066-0.048,0.131-0.098,0.198-0.146c0.209-0.152,0.418-0.302,0.631-0.451C240.76,220.973,248.224,218.63,255.999,218.63z    M255.922,265.605c-4.029,0-7.308-3.276-7.308-7.307c0-4.029,3.279-7.308,7.308-7.308c4.03,0,7.308,3.279,7.308,7.308   C263.23,262.329,259.952,265.605,255.922,265.605z M218.25,256.377c0-0.05,0.002-0.098,0.002-0.148   c1.347,0.055,2.774,0.351,4.1,1.095c0.086,0.07,0.182,0.129,0.286,0.169c2.034,1.255,3.795,3.613,4.607,7.827   c1.587,8.229,1.063,11.48-2.218,12.643C220.592,271.612,218.25,264.165,218.25,256.377z M284.754,265.319   c0.813-4.215,2.574-6.572,4.608-7.827c0.103-0.04,0.196-0.099,0.282-0.167c1.326-0.746,2.755-1.042,4.102-1.097   c0,0.05,0.003,0.098,0.003,0.148c0,7.788-2.342,15.232-6.777,21.585C283.691,276.8,283.166,273.548,284.754,265.319z"/><path d="M255.923,252.925c-2.963,0-5.374,2.411-5.374,5.374c0,2.962,2.411,5.373,5.374,5.373s5.374-2.411,5.374-5.373   C261.297,255.336,258.886,252.925,255.923,252.925z M255.923,261.583c-1.812,0-3.285-1.474-3.285-3.284   c0-1.812,1.474-3.285,3.285-3.285c1.812,0,3.285,1.474,3.285,3.285S257.735,261.583,255.923,261.583z"/>
                        </svg>
                        <p class="driver_text">Driver</p>
                    </div>
                </div>
                
                <div class="seat_map_container">
    
                    <div class="seat_container_ac">
                        <div class="ac_seat blank"></div>
                        <div class="ac_seat blank"></div>
                        <div class="ac_seat blank"></div>
                        <div class="ac_seat blank"></div>
                    </div>

                    <div class="seat_container_ac">
                        <div class="ac_seat blank"></div>
                        <div class="ac_seat blank"></div>
                        <div class="ac_seat blank"></div>
                        <div class="ac_seat blank"></div>
                    </div>
        
                    <div class="seat_container_ac">

                        <div class="ac_seat blank"></div>
                        <div class="ac_seat blank"></div>
                
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-1</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-2</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-1</p>
                        </div>

                        <div class="ac_seat blank"></div>

                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-1</p>
                        </div>

                        <div class="ac_seat blank"></div>

                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-1</p>
                        </div>

                        <div class="ac_seat blank"></div>

                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-3</p>
                        </div>
                    </div>

                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-1</p>
                        </div>

                        <div class="ac_seat blank"></div>

                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_lower">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-3</p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="seat_wrapper_ac_dd_upper d-none">
                
                
                <div class="seat_map_container">
    
                    <div class="seat_container_ac">

                        <div class="ac_seat blank"></div>
                        <div class="ac_seat blank"></div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-1</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">A-2</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">

                        <div class="ac_seat blank"></div>
                        <div class="ac_seat blank"></div>

                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-1</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">B-2</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">C-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">D-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">E-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">F-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">G-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">H-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-1</p>
                        </div>
                        <div class="ac_seat blank">
                
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">I-3</p>
                        </div>
                    </div>
        
                    <div class="seat_container_ac">
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-1</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-2</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-3</p>
                        </div>
                        <div class="ac_seat bussiness_class_seat_dd_upper">
                            <svg class="seat" viewBox="0 0 100 100">
                                <use href="#seat_icon_svg"></use>
                            </svg>
                            <p class="seat_label">J-4</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


