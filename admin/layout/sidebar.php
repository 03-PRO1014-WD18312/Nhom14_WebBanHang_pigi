<?php
extract($_SESSION['user_login']);
?>
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- User Profile-->
    <div class="user-profile">
      <div class="user-pro-body">
        <div>
          <img src="../upload/<?= $image ?>" alt="user-img" class="img-circle" />
        </div>
        <div class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $hoten ?><span class="caret"></span></a>
          <div class="dropdown-menu animated flipInY">
            <!-- text-->
            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
            <!-- text-->
            <!-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> -->
            <!-- text-->
            <!-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a> -->
            <!-- text-->
            <!-- <div class="dropdown-divider"></div> -->
            <!-- text-->
            <!-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a> -->
            <!-- text-->
            <!-- <div class="dropdown-divider"></div> -->
            <!-- text-->
            <a href="index.php?act=logout" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</a>
            <!-- text-->
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="nav-small-cap">--- DASHBOARD</li>
        <li>
          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Danh mục
              <!-- <span class="badge rounded-pill bg-cyan ms-auto">2</span> -->
            </span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="index.php?act=list_dm">List danh mục</a></li>
            <li><a href="index.php?act=add_dm">Add danh mục</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-utensils"></i><span class="hide-menu">Sản phẩm
              <!-- <span class="badge rounded-pill bg-cyan ms-auto">2</span> -->
            </span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="index.php?act=list_sp">List sản phẩm</a></li>
            <li><a href="index.php?act=add_sp">Add sản phẩm</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Tài khoản
              <!-- <span class="badge rounded-pill bg-cyan ms-auto">2</span> -->
            </span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="index.php?act=list_tk">List tài khoản</a></li>
            <li><a href="index.php?act=add_tk">Add tài khoản</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-truck"></i><span class="hide-menu">Dịch vụ
              <!-- <span class="badge rounded-pill bg-cyan ms-auto">2</span> -->
            </span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="index.php?act=list_dv">List dịch vụ</a></li>
            <li><a href="index.php?act=add_dv">Add dịch vụ</a></li>
          </ul>
        </li>
        
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>