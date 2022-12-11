<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">StudentManagement</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" style="margin-left:210px">
      <li class="nav-item active">
        <a class="nav-link" style="font-weight:bold;"  href="{{route('home')}}">Add Student</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-weight:bold;" href="{{route('manage.student')}}">Manage Student</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-weight:bold;"  href="{{route('add.dept')}}">Add Department</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-weight:bold;"  href="{{route('manage.dept')}}">Manage Department</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-weight:bold;"  href="{{route('section')}}">Add Section</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-weight:bold;" href="{{route('manage.section')}}">Manage Section</a>
      </li>
    </ul>
  </div>
</nav>
@yield('content')

    <script src="{{asset('assets')}}/js/bootstrap.bundle.js"></script>
</body>
</html>

</html>