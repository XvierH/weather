<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('core.variables')
    @isset($map)
    {!! $map['js'] !!}
    @endisset
</head>
<body>
    <div id="app">
        <div class="layout-header">
            <div class="header">
                <div class="container clearfix">
                    <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
        @include('core.menu')
        <div class="layout-content">
            <div class="container clearfix">
                @include('core.messages')
                @yield('content')
            </div>
        </div>
        <div class="layout-footer">
            <div class="container clearfix">
            </div>
        </div>
        <div class="layout-loading">
            <div class="loading-text">
                <p><i class="fas fa-spinner fa-spin"></i></p>
                <p>Cargando</p>
            </div>
        </div>
    </div>
</body>
</html>
