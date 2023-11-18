<!-- id="recoverform" -->
<div class="card-body">
    <form class="form-horizontal" id="forgotform" action="index.php?auth=forgot_pass" method="post">
        <div class="form-group ">
            <div class="col-xs-12">
                <h3>Recover Password</h3>
                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="User" name="user" id="">
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Email" name="email_forgot" id="txtEmail_Forgot">
                <?php
                if (isset($_SESSION['error_check']) && ($_SESSION['error_check'] != "")) {
                ?>
                    <label class="form-check-label" for="customCheck1" style="color: #dd4b39;"><?php echo $_SESSION['error_check'] ?></label>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <input class="btn btn-primary btn-lg w-100 text-uppercase waves-effect waves-light" type="submit" name="btn_submit" value="Recover">
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <a href="index.php" class="text-info m-l-5"><b>Login</b></a>
            </div>
        </div>
    </form>
</div>