<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.admin.head')

<body class="hold-transition skin-blue sidebar-mini">
	
	<div class="wrapper">

		@include('partials.admin.topnav')

		@include('partials.admin.sidebar')

		<div class="content-wrapper">
			
			@yield('content')
		
		</div>
		
		@include('partials.admin.footer')
	</div>

	@include('partials.admin.script')

</body>

</html>
