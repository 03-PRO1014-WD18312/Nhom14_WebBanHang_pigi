<div class="container">
    <div class="box_category">
        <ul class="list_category">
            <?php
            if ($list_dm) {
                foreach ($list_dm as $danhmuc) {
                    extract($danhmuc);
            ?>
                    <a href="index.php?act=danh_muc&id=<?= $id ?>">
                        <li class="category_item">
                            <img src="upload/<?= $image ?>" alt="" class="category_item-img" />
                            <br />
                            <p class="category_item-name" <?= $id == $id_dm ? 'style="color: #e31837"' : "" ?>><?= $name ?></p>
                        </li>
                    </a>
            <?php
                }
            }
            ?>
        </ul>
    </div>

    <div class="box_product">
        <ul class="list_product">
            <?php
            if ($list_sanpham) {
                foreach ($list_sanpham as $sanpham) {
                    extract($sanpham);
            ?>
                    <li class="product_item">
                        <img class="product_item-img" src="upload/<?= $image ?>" alt="" />
                        <h2 class="product_item-name">
                            <?= $name ?>
                        </h2>
                        <p class="product_item-price"><?= $price ?>đ</p>
                        <br />
                        <div class="product_item-btn" href="index.php?act=chitietsp&id">Đặt hàng</div>
                    </li>
            <?php
                }
            }
            ?>
        </ul>
    </div>
</div>