
<!-- Modal Add User-->

<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Thêm thành viên</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" role="form" id="validate_add_user">

                    <!-- Add Name -->
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Tên đăng nhập</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="add_name" name="add_name" placeholder="Name" autofocus>
                            <div class="has-error"><i><span class="help-block error errorName_add"></span></i></div>
                        </div>
                    </div>

                    <!-- Add Email -->
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Địa chỉ Email</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="add_email" name="add_email" placeholder="Email">
                            <div class="has-error"><i><span class="help-block errorEmail_add"></span></i></div>
                        </div>
                    </div>

                    <!-- Add Level -->
                    <div class="form-group ">
                        <label for="level" class="col-md-4 control-label">Cấp</label>
                        <div class="col-md-6">
                           <select name="add_level_user" id="add_level_user" class="form-control" >
                                <option value="1">Admin</option>
                                <option value="2" selected>Member</option>
                           </select>
                        </div>
                    </div>

                    <!-- Add Password -->
                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">Mật khẩu</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="add_password" name="add_password" placeholder="Password">
                            <div class="has-error"><i><span class="help-block error errorPassword"></span></i></div>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Xác nhận mật khẩu</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="add_password_confirmation" name="add_password_confirmation" placeholder="Confirm password">
                            <div class="has-error"><i><span class="help-block errorPassword_confirmation_add"></span></i></div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn_admin primary">Submit</button>
                            <button class="btn_admin warning" type="reset" >Reset</button>
                            <button type="button" class="btn_admin danger pull-right" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- message add success -->
<div id="add_user_success" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h3 align="center" style="color:green;">User has added successfully !</h3>
            </div>
        </div>
    </div>
</div>
