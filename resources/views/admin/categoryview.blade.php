
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
     <div class="container-fluid my-4">

        <h2 class="text-center display-4">Event Management System - Categories</h2>
        <div class="row my-2">

			<a href="{{url('/categoryadd')}}"><button type="button" class="btn btn-primary ml-4 pl-2">Add New</button></a>
		</div>
		<table class="table">
		<thead>
			<tr>
				<th>Category Name</th>
				<th>Description</th>
				<th>Delete</th>
                <th>Update</th>
           </tr>
		</thead>

         @foreach ($data as $data )
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>

            <td><a href="{{url('/deletecategory',$data->id)}}"><span class="fa fa-trash" title="Delete Record" data-toggle="tooltip"></span></a></td>
            <td><a href="{{url('/updatecategory',$data->id)}}"><span class="fas fa-edit" title="Update Record" data-toggle="tooltip" ></span></a></td>


        </tr>
    @endforeach


		</table>
	</div>
	</div>
</div>

   </div>
 </div>
   @include("admin.scripts")
</body>
</html>
