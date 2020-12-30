<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}>
<head>
	@include('layout.partial.head')
</head>
<body class="{{ (!empty($bodyClass)) ? $bodyClass : '' }}">
	<!-- BEGIN #app -->
	<div id="app" class="app app-footer-fixed">
		@include('layout.partial.header')

		@includeWhen(empty($sidebarHide), 'layout.partial.sidebar')

	    @yield('content')

		<div id="footer" class="app-footer">
			<i class="fab fa-github"></i><a href="https://github.com/bood-dev" target="blank"> bood-dev</a>
			&nbsp;&nbsp;© {{ date('Y') }}
		</div>
	</div>
	<!-- END #app -->

	@include('layout.partial.scroll-top-btn')

	@include('layout.partial.scripts')
</body>
</html>
