<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Apply</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="vuetify/dist/vuetify.min.css" >
        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
       <div id="app">
           <example-component></example-component>
       </div>
       <!-- Scripts -->
       <script src="js/app.js"></script>
    </body>
</html>
