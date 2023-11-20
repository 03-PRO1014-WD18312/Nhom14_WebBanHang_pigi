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
        default:
            include "view/home.php";
            break;
    }
}
include "view/layout/footer.php";
