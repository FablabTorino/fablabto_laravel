    <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
	@include('frontend.includes.head')
</head>

<body data-spy="scroll" data-target="#header" data-offset="51">

<!-- begin #page-container -->
<div id="page-container" class="fade">
		
    @include('frontend.includes.header')
    @yield('content')
    @include('frontend.includes.footer')

</div>
<!-- end #page-container -->
	
@include('frontend.includes.page-js')

</body>
</html>
