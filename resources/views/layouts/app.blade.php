<!DOCTYPE html>
<html lang="en">
<head><title>Boteco do Toba</title></head>
<body>
	@if(count($errors) > 0)
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error}}</li>
			@endforeach
		</ul>
	@endif		
	@yield('main')
</body>
</html>	