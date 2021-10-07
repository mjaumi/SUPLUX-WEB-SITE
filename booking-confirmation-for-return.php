<?php


?>

<div class="journey_ticket_info_container">
                        <h1 class="table_title">Return Ticket</h1>
                        <div class="ticket_details_container">
                            <div class="journey_ticket_info_wrapper">
                                <table class="table table-borderless journey_ticket_info_table">
                                    <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <th scope="row">Mr. Aumi</th>
                                        </tr>
                                        <tr>
                                            <td>Seats:</td>
                                            <th scope="row"><?php echo $_COOKIE['seats_return'];?></th>
                                        </tr>
                                        <tr>
                                            <td>Boarding Point:</td>
                                            <th scope="row"><?php echo $_SESSION['starting_from_r']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Reporting Time:</td>
                                            <th scope="row"><?php echo $_SESSION['departure_time_r']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Coach No:</td>
                                            <th scope="row"><?php echo $_SESSION['coach_no_r']; ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="journey_ticket_info_wrapper">
                                <table class="table table-borderless journey_ticket_info_table">
                                    <tbody>
                                        <tr>
                                            <td>Trip Date:</td>
                                            <th scope="row"><?php echo $_SESSION['date_of_return']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Total Fare:</td>
                                            <th scope="row">BDT <?php echo $_SESSION['fare_per_seat_r']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Destination:</td>
                                            <th scope="row"><?php echo $_SESSION['destination_r']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Departure Time:</td>
                                            <th scope="row"><?php echo $_SESSION['departure_time_r']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Coach Type:</td>
                                            <th scope="row"><?php echo $_SESSION['coach_type_r']; ?></th>
                                        </tr>
                                        <tr>
                                            <td><button id="book_btn_return" class="button" name="book"><i class="fa fa-bookmark" aria-hidden="true"></i>BOOK</button></td>
                                            <td><button id="purchase_btn_return" class="button" name="purchase"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>PURCHASE</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>