<!DOCTYPE html>
<html>
<head>
	<title>themes</title>
</head>
<body>
<?php $data = App\MenuModel::select('id','title','alias','parent_id')->orderBy('order','DESC')->get()->toArray(); ?>
<ul>
	@foreach($data as $values)
		@if($values['parent_id'] == 0)
			<li><a href="{!! url($values['alias']) !!}">{!! $values['title'] !!}</a>
				<?php submenu($data,$values['id']); ?>
			</li>
		@endif
	@endforeach
</ul>
</body>
</html>