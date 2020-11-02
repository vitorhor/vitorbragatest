<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

</head>
<body>

<div class="d-flex" id="wrapper">

    @auth
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Administration Panel</div>
            <div class="list-group list-group-flush">
                <a href="{{route("admin.dashboard")}}"
                   class="list-group-item list-group-item-action bg-light">Page Content</a>
                <a href="{{route("admin.configuration")}}"
                   class="list-group-item list-group-item-action bg-light">Configuration</a>
                <a href="javascript:;" onclick="document.getElementById('logout-form').submit();"
                   class="list-group-item list-group-item-action bg-light">Logout</a>
            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
            @csrf
        </form>
    @endauth

    <div id="page-content-wrapper">

        <div class="container-fluid">
            <div id="app">
                <main class="py-4">
                    <div class="container">

                        @if( count($errors) > 0 )
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </div>

</div>

@yield('javascript')

</body>
</html>

