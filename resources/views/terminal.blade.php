<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> 

    <script src="{{asset('js/app.js')}}" defer></script>
</head>

<body>
    <div id="app">
        <input-component></input-component>
    </div>
</body>
</html>
