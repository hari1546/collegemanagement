<!DOCTYPE html>
<html>
<head>
    <title>Funda of Web IT</title>
</head>
<body>
  <style type="text/css" media="screen">
             img {
                vertical-align: middle;
                border-style: none;
            }
            h1 {
                text-align: center;
            }
            /* h3 {
                text-align: center;
            } */
   </style>
    <div class="main-content">
        <div class="section-body">
                <div class="container">
                      <div class="text-center">
                           <h1>VIEW DETELS</h1>
                            <h3> Events Name:{{$iterm_data->name}}</h3>
                            <h3>Department Name:{{$iterm_data->department_name}}</h3>
                            <h3>Year:{{$iterm_data->year}}</h3>
                            <h3>Category:{{$iterm_data->category}}</h3>
                            <h3>Date:{{$iterm_data->date}}</h3>
                            <h3>Time:{{$iterm_data->duration}}</h3>
                            <h3>Sponsor:{{$iterm_data->sponsor}}</h3>
                            <div><p>Brochure Image</p><img  height="350" width="350" src="{{public_path('brochure/'.$iterm_data->brochure) }}" alt="events image"></div>
                            <div>
                                @foreach ($iterm_data->images as $img)
                                  <p>Events Images</p>
                                  <img  height="150" width="150"class="row-col-lg-4 col-md-12 mb-4 mb-lg-0" src={{public_path('images/'.$img->image) }} alt="events">
                               @endforeach
                        </div>
                        </div>
                    </div>

              </div>
       </div>

    </div>


</body>
</html>
