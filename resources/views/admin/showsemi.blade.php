
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

                        <h2 class="text-center display-4">VIEW MEETING</h2>

                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">

                        <div class="form-group">
                            <label>Topic</label>
                            <input type="text" class="form-control" name="topic" value="{{$iterm_data->topic}}"  required />
                        </div>
                        {{-- <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" value="" required />
                        </div> --}}

                        <div class="form-group">
                            <label>Resource Person</label>
                            <input type="text" class="form-control" name="resource_person"  value="{{$iterm_data->resource_person}}"  required />
                        </div>
                        <div class="form-group">
                            <label>Department Name</label>
                               <input type="text"  class="form-control"   name="department_name"  value="{{$iterm_data->department_name}}" >

                        </div>
                        <div class="form-group">
                            <label>Year</label>
                               <input type="year"  class="form-control"   name="year"  value="{{$iterm_data->year}}" >

                           </div>

                        <div class="form-group">
                            <label> Date</label>
                            <input type="date" class="form-control" name="date"value="{{$iterm_data->date}}"  />
                        </div>

                        <div class="form-group">
                            <label>Time</label>
                            <input type="time" class="form-control" name="time" value="{{$iterm_data->time}}" />
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <input type="text" class="form-control" name="message" value="{{$iterm_data->message}}" />
                        </div>
                        <div>
                            <label>Cover</label>
                            <img  height="200" width="200" src="/cover/{{$iterm_data->cover}}"alt="seminar image">
                        </div>
                        <div class="card-footer">

                               {{-- <a href="#"><button type="button" class="btn btn-info ml-4 pl-2">views</button></a> --}}
                               <a href="{{url('/details/'.$iterm_data->id)}}"><button type="button" class="btn btn-info ml-4 pl-2">PDf</button></a>
                               <a href="{{url('/semi')}}"><button type="button" class="btn btn-info  ml-4 pl-2">back</button></a>

                        </div>
   </div>
              </div>
         </div>
     </div>
   </section>

   </div>
 </div>
   @include("admin.scripts")
</body>
</html>
