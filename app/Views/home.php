<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AdminFZ</title>
  <!-- plugins:css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="#" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<!------------------------------------------------------- Menu ---------------------------------------------------------------------------->
  <div class="container-scroller">
    <?php $session = session(); ?>
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" style="color:aliceblue;" href="home.php">AdminFZ</a>
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
                <h5 class="mb-0 font-weight-normal"><?php echo $session->get('FName'); ?></h5>
                <span>Administer</span>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar-today text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">แถบเมนู</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="home.php">
            <span class="menu-icon">
              <i class="mdi mdi-home"></i>
            </span>
            <span class="menu-title">หน้าแรก</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="/register">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">เพิ่มแอดมิน</span>
          </a>
        </li>
        <!-- <li class="nav-item menu-items">
          <a class="nav-link" href="pages/forms/basic_elements.html">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Form Elements</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Tables</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/charts/chartjs.html">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Charts</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/icons/mdi.html">
            <span class="menu-icon">
              <i class="mdi mdi-contacts"></i>
            </span>
            <span class="menu-title">Icons</span>
          </a>
        </li> -->
        <!-- <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <span class="menu-icon">
              <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            </ul>
          </div>
        </li> -->
        <!-- <li class="nav-item menu-items">
          <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Documentation</span>
          </a>
        </li> -->
      </ul>
    </nav>
<!-------------------------------------------------------End Menu ------------------------------------------------------------------------->

<!----------------------------------------------------- End Navbar ------------------------------------------------------------------------>
    <div class="container-fluid page-body-wrapper">

      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Search" style="color:#fff">
              </form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-view-grid"></i>
              </a>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email"></i>
                <span class="count bg-success"></span>
              </a>

              <!------------------------------------------- dropdown-menu ----------------------------------------------------------->
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
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
              <!-------------------------------------------End dropdown-menu ----------------------------------------------------------->
            </li>
            <li class="nav-item dropdown border-left">
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
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
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
      <div class="main-panel">
        <div class="content-wrapper">
<!---------------------------------------------------- End Navbar ------------------------------------------------------------------------->

<!---------------------------------------------------- Tabel show Status ------------------------------------------------------------------>
          <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">4</h3>

                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-warning ">
                        <span class="mdi mdi-account-multiple icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h4 class="text-muted font-weight-normal">คำขอที่รออนุมัติ</h4>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">4</h3>
                        <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success">
                        <span class="mdi mdi-checkbox-marked-outline icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h4 class="text-muted font-weight-normal">คำขอที่อนุมัติแล้ว</h4>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">299</h3>
                        <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> -->
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-primary">
                        <span class="mdi mdi-credit-card-multiple icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h4 class="text-muted font-weight-normal">โพสทั้งหมด</h4>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">12</h3>
                        <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-danger ">
                        <span class="mdi mdi-alert-octagon icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h4 class="text-muted font-weight-normal">รายงานโพส</h4>
                </div>
              </div>
            </div>
          </div>
<!-------------------------------------------------- End Tabel show Status ---------------------------------------------------------------->

<!-------------------------------------------------- Tabel show data User ----------------------------------------------------------------->
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row justify-content-between ">
                    <h4 class="card-title">ข้อมูลผู้ใช้งานทั้งหมด</h4>
                    <div class="template-demo">
                      <button type="button" class="btn btn-outline-success btn-fw">ยืนยันตัวตนสำเร็จ</button>
                      <button type="button" class="btn btn-outline-warning btn-fw">รอยืนยันตัวตน</button>
                      <button type="button" class="btn btn-outline-danger btn-fw">รอการแก้ไข</button>
                      <br><br>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> ไอดี </th>
                          <th> ชื่อ-นามสกุล </th>
                          <th> รหัสบัตรประชาชน </th>
                          <th> เพศ </th>
                          <th> วันเกิด </th>
                          <th> อีเมล </th>
                          <th> สถานะ </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1;
                        foreach ($user as $key => $value) { ?>
                          <tr>
                            <td class="id">
                              <?php echo $value['userId']; ?>
                            </td>
                            <td>
                              <img src="<?php echo $value['userImage']; ?>" alt="image" />
                              <span class="pl-2"><?php echo $value['FName']; ?></span>
                            </td>
                            <td> <?php echo $value['idCard']; ?> </td>
                            <td> <?php echo $value['gender']; ?> </td>
                            <td> <?php echo $value['birthday']; ?> </td>
                            <td> <?php echo $value['email']; ?> </td>
                            <td>
                              <?php if ($value['statusUser'] == "0") {
                                echo '<div class="badge badge-outline-warning">รอการยืนยันตัวตน</div>';
                              } else if ($value['statusUser'] == "1") {
                                echo '<div class="badge badge-outline-success">ยืนยันตัวตนสำเร็จ</div>';
                              } else if ($value['statusUser'] == "2") {
                                echo '<div class="badge badge-outline-danger">รอการแก้ไขข้อมูล</div>';
                              };
                              ?>
                            </td>
                            <td>
                              <a href="#" class="btn btn-outline-primary btn-update" data-bs-toggle="modal" data-bs-target="#update<?= $value['userId'] ?>">
                                <i class="mdi mdi-eye"></i>
                              </a>

                              <a href="/updateStatusFail/<?php echo $value['userId']; ?>" type="button" class="btn btn-outline-danger ">
                                <i class="mdi mdi-close"></i>
                              </a>

                            </td>
                          </tr>
                        <?php } ?>



                  </div>
                </div>
              </div>

              </td>
              </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-------------------------------------------------End Tabel show data User --------------------------------------------------------------->

<!-------------------------------------------------- Modal Update Status ------------------------------------------------------------------>
  <?php $no = 1;
  foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="update<?= $value['userId'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#191c24">
            <h5 class="modal-title" id="exampleModalLongTitle">ข้อมูลเพิ่มเติม</h5>
            <button type="button" class="close " data-dismiss="modal" aria-label="Close" style="color:#fff; margin-right:1px;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body " style="background-color:#191c24">
            <?php echo form_open('UserController/updateStatus' . $value['userId']) ?>

            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4"> <img class="#" src="<?php echo $value['userImage']; ?>" style="width: 100%; height:90%; border-radius:10%" /></div>

                <div class="col-md-2 ">
                  <div class="decoration">
                    <div class="decoration-inside">
                    </div>
                  </div>
                </div>

                <div class="col-md-6 ">
                  <img class="#" src="<?php echo $value['idCardImage']; ?>" style="width: 100%; height:90%; border-radius:3%" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 ">
                  <h4 style="color:	#FF00AA;">ชื่อ-นามสกุล :<span style="color:#fff"> <?php echo $value['FName'] . " " . $value['LName']; ?> </span></h4>
                </div>
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">เลขบัตรประชาชน :<span style="color:#fff"> <?php echo $value['idCard']; ?></span></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">วันเกิด :<span style="color:#fff"> <?php echo $value['birthday']; ?></span></h4>
                </div>
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">ที่อยู่ : :<span style="color:#fff"> <?php echo $value['address']; ?></span></h4>

                </div>

              </div>
              <div class="row">
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">เพศ :<span style="color:#fff"> <?php echo $value['gender']; ?></span></h4>

                </div>
                <div class="col-md-2 ms-auto">
                  <h4 style="color:	#FF00AA;">จังหวัด :<span style="color:#fff"> <?php echo $value['province']; ?></span></h4>

                </div>
                <div class="col-md-2 ms-auto">
                  <h4 style="color:	#FF00AA;">อำเภอ :<span style="color:#fff"> <?php echo $value['district']; ?></span></h4>

                </div>
                <div class="col-md-2 ms-auto">
                  <h4 style="color:	#FF00AA;">ตำบล :<span style="color:#fff"> <?php echo $value['subDistrict']; ?></span></h4>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">เบอร์โทรติดต่อ :<span style="color:#fff"> <?php echo $value['phoneNumber']; ?></span></h4>

                </div>
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">สถานะ : <span style="color:#3CB371">&nbsp; <?php if ($value['statusUser'] == "0") {
                                                                                            echo '<div class="badge badge-outline-warning">รอการยืนยันตัวตน</div>';
                                                                                          } else if ($value['statusUser'] == "1") {
                                                                                            echo '<div class="badge badge-outline-success">ยืนยันตัวตนสำเร็จ</div>';
                                                                                          } else if ($value['statusUser'] == "2") {
                                                                                            echo '<div class="badge badge-outline-danger">รอการแก้ไขข้อมูล</div>';
                                                                                          };
                                                                                          ?></span></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 ms-auto">
                  <a href="/updateStatus/<?php echo $value['userId']; ?>" type="button" class="btn btn-outline-success ">
                    <h5>ผ่าน</h5>
                  </a>
                  &nbsp;
                  <a href="/updateStatusFail/<?php echo $value['userId']; ?>" type="button" class="btn btn-outline-danger ">
                    <h5>ไม่ผ่าน</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
  <?php } ?>
<!------------------------------------------------End Modal Update Status ----------------------------------------------------------------->



  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->

  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>
  <script src="vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page -->
  </script>
</body>

</html>