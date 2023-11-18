<!-- id="recoverform" -->
<div class="card-body">
<form class="form-horizontal" id="forgotform"  action="/admin/auth/updatepassword" method="post">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Mật Khẩu Mới</h3>
                                <p class="text-muted">Lưu ý đây sẽ là mật khẩu mới dùng để đăng nhập của bạn! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Nhập mật khẩu mới" name="pass_update" id="txtPass_Update"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg w-100 text-uppercase waves-effect waves-light" type="submit">Lưu</button>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <a href="login" class="btn btn-primary btn-lg w-100 text-uppercase waves-effect waves-light">Quay lại đăng nhập</a>
                            </div>
                        </div>
                    </form>
</div>