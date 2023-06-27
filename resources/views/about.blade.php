<section>
    <div id="landing-offer" class="pad-sec">
        <div class="container">
           <div class="title-section big-title-sec animated out" data-animation="fadeInUp" data-delay="0">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                          <h2 class="big-title"> about us</h2>
                          <h1 class="big-subtitle">DMI COLLEGE OF ENGINEERING</h1>
                          <hr>
                    </div>
              </div>
         </div>
         <div class="card">
          <div class="col-lg-12">
                 <div class="owl-carousel owl-theme">
                     @foreach ($iterm_data as $iterm )
                             <img  height="200" width="200" src="brochure/{{$iterm->brochure}}" alt="events images" class="card-img-top">
                                  <div class="card-body">
                                    <h3 class="card-name">{{$iterm->name}}</h3>
                                    <h3 class="card-department name">{{$iterm->department_name}}</h3>
                                    <h3 class="card-year">{{$iterm->year}}</h3>
                                    <h3 class="card-category">{{$iterm->category}}</h3>
                                    <h3 class="card-date">{{$iterm->date}}</h3>
                                    <h3 class="card-duration">{{$iterm->duration}}</h3>
                                    <h3 class="card-sponsor">{{$iterm->sponsor}}</h3>
                                 </div>
                     @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- End row -->
  </div> <!-- end title-section -->
  <script>

$(".owl-carousel").owlCarousel({

autoPlay: 3000,
items : 4,
itemsDesktop : [1199,3],
itemsDesktopSmall : [979,3],
center: true,
nav:true,
loop:true,
responsive: {
600: {
items: 4
}
}
</script>


</section>
