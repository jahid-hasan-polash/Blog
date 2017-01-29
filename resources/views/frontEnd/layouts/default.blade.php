<!DOCTYPE html>
<html lang="en">

@include('frontEnd.includes.header')

@yield('style')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('frontEnd.includes.topMenu')

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div><!-- /.content-wrapper -->

@include('frontEnd.includes.footer')

</div><!-- ./wrapper -->

@yield('script')

</body>
</html>