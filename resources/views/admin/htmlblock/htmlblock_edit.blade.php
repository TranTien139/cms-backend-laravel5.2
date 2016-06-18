@extends("admin.headerfooter.masterpage")
@section("title")
Sửa Khối Html
@stop
@section("content_admin") 
  
  <div class="col-lg-12">
  <h1 class="page-header">Sửa Khối Html</h1>
  </div>

  <div class="col-sm-12" style="padding-bottom:120px">
       {{ Form::open(array('route'=>array('admin.htmlblock.update',$html_temp['id']),'method'=>'PUT','files'=> true)) }}
        <div class="form-group">
            <label>Tiêu đề khối html</label>
            <input class="form-control" name="txttitle" value="{{ old('txttitle',isset($html_temp)?$html_temp['title']:null) }}" placeholder="Tiêu đề khối html " />
        </div>

        <div class="form-group">
            <label>Nội dung bài viết</label>
            <textarea style="width:100%; height:200px;" id="txtcontent" name="txtcontent">{{ old('txtcontent',isset($html_temp)?$html_temp['content']:null) }}</textarea>
            <script type="text/javascript"> $(function() {  var editor = CKEDITOR.replace('txtcontent', { 
            filebrowserBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html")}}',
            filebrowserImageBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Images")}}',
            filebrowserFlashBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Flash") }}', 
            filebrowserUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
            filebrowserImageUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
            filebrowserFlashUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}',
            filebrowserWindowWidth : '900', filebrowserWindowHeight : '480' });
            CKFinder.setupCKEditor( editor, '{{ asset("public/admin/ckfinder/") }}' ); }); </script>
        </div>
        
         <div class="form-group">
            <label class="checkbox icheck">
           @if($html_temp['published'] == "yes")
            <input type="checkbox" name="txtpublished" checked value="yes" >&nbsp;&nbsp; Xuất bản
            @else
            <input type="checkbox" name="txtpublished" value="yes" >&nbsp;&nbsp; Xuất bản
            @endif
            </label>
        </div>
        <button type="submit" class="btn btn-danger">Lưu Sửa</button>
        <button type="reset" class="btn btn-danger">Tải Lại</button>
        {{ Form::close() }}  
</div>       
@stop
