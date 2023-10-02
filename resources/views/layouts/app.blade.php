<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <a class="navbar-brand" href="#">CRUD Demo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_student">Add Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="students">Students List</a>
            </li>
          </ul>
        </div>
      </nav>
  <main class="container">
    @yield('content')
  </main>

  <footer class="text-center">
    &copy; {{ date('Y') }} My Application
  </footer>
</body>
</html>