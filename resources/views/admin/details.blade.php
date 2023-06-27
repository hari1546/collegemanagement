<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
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
                            <h2>Topic:{{$iterm_data->topic}}</h2>
                            <h3>Resource Person:{{$iterm_data->resource_person}}</h3>
                            <h3>Department Name:{{$iterm_data->department_name}}</h3>
                            <h3>Year:{{$iterm_data->year}}</h3>
                            <h3>Date:{{$iterm_data->date}}</h3>
                            <h3>Time:{{$iterm_data->time}}</h3>
                            <h3>Message:{{$iterm_data->message}}</h3>

                            <h3><img  height="350" width="350" src="{{public_path('cover/'.$iterm_data->cover) }}"  alt="events image"></h3>
                      </div>

              </div>
       </div>

    </div>


</body>
</html>


</body>
</html>
