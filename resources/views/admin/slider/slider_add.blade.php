@extends("admin.headerfooter.masterpage")
@section("title")
Thêm slider
@stop
@section("content_admin") 
  
       <div class="col-lg-12">
  <h1 class="page-header">Thêm slider </h1>
  </div>
  <!-- /.col-lg-12 -->
  <div class="row">
  <div class="col-sm-7">
  <div class="col-sm-12" style="padding-bottom:120px">
  <form action="{{ route('admin.slider.store') }}"  method="POST" enctype="multipart/form-data" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <div class="form-group">
              <label>Tên Slider</label>
              <input type="text" class="form-control" name="txttitle" placeholder="Tên Slider" />
          </div>
         
          <div class="border_line"></div>
          <div class="form-group">
              <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Thêm Ảnh Slider
                 <input type="file" name="txtimage" value="" id="previewFileSlider"><br>
                </div>
                <p class="help-block">Max. 32MB</p>
                <img src="" id="image_slider" height="200" width="auto" alt="Ảnh Slider ..">
          </div>

          <div class="border_line"></div>
           <div class="form-group">
              <label>Thuộc Nhóm Slider</label>
              <select class="form-control" name="txtgroup_id">
                  <option value=" ">không thuộc nhóm nào</option>
                  <?php cate_parent_lv1($group_temp) ?>
              </select>
          </div>

          <div class="form-group">
              <div class="checkbox icheck">
                <label>
                <input type="checkbox" name="txtpublished" value="yes" > xuất bản
                </label>
              </div>
          </div>

        <label>Thêm Các Box Hiển Thị Trên Slide</label>
          <div class="border_line"></div>
            <div class="form-group">
              <input type="text" name="txtbox1" class="form-control">
            </div>
            <div class="form-group">
            <div class="btn btn-default btn-file">
                <i class="fa fa-paperclip"></i> Thêm Ảnh Box1
                  <input type="file" name="txtimage_box1" value="" id="previewFileSlider1"><br>
                </div>
                <p class="help-block">Max. 32MB</p>
                <img src="" id="image_slider1" height="200" width="auto" alt="Ảnh Slider ..">
            </div>

          <div class="border_line"></div>
          <div class="form-group">
          <button type="submit" class="btn btn-danger">Thêm Slider</button>
          <button type="reset" class="btn btn-danger">Tải lại</button>
          </div>
         
    </form> 
    </div> 
     </div> 
    </div>
            
@stop
