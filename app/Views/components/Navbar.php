<!------------------------------------------------------- Menu ---------------------------------------------------------------------------->
<?php $session = session(); ?>
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" id="logoadmin" href="/dashboard">AdminFriendZone</a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="<?php echo $session->get('offImage'); ?>" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal" style="color:black"><?php echo $session->get('FName'); ?></h5>
                        <span style="color:black">Administer</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category ">
            <span class="nav-link">แถบเมนู</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href='/dashboard'>
                <span class="menu-icon">
                    <i class="mdi mdi-home"></i>
                </span>
                <span class="menu-title">หน้าแรก</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#Post" aria-expanded="false" aria-controls="Post">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">จัดการโพสต์</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Post">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="postmanage">
                            <span class="menu-icon">
                                <i class="mdi mdi-animation"></i>
                            </span></i> ตรวจสอบโพสต์
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category">
                            <span class="menu-icon">
                                <i class="mdi mdi-star-circle" style="color:black"></i>
                            </span></i> จัดการหมวดหมู่
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reportpost">
                            <span class="menu-icon">
                                <i class="mdi mdi-alert-octagon icon-item" style="color:red"></i>
                            </span></i> รายงานโพสต์
                        </a>
                    </li>


                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                <span class="menu-title">จัดการผู้ใช้</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item">
                        <a class="nav-link" href="/alluser">
                            <span class="menu-icon">
                                <i class="mdi mdi-account-multiple-plus" style="color:blue"></i>
                            </span></i> คำขอการใช้งาน
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/allusermanage">
                            <span class="menu-icon">
                                <i class="mdi mdi-account-check" style="color:green"></i>
                            </span></i> จัดการผู้ใช้งานระบบ
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#admin" aria-expanded="false" aria-controls="admin">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">จัดการแอดมิน</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="admin">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/register">
                            <span class="menu-icon">
                                <i class="mdi mdi-account-multiple icon-item"></i>
                            </span></i> เพิ่มแอดมิน&nbsp;&nbsp;&nbsp;
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adminmanage">
                            <span class="menu-icon">
                                <i class="mdi mdi-account-multiple icon-item"></i>
                            </span></i> จัดการผู้ใช้งานแอดมิน
                        </a>
                    </li>

                </ul>
            </div>
        </li>


    </ul>
</nav>
<!-------------------------------------------------------End Menu ------------------------------------------------------------------------->

<!-----------------------------------------------------  Navbar ------------------------------------------------------------------------>

<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch" style="background-color:#EF5DA8; box-shadow:none;">

        <ul class="navbar-nav w-100" style="background-color:#EF5DA8">
           
        </ul>

        <ul class="navbar-nav navbar-nav">
            <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-view-grid"></i>
                </a>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email"></i>
                    <span class="count bg-success"></span>
                </a>

                <!------------------------------------------- dropdown-menu ----------------------------------------------------------->
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>

                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                            <p class="text-muted mb-0"> 1 Minutes ago </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                            <p class="text-muted mb-0"> 15 Minutes ago </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                            <p class="text-muted mb-0"> 18 Minutes ago </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
            </li>
            <!-------------------------------------------End dropdown-menu ----------------------------------------------------------->





            <li class="nav-item dropdown ">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Event today</p>
                            <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Settings</p>
                            <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-link-variant text-warning"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Launch Admin</p>
                            <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="<?php echo $session->get('offImage'); ?>" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $session->get('FName'); ?></p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown" style="background-color: #EF5DA8;">
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="/logout">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Log out</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>