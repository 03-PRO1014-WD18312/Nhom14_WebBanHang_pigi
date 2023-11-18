<div class="card-body">
    <form class="form-horizontal form-material" id="loginform" action="index.php" method="post">
        <h3 class="text-center m-b-20">Sign In</h3>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="user" id="txtUser" required="" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" name="pass" required="" placeholder="Password">

                <?php
                if (isset($_SESSION['error']) && ($_SESSION['error'] != "")) {
                ?>
                    <label class="form-check-label" for="customCheck1" style="color: #dd4b39;"><?php echo $_SESSION['error'] ?></label>
                <?php
                }
                ?>

            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <div class="d-flex no-block align-items-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="customCheck1">
                        <label class="form-check-label" for="customCheck1">Remember me</label>
                    </div>
                    <div class="ms-auto">
                        <a href="index.php?auth=forgot_pass" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group text-center">
            <div class="col-xs-12 p-b-20">
                <input class="btn w-100 btn-lg btn-info btn-rounded text-white" type="submit" name="btn_login" value="Log in">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                <div class="social">
                    <button class="btn  btn-facebook" data-bs-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </button>
                    <button class="btn btn-googleplus" data-bs-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </button>
                </div>
            </div>
        </div>
        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                Don't have an account? <a href="index.php?auth=sign_up" class="text-info m-l-5"><b>Sign Up</b></a>
            </div>
        </div>
    </form>

</div>