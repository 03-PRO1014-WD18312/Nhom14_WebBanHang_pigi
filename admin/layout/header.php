<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/assets/images/logo_pigi.png" />
  <title>
    Pigi Admin
  </title>
  <!-- This page CSS -->
  <!-- chartist CSS -->
  <link href="../assets/admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet" />
  <!--Toaster Popup message CSS -->
  <link href="../assets/admin/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="../assets/admin/css/style.min.css" rel="stylesheet" />
  <!-- Dashboard 1 Page CSS -->
  <link href="../assets/admin/css/pages/dashboard1.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
  <link href="./assets/icons/fontawesome-free-6.2.1-web/css/all.min.css">
</head>

<body class="skin-default-dark fixed-layout">
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <!-- <div class="preloader">
    <div class="loader">
      <div class="loader__figure"></div>
      <p class="loader__label">Elite admin</p>
    </div>
  </div> -->
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
            <!-- Logo icon --><b>
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <img src="../assets/admin/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
              <!-- Light Logo icon -->
              <img width="40px" height="40px" src="../assets/admin/assets/images/logo_pigi.png" alt="homepage" class="light-logo" />
            </b>
            <!--End Logo icon -->
            <!-- Logo text --><span>
              <!-- dark Logo text -->
              <img src="../assets/admin/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
              <!-- Light Logo text -->
              <img width="100" src="../assets/admin/assets/images/logo-pigi-admin.png" class="light-logo" alt="homepage" /></span>
          </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav me-auto">
            <!-- This is  -->
            <li class="nav-item">
              <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a>
            </li>
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item">
              <form class="app-search d-none d-md-block d-lg-block">
                <input type="text" class="form-control" placeholder="Search & enter" />
              </form>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
          <ul class="navbar-nav my-lg-0">
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ti-email"></i>
                <div class="notify">
                  <span class="heartbit"></span> <span class="point"></span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown">
                <ul>
                  <li>
                    <div class="drop-title">Notifications</div>
                  </li>
                  <li>
                    <div class="message-center">
                      <!-- Message -->
                      <a href="javascript:void(0)">
                        <div class="btn btn-danger btn-circle text-white">
                          <i class="fa fa-link"></i>
                        </div>
                        <div class="mail-contnet">
                          <h5>Luanch Admin</h5>
                          <span class="mail-desc">Just see the my new admin!</span>
                          <span class="time">9:30 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)">
                        <div class="btn btn-success btn-circle text-white">
                          <i class="ti-calendar"></i>
                        </div>
                        <div class="mail-contnet">
                          <h5>Event today</h5>
                          <span class="mail-desc">Just a reminder that you have event</span>
                          <span class="time">9:10 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)">
                        <div class="btn btn-info btn-circle text-white">
                          <i class="ti-settings"></i>
                        </div>
                        <div class="mail-contnet">
                          <h5>Settings</h5>
                          <span class="mail-desc">You can customize this template as you want</span>
                          <span class="time">9:08 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)">
                        <div class="btn btn-primary btn-circle">
                          <i class="ti-user"></i>
                        </div>
                        <div class="mail-contnet">
                          <h5>Pavan kumar</h5>
                          <span class="mail-desc">Just see the my admin!</span>
                          <span class="time">9:02 AM</span>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="nav-link text-center link" href="javascript:void(0);">
                      <strong>Check all notifications</strong>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Comment -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Messages -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-note"></i>
                <div class="notify">
                  <span class="heartbit"></span> <span class="point"></span>
                </div>
              </a>
              <div class="dropdown-menu mailbox dropdown-menu-end animated bounceInDown" aria-labelledby="2">
                <ul>
                  <li>
                    <div class="drop-title">You have 4 new messages</div>
                  </li>
                  <li>
                    <div class="message-center">
                      <!-- Message -->
                      <a href="javascript:void(0)">
                        <div class="user-img">
                          <img src="../assets/admin/assets/images/users/1.jpg" alt="user" class="img-circle" />
                          <span class="profile-status online pull-right"></span>
                        </div>
                        <div class="mail-contnet">
                          <h5>Pavan kumar</h5>
                          <span class="mail-desc">Just see the my admin!</span>
                          <span class="time">9:30 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)">
                        <div class="user-img">
                          <img src="../assets/admin/assets/images/users/2.jpg" alt="user" class="img-circle" />
                          <span class="profile-status busy pull-right"></span>
                        </div>
                        <div class="mail-contnet">
                          <h5>Sonu Nigam</h5>
                          <span class="mail-desc">I've sung a song! See you at</span>
                          <span class="time">9:10 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)">
                        <div class="user-img">
                          <img src="../assets/admin/assets/images/users/3.jpg" alt="user" class="img-circle" />
                          <span class="profile-status away pull-right"></span>
                        </div>
                        <div class="mail-contnet">
                          <h5>Arijit Sinh</h5>
                          <span class="mail-desc">I am a singer!</span>
                          <span class="time">9:08 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)">
                        <div class="user-img">
                          <img src="../assets/admin/assets/images/users/4.jpg" alt="user" class="img-circle" />
                          <span class="profile-status offline pull-right"></span>
                        </div>
                        <div class="mail-contnet">
                          <h5>Pavan kumar</h5>
                          <span class="mail-desc">Just see the my admin!</span>
                          <span class="time">9:02 AM</span>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="nav-link text-center link" href="javascript:void(0);">
                      <strong>See all e-Mails</strong>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Messages -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- mega menu -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown mega-dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="http://localhost/pigi/Nhom14_WebBanHang_pigi/"><i class="ti-layout-width-default"></i></a>
            </li>
            <!-- ============================================================== -->
            <!-- End mega menu -->
            <!-- ============================================================== -->
            <li class="nav-item right-side-toggle">
              <a class="nav-link waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>