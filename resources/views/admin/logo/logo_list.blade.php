@extends("admin.headerfooter.masterpage")
@section("title")
Logo
@stop
@section("content_admin") 
  <div class="col-lg-12">
      <h1 class="page-header">Logo
      </h1>
  </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">  
      <img src="{!! asset('public/image_upload/logo/'.$logo_temp->image) !!}" id="image_logo" class="image_logo" height="200" width="auto" alt="Ảnh Logo">
      <a href="{!! url('admin/changelogo',[$logo_temp->id,'edit']) !!}">Sửa Logo</a>
      </div>
@stop