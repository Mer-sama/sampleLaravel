@yield('html')
<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}">
<head>
	<title>
	@yield('title')
	</title>
	<style type="text/css">
	body{
		padding: 5px;
	}
	input{
		margin-top: 5px;
	}
	table{
		margin-top: 15px;
	}

	</style>
</head>
@yield('body')
<body>
@yield('center')
<center>
</center>
</body>
</html>