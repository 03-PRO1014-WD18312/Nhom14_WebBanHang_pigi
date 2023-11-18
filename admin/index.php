<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    include "layout/header.php";
    include "layout/sidebar.php";
    $act = $_GET['act'];
    switch ($act) {
        case "list_dm":
            $list_dm = loadAll_danhmuc();
            include "danhmuc/list_dm.php";
            break;
        case "add_dm":
            include "danhmuc/add_dm.php";
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $name = $_POST['name'];
                $imgname = $_FILES['image']['name'];
                if (isset($imgname)) {
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                }
                insert_danhmuc($name, $imgname);
                $thongbao = "Thêm thành công";
?>
                <script>
                    window.location.href = 'index.php?act=list_dm';
                </script>
            <?php
            }

            break;
        case "xoadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_danhmuc($id);
            }
            $list_dm = loadAll_danhmuc();
            include "danhmuc/list_dm.php";
            break;
        case "suadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $danhmuc_update = loadOne_danhmuc($id);
            }
            include "danhmuc/update_dm.php";
            break;
        case "update_dm":
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $id = $_POST['id'];
                $danhmuc_update = loadOne_danhmuc($id);
                var_dump($danhmuc_update);
                $name = $_POST['name'];
                $imgname = $_FILES['image']['name'];
                if (!empty($imgname)) {
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                    $imgname = $danhmuc_update['image'];
                }
                update_danhmuc($id, $name, $imgname);
                $thongbao = "Cập nhật thành công";
            }
            $list_dm = loadAll_danhmuc();
            include "home.php";
            break;

            default:
                $list_dm = loadAll_danhmuc();
                include "home.php";
                break;
        }
        include "layout/footer.php";
    } else {
        include "layout/auth/header.php";

        if (isset($_GET['auth']) && ($_GET['auth'] != "")) {
            $auth = $_GET['auth'];
            switch ($auth) {
                case "forgot_pass":
                    include "auth/forgot.php";
                    break;
                case "sign_up":
                    include "auth/forgot.php";
                    break;
                case "update_pass":
                    include "auth/updatepassword.php";
                    break;
                default:
                    include "auth/login.php";
                    break;
            }
        } else {
            include "auth/login.php";
        }
        include "layout/auth/footer.php";
    }