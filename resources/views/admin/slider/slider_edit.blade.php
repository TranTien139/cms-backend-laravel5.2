@extends("admin.headerfooter.masterpage")
@section("title")
Sửa Slider
@stop
@section("content_admin") 
  
       <div class="col-lg-12">
  <h1 class="page-header">Sửa Slider</h1>
  </div>
  <!-- /.col-lg-12 -->
  <div class="row">
  <div class="col-sm-7">
  <div class="col-sm-12" style="padding-bottom:120px">
  {{ Form::open(array('route'=>array('admin.slider.update',$slider_temp['id']),'method'=>'PUT','files'=> true)) }}
          <div class="form-group">
              <label>Tên Slider</label>
              <input type="text" class="form-control" name="txttitle" value="{!! old('txttitle',isset($slider_temp)?$slider_temp['title']:null) !!}" placeholder="Tên Slider" />
          </div>
          <div class="border_line"></div>
          <div class="form-group">
              <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Thêm Ảnh Slider
                   <input type="hidden" name="txtimage1" value="{!! $slider_temp['image'] !!}">
                  <input type="file" name="txtimage" value="" id="previewFileSlider"><br>
                </div>
                <p class="help-block">Max. 32MB</p>
                <img src="{!! asset('public/image_upload/slider/'.$slider_temp['image']) !!}" id="image_slider" height="200" width="auto" alt="Ảnh Slider ..">
          </div>
          <div class="border_line"></div>
           <div class="form-group">
              <label>Thuộc Nhóm Slider</label>
              <select class="form-control" name="txtgroup_id">
                  <option value=" ">không thuộc nhóm nào</option>
                  <?php cate_parent_lv1($group_temp,0,"",$slider_temp['group_id']) ?>
              </select>
          </div>

          <div class="form-group">
              <div class="checkbox icheck">
                <label>
                @if($slider_temp['published'] == "yes")
                    <input type="checkbox" name="txtpublished" checked="checked" value="yes" > xuất bản
                    @else
                    <input type="checkbox" name="txtpublished" value="yes" > xuất bản
                @endif
                </label>
              </div>
          </div>

            <label>Thêm Các Box Hiển Thị Trên Slide</label>
          
            <div class="form-group">
              <input type="text" name="txtbox1" class="form-control">
            </div>

            <div class="border_line"></div>
            <div class="form-group">
            <div class="btn btn-default btn-file">
                <i class="fa fa-paperclip"></i> Thêm Ảnh Box1
                  <input type="file" name="txtimage_box1" value="" id="previewFileSlider1"><br>
                </div>
                <input type="hidden" name="txtimage_box1_old" value="{!! $slider_temp['img_box1'] !!}">
                <p class="help-block">Max. 32MB</p>
                <img src="{!! asset('public/image_upload/slider/slider_box/'.$slider_temp['img_box1']) !!}" id="image_slider1" height="200" width="auto" alt="Ảnh Slider ..">
              <a href="{!! url('admin/deletesliderbox',$slider_temp['id']) !!}">Xóa slider box</a>
            </div>
            <div class="border_line"></div>
          <button type="submit" class="btn btn-danger">Sửa Slider</button>
          <button type="reset" class="btn btn-danger">Tải lại</button>
    {!! Form::close() !!}
    </div> 
    </div> 
    </div>        
            
@stop
