<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/dichvu.php";
include "../model/taikhoan.php";
include "../model/loaiga.php";
include "../model/loainuoc.php";
include "../model/loaimi.php";
include "../model/loaikhoai.php";
include "../model/sanpham.php";

if (isset($_SESSION['user_login']) && ($_SESSION['user_login'] != "")) {
    include "layout/header.php";
    include "layout/sidebar.php";
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
                //danh muc
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
                            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
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
                            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
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
                //dịch vụ
            case "add_dv":
                include "dichvu/add_dv.php";
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $imgname = $_FILES['image']['name'];

                    if (isset($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    insert_dichvu($title, $content, $imgname);

                ?>
                    <script>
                        window.location.href = 'index.php?act=list_dv';
                    </script>
                <?php
                }
                break;
            case "xoadv":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_dichvu($id);
                }
                $list_dv = loadAll_dichvu();
                include "dichvu/list_dv.php";
                break;
            case "suadv":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $dichvu_update = loadOne_dichvu($id);
                }
                include "dichvu/update_dv.php";
                break;
            case "update_dv":
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $id = $_POST['id'];
                    $dichvu_update = loadOne_dichvu($id);
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $imgname = $_FILES['image']['name'];
                    if (!empty($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        $imgname = $dichvu_update['image'];
                    }
                    update_dichvu($id, $title, $content, $imgname);
                    $thongbao = "Cập nhật thành công";

                ?>
                    <script>
                        window.location.href = 'index.php?act=list_dv';
                    </script>
                <?php
                }
                break;
            case "list_dv":
                $list_dv = loadAll_dichvu();
                include "dichvu/list_dv.php";
                break;
                // tai khoan:
            case "add_tk":
                $list_role = loadAll_role();
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $user = $_POST['user'];
                    $pass = md5($_POST['pass']);
                    $hoten = $_POST['hoten'];
                    $imgname = $_FILES['image']['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id_role = $_POST['id_role'];
                    if (isset($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    insert_taikhoan($user, $pass, $hoten, $imgname, $email, $address, $tel, $id_role);
                    $thongbao = "Thêm thành công";

                ?>
                    <script>
                        window.location.href = 'index.php?act=list_tk';
                    </script>
                <?php
                }
                include "taikhoan/add_tk.php";

                break;
            case "list_tk":
                $list_tk = loadAll_taikhoan();
                include "taikhoan/list_tk.php";
                break;
            case "suatk":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $taikhoan_update = loadOne_taikhoan($id);
                }
                $list_role = loadAll_role();
                include "taikhoan/update_tk.php";
                break;
            case "update_tk":
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $id = $_POST['id'];
                    $taikhoan_update = loadOne_taikhoan($id);

                    $user = $_POST['user'];
                    $pass = md5($_POST['pass']);
                    $hoten = $_POST['hoten'];
                    $imgname = $_FILES['image']['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id_role = $_POST['id_role'];
                    if (!empty($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        $imgname = $taikhoan_update['image'];
                    }
                    update_taikhoan($id, $user, $pass, $hoten, $imgname, $email, $address, $tel, $id_role);
                    $thongbao = "Cập nhật thành công";
                }
                $list_tk = loadAll_taikhoan();
                include "taikhoan/list_tk.php";
                break;

            case "xoatk":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_taikhoan($id);
                }
                $list_tk = loadAll_taikhoan();
                include "taikhoan/list_tk.php";
                break;
            case "logout":
                if (isset($_SESSION['user_login']) && ($_SESSION['user_login'] != "")) {
                    unset($_SESSION['user_login']);
                ?>
                    <script>
                        window.location.href = 'index.php';
                    </script>
                <?php
                }
                break;
                // Sản phẩm
            case "add_sp":
                $list_dm = loadAll_danhmuc();
                $list_lg = loadAll_loaiga();
                $list_nc = loadAll_loainuoc();
                $list_mi = loadAll_loaimi();
                $list_khoai = loadAll_loaikhoai();
                include "sanpham/add_sp.php";
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $imgname = $_FILES['image']['name'];
                    $description = $_POST['description'];
                    $id_dm = $_POST['id_dm'];
                    $id_ga = $_POST['id_ga'];
                    $soluong_ga = $_POST['soluong_ga'];
                    $id_nuoc = $_POST['id_nuoc'];
                    $soluong_nuoc = $_POST['soluong_nuoc'];
                    $id_mi = $_POST['id_mi'];
                    $soluong_mi = $_POST['soluong_mi'];
                    $id_khoai = $_POST['id_khoai'];
                    $soluong_khoai = $_POST['soluong_khoai'];

                    if (isset($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    insert_sanpham($name, $price, $imgname, $description, $id_dm, $id_ga, $soluong_ga, $id_nuoc, $soluong_nuoc, $id_mi, $soluong_mi, $id_khoai, $soluong_khoai);
                    $thongbao = "Thêm thành công";
                ?>
                    <script>
                        window.location.href = 'index.php?act=list_sp';
                    </script>
                <?php
                }
                break;
            case "list_sp":
                $list_sp = loadAll_sanpham();
                $list_dm = loadAll_danhmuc();
                $list_lg = loadAll_loaiga();
                $list_nc = loadAll_loainuoc();
                $list_mi = loadAll_loaimi();
                $list_khoai = loadAll_loaikhoai();
                include "sanpham/list_sp.php";
                break;
            case "xoasp":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_sanpham($id);
                }
                $list_sp = loadAll_sanpham();
                $list_dm = loadAll_danhmuc();
                $list_lg = loadAll_loaiga();
                $list_nc = loadAll_loainuoc();
                $list_mi = loadAll_loaimi();
                $list_khoai = loadAll_loaikhoai();
                include "sanpham/list_sp.php";
                break;
            case "suasp":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $sanpham_update = loadOne_sanpham($id);
                }
                $list_sp = loadAll_sanpham();
                $list_dm = loadAll_danhmuc();
                $list_lg = loadAll_loaiga();
                $list_nc = loadAll_loainuoc();
                $list_mi = loadAll_loaimi();
                $list_khoai = loadAll_loaikhoai();
                include "sanpham/update_sp.php";
                break;
            case "update_sp":
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $id = $_POST['id'];
                    $sanpham_update = loadOne_sanpham($id);

                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $imgname = $_FILES['image']['name'];
                    $description = $_POST['description'];
                    $id_dm = $_POST['id_dm'];
                    $id_ga = $_POST['id_ga'];
                    $soluong_ga = $_POST['soluong_ga'];
                    $id_nuoc = $_POST['id_nuoc'];
                    $soluong_nuoc = $_POST['soluong_nuoc'];
                    $id_mi = $_POST['id_mi'];
                    $soluong_mi = $_POST['soluong_mi'];
                    $id_khoai = $_POST['id_khoai'];
                    $soluong_khoai = $_POST['soluong_khoai'];

                    if (!empty($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        $imgname = $sanpham_update['image'];
                    }
                    update_sanpham($id, $name, $price, $imgname, $description, $id_dm, $id_ga, $soluong_ga, $id_nuoc, $soluong_nuoc, $id_mi, $soluong_mi, $id_khoai, $soluong_khoai);
                    $thongbao = "Cập nhật thành công";
                }
                $list_sp = loadAll_sanpham();
                $list_dm = loadAll_danhmuc();
                $list_lg = loadAll_loaiga();
                $list_nc = loadAll_loainuoc();
                $list_mi = loadAll_loaimi();
                $list_khoai = loadAll_loaikhoai();
                include "sanpham/list_sp.php";
                break;
                // Loai ga
            case "add_lg":
                include "loaiga/add_lg.php";
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $image = $_FILES['image']['name'];
                    if (isset($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    insert_loaiga($name, $price, $image);
                ?>
                    <script>
                        window.location.href = 'index.php?act=list_lg';
                    </script>
                <?php
                }
                break;
            case "xoalg":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_loaiga($id);
                }
                $list_lg = loadAll_loaiga();
                include "loaiga/list_lg.php";
                break;
            case "sualg":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $loaiga_update = loadOne_loaiga($id);
                }

                include "loaiga/update_lg.php";
                break;
            case "update_lg":
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $id = $_POST['id'];
                    $loaiga_update = loadOne_loaiga($id);
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $imgname = $_FILES['image']['name'];
                    if (!empty($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        $imgname = $loaiga_update['image'];
                    }
                    update_loaiga($id, $name, $price, $imgname);
                    $thongbao = "Cập nhật thành công";
                }
                $list_lg = loadAll_loaiga();
                ?>
                <script>
                    window.location.href = 'index.php?act=list_lg';
                </script>
                <?php
                break;
            case "list_lg":
                $list_lg = loadAll_loaiga();
                include "loaiga/list_lg.php";
                break;
                // loại nước:
            case "add_nc":
                include "loainuoc/add_nc.php";
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $imgname = $_FILES['image']['name'];
                    if (isset($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    insert_loainuoc($name, $price, $imgname);
                    $thongbao = "Thêm thành công";
                ?>
                    <script>
                        window.location.href = 'index.php?act=list_nc';
                    </script>
                <?php
                }
                break;
            case "list_nc":
                $list_nc = loadAll_loainuoc();
                include "loainuoc/list_nc.php";
                break;

            case "xoanc":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_loainuoc($id);
                }
                $list_nc = loadAll_loainuoc();
                include "loainuoc/list_nc.php";
                break;

            case "suanc":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $loainuoc_update = loadOne_loainuoc($id);
                }
                include "loainuoc/update_nc.php";
                break;
            case "update_nc":
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $id = $_POST['id'];
                    $loainuoc_update = loadOne_loainuoc($id);
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $imgname = $_FILES['image']['name'];
                    if (!empty($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        $imgname = $loainuoc_update['image'];
                    }
                    update_loainuoc($id, $name, $price, $imgname);
                    $thongbao = "Cập nhật thành công";
                }
                $list_nc = loadAll_loainuoc();
                ?>
                <script>
                    window.location.href = 'index.php?act=list_nc';
                </script>
                <?php
                break;

                // loại mì
            case "add_lm":
                include "loaimi/add_lm.php";
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $imgname = $_FILES['image']['name'];
                    if (isset($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    insert_loaimi($name, $price, $imgname);
                    $thongbao = "Thêm thành công";
                ?>
                    <script>
                        window.location.href = 'index.php?act=list_lm';
                    </script>
                <?php
                }
                break;
            case "list_lm":
                $list_lm = loadAll_loaimi();
                include "loaimi/list_lm.php";
                break;

            case "xoalm":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_loaimi($id);
                }
                $list_lm = loadAll_loaimi();
                include "loaimi/list_lm.php";
                break;

            case "sualm":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $loaimi_update = loadOne_loaimi($id);
                }
                include "loaimi/update_lm.php";
                break;
            case "update_lm":
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $id = $_POST['id'];
                    $loaimi_update = loadOne_loaimi($id);
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $imgname = $_FILES['image']['name'];
                    if (!empty($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        $imgname = $loaimi_update['image'];
                    }
                    update_loaimi($id, $name, $price, $imgname);
                    $thongbao = "Cập nhật thành công";
                }
                $list_lm = loadAll_loaimi();
                ?>
                <script>
                    window.location.href = 'index.php?act=list_lm';
                </script>
                <?php
                break;

                // loại khoai
            case "add_lk":
                include "loaikhoai/add_lk.php";
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $imgname = $_FILES['image']['name'];
                    if (isset($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    insert_loaikhoai($name, $price, $imgname);
                    $thongbao = "Thêm thành công";
                ?>
                    <script>
                        window.location.href = 'index.php?act=list_lk';
                    </script>
                <?php
                }
                break;
            case "list_lk":
                $list_lk = loadAll_loaikhoai();
                include "loaikhoai/list_lk.php";
                break;

            case "xoalk":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_loaikhoai($id);
                }
                $list_lk = loadAll_loaikhoai();
                include "loaikhoai/list_lk.php";
                break;

            case "sualk":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $loaikhoai_update = loadOne_loaikhoai($id);
                }
                include "loaikhoai/update_lk.php";
                break;
            case "update_lk":
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $id = $_POST['id'];
                    $loaikhoai_update = loadOne_loaikhoai($id);
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $imgname = $_FILES['image']['name'];
                    if (!empty($imgname)) {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        $imgname = $loaikhoai_update['image'];
                    }
                    update_loaikhoai($id, $name, $price, $imgname);
                    $thongbao = "Cập nhật thành công";
                }
                $list_lk = loadAll_loaikhoai();
                ?>
                <script>
                    window.location.href = 'index.php?act=list_lk';
                </script>
                <?php
                break;


            default:
                $list_dm = loadAll_danhmuc();
                include "home.php";
                break;
        }
    } else {
        $list_dm = loadAll_danhmuc();
        include "home.php";
    }
    include "layout/footer.php";
} else {
    include "layout/auth/header.php";
    if (isset($_GET['auth']) && ($_GET['auth'] != "")) {
        $auth = $_GET['auth'];
        switch ($auth) {
            case "forgot_pass":
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $user = $_POST['user'];
                    $email = $_POST['email_forgot'];
                    $user_forgot = check_user_forgot($user, $email);
                    if ((is_array($user_forgot)) && (count($user_forgot) > 0)) {
                        $_SESSION['user_forgot'] = $user_forgot;
                        if (isset($_SESSION['error_check'])) {
                            unset($_SESSION['error_check']);
                        }
                        if (isset($_SESSION['success'])) {
                            unset($_SESSION['success']);
                        }
                ?>
                        <script>
                            window.location.href = 'index.php?auth=update_pass';
                        </script>
                    <?php
                    } else {
                        $mess = "Tên đăng nhập hoặc email không đúng!";
                        $_SESSION['error_check'] = $mess;
                    }
                }
                include "auth/forgot.php";
                break;
            case "update_pass":
                if (isset($_SESSION['user_forgot']) && ($_SESSION['user_forgot'] != "")) {
                    $id = $_SESSION['user_forgot']['id'];
                    if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                        $pass = md5($_POST['password']);
                        $confirmPass = md5($_POST['confirm_password']);
                        if ($pass == $confirmPass) {
                            if (isset($_SESSION['error_cfp'])) {
                                unset($_SESSION['error_cfp']);
                            }
                            update_pass($id, $pass);
                            $mess = "Đổi mật khẩu thành công quay lại login để đăng nhập!";
                            $_SESSION['success'] = $mess;
                        } else {
                            $mess = "Vui lòng nhập lại đúng mật khẩu";
                            $_SESSION['error_cfp'] = $mess;
                        }
                    }
                }
                include "auth/updatepassword.php";
                break;
            case "sign_up":
                if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                    $user = $_POST['user'];
                    $pass = md5($_POST['password']);
                    $confirmPass = md5($_POST['confirm_password']);
                    $hoten = $_POST['name'];
                    $email = $_POST['email'];
                    $id_role = 2;
                    if ($pass == $confirmPass) {
                        if (isset($_SESSION['error_cfp'])) {
                            unset($_SESSION['error_cfp']);
                        }
                        insert_taikhoan($user, $pass, $hoten, "", $email, "", "", $id_role);
                    } else {
                        $mess = "Vui lòng nhập lại đúng mật khẩu";
                        $_SESSION['error_cfp'] = $mess;
                    }
                }
                include "auth/signup.php";
                break;
            default:
                include "auth/login.php";
                if (isset($_POST['btn_login']) && ($_POST['btn_login'])) {
                    $user = $_POST['user'];
                    $pass = md5($_POST['pass']);
                    // check tk
                    $user_login = check_user($user, $pass);
                    if ((is_array($user_login)) && (count($user_login) > 0) && ($user_login['id_role']) == 2) {
                        $_SESSION['user_login'] = $user_login;
                        if (isset($_SESSION['error'])) {
                            unset($_SESSION['error']);
                        }
                        $list_dm = loadAll_danhmuc();
                    ?>
                        <script>
                            window.location.href = 'index.php';
                        </script>
                <?php
                    } else {
                        $mess = "Tên đăng nhập hoặc mật khẩu không đúng";
                        $_SESSION['error'] = $mess;
                    }
                }
                break;
        }
    } else {
        include "auth/login.php";
        if (isset($_POST['btn_login']) && ($_POST['btn_login'])) {
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);
            // check tk
            $user_login = check_user($user, $pass);
            if ((is_array($user_login)) && (count($user_login) > 0) && ($user_login['id_role']) == 2) {
                $_SESSION['user_login'] = $user_login;
                if (isset($_SESSION['error'])) {
                    unset($_SESSION['error']);
                }
                $list_dm = loadAll_danhmuc();
                ?>
                <script>
                    window.location.href = 'index.php';
                </script>
<?php
            } else {
                $mess = "Tên đăng nhập hoặc mật khẩu không đúng";
                $_SESSION['error'] = $mess;
            }
        }
    }
    include "layout/auth/footer.php";
}
