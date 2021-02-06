<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản trị - Store</title>
    <base href="{{ asset('') }}backend/">
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link href="css/styles.css" rel="stylesheet">
	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>
	<link rel="stylesheet" href="Awesome/css/all.css">
</head>
<body>
	<!-- header -->
	@include('Backend.Master.header')
	<!-- header -->
	<!-- sidebar left-->
	@include('Backend.Master.sidebar')
	<!--/. end sidebar left-->

	<!--main-->
	@yield('dashboard')
	@yield('user')
	@yield('adduser')
	@yield('edituser')
	@yield('category')
	@yield('editcategory')
	@yield('addproduct')
	@yield('editproduct')
	@yield('product')
	@yield('order')
	@yield('processed')
	<!--end main-->

	<!-- javascript -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>


	

</body>

</html>
