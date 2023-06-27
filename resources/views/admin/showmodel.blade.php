
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

                        <h2 class="text-center display-4">VIEW EVENTS</h2>
                       <div class="col-md-12">

                       </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">

                        <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{$iterm_data->name}}" required />
                            </div>
                            {{-- <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description" value="" required />
                            </div> --}}
                       <div class="form-group">
                          <label>Department Name</label>
                             <input type="text"  class="form-control"   name="department_name"  value="{{$iterm_data->department_name}}" >

                      </div>

                      <div class="form-group">
                        <label>Year</label>
                           <input type="year"  class="form-control"   name="year"  value="{{$iterm_data->year}}" >

                       </div>


                       <div class="form-group">
                        <label>Category </label>
                        <input type="text" class="form-control" name="category" value="{{$iterm_data->category}}" />

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
                          <label>Sponsor</label>
                           <input type="text" class="form-control" name="sponsor" value="{{$iterm_data->sponsor}}"  />
                      </div>

                        <div class="image-center">
                            <label>brochure</label>
                                <img  height="200" width="200"  src="/brochure/{{$iterm_data->brochure}}"  alt="events image">
                         </div>

                     <div class="image-center">
                      <p>Images:</p>
                         @foreach ($iterm_data->images as $img)
                            <img src="/images/{{$img->image}}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" >
                         @endforeach

                   </div>

                            <div class="card-footer">

                               {{-- <a href="#"><button type="button" class="btn btn-info ml-4 pl-2">views</button></a> --}}
                               <a href="{{url('/invoice/'.$iterm_data->id)}}"><button type="button" class="btn btn-info ml-4 pl-2">PDf</button></a>
                               <a href="{{url('/model')}}"><button type="button" class="btn btn-info  ml-4 pl-2">back</button></a>

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
