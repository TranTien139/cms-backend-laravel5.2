@extends("admin.headerfooter.masterpage")
@section("title")
Danh Sách Slider
@stop
@section("content_admin")

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Slider</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tableuser" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Thao Tác</th>
                  <th>id</th>
                  <th>Tên Slider</th>
                  <th>Ảnh</th>
                  <th>Thuộc Nhóm Slider</th>
                  <th>Xuất Bản</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slider_temp as $tv)
                <tr>
                  <td style="display:flex">
                  {!! Form::open(array('route' =>array('admin.slider.destroy',$tv->id),'method'=>'DELETE')) !!}
                  <button  type="submit" class="but_delete" onclick="return confirmdelete('bạn có chắc chắn xóa không')">Xóa</button>
                  {!! Form::close() !!}
                  <a href="{{ route('admin.slider.edit',$tv->id) }}">Sửa</a>
                  </td>
                  <td>{!! $tv->id !!}</td>
                  <td>{!! $tv->title !!}</td>
                  <td>
                    <img src="{!! asset('public/image_upload/slider/'.$tv->image) !!}" width="100" height="100">
                  </td>
                  <td>{!! $tv->group_id !!}</td>
                  <td>{!! $tv->published !!}</td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Thao Tác</th>
                  <th>id</th>
                  <th>Tên Slider</th>
                  <th>Ảnh</th>
                  <th>Thuộc Nhóm Slider</th>
                  <th>Xuất Bản</th>
                </tr>
                </tfoot>
              </table>
            </div>
             </div>
            <!-- /.box-body -->


 @stop