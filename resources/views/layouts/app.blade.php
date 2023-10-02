<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <main class="container">
    @yield('content')
  </main>

  <footer>
    &copy; {{ date('Y') }} My Application
  </footer>
</body>
</html>