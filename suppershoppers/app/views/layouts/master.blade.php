<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	@include('includes.header')
	<div class="container">
	   @include('layouts.alert')

		<div id="main" class="row">
				@yield('content')
		</div>

	</div>
    <div class="row">
		 <footer class="footer">
			@include('includes.footer')
		</footer>
	</div> 

</body>
</html>
