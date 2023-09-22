<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>AquaZen Houseboats- rooms</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php require('include/links.php') ?>
    <style>
       video {
                
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height:auto;
                object-fit: cover;
                
                
                
            }
            
            

    </style>
  </head>
  <body class="bg-light">
  <?php require('include/header.php') ?>
   <!-- carousal -->
         <div class="video-fluid p-0">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    
                            <video class="w-100 d-block" style="max-height: 450px;"  autoplay loop muted>
                                    <source src="videos/timelapse2.mp4 " type="video/mp4">
                                    Your browser does not support the video tag.
                            </video>
                    </div>
                </div>
            </div>
        </div>

                  <div class="my-4 py-4 px-2 ">
                        <h2 class="fw-bold h-font fs-1 text-center">Our Rooms</h2>
                            <div class="h-line bg-dark">
                            </div>
                    </div>

                    

             <div class="container">
                   
                  <div class="row">
                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 px-0 px-lg-0">
                         <nav class="navbar navbar-expand-lg bg-white navbar-light rounded shadow">
                           <div class="container-fluid flex-lg-column align-items-stretch">
                           <h4 class="mt-2">Filters</h4>
                           <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                              <div class="border bg-light p-3 rounded mb-3">
                                 <h5 class="mb-3" >Check Availability</h5>
                                 <label class="form-label text-success">Check-in</label>
                                 <input type="date" class="form-control shadow-none mb-3"/> 
                                 <label class="form-label text-success">Check-Out</label>
                                 <input type="date" class="form-control shadow-none"/> 
                              </div>

                              <div class="border bg-light p-3 rounded mb-3">
                                 <h5 class="mb-3" >Facilities</h5>
                                 <div class="mb-2" >
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1"/>
                                    <label class="form-check-label text-success" for="f1">Facility one</label> 
                                 </div>

                                 <div class="mb-2" >
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1"/>
                                    <label class="form-check-label text-success" for="f1">Facility two</label> 
                                 </div>

                                 <div class="mb-2" >
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1"/>
                                    <label class="form-check-label text-success" for="f1">Facility three</label> 
                                 </div>
                                 
                                 
                              </div>

                              <div class="border bg-light p-3 rounded mb-3">
                                 <h5 class="mb-3" >Guests</h5>
                                 <div class="d-flex">
                                    <div class="me-3">
                                    <label class="form-label text-success">Adults</label>
                                    <input type="number" class="form-control shadow-none"/> 

                                    </div>

                                    <div>
                                    <label class="form-label text-success">Kids</label>
                                    <input type="number" class="form-control shadow-none"/> 

                                    </div>
                                 </div>
                                 
                                 
                                 
                              </div>

                              
                              
                           </div>
                           </div>
                        </nav>
                        </div> 
                        
                        <div class="col-lg-9 col-md-12 px-4">
                           <!-- card1  -->
                             <div class="card mb-4 border-0 shadow" >
                               <div class="row g-0 p-3 align-items-center">
                                 <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                    <img src="images/placeholder.png" class="img-fluid rounded" >
                                 </div>
                                 <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                    <h5 class="mb-3">Simple room name</h5>
                                    <div class="features mb-3">
                                       <h6 class="mb-3 fw-bold">Features</h6>
                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Homey Atmosphere
                                       </span>

                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Sun Deck
                                       </span>

                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Premium Cozy Interior
                                       </span>

                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Nautical Charm
                                       </span>
                                    </div>

                                    <div class="facilities mb-3">
                                       <h6 class="mb-1 fw-bold">Facilities</h6>
                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Private Bedroom
                                       </span>

                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Bathroom
                                       </span>

                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Onboard Chef
                                       </span>

                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Glass-covered-Living Area
                                       </span>
                                    </div>

                                    <div class="guests mb-3">
                                       <h6 class="mb-1 fw-bold">Guests</h6>
                                       <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base ">
                                       2 Adults
                                       </span>

                                       <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base ">
                                       2 Children
                                       </span>

                                    </div>

                                 </div>
                                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                       <h6 class="mb-4 fw-bold">Starts at ₹ 8999</h6>
                                       <a href="#" class="btn btn-sm w-100 text-light custom-bg shadow-none fw-bold mb-2">Book Now</a>
                                       <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none fw-bold">More Details</a>
                                  
                                    </div>
                                 </div>
                              </div>
 
                               
                              <!-- card2  -->
                              <div class="card mb-4 border-0 shadow" >
                               <div class="row g-0 p-3 align-items-center">
                                 <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                    <img src="images/placeholder.png" class="img-fluid rounded" >
                                 </div>
                                 <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                    <h5 class="mb-3">Simple room name</h5>
                                    <div class="features mb-3">
                                       <h6 class="mb-3 fw-bold">Features</h6>
                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Homey Atmosphere
                                       </span>

                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Sun Deck
                                       </span>

                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Premium Cozy Interior
                                       </span>

                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Nautical Charm
                                       </span>
                                    </div>

                                    <div class="facilities mb-3">
                                       <h6 class="mb-1 fw-bold">Facilities</h6>
                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Private Bedroom
                                       </span>

                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Bathroom
                                       </span>

                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Onboard Chef
                                       </span>

                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Glass-covered-Living Area
                                       </span>
                                    </div>

                                    <div class="guests mb-3">
                                       <h6 class="mb-1 fw-bold">Guests</h6>
                                       <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base ">
                                       2 Adults
                                       </span>

                                       <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base ">
                                       2 Children
                                       </span>

                                    </div>

                                 </div>
                                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                       <h6 class="mb-4 fw-bold">Starts at ₹ 8999</h6>
                                       <a href="#" class="btn btn-sm w-100 text-light custom-bg shadow-none fw-bold mb-2">Book Now</a>
                                       <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none fw-bold">More Details</a>
                                  
                                    </div>
                                 </div>
                              </div>
                               
                              <!-- card3  -->
                              <div class="card mb-4 border-0 shadow" >
                               <div class="row g-0 p-3 align-items-center">
                                 <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                    <img src="images/placeholder.png" class="img-fluid rounded" >
                                 </div>
                                 <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                    <h5 class="mb-3">Simple room name</h5>
                                    <div class="features mb-3">
                                       <h6 class="mb-3 fw-bold">Features</h6>
                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Homey Atmosphere
                                       </span>

                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Sun Deck
                                       </span>

                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Premium Cozy Interior
                                       </span>

                                       <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base ">
                                             Nautical Charm
                                       </span>
                                    </div>

                                    <div class="facilities mb-3">
                                       <h6 class="mb-1 fw-bold">Facilities</h6>
                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Private Bedroom
                                       </span>

                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Bathroom
                                       </span>

                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Onboard Chef
                                       </span>

                                       <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base ">
                                       Glass-covered-Living Area
                                       </span>
                                    </div>

                                    <div class="guests mb-3">
                                       <h6 class="mb-1 fw-bold">Guests</h6>
                                       <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base ">
                                       2 Adults
                                       </span>

                                       <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base ">
                                       2 Children
                                       </span>

                                    </div>

                                 </div>
                                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                       <h6 class="mb-4 fw-bold">Starts at ₹ 8999</h6>
                                       <a href="#" class="btn btn-sm w-100 text-light custom-bg shadow-none fw-bold mb-2">Book Now</a>
                                       <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none fw-bold">More Details</a>
                                  
                                    </div>
                                 </div>
                              </div>
                             </div>
                         </div>
                        </div>       
             
             <?php require('include/footer.php') ?> 
  </body>
</html>