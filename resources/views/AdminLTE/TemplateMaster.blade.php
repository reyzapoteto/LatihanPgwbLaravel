<!DOCTYPE html>
<html lang="en">
<head>
  @include('AdminLTE.head')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

@include('AdminLTE.Navbar')

@yield('content')

@include('AdminLTE.Fotter')
</body>
</html>
