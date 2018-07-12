<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>Boteco do Toba</title></head>
<body>
	<div class="page-header">
	<center>
	<h1>Bar do Toba</h1>
	<br>
	<h3>Sejam Bem Vindos !!!!</h3>
	</center>
	</div>
	<nav class="navbar navbar-inverse">
	    <ul class="nav navbar-nav">
	      <span class="glyphicons glyphicons-home">HOME</span>
	      <li><a href="{{ route('homes.index') }}">HOME</a></li>
	      <li><a href="{{ route('cardapios.index') }}">Nosso Cardapio</a></li>
	      <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
	      <li><a href="{{ route('garcoms.index') }}">Nossos Garçons</a></li>
	    </ul>
  	</div>
	</nav>
	
	@if(count($errors) > 0)	
			@foreach($errors->all() as $error)
				<div class="alert alert-danger" role="alert">
				{{ $error}}
				</div>	
				@endforeach	
	@endif		
	@yield('main')

</body>
</html>	