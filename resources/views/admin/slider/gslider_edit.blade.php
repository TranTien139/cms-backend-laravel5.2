@extends("admin.headerfooter.masterpage")
@section("title")
Sửa nhóm slider
@stop
@section("content_admin") 
  <div class="col-lg-12">
                    <h1 class="page-header">Sửa nhóm slider
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
      <div class="col-lg-7" style="padding-bottom:120px">
        {{ Form::open(array('route'=>array('admin.groupslider.update',$gslider_temp['id']),'method'=>'PUT','files'=> true)) }}
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nhập Tên Nhóm Slider *</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name = "txtname" value="{!! old('txtname',isset($gslider_temp)?$gslider_temp['name']:null) !!}" id="inputEmail3" placeholder="Nhập Tên Nhóm Slider">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox icheck">
                      <label>
                      @if($gslider_temp['published'] == "yes")
                      <input type="checkbox" name="txtpublished" checked="checked" value="yes">Xuất bản
                      @else
                      <input type="checkbox" name="txtpublished" value="yes">Xuất bản
                      @endif
                      </label>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" name="txtagree_rule"> Tôi Đồng Ý Với Điều Khoản *
                      </label>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-danger">Lưu Sửa</button>
                </div>
              </div>
            </form>
            </div>
            
@stop
