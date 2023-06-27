
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
     <h2 class="text-center display-4">Event Management System - Events</h2>
 <div class="row my-2">
  <a href="{{url('/addnew')}}"><button type="button" class="btn btn-primary ml-4 pl-2">Add New</button></a>
  </div>

  <div class="input-group">
    <form  method="get" action="{{url('/search')}}">
    <div class="search-element">
      <input  type="search" name="search" placeholder="Search" aria-label="Search" data-width="200">
      <input type="submit" value="search" class="btn btn-success">
    </div>
   </form>
   <div>
     <a ><button type="button" id="excel" class="btn btn-success ml-4 pl-2">Excel</button></a>
    </div>
    <div class="input-group">
   
    <form  method="post" action="{{url('/searchevent')}}">
      @csrf
    <div class="search-element">
    <br>
   
    <input  type="date" name="from_date"  aria-label="Search" data-width="200">
      <input  type="date" name="to_date"  aria-label="Search" data-width="200">

      <input type="submit" value="Filter" class="btn btn-success">
    </div>
   </form>
   <div>
  
  </div>


    <table class="table table-striped " id="example">
		<thead>
			<tr>
				<!-- <th>Event No.</th> -->

                <th>Events Name</th>
                <th>Topic</th>
                <th>Resource person</th>
				<th>Department Name</th>
				<th>Year</th>
				<th>Category</th>
				<th>Date</th>
                <th>Time</th>
                <th>Report</th>
                <th>Sponsored By</th>
                <th style="text-align:center" class="excludeThisClass">Brochure</th>
                {{-- <th style="text-align:center">Image</th> --}}
                <th class="excludeThisClass">View</th>
				<th class="excludeThisClass">Delete</th>
                <th class="excludeThisClass">Update</th>

			</tr>
		</thead>



         @foreach ($iterm_data as $iterm )
        <tr>
            <td>{{$iterm->name}}</td>
            <td>{{$iterm->topic}}</td>
            <td>{{$iterm->resorce_person}}</td>
            <td>{{$iterm->department_name}}</td>
            <td>{{$iterm->year}}</td>
            <td>{{$iterm->category}}</td>
            <td>{{$iterm->date}}</td>
            <td>{{$iterm->duration}}</td>
            <td>{{$iterm->report}}</td>
            <td>{{$iterm->sponsor}}</td>
            <td class="excludeThisClass"><img  height="200" width="200" src="brochure/{{$iterm->brochure}}" alt="events images"></td>
            {{-- <td style="text-align:center"><img  height="200" width="200" src="multipleimage/{{ $iterm->images }}" class="img-responsive"  alt="events images"></td> --}}
            <td class="excludeThisClass"><a href="{{url('/showmodel',$iterm->id)}}"><span class="fa fa-eye" title="View Record" data-toggle="tooltip"></span></a></td>
            <td class="excludeThisClass"><a href="{{url('/deletemodel',$iterm->id)}}"><span class="fa fa-trash" title="Delete Record" data-toggle="tooltip"></span></a></td>
            <td class="excludeThisClass"><a href="{{url('/updateview',$iterm->id)}}"><span class="fas fa-edit" title="Update Record" data-toggle="tooltip" ></span></a></td>



        </tr>
    @endforeach

    </div>
 </div>
</table>
   @include("admin.scripts")
</body>
</html>
