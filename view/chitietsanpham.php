<?php
if (isset($sanpham) && ($sanpham != "")) {
    extract($sanpham);
?>
    <div class="container">
        <div class="ctsp">
            <div class="box_ctsp">
                <div class="box_ctsp_title">
                    <img src="upload/<?= $image ?>" alt=""> <br>
                    <h4 style="text-align: center; width: 250px; font-weight: bold;margin: 10px auto; font-size: 16px; font-family: 'Playpen Sans', cursive; "><?= $name ?></h4>
                </div>
                <form action="index.php?act=chitietsp&id=<?= $id ?>" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" id="price" name="price" value="<?= $price ?>">
                    <?php
                        if (isset($_SESSION['user']) && ($_SESSION['user'])) {
?>
                    <input type="hidden" name="id_user" value="<?= $_SESSION['user']['id'] ?>">
                       <?php }
                    ?>

                    <?php
                    if ($soluong_ga > 0) {
                    ?>
                        <select class="select-box" name="id_ga">
                            <option value="0">Chọn loại gà</option>
                            <?php
                            foreach ($list_ga as $ga) {
                                extract($ga);
                            ?>
                                <option value="<?= $id ?>" <?= $id == $id_ga ? "selected":"" ?>><?= $name ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    <?php
                    }     
                    
                    if ($soluong_mi > 0) {
                        ?>
                            <select class="select-box" name="id_mi">
                                <option value="1">Chọn loại mì</option>
                                <?php
                                foreach ($list_mi as $mi) {
                                    extract($mi);
                                ?>
                                    <option value="<?= $id ?>"  <?= $id == $id_mi ? "selected":"" ?>><?= $name ?>  </option>
                                <?php
                                }
                                ?>
                            </select>
                        <?php
                        }     
                         
                        if ($soluong_nuoc > 0) {
                            ?>
                                <select class="select-box" name="id_nuoc">
                                    <option value="2">Chọn loại nước</option>
                                    <?php
                                    foreach ($list_nuoc as $nuoc) {
                                        extract($nuoc);
                                    ?>
                                        <option value="<?= $id ?>" <?= $id == $id_nuoc ? "selected":"" ?>><?= $name ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            <?php
                            }     
                            
                            if ($soluong_khoai > 0) {
                                ?>
                                    <select class="select-box" name="id_khoai">
                                        <option value="3">Chọn loại Khoai</option>
                                        <?php
                                        foreach ($list_khoai as $khoai) {
                                            extract($khoai);
                                        ?>
                                            <option value="<?= $id ?>" <?= $id == $id_khoai ? "selected":"" ?>><?= $name ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                }
                    ?>
                    <div class="box_count">
                        <div class="box_count_left">
                            <div class="box_1">
                                <button type="button"  onclick="soLuong(-1)">-</button>
                            </div>
                            <div class="box_center">
                                <input type="number" name="soluong" value="1" id="soluong">
                            </div>
                            <div class="box_1">
                                <button type="button" onclick="soLuong(+1)">+</button>
                            </div>
                        </div>
                        <div class="box_count_right"><span id="sumPrice"><?= $sanpham['price'] ?></span>đ</div>
                    </div>
                    <input class="box_sumprice-btn" type="submit" name="btn_submit" id="" value="Đặt hàng">
                </form>
            </div>
        </div>

    </div>
<?php
}
?>

















<!-- <div class="box_product">
    <ul class="list_product">
        <li class="product_item">
            <img class="product_item-img" src="upload/6d2e290195e851-cmggin_1_2.png" alt="" />
            <h2 class="product_item-name">
                CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH) </h2>
            <p class="product_item-price">43000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/3ga_1my_500x500-05_1.jpg" alt="" />
            <h2 class="product_item-name">
                COMBO CẶP ĐÔI ĂN Ý 145K (3 GÀ GIÒN VUI VẺ + 1 MỲ Ý SỐT BÒ BẰM + 1 KHOAI VỪA + 2 NƯỚC NGỌT) </h2>
            <p class="product_item-price">145000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/combo_180k.jpg" alt="" />
            <h2 class="product_item-name">
                COMBO 185K (3 MIẾNG GÀ GIÒN + 2 MÌ Ý + 1 KHOAI VỪA + 3 NƯỚC NGỌT VỪA) </h2>
            <p class="product_item-price">185000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/499k.jpg" alt="" />
            <h2 class="product_item-name">
                TIỆC KIỂU MỚI, QUÀ CHUẨN GU 499K </h2>
            <p class="product_item-price">499000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/2_ga_gion_khoai_nc.png" alt="" />
            <h2 class="product_item-name">
                2 Miếng gà giòn + Khoai tây vừa + Nước ngọt lớn </h2>
            <p class="product_item-price">91000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/my_ga_nc.png" alt="" />
            <h2 class="product_item-name">
                01 MIẾNG GÀ GIÒN VUI VẺ + 1 MỲ Ý SỐT BÒ BẰM + 01 NƯỚC NGỌT LỚN </h2>
            <p class="product_item-price">78000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/my_lon_ga_nc.png" alt="" />
            <h2 class="product_item-name">
                MÌ Ý SỐT BÒ BẰM LỚN + 1 MIẾNG GÀ RÁN + NƯỚC NGỌT LỚN </h2>
            <p class="product_item-price">88000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/0ea5c976da5a4a-2minggsgstcay_1.png" alt="" />
            <h2 class="product_item-name">
                2 MIẾNG GÀ SỐT CAY </h2>
            <p class="product_item-price">70000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/g_s_t_cay_1.png" alt="" />
            <h2 class="product_item-name">
                MIẾNG GÀ SỐT CAY </h2>
            <p class="product_item-price">35000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/com_ga_chili_nc.png" alt="" />
            <h2 class="product_item-name">
                1 MIẾNG GÀ SỐT CAY + CƠM + NƯỚC NGỌT LỚN </h2>
            <p class="product_item-price">60000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
        <li class="product_item">
            <img class="product_item-img" src="upload/my_lon_strip_nc.png" alt="" />
            <h2 class="product_item-name">
                N1 - MÌ Ý SỐT BÒ BẰM + 2 MIẾNG GÀ GIÒN KHÔNG XƯƠNG + NƯỚC NGỌT LỚN </h2>
            <p class="product_item-price">70000đ</p>
            <br />
            <div class="product_item-btn" href="#">Đặt hàng</div>
        </li>
    </ul>
</div>  -->

<!-- </body>
</html> -->