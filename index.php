<!-- xampp/htdocs/booking-website-23sept  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AquaZen Houseboats- Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> <?php require('include/links.php') ?>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <style>
      .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }

      @media screen and (max-width: 575px) {
        .availability-form {
          margin-top: 25px;
          padding: 0 35px;
        }
      }

      .social-icon {
        margin: 10px;
      }
    </style>
  </head>
  <body class="bg-light"> <?php require('include/header.php') ?>
    <!-- carousal -->
    <div class="container-fluid p-0">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images\swiper\swiper (1).jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images\swiper\swiper (2).jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images\swiper\swiper (3).jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images\swiper\swiper (4).jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images\swiper\swiper (5).jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images\swiper\swiper (6).jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images\swiper\swiper (7).jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images\swiper\swiper (8).jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images\swiper\swiper (9).jpeg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images\swiper\swiper (10).jpeg" class="w-100 d-block" />
          </div>
        </div>
      </div>
    </div>
    <!-- check availability form -->
    <div class="container availability-form">
      <div class="row ">
        <div class="col-lg-12 bg-white shadow p-3 rounded fw-bold">
          <h5 class="fw-bold mb-4">Check Booking Availability</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label text-success">Check-in</label>
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label text-danger">Check-out</label>
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label">Adult</label>
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  <option value="4">Four</option>
                  <option value="5">Five</option>
                  <option value="6">Six</option>
                </select>
              </div>
              <div class="col-lg-2 mb-3">
                <label class="form-label">Children</label>
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-1 mt-2 mb-lg-3">
                <button type="submit" class=" fw-bold btn text-white shadow-none custom-bg">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- our houseboats -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Houseboats</h2>
    <div class="container">
      <div class="row">
        <!-- cards -->
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 1 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <!-- multiple images in card  -->
            <div id="cardCarousel1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
              <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Features</h6>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Homey Atmosphere </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Sun Deck </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Premium Cozy Interior </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Nautical Charm </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Facilities</h6>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Private Bedroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Bathroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Onboard Chef </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Glass-covered-Living Area </span>
              </div>
              <div class="guests mb-4">
                <h6 class="mb-1 fw-bold">Guests</h6>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Adults </span>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Children </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-light custom-bg shadow-none fw-bold">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 2 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
              <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Features</h6>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Homey Atmosphere </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Sun Deck </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Premium Cozy Interior </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Nautical Charm </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Facilities</h6>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Private Bedroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Bathroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Onboard Chef </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Glass-covered-Living Area </span>
              </div>
              <div class="guests mb-4">
                <h6 class="mb-1 fw-bold">Guests</h6>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Adults </span>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Children </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-light custom-bg shadow-none fw-bold">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 3 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
              <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Features</h6>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Homey Atmosphere </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Sun Deck </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Premium Cozy Interior </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Nautical Charm </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Facilities</h6>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Private Bedroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Bathroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Onboard Chef </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Glass-covered-Living Area </span>
              </div>
              <div class="guests mb-4">
                <h6 class="mb-1 fw-bold">Guests</h6>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Adults </span>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Children </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1 fw-bold">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-light custom-bg shadow-none fw-bold">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 4 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <!-- multiple images in card  -->
            <div id="cardCarousel4" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel4" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel4" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
              <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Features</h6>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Homey Atmosphere </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Sun Deck </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Premium Cozy Interior </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Nautical Charm </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Facilities</h6>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Private Bedroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Bathroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Onboard Chef </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Glass-covered-Living Area </span>
              </div>
              <div class="guests mb-4">
                <h6 class="mb-1 fw-bold">Guests</h6>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Adults </span>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Children </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-light custom-bg shadow-none fw-bold">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 5 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel5" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel5" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
              <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Features</h6>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Homey Atmosphere </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Sun Deck </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Premium Cozy Interior </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Nautical Charm </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Facilities</h6>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Private Bedroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Bathroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Onboard Chef </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Glass-covered-Living Area </span>
              </div>
              <div class="guests mb-4">
                <h6 class="mb-1 fw-bold">Guests</h6>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Adults </span>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Children </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-light custom-bg shadow-none fw-bold">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 6 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel6" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel6" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel6" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
              <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Features</h6>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Homey Atmosphere </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Sun Deck </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Premium Cozy Interior </span>
                <span class="badge rounded-pill bg-success mb-3 text-wrap lh-base "> Nautical Charm </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Facilities</h6>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Private Bedroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Bathroom </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Onboard Chef </span>
                <span class="badge rounded-pill bg-info mb-3 text-wrap lh-base "> Glass-covered-Living Area </span>
              </div>
              <div class="guests mb-4">
                <h6 class="mb-1 fw-bold">Guests</h6>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Adults </span>
                <span class="badge rounded-pill bg-secondary mb-3 text-wrap lh-base "> 2 Children </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1 fw-bold">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-light custom-bg shadow-none fw-bold">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 mt-5 text-center">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Houseboats >>></a>
        </div>
      </div>
    </div>
    <!-- our facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
    <div class="container">
      <div class="row">
        <!-- cards -->
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 1 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel7" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel7" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel7" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Bedrooms</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Comfortable and well-appointed bedrooms with cozy beds and beautiful waterfront views, ensuring a restful night's sleep.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 2 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <!-- multiple images in card  -->
            <div id="cardCarousel8" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel8" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel8" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Bathrooms</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Modern bathrooms with clean facilities, including toilets, sinks, and showers, for guests' convenience and comfort.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 3 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel9" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel9" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel9" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Kitchen or Galley</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Fully-equipped kitchens or galleys with cooking appliances, refrigerators, and kitchenware, allowing guests to prepare their own meals or enjoy onboard dining.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 4 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel10" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel10" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel10" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Sun Deck or Terrace</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Spacious sun decks or terraces with loungers and seating areas, perfect for sunbathing, relaxing, and taking in the scenic surroundings.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 5 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel11" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel11" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel11" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Dining Area</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Indoor or outdoor dining areas where guests can savor delicious meals while enjoying waterfront views.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 6 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel12" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel12" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel12" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Living Area</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Cozy living rooms or lounges with comfortable seating, entertainment systems, and often a fireplace for a cozy atmosphere.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 7 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel13" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel13" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel13" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Air Conditioning/Heating</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Climate control systems ensuring a comfortable indoor temperature regardless of weather conditions.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 8 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel14" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel14" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel14" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Water Sports Equipment</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Provided equipment like kayaks, paddleboards, or fishing gear for recreational activities and exploration on the water.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 9 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel15" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel15" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel15" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Crew or Staff</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Knowledgeable and friendly crews or staff members to operate the vessel, offer guidance, and provide exceptional service throughout the journey.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <!-- card 10 -->
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <!-- multiple images in card  -->
             <div id="cardCarousel16" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="images/placeholder.png" class="d-block w-100" alt="Image 3">
                </div>
              </div>
              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel16" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel16" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- multiple images in card ends -->
            <div class="card-body">
              <h5 class="card-title fw-bold">Scenic Views</h5>
              <div class="features mb-4">
                <h6 class="mb-1 fw-bold">Houseboats are designed to offer stunning views of the surrounding water and landscapes, providing a picturesque setting for your stay.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 mt-5 text-center">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
        </div>
      </div>
    </div>
    <!--Testimonials -->
    <h2 class="text-center fw-bold h-font">Testimonials</h2>
    <div class="container mt-5">
      <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
          <!-- testimonials  by users 1 -->
          <div class="swiper-slide p-4 shadow" style="background-color: #e0e0e0;">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/testimonials/profile (1).jpg" width="80px">
              <h5 class="card-title fw-bold m-0 ms-2"> Sarah Thompson</h5>
            </div>
            <p class="fw-bold px-4">"My experience with Aquazen Houseboats was nothing short of magical. The tranquility of drifting along the serene backwaters of Kerala was the perfect escape from the hustle and bustle of daily life. The houseboat was luxurious, and the staff was incredibly attentive. I will cherish the memories of my stay on Aquazen Houseboats forever."</p>
            <div class="rating px-4">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <!-- testimonials  by users 2-->
          <div class="swiper-slide p-4 shadow" style="background-color: #e0e0e0;">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/testimonials/profile (2).jpg" width="80px">
              <h5 class="card-title fw-bold m-0 ms-2">Emily Davis</h5>
            </div>
            <p class="fw-bold px-4">"I recently celebrated my honeymoon on Aquazen Houseboats, and it was a dream come true. The romantic setting, the cozy interiors, and the delicious Kerala cuisine served on board made our trip unforgettable. We felt like royalty on our private houseboat, and I would recommend it to any couple looking for a romantic getaway."</p>
            <div class="rating px-4">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <!-- testimonials  by users 3-->
          <div class="swiper-slide p-4 shadow" style="background-color: #e0e0e0;">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/testimonials/profile (3).jpg" width="80px">
              <h5 class="card-title fw-bold m-0 ms-2"> John Smith</h5>
            </div>
            <p class="fw-bold px-4">"I've been on several houseboat trips, but Aquazen Houseboats surpassed all my expectations. The boat was spacious and comfortable, and the crew was friendly and knowledgeable. It's an ideal option for a family vacation, and the kids loved the experience of living on water. We'll definitely be coming back."</p>
            <div class="rating px-4">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <!-- testimonials  by users 4 -->
          <div class="swiper-slide p-4 shadow" style="background-color: #e0e0e0;">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/testimonials/profile (4).jpg" width="80px">
              <h5 class="card-title fw-bold m-0 ms-2"> David Miller</h5>
            </div>
            <p class="fw-bold px-4">"I've always been a fan of houseboat vacations, and Aquazen is now at the top of my list. The attention to detail and the commitment to eco-friendliness were impressive. The onboard chef prepared mouthwatering local dishes, and the sunsets over the backwaters were breathtaking. I can't wait to book my next trip."</p>
            <div class="rating px-4">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <!-- testimonials  by users 5 -->
          <div class="swiper-slide p-4 shadow" style="background-color: #e0e0e0;">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/testimonials/profile (5).jpg" width="80px">
              <h5 class="card-title fw-bold m-0 ms-2">Michael Johnson</h5>
            </div>
            <p class="fw-bold px-4">"As a solo traveler, I was looking for a unique experience, and Aquazen Houseboats delivered just that. The peace and solitude I found on the water were unmatched. I spent my days watching the world go by, reading, and just enjoying the serenity. The staff made sure I had everything I needed. It was a fantastic escape from the daily grind."</p>
            <div class="rating px-4">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <!-- testimonials  by users 6-->
          <div class="swiper-slide p-4 shadow" style="background-color: #e0e0e0;">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/testimonials/profile (6).jpg" width="80px">
              <h5 class="card-title fw-bold m-0 ms-2">Richard Brown</h5>
            </div>
            <p class="fw-bold px-4">"I've been recommending Aquazen Houseboats to all my friends and colleagues since I returned from my trip. It's not just a vacation; it's a cultural immersion. The local guides provided insights into the culture and history of the region that you can't find in a guidebook. The experience was enriching and unforgettable."</p>
            <div class="rating px-4">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <!-- testimonials  by users 7-->
          <div class="swiper-slide p-4 shadow" style="background-color: #e0e0e0;">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/testimonials/profile (7).jpg" width="80px">
              <h5 class="card-title fw-bold m-0 ms-2"> Daniel Wilson</h5>
            </div>
            <p class="fw-bold px-4">"Aquazen Houseboats made my bachelor party one for the books. We had an absolute blast cruising the backwaters, enjoying the onboard bar, and celebrating with friends. The boat was spacious enough to accommodate our group comfortably, and the crew ensured we had everything we needed for a memorable time."</p>
            <div class="rating px-4">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="col-lg-12 mt-5 text-center">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Testimonials >>></a>
    </div>
    <!--Reach us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe class="w-100 rounded" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51939.9189423371!2d76.3516011642011!3d9.464526786002684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08834f9c86d49f%3A0x4d89105bdfc662ef!2sPallathuruthy%2C%20Pazhaveedu%2C%20Kainakary%2C%20Kerala!5e0!3m2!1sen!2sin!4v1694445315466!5m2!1sen!2sin" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4 ">
          <div class="bg-white p-4 mb-4">
            <h4 class="fw-bold">Call Us</h4>
            <a href="tel: +917356653492" class=" fw-bold d-inline-block mb-2 text-decoration-none text-dark">
              <h4 class=" fw-bold">
                <i class="bi bi-telephone-outbound-fill"></i> +917356653492
              </h4>
            </a>
          </div>
          <div class="col-lg-12">
            <div class="bg-white p-4 mb-4">
              <h4 class="fw-bold">Connect With Us</h4>
              <!-- socialmedia -->
              <!-- Facebook -->
              <a href="https://www.facebook.com/your-facebook-page-url" target="blank">
                <i class="bi bi-facebook fa-3x social-icon" style="color: #3b5998;"></i>
              </a>
              <!-- Twitter -->
              <a href="https://twitter.com/your-twitter-page-url" target="blank">
                <i class="bi bi-twitter fa-3x social-icon" style="color: #55acee;"></i>
              </a>
              <!-- Google -->
              <a href="https://plus.google.com/your-google-plus-page-url" target="blank">
                <i class="bi bi-google fa-3x social-icon" style="color: #dd4b39;"></i>
              </a>
              <!-- Instagram -->
              <a href="https://www.instagram.com/your-instagram-page-url" target="blank">
                <i class="bi bi-instagram fa-3x social-icon" style="color: #ac2bac;"></i>
              </a>
              <!-- Linkedin -->
              <a href="https://www.linkedin.com/in/your-linkedin-profile-url" target="blank">
                <i class="bi bi-linkedin-in fa-3x social-icon" style="color: #0082ca;"></i>
              </a>
              <!-- Pinterest -->
              <a href="https://www.pinterest.com/your-pinterest-page-url" target="blank">
                <i class="bi bi-pinterest fa-3x social-icon" style="color: #c61118;"></i>
              </a>
              <!-- Vkontakte -->
              <a href="https://vk.com/your-vkontakte-page-url" target="blank">
                <i class="bi bi-vk fa-3x social-icon" style="color: #4c75a3;"></i>
              </a>
              <!-- Youtube -->
              <a href="https://www.youtube.com/your-youtube-channel-url" target="blank">
                <i class="bi bi-youtube fa-3x social-icon" style="color: #ed302f;"></i>
              </a>
              <!-- Reddit -->
              <a href="https://www.reddit.com/user/your-reddit-username" target="blank">
                <i class="bi bi-reddit fa-3x social-icon" style="color: #ff4500;"></i>
              </a>
              <!-- Whatsapp -->
              <a href="https://api.whatsapp.com/send?phone=917356653492" target="blank">
                <i class="bi bi-whatsapp fa-3x social-icon" style="color: #25d366;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div> <?php require('include/footer.php') ?> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        }
      });
      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
          delay: 6000,
          disableOnInteraction: false,
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
            slidesPerView: 3,
          },
        }
      });
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
  </body>
</html>