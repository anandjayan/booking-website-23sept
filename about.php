<!-- mic check at 2 13 pm saturdaay 16 sept  -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>AquaZen Houseboats- About</title>
        
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
          .box:hover{
            border-top-color: var(--teal) !important
          }
        </style>
        
      
    </head>
      <body class="bg-light">
             <?php require('include/header.php') ?>
             
                    <div class="my-5 px-4">
                        <h2 class="fw-bold h-font text-center">About Us</h2>
                            <div class="h-line bg-dark">
                            </div>
                            <p class="text-center mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quo dolorum, error doloremque tempora officia iste amet obcaecati reprehenderit omnis fugit ducimus voluptatibus vitae earum illo quasi iure ullam excepturi?
                            </p> 
                    </div>

             <div class="container">
              <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                  <h3 class="mb-3">
                    Lorem ipsum dolor sit.
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum laborum necessitatibus maxime sit aliquam doloremque
                     recusandae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum laborum necessitatibus maxime sit aliquam doloremque
                     recusandae.</p>
                </div>

                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                    <img src="images/placeholder.png" class="w-100">
                </div>

             </div>
                         <div class="container mt-5">
                            <div class="row">
                              <div class="col-lg-3 col-md-6 mb-4 px-4">
                                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                                  <img src="images/placeholder.png" width="70px">
                                  <h4 class="mt-3 ">10000+ Happy trips</h4>
                                </div>
                              </div>

                              <div class="col-lg-3 col-md-6 mb-4 px-4">
                                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                                  <img src="images/placeholder.png" width="70px">
                                  <h4 class="mt-3 ">2000+ Positive Reviews</h4>
                                </div>
                              </div>

                              <div class="col-lg-3 col-md-6 mb-4 px-4">
                                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                                  <img src="images/placeholder.png" width="70px">
                                  <h4 class="mt-3 ">10,000+ Customers</h4>
                                </div>
                              </div>

                              <div class="col-lg-3 col-md-6 mb-4 px-4">
                                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                                  <img src="images/placeholder.png" width="70px">
                                  <h4 class="mt-3 ">100+ Service Staffs</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>    
                        
             <h3 class="my-5 h-font text-center">Management Team</h3>   
             
             <div class="container px-4">
             <div class="swiper mySwiper">
              <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                  <img src="images/placeholder.png" class="w-100">
                  <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                  <img src="images/placeholder.png" class="w-100">
                  <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                  <img src="images/placeholder.png" class="w-100">
                  <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                  <img src="images/placeholder.png" class="w-100">
                  <h5 class="mt-2">Random Name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                  <img src="images/placeholder.png" class="w-100">
                  <h5 class="mt-2">Random Name</h5>
                </div>
               
              </div>
              <div class="swiper-pagination"></div>
            </div>
             </div>
       

             <?php require('include/footer.php') ?>

             <!-- Swiper JS -->
              <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
              var swiper = new Swiper(".mySwiper", {
                slidesPerView: 4,
                spaceBetween: 40,

                pagination: {
                  el: ".swiper-pagination",
                },
                breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 4,
                },
                
              }
              });
            </script>
            
        </body>
</html>

<!-- 3 video 15.41 -->
