<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    @include('front.layout.head')


</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
        @include('front.layout.header')
        @yield('content')
        @include('front.layout.footer')

    </div>
    <!-- #wrapper end -->
    {{-- <div id="gotoTop" class="icon-angle-up"></div> --}}
    @include('front.layout.script')
</body>

</html>