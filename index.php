<?php
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "view/layout/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'thucdon':
            $list_dm = loadAll_danhmuc();
            $list_sanpham = loadAll_sanpham_home();
            include "view/thucdon.php";
            break;
        case 'login':
            include "view/login.php";
            break;
        case 'signup':
            include "view/signup.php";
            break;
        case 'forgot':
            include "view/forgot.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/layout/footer.php";
