
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
               <div class="col-lg-3">
                   <p>brochure:</p>
                   <form action="/deletebrochure/{{ $iterm_data->id }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                   </form>
                   <img src="/brochure/{{$iterm_data->brochure}}" class="img-responsive" style="max-height: 100px;max:width:100px;" alt="">
                   <br>




                    @if (count($iterm_data->images)>0)
                    <p>Images:</p>
                    @foreach ($iterm_data->images as $img)
                    <form action="/deleteimage/{{ $img->id }}" method="post">
                        <button class="btn text-danger">X</button>
                        @csrf
                        @method('delete')
                    </form>
                    <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    @endforeach
                    @endif
              </div>


                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <h2 class="text-center display-4">UPDATE EVENTS</h2>
          <form action="{{url('/update',$iterm_data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
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
                                 <select class="form-control"  name="department_name"  value="{{$iterm_data->department_name}}" >
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
                             <select class="form-control"  name="year" value="{{$iterm_data->department_name}}" >
                                   <option>Select The Year</option>
                                   <option>First</option>
                                   <option>Second</option>
                                   <option>Thrid</option>
                                   <option>fourth</option>
                             </select>
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
                            <div>
                                <label class="m-2">Brochure Image</label>
                                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="brochure" >
                            </div>
                           <div>
                            <label class="m-2">Images</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple >
                           </div>

                            <div class="card-footer">
                           <input type="submit" class="btn btn-primary" value="save"/>
                           <a href="{{url('/model')}}"><button type="button" class="btn btn-primary ml-4 pl-2">back</button></a>
                            </div>
                        </form>
   </div>
 </div>
   @include("admin.scripts")
</body>
</html>
