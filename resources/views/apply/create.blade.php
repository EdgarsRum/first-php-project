<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Apply</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
       Apply Create stuff


       <form method="POST" action="/apply/records">
           {{csrf_field()}}
           <label>
               <input type="text" name="description" placeholder="description"/>
           </label>
           <div>
               <button type="submit">Create</button>
           </div>
       </form>


       <div id="app">
           <example-component></example-component>
       </div>
       <!-- Scripts -->
       <script src="./../../js/app.js"></script>
    </body>
</html>
