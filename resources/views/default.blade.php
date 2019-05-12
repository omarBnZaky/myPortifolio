<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nuno - Responsive Bootstrap Theme</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/fixed.css')}}">
</head>

<body data-spy="scroll" data-target="">

<!--start Home Section -->
@include('inc.home')
<!--end Home Section -->


<!-- start Text Section -->
@include('inc.text')
<!--end Text Section -->



<!-- start Features Section -->
@include('inc.features')
<!--end Features Section -->


<!-- start Resources Section -->
@include('inc.resources')
<!--end Resources Section -->



<!-- start Clients Section -->
@include('inc.clients')
<!--end Clients Section -->



<!-- start contact Section -->
@include('inc.contact')
<!--end contact Section -->

<!--- Script Source Files -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->


</body>
</html>