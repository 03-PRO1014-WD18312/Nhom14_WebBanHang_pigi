<div class="container">
    <?php
    if (isset($list_giohang) && ($list_giohang != "")) {
    ?>
        <form action="index.php?act=giohang" method="post" class="box_cart">
            <h1 class="box_login_title">GIỎ HÀNG</h1>
            <ul class="box_cart_list">
                <?php
                foreach ($list_giohang as $giohang) {
                    extract($giohang);
                    $tongPrice += $last_price;
                ?>
                    <li class="box_cart_item">
                        <input type="hidden" name="idUser" value="<?= $id_user ?>">
                        <div class="box_cart_item-box1">
                            <img src="upload/1_ga_sot_cay_khoai_nc.png" alt="">
                            <div class="box_cart_item-content">
                                <h2 class="box_cart_item-title"><?= $name ?></h2>
                                <p class="box_cart_item-description">
                                    <?php
                                    if ($soluong_ga > 0) {
                                        foreach ($list_loaiga as $loaiga) {
                                            if ($id_ga == $loaiga['id']) {
                                                $name_ga = $loaiga['name'];
                                                $price_ga = $loaiga['price'];
                                            }
                                        }
                                        echo $soluong_ga . " x " . $name_ga . " + " . $price_ga . "đ <br>";
                                    }
                                    if ($soluong_nuoc > 0) {
                                        foreach ($list_loainc as $loainc) {
                                            if ($id_nuoc == $loainc['id']) {
                                                $name_nc = $loainc['name'];
                                                $price_nc = $loainc['price'];
                                            }
                                        }
                                        echo $soluong_nuoc . " x " . $name_nc . " + " . $price_nc . "đ <br>";
                                    }
                                    if ($soluong_mi > 0) {
                                        foreach ($list_loaimi as $loaimi) {
                                            if ($id_mi == $loaimi['id']) {
                                                $name_mi = $loaimi['name'];
                                                $price_mi = $loaimi['price'];
                                            }
                                        }
                                        echo $soluong_mi . " x " . $name_mi . " + " . $price_mi . "đ <br>";
                                    }
                                    if ($soluong_khoai > 0) {
                                        foreach ($list_loaikhoai as $loaikhoai) {
                                            if ($id_khoai == $loaikhoai['id']) {
                                                $name_khoai = $loaikhoai['name'];
                                                $price_khoai = $loaikhoai['price'];
                                            }
                                        }
                                        echo $soluong_khoai . " x " . $name_khoai . " + " . $price_khoai . "đ <br>";
                                    }
                                    ?>
                            </div>
                        </div>
                        <div class="box_cart_item-box3">
                            <span class="box_cart_item-btn-count" onclick="plusDivs(-1,<?= $id ?>)">-</span>
                            <input type="number" value="1" name="so_luong" class="box_cart_item-input" id="<?= $id ?>">
                            <span class="box_cart_item-btn-count" onclick="plusDivs(+1,<?= $id ?>)">+</span>
                            <span class="box_cart_item-price" id="priceId=<?= $id ?>"><?= $last_price ?></span><span class="box_cart_item-price">đ</span>
                            <a href="index.php?act=update_giohang&id=<?= $id ?>" class="box_cart_item-btn action"><i class="fa-solid fa-pen"></i></a>
                            <a href="index.php?act=delete_giohang&id=<?= $id ?>" class="box_cart_item-btn action"><i class="fa-regular fa-trash-can"></i></a>
                        </div>
                    </li>
                <?php
                }
                ?>

                <div class="box_sumprice">
                    <h1 class="box_sumprice-title">Tổng Cộng: <span class="box_sumprice-price" id="sumPrice"><?php echo $tongPrice ?></span>đ</h1>
                    <input class="box_sumprice-btn" type="submit" name="btn_submit" value="THANH TOÁN">
                </div>
            </ul>

        </form>
    <?php
    }
    ?>

</div>