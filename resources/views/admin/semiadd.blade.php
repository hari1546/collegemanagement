
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

                        <h2 class="text-center display-4">MEETINGS</h2>

                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <form action="{{url('/uploadsemi')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Topic</label>
                                <input type="text" class="form-control" name="topic" value="" required />
                            </div>
                            {{-- <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description" value="" required />
                            </div> --}}

                            <div class="form-group">
                                <label>Resource Person</label>
                                <input type="text" class="form-control" name="resource_person" value="" required />
                            </div>
                         <div class="form-group">
                             <label>Department Name</label>
                             <select class="form-control"  name="department_name" value="" required>
                                   <option>Select The Department</option>
                                   <option>IT</option>
                                   <option>CS</option>
                                   <option>ECE</option>
                                   <option>CIVIL</option>
                                  <option>MECH</option>
                                  <option>All</option>

                             </select>
                          </div>
                      <div class="form-group">
                          <label>Year</label>
                             <select class="form-control"  name="year">
                                   <option>Select The Year</option>
                                   <option>First</option>
                                   <option>Second</option>
                                   <option>Thrid</option>
                                   <option>fourth</option>
                                   <option>All</option>
                             </select>
                      </div>

                            <div class="form-group">
                                <label> Date</label>
                                <input type="date" class="form-control" name="date" value="" />
                            </div>

                            <div class="form-group">
                                <label>Time</label>
                                <input type="time" class="form-control" name="time" value="" />
                            </div>
                            <div>
                                <label>Message</label>
                                <textarea class="form-control" name="message" required=""></textarea>
                            </div>
                            <div>
                                <label class="m-2">Cover</label>
                                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                            </div>
                           <div>
                            <label class="m-2">Pictures</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="pictures[]" multiple>
                           </div>

                         <div class="card-footer">
                             <input type="submit" class="btn btn-info col-md-6" value="save" />
                             <a href="{{url('/semi')}}"><button type="button" class="btn btn-info ml-4 pl-2">back</button></a>
                         </div>
                        </form>



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
