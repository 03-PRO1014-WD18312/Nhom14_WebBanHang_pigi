<?php
if ($donhang_update) {
    extract($donhang_update);
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
                    <h4 class="text-themecolor">Sửa đơn hàng</h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Đơn hàng</a>
                            </li>
                            <li class="breadcrumb-item active">Sửa đơn hàng</li>
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
            <form action="index.php?act=update_dh" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="mt-4">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="id_user" value="<?= $id_user ?>">
                    <input type="hidden" name="id_pay" value="<?= $id_pay ?>">
                    <label for="txtTitle " class="form-label" id="lblTitle">Họ tên</label> <br>
                    <input type="text" class="form-control" name="hoTen" value="<?= $hoTen ?>">
                    <label for="txtTitle " class="form-label" id="lblTitle">Địa chỉ</label> <br>
                    <input type="text" class="form-control" name="address" value="<?= $address ?>">
                    <label for="txtTitle " class="form-label" id="lblTitle">Số điện thoại</label> <br>
                    <input type="text" class="form-control" name="tel" value="<?= $tel ?>">
                    <label for="txtTitle " class="form-label" id="lblTitle">Chọn trạng thái</label> <br>
                    <select name="status" class="form-control form-select" style="margin-bottom: 10px;">
                        <option value="1" <?= $status == 1 ? "selected" : "" ?>>Đã thanh toán</option>
                        <option value="2" <?= $status == 2 ? "selected" : "" ?>>Đang giao</option>
                        <option value="3" <?= $status == 3 ? "selected" : "" ?>>Đã giao hàng</option>
                        <option value="4" <?= $status == 4 ? "selected" : "" ?>>Đã hủy</option>
                    </select>
                </div>
                <input type="submit" name="btn_submit" class="btn btn-info  text-white" value="Lưu">
                <input type="reset" class="btn btn-primary text-white" value="Reset">
                <a href="index.php?act=list_donhang"><button type="button" class="btn waves-effect waves-light btn-danger">Hủy</button></a>
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