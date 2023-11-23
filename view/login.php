<div class="container">
    <div class="box_login">
        <h1 class="box_login_title"> Vui lòng đăng nhập</h1>
        <form action="index.php?act=login" class="box_login_content" method="post">
            <input type="text" class="box_login_content-input" name="user" placeholder="Nhập vào tên đăng nhập"> <br>
            <input type="password" class="box_login_content-input" name="pass" placeholder="Nhập mật khẩu"> <br>
            <?php
            if (isset($_SESSION['error']) && ($_SESSION['error'] != "")) {
            ?>
                <label class="form-check-label" for="customCheck1" style="color: #dd4b39;"><?php echo $_SESSION['error'] ?></label>
            <?php
            }
            ?>
            <div class="forgot-pass">
                <a href="index.php?act=forgot" class="box_login_content-forgot">Quên mật khẩu?</a>
            </div>
            <input type="submit" class="box_login_content-btn" name="btn_submit" value="ĐĂNG NHẬP"> <br>
            <label for="box_login_content-label">
                Bạn chưa có tài khoản?
            </label>
            <a href="index.php?act=signup" class="box_login_content-signup">Đăng ký ngay</a>
        </form>
    </div>
</div>