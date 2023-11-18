<!-- id="recoverform" -->
<div class="card-body">
    <form class="form-horizontal" id="forgotform" action="index.php?auth=update_pass" method="post">
        <div class="form-group ">
            <div class="col-xs-12">
                <h3>Mật Khẩu Mới</h3>
                <p class="text-muted">Lưu ý đây sẽ là mật khẩu mới dùng để đăng nhập của bạn! </p>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="password" required="" placeholder="Password" name="password" id="txtPassword">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" required="" placeholder="Confirm Password" name="confirm_password" id="txtConfirm_Password">
                <?php
                if (isset($_SESSION['error_cfp']) && ($_SESSION['error_cfp'] != "")) {
                ?>
                    <label class="form-check-label" for="customCheck1" style="color: #dd4b39;"><?php echo $_SESSION['error_cfp'] ?></label>
                <?php
                }
                ?>
                <?php
                if (isset($_SESSION['success']) && ($_SESSION['success'] != "")) {
                ?>
                    <label class="form-check-label" for="customCheck1" style="color: #29b6f5;"><?php echo $_SESSION['success'] ?></label>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <input class="btn btn-primary btn-lg w-100 text-uppercase waves-effect waves-light" type="submit" class="Lưu" name="btn_submit">
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <a href="index.php" class="btn btn-info btn-lg w-100 text-uppercase waves-effect waves-light">Quay lại đăng nhập</a>
            </div>
        </div>
    </form>
</div>