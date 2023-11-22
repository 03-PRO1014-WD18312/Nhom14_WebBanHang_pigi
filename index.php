<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "view/layout/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'thucdon':
            $list_dm = loadAll_danhmuc();
            $list_sanpham = loadAll_sanpham_home();
            include "view/thucdon.php";
            break;
        case 'logout':
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
?>
            <script>
                window.location.href = 'index.php';
            </script>
            <?php
            break;
        case 'login':
            if (isset($_SESSION['error_check'])) {
                unset($_SESSION['error_check']);
            }
            if (isset($_SESSION['error_check'])) {
                unset($_SESSION['error_check']);
            }
            if (isset($_SESSION['error_cfp'])) {
                unset($_SESSION['error_cfp']);
            }
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $user = $_POST['user'];
                $pass = md5($_POST['pass']);
                $user_login = check_user($user, $pass);
                if ((is_array($user_login)) && (count($user_login) > 0)) {
                    $_SESSION['user'] = $user_login;
                    if (isset($_SESSION['error'])) {
                        unset($_SESSION['error']);
                    }
            ?>
                    <script>
                        window.location.href = 'index.php';
                    </script>
                <?php
                } else {
                    $thongbao = "Tài khoản không tồn tại vui lòng đăng nhập lại!";
                    $_SESSION['error'] = $thongbao;
                }
            }
            include "view/login.php";
            break;
        case 'signup':
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $user = $_POST['user'];
                $pass = md5($_POST['password']);
                $confirmPass = md5($_POST['confirm_password']);
                $hoten = $_POST['name'];
                $email = $_POST['email'];
                $id_role = 1;
                if ($pass == $confirmPass) {
                    if (isset($_SESSION['error_cfp'])) {
                        unset($_SESSION['error_cfp']);
                    }
                    insert_taikhoan($user, $pass, $hoten, "", $email, "", "", $id_role);
                    $_SESSION['user'] = check_user($user, $pass);
                ?>
                    <script>
                        window.location.href = 'index.php';
                    </script>
<?php
                } else {
                    $mess = "Vui lòng nhập lại đúng mật khẩu";
                    $_SESSION['error_cfp'] = $mess;
                }
            }
            include "view/signup.php";
            break;
        case 'forgot':
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = md5($_POST['password']);
                $confirmPass = md5($_POST['confirm_password']);
                $user_forgot = check_user_forgot($user, $email);
                if ((is_array($user_forgot)) && (count($user_forgot) > 0) && ($pass == $confirmPass)) {
                    $id = $user_forgot['id'];
                    if (isset($_SESSION['error_check'])) {
                        unset($_SESSION['error_check']);
                    }
                    update_pass($id, $pass);
                    $mess = "Đổi mật khẩu thành công quay lại login để đăng nhập!";
                    $_SESSION['success'] = $mess;
                } else if ((!is_array($user_forgot)) && ($pass != $confirmPass)) {
                    if (isset($_SESSION['error_check'])) {
                        unset($_SESSION['error_check']);
                    }
                    if (isset($_SESSION['success'])) {
                        unset($_SESSION['success']);
                    }
                    $mess = "Tên đăng nhập hoặc email không đúng<br>Vui lòng xác nhận đúng mật khẩu mới!";
                    $_SESSION['error_check'] = $mess;
                } else if (($pass != $confirmPass)) {
                    if (isset($_SESSION['error_check'])) {
                        unset($_SESSION['error_check']);
                    }
                    if (isset($_SESSION['success'])) {
                        unset($_SESSION['success']);
                    }
                    $mess = "Vui lòng xác nhận đúng mật khẩu mới!";
                    $_SESSION['error_check'] = $mess;
                } else {
                    if (isset($_SESSION['error_check'])) {
                        unset($_SESSION['error_check']);
                    }
                    if (isset($_SESSION['success'])) {
                        unset($_SESSION['success']);
                    }
                    $mess = "Tên đăng nhập hoặc email không đúng!";
                    $_SESSION['error_check'] = $mess;
                }
            }
            include "view/forgot.php";
            break;
        case "danh_muc":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $id_dm = $id;
                $list_dm = loadAll_danhmuc();
                $list_sanpham = load_sanpham_cungloai("", $id);
                include "view/dm_thucdon.php";
            } else {
                $list_dm = loadAll_danhmuc();
                $list_sanpham = loadAll_sanpham_home();
                include "view/thucdon.php";
            }
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/layout/footer.php";
