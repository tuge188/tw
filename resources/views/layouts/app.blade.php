<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
{{-- app()->getLocale() 获取的是 config/app.php 中的 locale 选项，此选项的值应为 zh-CN。--}}


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- laravel 用某些应用可能会读取该meta用于防止跨站请求伪造攻击--}}

    <title>@yield('title', '名称待定') - 职教集团</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app" class="{{ route_class() }}-page">
    {{--route_class() 是我们在 bootstrap/helpers.php 中自定义的辅助方法,此方法会将当前请求的路由名称转换为 CSS 类名称，
    作用是允许我们针对某个页面做页面样式定制--}}


    @include('layouts._header')

    <div class="container">

        @yield('content')

    </div>

    @include('layouts._footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>