@extends("admin.headerfooter.masterpage")
@section("title")
Thêm Khối Html
@stop
@section("content_admin") 
  
  <div class="col-lg-12">
  <h1 class="page-header">Thêm Khối Html</h1>
  </div>
  <!-- /.col-lg-12 -->
    <div class="col-sm-12" style="padding-bottom:120px">
    <form action="{{ route('admin.htmlblock.store') }}"  method="POST" enctype="multipart/form-data" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">
                <label>Tiêu đề khối html</label>
                <input class="form-control" name="txttitle" placeholder="Tiêu đề khối html" />
            </div>
            <div class="form-group">
                <label>Nội dung khối html</label>
                <textarea style="width:100%; height:200px;" id="txtcontent" name="txtcontent"></textarea>
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
                <input type="checkbox" name="txtpublished" value="yes" >&nbsp;&nbsp;Xuất bản
                </label>
            </div>
            <button type="submit" class="btn btn-danger">Thêm</button>
            <button type="reset" class="btn btn-danger">Tải Lại</button>
      </form> 
    </div>       
@stop
