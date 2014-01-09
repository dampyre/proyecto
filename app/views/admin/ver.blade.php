<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">-->
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('/dashboard') }}">inicio</a>
	</div>
	<ul class="nav navbar-nav">
		
		<li><a href="{{ URL::to('create') }}">Create a Nerd</a>
	</ul>
</nav>

<h1>Showing {{ $admin->nick }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $admin->nombre }}</h2>
		<p>
			<strong>Email:</strong> {{ $admin->email }}<br>
			<strong>Tipo:</strong> {{ $admin->tipo }}
		</p>
	</div>

</div>
</body>
</html>