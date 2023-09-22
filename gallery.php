<!-- xampp/htdocs/booking-website-23sept  -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>AquaZen Houseboats- Home</title>
        
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />
        <?php require('include/links.php') ?>
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
       
        <style>
           

            video {
                
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: auto;
                object-fit: contain;
                margin-top: -10%;
                margin-bottom: -7%;
            }
           
           
            .social-icon {
                    margin: 10px; 
                }

               

             

            
        </style>
    </head>
    <body class="bg-light">
         <?php require('include/header.php') ?>
         
        <!-- carousal -->
        <div class="container-fluid p-0">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    
                            <video class="w-100 d-block"  autoplay loop muted>
                                    <source src="videos/timelapse1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                            </video>
                    </div>
                </div>
            </div>
        </div>
           <!-- autoplaying gallery -->
         <div class="container py-3" >
         <h5 class="fw-bold fs-2 mb-4 h-font text-center text-success">Frozen Moments in Time</h5>
            <div id="carouselExampleInterval " class="carousel slide  " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                      <img src="images/placeholder.png" class="d-block w-100" alt="...">
                    </div>  
                    <div class="carousel-item" data-bs-interval="3000">
                       <img src="images/placeholder.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                       <img src="images/placeholder.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
         </div>

      

            <?php require('include/footer.php') ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            
                  

       
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        
        <!-- MDB -->
            <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    </body>
</html>


