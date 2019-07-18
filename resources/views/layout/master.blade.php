@yield('html')
<!DOCTYPE html>
<html>
<<<<<<< HEAD

=======
@yield('title')
>>>>>>> a0f9ee1869144da1c01a4b418190695b41fc2fed
<link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}">
<head>
	<title>
<<<<<<< HEAD
	@yield('title')
=======
		Form Activity
>>>>>>> a0f9ee1869144da1c01a4b418190695b41fc2fed
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