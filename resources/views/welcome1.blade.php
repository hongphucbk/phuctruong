<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Phuc Truong</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <base href="{{asset('')}}">
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
    	Hello
        <div id="app">
            <example-component></example-component>

            <my-component></my-component>
            <conditional-rendering></conditional-rendering>
            <list-rendering></list-rendering>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>
