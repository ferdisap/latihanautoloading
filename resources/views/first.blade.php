<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/sass/main.css') }}">

        <title>Laravel</title>
    </head>
    <body>

      <img src="{{ url('img/img1.jpg') }}" alt="" width="300px">
      <button class="btn btn-primary">Click Me!</button>

    </body>
</html>
