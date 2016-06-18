@if(!Auth::check())
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Đăng Nhập</title>
    <meta name="author" content="">
    {!! Html::style('public/admin/css/bootstrap.min.css') !!}
    {!! Html::style('public/admin/plugins/iCheck/square/blue.css') !!}

</head>
<body>
        <div class="errror-login">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <div class="container">
             <div class="row admin_dangnhap " style="padding-top:12%;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                    <div class="panel-heading heading-login">
                        <h3 class="panel-title text-center">Đăng Nhập Vào Trang Quản Trị</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{!! route('postlogin') !!}" method="POST">
                            <fieldset>
                            <input type = "hidden" name="_token" value = "{!! csrf_token() !!}" >
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="txtemail" value="{{ old('txtemail') }}" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="txtpassword" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox icheck">
                                      <label style="padding-left:0px;">
                                        <input type="checkbox" name="txtrememberme"> Nhớ mật khẩu
                                      </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{!! url('admin/password/email') !!}">Quên Mật Khẩu</a>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
         </div>
     </div>
     {!! Html::script('public/admin/plugins/jQuery/jQuery-2.2.0.min.js') !!}

    {!! Html::script('public/admin/plugins/iCheck/icheck.min.js') !!}
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
     </body>
</html>
@else

@include('admin.headerfooter.header')
<div class="content-wrapper">
<div class="error">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(Session::has('flash_message'))
        <div class="alert alert_message alert-success">
        {{ Session::get('flash_message') }}
        </div>
   @endif
</div>

@yield("content_admin")
</div>
@include('admin.headerfooter.footer')

@endif