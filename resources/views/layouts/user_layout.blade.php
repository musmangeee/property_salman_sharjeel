<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.user.head')

@include('partials.user.header')

	@yield('content')
		
	@include('partials.user.footer')

	@include('partials.user.script')

</body>

</html>
