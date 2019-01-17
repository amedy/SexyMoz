<!DOCTYPE html>
<html>
<head>
	<title> Login & MM</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
	<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Font+Name">
</head>
<body>
	<div class="backgroud"></div>
<section id="conteudo-view" class="login">
	<h1>Nosso site</h1>
	<h3>Aqui tens produtos a sua escolha</h3>

{!! Form::open(['route'=>'user.log','method'=>'post']) !!}

<p>Acesse o nosso sistema</p>

<label>
	{!! Form::text('username', null, ['class'=>'input', 'placeholder'=>'Usaurio']);!!}
</label>

<label>
	{!! Form::password('password',['placeholder'=>'Introduza a senha'])!!}
</label>

<label>	{!!Form::submit('Enviar');!!}
</label>
{!! Form::close() !!}
</section>
</body>
</html>