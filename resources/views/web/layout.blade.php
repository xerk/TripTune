<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('web.header')
        @yield('extra-css')
    </head>


<body class="@yield('body-class', '')">
    <div id="app" data-sticky-wrap>
        @include('web.navbar')
        @yield('content')
    </div>
    
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    @include('web.footer')
    
    @yield('extra-js')
</body>
</html>