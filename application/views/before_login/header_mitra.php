<div class="header2">
    <div class="bar_atas">
        <a href="<?php echo base_url()."index.php/auth_mitra";?>" class="jarak">MITRA RENTCAR</a>
            <a href="<?php echo base_url()."index.php/auth_user";?>"" class="jarak">LOGIN </a>
            <a href="<?php echo base_url()."index.php/c_register_user";?>" class="jarak">DAFTAR</a>
    </div>
</div>
<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand edit_logo" href="index.html">
                <!-- Logo icon -->
                <b><img src="<?php echo base_url('assets/images/join_rentcar.png')?>" alt="homepage" class="dark-logo" /></b>
                <!--End Logo icon -->
                <!-- Logo text -->
            </a>
        </div>
        
        <!-- End Logo -->
        <div class="navbar-collapse">
            <!-- toggle and nav items -->
            <ul class="navbar-nav mr-auto mt-md-0"></ul>
                <!-- User profile and search -->
                <ul class="navbar-nav my-lg-0">
                    <!-- Search -->
                    <li class="nav-item hidden-sm-down search-box"> 
                        <a class="nav-link hidden-sm-down text-muted " href="javascript:void(0)">
                            <i class="ti-search"></i>
                        </a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search here"> 
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                        </form>
                    </li>
                    <!-- Comment -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="fa fa-bell"></i>
                            <div class="notify"> 
                                <span class="heartbit"></span> 
                                <span class="point"></span> 
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-danger btn-circle m-r-10">
                                                <i class="fa fa-link"></i>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>This is title</h5> 
                                                <span class="mail-desc">Just see the my new admin!</span> 
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>This is another title</h5>
                                                <span class="mail-desc">Just a reminder that you have event</span>
                                                <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                            <div class="mail-contnet">
                                                <h5>This is title</h5>
                                                <span class="mail-desc">You can customize this template as you want</span>
                                                <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>This is another title</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> 
                                        <strong>Check all notifications</strong> 
                                        <i class="fa fa-angle-right"></i> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Comment -->
                    <!-- Messages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="fa fa-envelope"></i>
                            <div class="notify"> 
                                <span class="heartbit"></span> 
                                <span class="point"></span> 
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> 
                                                <img src="images/users/5.jpg" alt="user" class="img-circle"> 
                                                <span class="profile-status online pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Michael Qin</h5> 
                                                <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> 
                                                <img src="images/users/2.jpg" alt="user" class="img-circle"> 
                                                <span class="profile-status busy pull-right"></span> 
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>John Doe</h5> 
                                                <span class="mail-desc">I've sung a song! See you at</span> 
                                                <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> 
                                                <img src="images/users/3.jpg" alt="user" class="img-circle"> 
                                                    <span class="profile-status away pull-right"></span> 
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Mr. John</h5> 
                                                <span class="mail-desc">I am a singer!</span> 
                                                <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> 
                                                <img src="images/users/4.jpg" alt="user" class="img-circle"> 
                                                <span class="profile-status offline pull-right"></span> 
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Michael Qin</h5>
                                                <span class="mail-desc">Just see the my admin!</span> 
                                                <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> 
                                        <strong>See all e-Mails</strong> 
                                        <i class="fa fa-angle-right"></i> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Messages -->
                    <!-- Profile -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo base_url('assets/images/users/5.jpg')?>" alt="user" class="profile-pic" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <ul class="dropdown-user">
                                <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
                </nav>
                <div class="header3"></div>
            </div>