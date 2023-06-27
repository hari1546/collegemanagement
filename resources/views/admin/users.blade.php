
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

		<h2 class="display-4">Event Management System - Users</h2>

	<table class="table table-striped " id="example">
            <tr align="center">
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

                @foreach ( $data as $data )
                       <tr align="center">
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                          @if($data->usertype=="0")
                             <td><a href="{{url('/deleteuser',$data->id)}}"><span class="fa fa-trash" title="Delete Record" data-toggle="tooltip"></span></a></td>
                          @else
                             <td>Not Allowed</td>
                         @endif
                      </tr>
                  @endforeach

        </table>
      </div>



   </div>
 </div>
   @include("admin.scripts")
</body>
</html>
