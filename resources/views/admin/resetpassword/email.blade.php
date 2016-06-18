<!DOCTYPE html>
<html>
<head>
	<title>nhập mail rết mật khẩu</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  	{!! Html::style('public/admin/bootstrap/css/bootstrap.min.css') !!}
</head>
<body>

<div class="container-fluid">
<div class="row" style="margin-top:15%;">
<div class="col-sm-6 col-sm-offset-3">
<div class="panel panel-default">
<div class="panel-heading">Reset Password</div>
<div class="panel-body">
    @if (session('status'))
      <div class="alert alert-success">
             {{ session('status') }}
      </div>
    @endif

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

<form class="form-horizontal" role="form" method="POST" action="{!! url('admin/password/email') !!}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
<div class="col-sm-12">
<input type="email" class="form-control" placeholder="Nhập email của bạn ..." name="email" value="{{ old('email') }}">
</div>
</div>

<div class="form-group">
<div class="col-sm-12 text-center">
<button type="submit" class="btn btn-primary">
         Gửi yêu cầu đếm email của bạn
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