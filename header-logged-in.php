<?php

session_start();
$user_profile_name = $_SESSION['user_profile_name'];

?>






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
                                <p class="nav_pro_name"><?php echo $user_profile_name;?></p>
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