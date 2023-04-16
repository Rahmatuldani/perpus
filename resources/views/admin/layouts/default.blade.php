<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.partials.head', ['app_title' => "App Title"])

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('admin.layouts.partials.navbar')

  @include('admin.layouts.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  @include('admin.layouts.partials.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src={{ asset('plugins/jquery/jquery.min.js') }}></script>
<!-- Bootstrap 4 -->
<script src={{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- AdminLTE App -->
<script src={{ asset('dist/js/adminlte.min.js') }}></script>
@stack('js')

</body>
</html>
