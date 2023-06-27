
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

        <h2 class="text-center display-4">Meeting  Details</h2>
		<a href="{{url('/semiadd')}}"><button type="button" class="btn btn-primary ml-4 pl-2">Add Metting Details</button></a>


	<table class="table table-striped " id="example">
		<thead>
			<tr>
				<th>Topic</th>
                <th>Resource Person</th>
                <th>Department Name</th>
                <th>Year</th>
                <th> Date</th>
                <th>Time</th>
                <th>Message</th>
                <th style="text-align: center">Cover</th>
                <th>View</th>
                <th>Delete</th>
                <th>Update</th>

			</tr>
		</thead>


         @foreach ($iterm_data as $iterm )
        <tr>
            <td>{{$iterm->topic}}</td>
            <td>{{$iterm->resource_person}}</td>
            <td>{{$iterm->department_name}}</td>
            <td>{{$iterm->year}}</td>
            <td>{{$iterm->date}}</td>
            <td>{{$iterm->time}}</td>
            <td>{{$iterm->message}}</td>
            <td><img  height="200" width="200" src="cover/{{$iterm->cover}}" alt="cover"></td>


            <td ><a href="{{url('/showsemi',$iterm->id)}}"><span class="fa fa-eye" title="View Record" data-toggle="tooltip"></span></a></td>
            <td><a href="{{url('/deletesemi',$iterm->id)}}" ><span class="fa fa-trash" title="Delete Record" data-toggle="tooltip"></span></a></td>
            <td><a href="{{url('/updatesemi',$iterm->id)}}"><span class="fas fa-edit" title="Update Record" data-toggle="tooltip" ></span></a></td>


        </tr>
    @endforeach

    </div>
 </div>
</table>
   @include("admin.scripts")
</body>
</html>
