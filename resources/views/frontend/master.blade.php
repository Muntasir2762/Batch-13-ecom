<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-commerce Website</title>
	@include('frontend.includes.style')

</head>
<body>
	@include('frontend.includes.header')

    <main>
      @yield('content')
    </main>

	@include('frontend.includes.footer')

	@include('frontend.includes.script')

    @stack('script')
</body>
</html>