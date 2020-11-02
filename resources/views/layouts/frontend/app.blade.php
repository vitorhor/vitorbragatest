<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}">
</head>
<body class="antialiased bg-dark">

<div id="app">

    <b-navbar type="light" variant="white" :sticky="true" class="">
        <b-navbar-brand>
            <b-img src="{{asset("images/bemo-logo2.png")}}" width="167" height="100"></b-img>
        </b-navbar-brand>

        <b-navbar-nav class="ml-auto">
            <b-nav-item>
                <router-link to="/home" class="text-decoration-none">
                    Main
                </router-link>
            </b-nav-item>
            <b-nav-item>How To Prepare</b-nav-item>
            <b-nav-item>CDA Interview Questions</b-nav-item>
            <b-nav-item>
                <router-link to="/contact" class="text-decoration-none">
                    Contact Us
                </router-link>
            </b-nav-item>
        </b-navbar-nav>
    </b-navbar>

    <b-container fluid class="bg-white mb-4 mhd">

        <b-row>
            <b-col fluid>
                <router-view></router-view>
            </b-col>
        </b-row>

    </b-container>

    <footer>

        <b-navbar type="light" variant="light" :sticky="true" class="">
            <b-navbar-nav class="ml-auto">
                <b-nav-item>Main</b-nav-item>
                <b-nav-item>How To Prepare</b-nav-item>
                <b-nav-item>CDA Interview Questions</b-nav-item>
                <b-nav-item>Contact Us</b-nav-item>
            </b-navbar-nav>
        </b-navbar>

    </footer>

</div>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
