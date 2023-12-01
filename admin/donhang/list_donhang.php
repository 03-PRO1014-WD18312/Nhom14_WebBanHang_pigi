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
                <h4 class="text-themecolor">Danh sách</h4>
            </div>
            <div class="col-md-7 align-self-center text-end">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Đơn hàng</a>
                        </li>
                        <li class="breadcrumb-item active">Danh sách</li>
                    </ol>
                    <!-- <a href="index.php?act=add_sp">
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white">
                            <i class="fa fa-plus-circle"></i> Thêm mới sản phẩm
                        </button>
                    </a> -->

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
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách đơn hàng</h4>
                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id_user</th>
                                <th>Họ tên</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Id_pay</th>
                                <th>Status</th>
                                <th>Chi tiết đơn hàng</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($list_dh) {
                                foreach ($list_dh as $donhang) {
                                    extract($donhang);
                                    $suadh = "index.php?act=suadh&id=" . $id;
                                    $ctdh = "index.php?act=ctdh&id=" . $id_user;
                            ?>
                                    <tr>
                                        <td><?= $id ?></td>
                                        <td><?= $id_user ?></td>
                                        <td><?= $hoTen ?></td>
                                        <td><?= $address ?></td>
                                        <td><?= $tel ?></td>
                                        <td><?= $id_pay ?></td>
                                        <td><?php
                                            if ($status == 1) {
                                            ?>
                                                <span class="label label-warning">Đã thanh toán</span>
                                            <?php
                                            } else if ($status == 2) {
                                            ?>
                                                <span class="label label-success">Đang giao</span>
                                            <?php
                                            } else if ($status == 3) {
                                            ?>
                                                <span class="label label-info">Đã giao hàng</span>
                                            <?php
                                            } else {
                                            ?>
                                                <span class="label label-danger">Đã hủy</span>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><a href="<?php echo $ctdh ?>"><input type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white" value="Xem"></td>
                                        <td>
                                            <a href="<?php echo $suadh ?>"><input type="button" class="btn btn-primary text-white" value="Sửa">
                                            </a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End content -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>