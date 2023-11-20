<?php
include "model/pdo.php";

include "view/layout/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
            include "view/home.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}
include "view/layout/footer.php";
