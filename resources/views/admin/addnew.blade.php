<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.header")
    @include("admin.header")
    <style>
    #none-1 {
        display: none;
    }

    #none-2 {
        display: none;
    }
    .none,.sw,.ev,.ev1{
        display: none;
    }
    </style>
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
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <form action="{{url('/uploadevents')}}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control"  id="category"
                                                    name="category">
                                                    <option>Select The Category</option>
                                                    <option>Events</option>
                                                    <option>seminar</option>
                                                    <option>webinar</option>
                                                    <option>GuestLecture</option>
                                                    <option>Other Event</option>
                                                    {{--<option>MECH</option>
                                        <option>All</option> --}}
                                                </select>
                                            </div>
                                            <div id="other">
                                                <div class="none sw" id="none-2">
                                                    <div class="form-group">
                                                        <label>Topic</label>
                                                        <input type="topic" class="form-control" name="topic" value=""
                                                            required />
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Resource Person</label>
                                                        <input type="Name" class="form-control" name="resource_person"
                                                            value="" required />
                                                    </div>
                                                </div>

                                                <!----------events------------->
                                                <div class="none ev" id="none-1">
                                                    <div id="none-3">
                                                        <div class="form-group">
                                                            <label>Events Name</label>
                                                            <input type="Name" class="form-control" name="name" value=""
                                                                required />
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="none ev1" >
                                                    <div class="form-group">
                                                        <label>Department Name</label>
                                                        <select class="form-control" name="department_name">
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
                                                        <select class="form-control" name="year">
                                                            <option>Select The Year</option>
                                                            <option>First</option>
                                                            <option>Second</option>
                                                            <option>Thrid</option>
                                                            <option>fourth</option>
                                                            <option>All</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="font-six"> Date</label>
                                                        <input type="Date" class="form-control" name="date" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sponsor</label>
                                                        <input type="Sponsor" class="form-control" name="sponsor"
                                                            value="" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Time</label>
                                                        <input type="Time" class="form-control" name="duration"
                                                            value="" />
                                                    </div>
                                                    <div>
                                                        <label class="m-2">Brochure Image</label>
                                                        <input type="file" id="input-file-now-custom-3"
                                                            class="form-control m-2" name="brochure">
                                                    </div>
                                                    <div>
                                                        <label class="m-2">Images</label>
                                                        <input type="file" id="input-file-now-custom-3"
                                                            class="form-control m-2" name="images[]" multiple>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="font-six"> REPPORTS</label>
                                                        <input type="report" class="form-control" name="report"
                                                            value="" />
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <input type="submit" class="btn btn-primary" value="save" />
                                                    <a href="{{url('/model')}}"><button type="button"
                                                            class="btn btn-info ml-4 pl-2">back</button></a>
                                                </div>

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
            <script>

            </script>
</body>

</html>