@extends("admin.headerfooter.masterpage")
@section("title")
Danh Sách Khối Html
@stop
@section("content_admin")

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Khối Html</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tableuser" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Thao Tác</th>
                  <th>id</th>
                  <th>Tiêu Đề</th>
                  <th>Nội Dung</th>
                  <th>Xuất Bản</th>
                </tr>
                </thead>
                <tbody>
                @foreach($html_temp as $tv)
                <tr>
                  <td style="display:flex">
                  {!! Form::open(array('route' =>array('admin.htmlblock.destroy',$tv->id),'method'=>'DELETE')) !!}
                  <button  type="submit" class="but_delete" onclick="return confirmdelete('bạn có chắc chắn xóa không')">Xóa</button>
                  {!! Form::close() !!}
                  <a href="{{ route('admin.htmlblock.edit',$tv->id) }}">Sửa</a>
                  </td>
                  <td>{!! $tv->id !!}</td>
                  <td>{!! $tv->title !!}</td>
                  <td>{!! $tv->content !!}</td>
                  <td>{!! $tv->published !!}</td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Thao Tác</th>
                  <th>id</th>
                  <th>Tiêu Đề</th>
                  <th>Nội Dung</th>
                  <th>Xuất Bản</th>
                </tr>
                </tfoot>
              </table>
            </div>
             </div>
            <!-- /.box-body -->


 @stop