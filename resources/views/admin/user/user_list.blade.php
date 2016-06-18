@extends("admin.headerfooter.masterpage")
@section("title")
Danh Sách Tài Khoản
@stop
@section("content_admin")

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Thành Viên</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tableuser" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Thao Tác</th>
                  <th>id</th>
                  <th>email</th>
                  <th>Họ Tên</th>
                  <th>Ngày Tạo</th>
                  <th>Tình Trạng</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user_temp as $tv)
                <tr>
                @if($tv->level='superadmin')
                  <td>
                  {!! Form::open(array('route' =>array('admin.user.destroy',$tv->id),'method'=>'DELETE')) !!}
                  <button  type="submit" class="but_delete" onclick="return confirmdelete('bạn có chắc chắn xóa không')" >xóa</button>
                  {!! Form::close() !!}
                  </td>
                @else
                <td></td>
                @endif
                  <td>{!! $tv->id !!}</td>
                  <td>{!! $tv->email !!}</td>
                  <td>{!! $tv->fullname !!}</td>
                  <td>{!! $tv->created_at !!}</td>
                  <td>{!! $tv->status !!}</td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Thao Tác</th>
                  <th>id</th>
                  <th>email</th>
                  <th>Họ Tên</th>
                  <th>Ngày Tạo</th>
                  <th>Tình Trạng</th>
                </tr>
                </tfoot>
              </table>
            </div>
             </div>
            <!-- /.box-body -->


 @stop