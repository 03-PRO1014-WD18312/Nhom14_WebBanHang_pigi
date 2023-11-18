<div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="/admin/auth/signup" method="post">
                        <h3 class="text-center m-b-20">Sign Up</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Name" name="name" id="txtName">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email" name="email" id="txtEmail">
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
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">I agree to all <a href="javascript:void(0)">Terms</a></label> 
                                </div> 
                            </div>
                        </div>
                        <div class="form-group text-center p-b-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg w-100 btn-rounded text-uppercase waves-effect waves-light text-white" type="submit">Sign Up</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="/admin/auth/login" class="text-info m-l-5"><b>Sign In</b></a>
                            </div>
                        </div>
                    </form>
                </div>