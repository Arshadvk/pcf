<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    @include('new.layout._head')
    <title>
        @yield('title')
    </title>
</head>

<body id="top">
    

    @include('new.layout._header')
    @yield('content')


    @include('new.layout._footer')

    @include('new.layout._scripts')
    
</body>

</html>