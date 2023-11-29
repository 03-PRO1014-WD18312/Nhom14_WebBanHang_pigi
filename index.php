<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/giohang.php";
include "model/loaiga.php";
include "model/loainuoc.php";
include "model/loaimi.php";
include "model/loaikhoai.php";
include "model/thanhtoan.php";
include "view/layout/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'thucdon':
            $list_dm = loadAll_danhmuc();
            $list_sanpham = loadAll_sanpham_home();
            include "view/thucdon.php";
            break;
        case 'chitietsp':
            if(isset($_GET['id']) && ($_GET['id'])){
                $id = $_GET['id'];
                $sanpham = loadOne_sanpham($id);
                $list_ga =loadAll_loaiga();
                $list_mi =loadAll_loaimi();
                $list_nuoc =loadAll_loainuoc();
                $list_khoai =loadAll_loaikhoai();
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    
                    if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                         $id_user = $_POST['id_user'];
                         $id_pro = $_POST['id'];
                         $soluong = $_POST['soluong'];
                         $price = $_POST['price'];
                    if (isset($_POST['id_ga']) && ($_POST['id_ga'])) {
                        $id_ga = $_POST['id_ga'];
                        foreach($list_ga as $loai_ga){
                           if( $id_ga == $loai_ga['id']){
                            $price_ga = $loai_ga['price'];
                           }
                        }
                    }else{
                        $id_ga=0;
                        $price_ga = 0;
                    }

                    if (isset($_POST['id_mi']) && ($_POST['id_mi'])) {
                        $id_mi = $_POST['id_mi'];
                        foreach($list_mi as $loai_mi){
                            if( $id_mi == $loai_mi['id']){
                             $price_mi = $loai_mi['price'];
                            }
                         }
                    }else{
                        $id_mi=0;
                        $price_mi = 0;
                    }
                    if (isset($_POST['id_nuoc']) && ($_POST['id_nuoc'])) {
                        $id_nuoc = $_POST['id_nuoc'];
                        foreach($list_nuoc as $loai_nc){
                            if( $id_nuoc == $loai_nc['id']){
                             $price_nuoc = $loai_nc['price'];
                            }
                         }
                    }else{
                        $id_nuoc=0;
                        $price_nuoc = 0;
                    }
                    if (isset($_POST['id_khoai']) && ($_POST['id_khoai'])) {
                        $id_khoai = $_POST['id_khoai'];
                        foreach($list_khoai as $loai_khoai){
                            if( $id_khoai == $loai_khoai['id']){
                             $price_khoai = $loai_khoai['price'];
                            }
                         }
                    }else{
                        $id_khoai=0;
                        $price_khoai = 0;
                    }
                    $last_price = ($price * $soluong) + $price_ga + $price_mi + $price_nuoc + $price_khoai;
                    insert_giohang($id_user,$id_pro, $id_ga, $id_nuoc, $id_mi,$id_khoai,$soluong,$last_price);
                    ?>
                    <script>
                        window.location = "index.php?act=giohang&id=<?= $_SESSION['user']['id'] ?>"
                    </script>
                    <?php
                    }else{
                        echo "Chua dang nhap";
                    }
                }
            }
            include "view/chitietsanpham.php";
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
        case "giohang":
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                $list_giohang = loadAll_giohang_vsID($id);
                $list_loaiga = loadAll_loaiga();
                $list_loainc = loadAll_loainuoc();
                $list_loaimi = loadAll_loaimi();
                $list_loaikhoai = loadAll_loaikhoai();
                $tongPrice = 0;
                foreach ($list_giohang as $giohang) {
                    extract($giohang);
                    $tongPrice += ($last_price * $so_luong);
                }
            }
            include "view/giohang.php";
            break;
        case "delete_giohang":
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_giohang($id);
                }
                $list_giohang = loadAll_giohang_vsID($id);
                $list_loaiga = loadAll_loaiga();
                $list_loainc = loadAll_loainuoc();
                $list_loaimi = loadAll_loaimi();
                $list_loaikhoai = loadAll_loaikhoai();
                ?>
                <script>
                    document.window.location = "index.php?act=giohang";
                </script>
<?php
            }
            break;
        case "thanhtoan":
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $id_user = $_SESSION['user']['id'];
                $hoTen = $_POST['hoTen'];
                $tel = $_POST['tel'];   
                $address = $_POST['address'];
                $id_pay = $_POST['id_pay'];
                $status = 1;
                insert_thanhtoan($id_user, $hoTen, $tel,  $address, $id_pay, $status);
            }
            include "view/thanhtoan.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/layout/footer.php";
