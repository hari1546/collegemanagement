
<!DOCTYPE html>
<html lang="en">
<head>

  @include("admin.header")
</head>
<body>
 <div id="app">
   <div class="main-wrapper main-wrapper-1">
     {{-- <div class="navbar-bg"></div> --}}

     <div class="main-sidebar sidebar-style-2">

      @include("admin.navbar")
      @include("admin.asidebar")
     <!-- Main Content -->



  <div class="main-content">
   <section class="section">
    <div class="section-body">
    <!-- <div class="form-inline mr-auto"> -->
      <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-6 col-lg-6">
  <div class="container">

<h2 class="my-4 display-4">Add New Category</h2>
<form action="{{url('/uploadcategory')}}"  method="post" enctype="multipart/form-data">
 @csrf

  <div class="form-group">
      <label>Category Name</label>
      <input type="text" id="id" class="form-control" name="name" value="" required />
  </div>
  <div class="form-group">
      <label>Description</label>
      <input type="text" id="id" class="form-control" name="description" value="" />
  </div>

  <div class="card-footer">
     <input type="submit" class="btn btn-primary" value="Add Category" />
    <a href="{{url('/categoryview')}}"><button type="button" class="btn btn-info ml-4 pl-2">back</button></a>
  </div>
</form>
</div>
</div>
</div>
  </section>

   </div>
 </div>
   @include("admin.scripts")
</body>
</html>
