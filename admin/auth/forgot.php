<!-- id="recoverform" -->
<div class="card-body">
<form class="form-horizontal" id="forgotform"  action="/admin/auth/forgot" method="post">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email" name="email_forgot" id="txtEmail_Forgot"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg w-100 text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <a href="/admin/auth/signup" class="text-info m-l-5"><b>Login</b></a>
                            </div>
                        </div>
                    </form>
</div>