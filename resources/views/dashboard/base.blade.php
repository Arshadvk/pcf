<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    @include('dashboard.layouts._head')
    <title>
        @yield('title')
    </title>
</head>

<body  id="top">

    {{-- @include('site.includes._loader') --}}
    @include('dashboard.layouts._header')
    @include('dashboard.layouts._sidebar')
    @yield('content')


    @include('dashboard.layouts._footer')
    @include('sweetalert::alert')

</body>

</html>
