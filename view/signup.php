<div class="container">
    <div class="box_login">
        <h1 class="box_login_title"> Đăng ký tài khoản</h1>
        <form action="index.php?act=signup" class="box_login_content" method="post">
            <input type="text" class="box_login_content-input" required name="user" placeholder="Tên đăng nhập*"> <br>
            <input type="password" class="box_login_content-input" required name="password" placeholder="Mật khẩu*"> <br>
            <input type="password" class="box_login_content-input" required name="confirm_password" placeholder="Xác nhận mật khẩu*">
            <?php
            if (isset($_SESSION['error_cfp']) && ($_SESSION['error_cfp'] != "")) {
            ?>
                <label class="form-check-label" for="customCheck1" style="color: #dd4b39;"><?php echo $_SESSION['error_cfp'] ?></label>
            <?php
            }
            ?>
            <input type="text" class="box_login_content-input" name="name" placeholder="Họ và tên"> <br>
            <input type="text" class="box_login_content-input" required name="email" placeholder="Email*"> <br>
            <input type="submit" class="box_login_content-btn" name="btn_submit" value="ĐĂNG KÝ"> <br>
            <label for="box_login_content-label">
                Bạn đã có tài khoản?
            </label>
            <a href="index.php?act=login" class="box_login_content-signup">Đăng nhập</a>
        </form>
    </div>
</div>