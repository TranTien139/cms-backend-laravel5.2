@extends("admin.headerfooter.masterpage")
@section("title")
Thêm tài khoản
@stop
@section("content_admin") 
  <div class="col-lg-12">
                    <h1 class="page-header">Thêm Tài Khoản
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
        <form class="form-horizontal" action="{!! route('admin.user.store') !!}" method="POST">
            <input type = "hidden" name="_token" value = "{!! csrf_token() !!}" >
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nhập Email</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name = "txtemail" value="{{ old('email') }}" id="inputEmail3" placeholder="Email đăng nhập">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Mật Khẩu</label>
                <div class="col-sm-9">
                  <input type="password" name = "txtpassword" class="form-control" id="inputPassword3" placeholder="Mật khẩu">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword4" class="col-sm-3 control-label">Nhắc Lại Mật Khẩu</label>
                <div class="col-sm-9">
                  <input type="password" name = "txtrepassword" class="form-control" id="inputPassword4" placeholder="Nhắc lại mật khẩu">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="col-sm-3 control-label">Họ tên đầy đủ</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name = "txtfullname" value="{{ old('txtfullname') }}" id="inputEmail4" placeholder="Họ tên đầy đủ">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail5" class="col-sm-3 control-label"> Ngày Sinh</label>
                <div class="col-sm-9">
                <div class=" input-group">
                  <input type="text" class="form-control" name="txtbirthday" id="date" data-select="datepicker">
                  <span class="input-group-btn"><button type="button" class="btn btn-primary" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
                </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail6" class="col-sm-3 control-label">Giới Tính</label>
                <div class="col-sm-9">
                  <select class="form-control" name="txtgender">
                  <option value="nam">Nam</option>
                  <option value="nữ">Nữ</option>
                  </select>
                </div>
              </div>
                 <div class="form-group">
                    <label for="inputEmail6" class="col-sm-3 control-label">Cấp Độ</label>
                    <div class="col-sm-9">
                    <select name="txtlevel" class="form-control">
                      <option value="member">Member</option>
                      <option value="admin">Admin</option>
                    </select>
                    </div>
                  </div>
                                        
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
  
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" name="txtagree_rule"> Tôi Đồng Ý Với Điều Khoản
                      </label>
                    </div>
 
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-danger">Đăng Kí</button>
                </div>
              </div>
            </form>
            </div>
            
@stop
