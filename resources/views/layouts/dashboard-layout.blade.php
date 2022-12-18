<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.dashboard.header')

  
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
@include('includes.dashboard.navbar')
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('includes.dashboard.sidebar')
 

  @yield('content')
  

  
{{-- footer --}}
  @include('includes.dashboard.footer')


{{-- scripts --}}
  @include('includes.dashboard.scripts')
 

</body>
</html>
