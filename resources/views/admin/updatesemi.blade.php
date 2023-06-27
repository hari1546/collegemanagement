
<!DOCTYPE html>
<html lang="en">
<head>
   <base href="/public">
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
                <div class="container">
                    <h2 class="text-center display-4">UPDATE EVENTS</h2>

                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">

          <form action="{{url('/updatedetails',$iterm_data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Topic</label>
                                <input type="text" class="form-control" name="topic" value="{{$iterm_data->topic}}" required />
                            </div>
                             <div class="form-group">
                                <label>Resource Person</label>
                                <input type="text" class="form-control" name="resource_person" value="{{$iterm_data->resource_person}}" required />
                            </div>
                       <div class="form-group">
                          <label>Department Name</label>
                             <select class="form-control"  name="department_name" value="{{$iterm_data->department_name}}" >
                                   <option>Select The Department</option>
                                   <option>IT</option>
                                   <option>CS</option>
                                   <option>ECE</option>
                                   <option>CIVIL</option>
                                  <option>MECH</option>
                             </select>
                      </div>
                      <div class="form-group">
                          <label>Year</label>
                             <select class="form-control"  name="year" value="{{$iterm_data->year}}" >
                                   <option>Select The Year</option>
                                   <option>First</option>
                                   <option>Second</option>
                                   <option>Thrid</option>
                                   <option>fourth</option>
                             </select>
                      </div>
                           <div class="form-group">
                                <label> Date</label>
                                <input type="date" class="form-control" name="date" value="{{$iterm_data->date}}" />
                            </div>

                            <div class="form-group">
                                <label>Time</label>
                                <input type="time" class="form-control" name="duration" value="{{$iterm_data->duration}}" />
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <input type="text" class="form-control" name="message" value="{{$iterm_data->message}}" />
                            </div>

                            <div>
                                <label>cover</label>
                                 <img  height="200" width="200" src="/cover/{{$iterm_data->cover}}" alt="events image">
                            </div>
                            {{-- <div>
                                <label>Cover</label>
                                <input type="file" name="image" required>
                            </div> --}}
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" value="save"/>
                                <a href="{{url('/semi')}}"><button type="button" class="btn btn-primary ml-4 pl-2">back</button></a>
                            </div>
                        </form>
   </div>
 </div>
   @include("admin.scripts")
</body>
</html>
