<!DOCTYPE html>
<html>
<head>
	<title>nhập mail reset mật khẩu</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  	{!! Html::style('public/admin/bootstrap/css/bootstrap.min.css') !!}
</head>
<body>

<div class="container-fluid">
<div class="row" style="margin-top:15%;">
 <div class="col-md-8 col-md-offset-2">
 <div class="panel panel-default">
 <div class="panel-heading">Đặt Lại Mật Khẩu Mới</div>
 <div class="panel-body">

 @if (count($errors) > 0)
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{!! url('admin/password/reset') !!}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="token" value="{{ $token }}">

<div class="form-group">
<label class="col-md-4 control-label">Địa Chỉ Email</label>
<div class="col-md-6">
<input type="email" class="form-control" name="email" value="{{ old('email') }}">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Nhập Mật Khẩu Mới</label>
<div class="col-md-6">
<input type="password" class="form-control" name="password">
</div>
 </div>

 <div class="form-group">
 <label class="col-md-4 control-label">Nhập Lại Mật Khẩu Mớ</label>
 <div class="col-md-6">
 <input type="password" class="form-control" name="password_confirmation">
 </div>
  </div>

 <div class="form-group">
 <div class="col-md-6 col-md-offset-4">
 <button type="submit" class="btn btn-primary">
          Đặt Lại Mật Khẩu Mới
 </button>
 </div>
 </div>
 </form>

 </div>
 </div>
 </div>
 </div>
</div>

</body>
</html>