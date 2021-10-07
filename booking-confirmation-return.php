<div class="journey_ticket_info_container d-none" id="return_ticket">
                        <h1 class="table_title">Return Ticket</h1>
                        <div class="ticket_details_container">
                            <div class="journey_ticket_info_wrapper">
                                <table class="table table-borderless journey_ticket_info_table">
                                    <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <th scope="row">Mr. <?php echo $_SESSION['user_last_name'];?></th>
                                        </tr>
                                        <tr>
                                            <td>Seats:</td>
                                            <th scope="row"><?php echo $_COOKIE["seats_return"];?></th>
                                        </tr>
                                        <tr>
                                            <td>Boarding Point:</td>
                                            <th scope="row"><?php echo $_SESSION['starting_from_r']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Reporting Time:</td>
                                            <th scope="row"><?php echo $date_return[0]; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Coach No:</td>
                                            <th scope="row"><?php echo $_COOKIE['coach_no_return']; ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="journey_ticket_info_wrapper">
                                <table class="table table-borderless journey_ticket_info_table">
                                    <tbody>
                                        <tr>
                                            <td>Trip Date:</td>
                                            <th scope="row"><?php echo $date_return[1]; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Total Fare:</td>
                                            <th id="return_fare" scope="row"><?php echo $_COOKIE['fare_return']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Destination:</td>
                                            <th scope="row"><?php echo $_COOKIE['ending_point_return']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Departure Time:</td>
                                            <th scope="row"><?php echo $date_return[0]; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Coach Type:</td>
                                            <th scope="row"><?php echo $_COOKIE['coach_type_return']; ?></th>
                                        </tr>
                                        <tr>
                                            <td><button id="book_btn_return" class="button" name="book"><i class="fa fa-bookmark" aria-hidden="true"></i>BOOK</button></td>
                                            <td><button id="purchase_btn_return" class="button" name="purchase"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>PURCHASE</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="payment_method_return_container" class="d-none">

                            <div class="payment_methods_container">
                                <h3>Select your payment option:</h3>
                                <div class="payment_method_holder">
                                    <div id="bkash_return" class="bkash" data-bs-toggle="modal" data-bs-target="#payment_modal">
                                        <img src="img/BKash-Logo.svg" alt="bkash icon">
                                    </div>
                                    <div id="rocket_return" class="bkash" data-bs-toggle="modal" data-bs-target="#payment_modal">
                                        <img src="img/Rocket-Logo.svg" alt="rocket icon">
                                    </div>
                                    <div id="nagad_return" class="bkash" data-bs-toggle="modal" data-bs-target="#payment_modal">
                                        <img src="img/Nagad-Logo.svg" alt="nagad icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>