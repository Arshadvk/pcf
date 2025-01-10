<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    @include('old.layout._head')
    <title>
        @yield('title')
    </title>
</head>

<body id="top">

    @include('old.layout._header')
    @yield('content')


    @include('old.layout._footer')

    @include('old.layout._scripts')
    
</body>

</html>