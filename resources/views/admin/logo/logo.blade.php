@extends("admin.headerfooter.masterpage")
@section("title")
Thêm Bài Post
@stop
@section("content_admin") 
  
  <div class="col-lg-12">
  <h1 class="page-header">Thêm Bài Post </h1>
  </div>
  <!-- /.col-lg-12 -->
  <div class="row">
    <div class="col-sm-7">
    <div class="col-sm-12" style="padding-bottom:120px">
    {{ Form::open(array('route'=>array('admin.changelogo.update',$logo_temp['id']),'method'=>'PUT','files'=> true)) }}
          <div class="form-group">
           <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Ảnh Logo
                 <input type="file" name="txtlogo" value="" id="previewFileLogo"><br>
                </div>
                <input type="hidden" name="txtlogo1" value="" ><br>
                <p class="help-block">Max. 32MB</p>
                <img src="{!! asset('public/image_upload/logo/'.$logo_temp['image']) !!}" id="image_logo" class="image_logo" height="200" width="auto" alt="Ảnh Logo">
           </div>
          <button type="submit" class="btn btn-danger">Lưu Sửa</button>
    </div>
         
    {!! Form::close() !!}
    </div> 
    </div>
            
@stop
