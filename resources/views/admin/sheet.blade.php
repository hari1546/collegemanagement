
<!DOCTYPE html>
<html lang="en">
<head>
  @include('public')
   @include("admin.header")
</head>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      {{-- <div class="navbar-bg"></div> --}}

      <div class="main-sidebar sidebar-style-2">

       @include('admin.navbar')
       @include("admin.asidebar")
      <!-- Main Content -->

    </div>
  </div>
    @include("admin.scripts")
</body>
</html>
