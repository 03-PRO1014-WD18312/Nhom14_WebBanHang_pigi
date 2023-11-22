<div class="container">
    <div class="box_login">
        <h1 class="box_login_title">Đặt lại mật khẩu</h1>
        <form action="index.php?act=forgot" class="box_login_content" method="post">
            <input type="text" class="box_login_content-input" required name="user" placeholder="Nhập vào tên đăng nhập*"> <br>
            <input type="text" class="box_login_content-input" required name="email" placeholder="Nhập vào email*"> <br>
            <input type="password" class="box_login_content-input" required name="password" placeholder="Mật khẩu mới*"> <br>
            <input type="password" class="box_login_content-input" required name="confirm_password" placeholder="Xác nhận mật khẩu*"> <br>
            <?php
            if (isset($_SESSION['error_check']) && ($_SESSION['error_check'] != "")) {
            ?>
                <label class="form-check-label" for="customCheck1" style="color: #dd4b39;"><?php echo $_SESSION['error_check'] ?></label><br>
            <?php
            }
            if (isset($_SESSION['success']) && ($_SESSION['success'] != "")) {
            ?>
                <label class="form-check-label" for="customCheck1" style="color: blue;"><?php echo $_SESSION['success'] ?></label><br>
            <?php
            }
            ?>

            <input type="submit" class="box_login_content-btn" name="btn_submit" value="Lưu mật khẩu">
            <a href="index.php?act=login" class="box_login_content-signup">Đăng nhập</a>
        </form>
    </div>
</div>