<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Pustakalaya</title>
  <meta name="description" content="Pustakalaya, Library Management System." />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.css" media="screen">
  <link rel="stylesheet" href="bootstrap/bootswatch.css">
</head>

<body>
  @include('layout.navbar')

  <div class="container">
    @yield('content')
    @include('layout.footer')
  </div>

  <script src="bootstrap/jquery-1.js"></script>
  <script src="bootstrap/bootstrap.js"></script>
  <script src="bootstrap/bootswatch.js"></script>
</body>
<html>
