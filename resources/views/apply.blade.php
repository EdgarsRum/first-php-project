<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Apply</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
       Hi, here be the apply stuff

       <div id="app">
           <example-component></example-component>
       </div>
       <!-- Scripts -->
       <script src="js/app.js"></script>
    </body>
</html>
