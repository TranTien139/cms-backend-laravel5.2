@extends("admin.headerfooter.masterpage")
@section("title")
Liên Hệ
@stop
@section("content_admin") 
  <div class="col-lg-12">
      <h1 class="page-header">Liên Hệ
      </h1>
  </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
         <ul class="list-group">
          <li class="list-group-item">Link facebook: {!! $contact_temp->linkfacebook !!}</li>
          <li class="list-group-item">Link twitter: {!! $contact_temp->linktwitter!!}</li>
          <li class="list-group-item">Link google+: {!! $contact_temp->linkgoogleplus !!}</li>
          <li class="list-group-item">Số Điện Thoại 1: {!! $contact_temp->phone1 !!}</li>
          <li class="list-group-item">Số Điện Thoại 2: {!! $contact_temp->phone2 !!}</li>
          <li class="list-group-item">Địa Chỉ: {!! $contact_temp->adress !!}</li>
          <li class="list-group-item">Địa Chỉ email: {!! $contact_temp->email!!}</li>
          <li class="list-group-item">link google map: {!! $contact_temp->linkgooglemap!!}</li>
      </ul>
      <a href="{!! url('admin/contact',[$contact_temp->id,'edit']) !!}">Sửa Thông Tin</a>
      </div>
@stop