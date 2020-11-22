<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield("title")</title>
  </head>
  <body>

    @include("partials.header")

    <main>
      @yield("mainContent")
    </main>

    @include("partials.footer")

  </body>
</html>