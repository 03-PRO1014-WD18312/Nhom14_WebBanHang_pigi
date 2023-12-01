<div class="container">
    <div class="box_thanhtoan">
        <?php
        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
            extract($_SESSION['user']);
        ?>
        <?php
        }
        ?>
        <h2 class="box_login_title">THANH TOÁN</h2>
        <div class="box_form">
            <form class="box_thongtin" action="index.php?act=thanhtoan" method="post">
                <h2 class="box_thongtin_title">Thông tin người nhận</h2>
                <input type="text" class="box_thongtin-input" name="hoTen" placeholder="Nhập thông tin người nhận*" value="<?= $hoten ?>">
                <input type="text" class="box_thongtin-input" name="tel" placeholder="Nhập số điện thoại người nhận*" value="<?= $tel ?>">
                <input type="text" class="box_thongtin-input" name="address" placeholder="Nhập địa chỉ" value="<?= $address ?>">
                <h2 class="box_thongtin_title">Chọn phương thức thanh toán</h2>
                <select name="id_pay" id="" class="box_thongtin-input">
                    <option value="1">Thanh toán khi nhận hàng</option>
                    <option value="2">Thanh toán qua ví điện tử momo</option>
                </select>
                <input class="box_sumprice-btn" type="submit" name="btn_submit" value="THANH TOÁN">
            </form>
            <div class="box_2">
                <div class="box_2_title">
                    <h2>Chi tiết đơn hàng: </h2>
                    <a href="index.php?act=giohang&id=<?= $id ?>"><i class="fa-solid fa-pen"></i></a>
                </div>
                <?php
                foreach ($list_giohang as $giohang) {
                    extract($giohang);
                ?>
                    <div class="box_ctdh">
                        <div class="box_ctdh_img"><img src="upload/<?php
                                                                    foreach ($list_sanpham as $sanpham) {
                                                                        if ($id_sanpham == $sanpham['id']) {
                                                                            echo $sanpham['image'];
                                                                        }
                                                                    }
                                                                    ?>" alt=""></div>
                        <div class="box_ctdh_title">
                            <p class="box_ctdh_title-name">
                                <?= $name ?>
                            </p>
                            <div class="box_ctdh_content">
                                <p class="box_ctdh_content-soluong">x <?= $so_luong ?></p>
                                <p class="box_ctdh_content-price">+ <?= $last_price ?></p>
                            </div>
                            <br>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="box_ctdh_footer">
                    <p class="box_ctdh_footer-title">Tổng cộng:</p>
                    <p class="box_ctdh_footer-content"><?= $sumPrice ?>đ</p>
                </div>
            </div>
        </div>
    </div>
</div>