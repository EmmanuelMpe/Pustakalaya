<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Pustakalaya</title>
  <meta name="description" content="Pustakalaya, Library Management System." />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{ HTML::style('bootstrap/bootstrap.css') }}
  {{ HTML::style('bootstrap/bootswatch.css') }}
</head>
<body>

  @include('layout.navbar')
  <div class="container">
    @yield('content')
  </div>
  @include('layout.footer')

  {{ HTML::script('bootstrap/jquery-1.js') }}
  {{ HTML::script('bootstrap/bootstrap.js') }}
  {{ HTML::script('bootstrap/bootswatch.js') }}
</body>

<html>
