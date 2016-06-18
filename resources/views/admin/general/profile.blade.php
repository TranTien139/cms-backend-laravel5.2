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
         
          <h1 class="page-header">Thông Tin Tài Khoản</h1>
          <div class="clearfix"></div>
         <ul class="list-group">
            <li class="list-group-item">Địa Chỉ Email: {!! Auth::user()->email !!}</li>
            <li class="list-group-item">Họ Tên: {!! Auth::user()->fullname !!}</li>
            <li class="list-group-item">Giới Tính: {!! Auth::user()->gender !!}</li>
            <li class="list-group-item">Ngày Sinh: {!! Auth::user()->birthday !!}</li>
            <li class="list-group-item">Tình Trạng: {!! Auth::user()->status !!}</li>
            <li class="list-group-item">Cấp Độ: {!! Auth::user()->level !!}</li>
        </ul>
        <a href="{!! url('admin/user',[Auth::user()->id,'edit']) !!}">Cập Nhật Thông Tin Tài Khoản</a>

        </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
@endsection