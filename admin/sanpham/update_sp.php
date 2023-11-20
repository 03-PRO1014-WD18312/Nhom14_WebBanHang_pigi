<?php
if ($sanpham_update) {
    extract($sanpham_update);
?>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Thêm sản phẩm</h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Sản phẩm</a>
                            </li>
                            <li class="breadcrumb-item active">Sửa sản phẩm</li>
                        </ol>
                        <a href="index.php?act=list_sp">
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
                                <i class="fas fa-clipboard-list"></i> Danh sách
                            </button>
                        </a>

                    </div>
                </div>
            </div>
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title">
                        Service Panel
                        <span><i class="ti-close right-side-toggle"></i></span>
                    </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a>
                            </li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme">12</a>
                            </li>
                        </ul>
                        <!-- <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/admin/assets/images/users/1.jpg" alt="user-img" class="img-circle" />
                                <span>Varun Dhavan
                                    <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/admin/assets/images/users/2.jpg" alt="user-img" class="img-circle" />
                                <span>Genelia Deshmukh
                                    <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/admin/assets/images/users/3.jpg" alt="user-img" class="img-circle" />
                                <span>Ritesh Deshmukh
                                    <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/admin/assets/images/users/4.jpg" alt="user-img" class="img-circle" />
                                <span>Arijit Sinh
                                    <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/admin/assets/images/users/5.jpg" alt="user-img" class="img-circle" />
                                <span>Govinda Star
                                    <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/admin/assets/images/users/6.jpg" alt="user-img" class="img-circle" />
                                <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/admin/assets/images/users/7.jpg" alt="user-img" class="img-circle" />
                                <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/admin/assets/images/users/8.jpg" alt="user-img" class="img-circle" />
                                <span>Pwandeep rajan
                                    <small class="text-success">online</small></span></a>
                        </li>
                    </ul> -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
            <!-- Star content -->
            <form action="index.php?act=update_sp" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="mt-4">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <label for="txtTitle " class="form-label" id="lblTitle">Chọn danh mục</label> <br>
                    <select name="id_dm" class="form-control form-select" style="margin-bottom: 10px;">
                        <?php
                        foreach ($list_dm as $danhmuc) {
                        ?>
                            <option value="<?php echo $danhmuc['id'] ?>" <?= $id_dm == $danhmuc['id'] ? "selected" : "" ?>>
                                <?php echo $danhmuc['name'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <label for="txtTitle " class="form-label" id="lblTitle">Tên sản phẩm</label>
                    <input type="text" class="form-control" required name="name" id="txtTitle" placeholder="Nhập tên sản phẩm" style="margin-bottom: 10px;" value="<?= $name ?>">
                    <label for="txtTitle " class="form-label" id="lblTitle">Giá sản phẩm</label>
                    <input type="number" class="form-control" required name="price" id="txtTitle" placeholder="Nhập giá sản phẩm" style="margin-bottom: 10px;" value="<?= $price ?>">
                    <label for="txtImg " class="form-label" id="lblImg">File hình ảnh</label>
                    <input type="file" class="form-control" name="image" id="txtImg" style="margin-bottom: 10px;">
                    <label for="txtTitle " class="form-label" id="lblTitle">Description</label>
                    <input type="text" class="form-control" name="description" id="txtTitle" placeholder="Nhập mô tả sản phẩm" style="margin-bottom: 10px;" value="<?= $description ?>">
                    <h5 class="card-subtitle" style="margin-top: 1.625rem;margin-bottom: 8px;"> Thuộc tính sản phẩm: </h5>
                    <!-- Gà -->
                    <div class="row">
                        <!--/span-->
                        <div class="col-md-6">
                            <label class="form-label">Loại sốt gà</label>
                            <select class="form-control form-select" name="id_ga">
                                <option value="0">Chọn loại gà</option>
                                <?php
                                foreach ($list_lg as $loaiga) {
                                ?>
                                    <option value="<?php echo $loaiga['id'] ?>" <?= $id_ga == $loaiga['id'] ? "selected" : "" ?>><?php echo $loaiga['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <label class="form-label">Số lượng gà</label>
                            <input type="number" class="form-control" name="soluong_ga" value="<?= $soluong_ga ?>">
                        </div>
                    </div>
                    <!-- Nước -->
                    <div class="row">
                        <!--/span-->
                        <div class="col-md-6">
                            <label class="form-label">Loại Nước</label>
                            <select class="form-control form-select" name="id_nuoc">
                                <option value="0">Chọn loại nước</option>
                                <?php
                                foreach ($list_nc as $loainuoc) {
                                ?>
                                    <option value="<?php echo $loainuoc['id'] ?>" <?= $id_nuoc == $loainuoc['id'] ? "selected" : "" ?>><?php echo $loainuoc['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <label class="form-label">Số lượng nước</label>
                            <input type="number" class="form-control" name="soluong_nuoc" value="<?= $soluong_nuoc ?>">
                        </div>
                    </div>
                    <!-- Mì -->
                    <div class="row">
                        <!--/span-->
                        <div class="col-md-6">
                            <label class="form-label">Loại Mì</label>
                            <select class="form-control form-select" name="id_mi">
                                <option value="0">Chọn loại Mì</option>
                                <?php
                                foreach ($list_mi as $loaimi) {
                                ?>
                                    <option value="<?php echo $loaimi['id'] ?>" <?= $id_mi == $loaimi['id'] ? "selected" : "" ?>><?php echo $loaimi['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <label class="form-label">Số lượng mì</label>
                            <input type="number" class="form-control" name="soluong_mi" value="<?= $soluong_mi ?>">
                        </div>
                    </div>
                    <!-- Khoai -->
                    <div class="row">
                        <!--/span-->
                        <div class="col-md-6">
                            <label class="form-label">Loại Khoai</label>
                            <select class="form-control form-select" name="id_khoai">
                                <option value="0">Chọn loại khoai</option>
                                <?php
                                foreach ($list_khoai as $loaikhoai) {
                                ?>
                                    <option value="<?php echo $loaikhoai['id'] ?>" <?= $id_khoai == $loaikhoai['id'] ? "selected" : "" ?>><?php echo $loaikhoai['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <label class="form-label">Số lượng khoai</label>
                            <input type="number" class="form-control" name="soluong_khoai" value="<?= $soluong_khoai ?>">
                        </div>
                    </div>

                </div>
                <input type="submit" name="btn_submit" class="btn btn-info  text-white" value="Lưu">
                <input type="reset" class="btn btn-primary text-white" value="Reset">
                <a href="index.php?act=list_sp"><button type="button" class="btn waves-effect waves-light btn-danger">Hủy</button></a>
            </form>
            <!-- End content -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
<?php
}
?>