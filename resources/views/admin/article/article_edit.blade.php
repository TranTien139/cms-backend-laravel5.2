@extends("admin.headerfooter.masterpage")
@section("title")
Sửa Bài Post
@stop
@section("content_admin") 
  
       <div class="col-lg-12">
  <h1 class="page-header">Sửa Bài Post</h1>
  </div>
  <!-- /.col-lg-12 -->
  <div class="row">
  <div class="col-sm-7">
  <div class="col-sm-12" style="padding-bottom:120px">
       {{ Form::open(array('route'=>array('admin.article.update',$article_temp['id']),'method'=>'PUT','files'=> true)) }}
        <div class="form-group">
            <label>Tiêu đề</label>
            <input class="form-control" name="txttitle" value="{{ old('txttitle',isset($article_temp)?$article_temp['title']:null) }}" placeholder="tiêu dề bài báo" />
        </div>
        <div class="form-group">
            <label>Mô tả bài viết</label>
            <textarea class="form-control" name="txtdescription" rows="5" placeholder="Mô tả bài viết">{{ old('txtdescription',isset($article_temp)?$article_temp['description']:null) }}</textarea>
        </div>
        <div class="form-group">
            <label>Nội dung bài viết</label>
            <textarea style="width:100%; height:200px;" id="txtcontent" name="txtcontent">{{ old('txtcontent',isset($article_temp)?$article_temp['content']:null) }}</textarea>
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
                <input type="hidden" name="txtimage1" class="txtimage_article" value="{!! $article_temp['image'] !!}" >
                <p class="help-block">Max. 32MB</p>
                <img src="{!! asset('public/image_upload/article/'.$article_temp['image']) !!}" id="image_article" class="image_article" height="200" width="auto" alt="Ảnh Đại Diện ..">
          </div>

        <div class="form-group">
            <label class="checkbox icheck">
            @if($article_temp['ishot'] == "yes")
            <input type="checkbox" name="txtishot" checked value="yes" >&nbsp;&nbsp; Tin nổi bật
            @else
            <input type="checkbox" name="txtishot" value="yes" >&nbsp;&nbsp; Tin nổi bật
            @endif
            </label>
          </div>
         <div class="form-group">
            <label>Tác giả</label>
            <input class="form-control" name="txtauth" value="{{ old('txtauth',isset($article_temp)?$article_temp['auth']:null) }}" placeholder="Nhập tên tác giả" />
        </div>

        <div class="form-group">
           <select name="txtcategory_id" class="form-control">
             <option value="0">Không Thuộc Nhóm Nào</option>
             @foreach($cate_temp as $value)
              @if($article_temp['category_id'] == $value->id)
               <option value="{!! $value->id !!}" cheched="checked">{!! $value->name !!}</option>
              @else
              <option value="{!! $value->id !!}">{!! $value->name !!}</option>
              @endif
             @endforeach
           </select>
         </div>

         <div class="form-group">
            <label class="checkbox icheck">
           @if($article_temp['published'] == "yes")
            <input type="checkbox" name="txtpublished" checked value="yes" >&nbsp;&nbsp; Xuất bản
            @else
            <input type="checkbox" name="txtpublished" value="yes" >&nbsp;&nbsp; Xuất bản
            @endif
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

        <button type="submit" class="btn btn-danger">Lưu Sửa</button>
        <button type="reset" class="btn btn-danger">Tải Lại</button>
</div>
 {{ Form::close() }}             
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
