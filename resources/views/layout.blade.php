<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('Title', 'Article App')</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

        <style media="screen">

          .article-element{

              margin-bottom: 2%;
              padding: 2%;
              border-bottom: 1px solid grey;

          }

        </style>

    </head>
    <body>
        @include('nav')
        @yield('content')
    </body>
</html>
