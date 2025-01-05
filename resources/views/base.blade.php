<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    @include('layout._head')
    <title>
        @yield('title')
    </title>
</head>

<body id="top">

    @include('layout._header')
    @yield('content')


    @include('layout._footer')

    @include('layout._scripts')
    
</body>

</html>