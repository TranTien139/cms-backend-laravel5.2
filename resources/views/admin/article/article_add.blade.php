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
    <form action="{{ route('admin.article.store') }}"  method="POST" enctype="multipart/form-data" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
           <div class="form-group">
                <label>Tiêu đề</label>
                <input class="form-control" name="txttitle" placeholder="Tiêu đề bài báo" />
            </div>
            <div class="form-group">
                <label>Mô tả bài báo</label>
                <textarea class="form-control" name="txtdescription" rows="5" placeholder="Mô tả bài báo"></textarea>
            </div>
            <div class="form-group">
                <label>Nội dung bài báo</label>
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
           <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Ảnh Đại Diện
                 <input type="file" name="txtimage" value="" id="previewFileArticle"><br>
                </div>
                <p class="help-block">Max. 32MB</p>
                 <img src="" id="image_article" class="image_article" height="200" width="auto" alt="Ảnh Đại Diện ..">
           </div>

            <div class="form-group">
                <label>Tác Giả</label>
                <input class="form-control" name="txtauth" placeholder="Nhập tác giả" />
            </div>

             <div class="form-group">
           <select name="txtcategory_id" class="form-control">
             <option value="0">Không Thuộc Nhóm Nào</option>
             @foreach($cate_temp as $value)
               <option value="{!! $value->id !!}">{!! $value->name !!}</option>
             @endforeach
           </select>
         </div>
         
            <div class="form-group">
                <label class="checkbox icheck">
                <input type="checkbox" name="txtishot" value="yes">&nbsp;&nbsp;Bài báo nổi bật
                </label>
            </div>
             
             <div class="form-group">
                <label class="checkbox icheck">
                <input type="checkbox" name="txtpublished" value="yes" >&nbsp;&nbsp;Xuất bản
                </label>
            </div>

            <div class="form-group">
           <a id="show_all_tag">Hiển Thị Tất Cả Thẻ Tags</a>
         </div>
            <div class="form-group">
           <div id="list_tag">
            @foreach($tag_temp as $value)
              <label class="checkbox icheck">
                <input type="checkbox" name="txttag[]" value="{!! $value->id !!}">&nbsp;&nbsp;{!! $value->name !!}
              </label>
            @endforeach
           </div>
         </div>
            <button type="submit" class="btn btn-danger">Thêm Bài Báo</button>
            <button type="reset" class="btn btn-danger">Tải Lại</button>
      
    </div>
         </form> 
    </div> 

      <div  class="col-sm-5">
          {!! Form::open(array('route'=>'admin.category_article.store','method'=>'POST')) !!}
         <div class="form-group">
           <input name="txtname" placeholder="Thêm Loại"  class="form-control" type="text" />
         </div>
         
         <div class="form-group">
           <button type="submit" class="btn btn-danger">Thêm Loại</button>
         </div>
         {!! Form::close(); !!}

        <div class="border_line"></div>
         {!! Form::open(array('route'=>'admin.tag_article.store','method'=>'POST')) !!}
         <div class="form-group">
           <input name="txtname" placeholder="Thêm Thẻ Tags"  class="form-control" type="text" />
         </div>
         <div class="form-group">
           <button type="submit" class="btn btn-danger">Thêm Thẻ Tag</button>
         </div>
         {!! Form::close(); !!}
         
     </div> 
      
    </div>
            
@stop
