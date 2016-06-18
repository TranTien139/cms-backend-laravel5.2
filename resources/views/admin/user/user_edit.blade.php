@extends('admin.headerfooter.masterpage')
@section('content_admin')
    <section class="content-header">
      <h1>
        Thông Tin Cá Nhân
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{!! Auth::user()->avatar !!}" width="128" height="128" alt="User profile picture">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
         
          {!! Form::open(array('route'=>array('admin.user.update',$user_temp['id']),'method'=>'PUT','files'=> true)) !!}
    	
      <div class="form-group">
	        <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Thêm Ảnh
                  <input type="file" name="image_profile" value="" onchange="previewFile()"><br>
                </div>
                <p class="help-block">Max. 32MB</p>
	        <input type="hidden" name="txtavatar" class="txtimage_profile" value="{!! $user_temp['avatar'] !!}" >
          <img src="{!! $user_temp['avatar'] !!}" class="image_profile" height="200" width="auto" alt="Ảnh Đại Diện ..">
	    </div>
	    <div class="form-group">
	        <label>Họ Tên</label>
	        <input class="form-control" name="txtfullname" value="{{ old('txtfullname',isset($user_temp)?$user_temp['fullname']:null) }}" placeholder="Nhập họ tên đầy đủ" />
	    </div>
	    <div class="form-group">
	        <label>Email</label>
	        <input class="form-control" name="txtemail" value="{{ old('txtemail',isset($user_temp)?$user_temp['email']:null) }}" placeholder="Nhập Địa Chỉ Email" />
	    </div>
	     <div class="form-group">
	        <label>Ngày Sinh</label>
                <div class=" input-group">
                <input type="text" class="form-control" value="{{ old('txtbirthday',isset($user_temp)?$user_temp['birthday']:null) }}" name="txtbirthday"  data-select="datepicker">
        <span class="input-group-btn"><button type="button" class="btn btn-primary" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
                </div>
	    </div>
	    <div class="form-group">
	     <label>Giới Tính</label>
	        <select name="txtgender" class="form-control">
	           @if($user_temp['gender'] =='nam')
	        	<option value="nam" selected>Nam</option>
	         	<option value="nữ">Nữ</option>
	         	@else
	         	<option value="nam" >Nam</option>
	         	<option value="nữ" selected>Nữ</option>
	         	@endif
	        </select>
	    </div>
	    <div class="form-group">
	     <label>Cấp Độ</label>
	        <select name="txtlevel1" class="form-control" disabled="disabled">
	            @if($user_temp['level'] =='member')
	        	<option value="member" selected="selected">member</option>
	        	<option value="admin">admin</option>
	        	@else
	        	<option value="member" >member</option>
	        	<option value="admin" selected="selected">admin</option>
	        	@endif
	        </select>
          <input type="hidden" name="txtlevel" value="{!! $user_temp['level'] !!}" >
	    </div>
    	<div class="form-group">
	        <button type="submit" class="btn btn-danger">Lưu Sửa</button>
	    </div>
        {!! Form::close() !!}

        </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection