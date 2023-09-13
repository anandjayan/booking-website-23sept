<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>House Boat Booking Site</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Merienda:wght@400;700&family=Poppins:wght@400;600&family=Raleway:wght@200;600&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />
        <link rel="stylesheet" href="css/common.css">
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- MDB -->
        <!-- <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
        rel="stylesheet"
        /> -->
        <style>
           
            .availability-form{
                margin-top: -50px;
                z-index: 2;
                position: relative;
            }
            @media screen and (max-width: 575px){
                .availability-form{
                margin-top: 25px;
                padding: 0 35px;

                
            }   
            }
            .social-icon {
                    margin: 10px; 
                }

            
        </style>
    </head>
    <body>
        <nav
            class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top"
        >
            <div class="container-fluid">
                <a
                    class="navbar-brand me-5 fw-bold fs-2 h-font text-success"
                    href="index.php"
                    >AquaZen Houseboats
                    
                </a>
                
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon shadow-none"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active me-2 fw-bolder"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-bold" href="#">Houseboats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-bold" href="#"
                                >Facilities</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-bold" href="#"
                                >Contact Us</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-bold" href="#">About</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <button
                            type="button"
                            class="btn btn-success fw-bold shadow-none me-lg-3 me-2"
                            data-bs-toggle="modal"
                            data-bs-target="#LoginModal"
                        >
                            Login
                        </button>
                        <button
                            type="button"
                            class="btn btn-success fw-bold shadow-none"
                            data-bs-toggle="modal"
                            data-bs-target="#RegisterModal"
                        >
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- mmodal -->
        <div
            class="modal fade"
            id="LoginModal"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h1
                                class="modal-title fs-5 d-flex align-items-center"
                            >
                                <i class="bi bi-person-circle fs-3 me-2"></i>
                                User Login
                            </h1>
                            <button
                                type="reset"
                                class="btn-close shadow-none"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-4">
                                <label class="form-label">Email address</label>
                                <input
                                    type="email"
                                    class="form-control shadow-none"
                                />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input
                                    type="password"
                                    class="form-control shadow-none"
                                />
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-between mb-2"
                            >
                                <button class="btn btn-dark shadow-none">
                                    Login
                                </button>
                                <a
                                    href="javascript: void(0)"
                                    class="text-secondary text-decoration-none"
                                    >Forgot Password</a
                                >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div
            class="modal fade"
            id="RegisterModal"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h1
                                class="modal-title fs-5 d-flex align-items-center fw-bolder"
                            >
                                <i
                                    class="bi bi-person-lines-fill fs-3 me-2"
                                ></i>
                                User Registration
                            </h1>
                            <button
                                type="reset"
                                class="btn-close shadow-none"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <span
                                class="badge rounded-pill bg-success mb-3 text-wrap lh-base"
                                >Note: Your details must match with your ID
                                (AADHAR Card, Passport, Driving License, etc.)
                                that will be required during check-in.
                            </span>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6 p-2 mb-3 fw-bolder">
                                        <label class="form-label">Name</label>
                                        <input
                                            type="text"
                                            class="form-control shadow-none"
                                        />
                                    </div>

                                    <div class="col-sm-6 p-2 mb-3 fw-bolder">
                                        <label class="form-label"
                                            >Email address</label
                                        >
                                        <input
                                            type="email"
                                            class="form-control shadow-none"
                                        />
                                    </div>

                                    <div class="col-sm-6 p-2 mb-3 fw-bolder">
                                        <label class="form-label"
                                            >Phone Number</label
                                        >
                                        <input
                                            type="number"
                                            class="form-control shadow-none"
                                        />
                                    </div>

                                    <div class="col-sm-6 p-2 mb-3 fw-bolder">
                                        <label class="form-label"
                                            >Picture</label
                                        >
                                        <input
                                            type="file"
                                            class="form-control shadow-none"
                                        />
                                    </div>

                                    <div class="col-sm-12 p-2 mb-3 fw-bolder">
                                        <label class="form-label"
                                            >Address</label
                                        >
                                        <textarea
                                            class="form-control"
                                            id="exampleFormControlTextarea1"
                                            rows="3"
                                        ></textarea>
                                    </div>

                                    <div class="col-sm-6 p-2 mb-3 fw-bolder">
                                        <label class="form-label"
                                            >Password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control shadow-none"
                                        />
                                    </div>

                                    <div class="col-sm-6 p-2 mb-3 fw-bolder">
                                        <label class="form-label"
                                            >Confirm Password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control shadow-none"
                                        />
                                    </div>
                                </div>
                                <div class="text-center my-1 fw-bolder">
                                    <button
                                        type="submit"
                                        class="btn btn-success shadow-none"
                                    >
                                        Register
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         
        <!-- carousal -->
        <div class="container-fluid p-0">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (1).jpeg"
                            class="w-100 d-block"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (2).jpeg"
                            class="w-100 d-block"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (3).jpeg"
                            class="w-100 d-block"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (4).jpeg"
                            class="w-100 d-block"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (5).jpeg"
                            class="w-100 d-block"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (6).jpeg"
                            class="w-100 d-block"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (7).jpeg"
                            class="w-100 d-block"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (8).jpeg"
                            class="w-100 d-block"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (9).jpeg"
                            class="w-100 d-block"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="images\swiper\swiper (10).jpeg"
                            class="w-100 d-block"
                        />
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
                        <label class="form-label text-success"
                                                 >Check-in</label
                                        >
                                        <input
                                            type="date"
                                            class="form-control shadow-none"
                                        /> 
                        </div>
                        <div class="col-lg-3 mb-3">
                        <label class="form-label text-danger"
                                                 >Check-out</label
                                        >
                                        <input
                                            type="date"
                                            class="form-control shadow-none"
                                        /> 
                        </div>
                        <div class="col-lg-3 mb-3">
                        <label class="form-label">Adult</label>
                        <select class="form-select shadow-none">
                            
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
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
                        <img src="images/placeholder.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
                            <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1 fw-bold">Features</h6>
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

                            <div class="facilities mb-4">
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
                                <a href="#" class="btn btn-sm text-dark custom-bg shadow-none fw-bold">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
                            </div>

                            
                        </div>
                    </div>

                    

                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <!-- card 2 -->

                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/placeholder.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
                            <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1 fw-bold">Features</h6>
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

                            <div class="facilities mb-4">
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
                                <a href="#" class="btn btn-sm text-dark custom-bg shadow-none fw-bold">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
                            </div>

                            
                        </div>
                    </div>

                    

                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <!-- card 3 -->

                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/placeholder.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
                            <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1 fw-bold">Features</h6>
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

                            <div class="facilities mb-4">
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
                                <a href="#" class="btn btn-sm text-dark custom-bg shadow-none fw-bold">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
                            </div>

                            
                        </div>
                    </div>

                    

                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <!-- card 4 -->

                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/placeholder.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
                            <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1 fw-bold">Features</h6>
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

                            <div class="facilities mb-4">
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
                                <a href="#" class="btn btn-sm text-dark custom-bg shadow-none fw-bold">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
                            </div>

                            
                        </div>
                    </div>

                    

                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <!-- card 5 -->

                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/placeholder.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
                            <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1 fw-bold">Features</h6>
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

                            <div class="facilities mb-4">
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
                                <a href="#" class="btn btn-sm text-dark custom-bg shadow-none fw-bold">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none fw-bold">More Details</a>
                            </div>

                            
                        </div>
                    </div>

                    

                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <!-- card 6 -->

                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/placeholder.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Premium Single Bedroom</h5>
                            <h6 class="mb-4 fw-bold">Starting from ₹ 8999</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1 fw-bold">Features</h6>
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

                            <div class="facilities mb-4">
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
                                <a href="#" class="btn btn-sm text-dark custom-bg shadow-none fw-bold">Book Now</a>
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
                        <img src="images/placeholder.png" class="card-img-top" >
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
         <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
            

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
                <iframe class="w-100 rounded"height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51939.9189423371!2d76.3516011642011!3d9.464526786002684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08834f9c86d49f%3A0x4d89105bdfc662ef!2sPallathuruthy%2C%20Pazhaveedu%2C%20Kainakary%2C%20Kerala!5e0!3m2!1sen!2sin!4v1694445315466!5m2!1sen!2sin"    loading="lazy" ></iframe>
                </div>

                 <div class="col-lg-4 col-md-4 ">
                  <div class="bg-white p-4 mb-4">
                    <h4 class="fw-bold">Call Us</h4>
                    <a href="tel: +917356653492" class=" fw-bold d-inline-block mb-2 text-decoration-none text-dark"><h4 class=" fw-bold"><i class="bi bi-telephone-outbound-fill"></i> +917356653492</h4></a>
                  </div> 
                  
                  <div class="col-lg-12" >
                  <div class="bg-white p-4 mb-4">
                    <h4 class="fw-bold">Connect With Us</h4>
                    
                    <!-- socialmedia -->
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/your-facebook-page-url" target="_blank">
                    <i class="fab fa-facebook-f fa-3x social-icon" style="color: #3b5998;"></i>
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/your-twitter-page-url" target="_blank">
                    <i class="fab fa-twitter fa-3x social-icon" style="color: #55acee;"></i>
                    </a>

                    <!-- Google -->
                    <a href="https://plus.google.com/your-google-plus-page-url" target="_blank">
                    <i class="fab fa-google fa-3x social-icon" style="color: #dd4b39;"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/your-instagram-page-url" target="_blank">
                    <i class="fab fa-instagram fa-3x social-icon" style="color: #ac2bac;"></i>
                    </a>

                    <!-- Linkedin -->
                    <a href="https://www.linkedin.com/in/your-linkedin-profile-url" target="_blank">
                    <i class="fab fa-linkedin-in fa-3x social-icon" style="color: #0082ca;"></i>
                    </a>

                    <!-- Pinterest -->
                    <a href="https://www.pinterest.com/your-pinterest-page-url" target="_blank">
                    <i class="fab fa-pinterest fa-3x social-icon" style="color: #c61118;"></i>
                    </a>

                    <!-- Vkontakte -->
                    <a href="https://vk.com/your-vkontakte-page-url" target="_blank">
                    <i class="fab fa-vk fa-3x social-icon" style="color: #4c75a3;"></i>
                    </a>

                    

                    <!-- Youtube -->
                    <a href="https://www.youtube.com/your-youtube-channel-url" target="_blank">
                    <i class="fab fa-youtube fa-3x social-icon" style="color: #ed302f;"></i>
                    </a>


                    <!-- Reddit -->
                    <a href="https://www.reddit.com/user/your-reddit-username" target="_blank">
                    <i class="fab fa-reddit-alien fa-3x social-icon" style="color: #ff4500;"></i>
                    </a>

                    <!-- Whatsapp -->
                    <a href="https://api.whatsapp.com/send?phone=917356653492" target="_blank">
                    <i class="fab fa-whatsapp fa-3x social-icon" style="color: #25d366;"></i>
                    </a>


                  </div>  
                  </div>  

                  
                </div>

                  
                 </div>

                 


                
            </div>
            </div>

            <div class="container-fluid mt-5" style="background-color: #ffdab9";>
                <div class="row">
                    <div class="col-lg-4">
                      <h3 class="h-font fw-bold fs-4 mb-2 text-success">AquaZen Houseboaats: Sail Into Serenity</h3>
                      <p class=" fw-bold mb-2">AquaZen Houseboats offer an enchanting escape in the heart of Kerala's backwaters. These floating marvels combine modern comfort with traditional charm, providing serene bedrooms, picturesque views, and a warm crew to ensure an unforgettable stay. Cruising on AquaZen is a tranquil journey through Kerala's waterways, offering a unique and memorable experience in the lap of nature.</p>   
                    </div>
                    <div class="col-lg-4">
                    <h4 class="mb-3 fw-bold">Links</h4> 
                       <a href="#" class="d-inline-block mb-2 text-decoration-none fs-5 fw-bold">Home</a><br>
                       <a href="#" class="d-inline-block mb-2 text-decoration-none fs-5 fw-bold">Rooms</a><br>
                       <a href="#" class="d-inline-block mb-2 text-decoration-none fs-5 fw-bold">Facilities</a><br>
                       <a href="#" class="d-inline-block mb-2 text-decoration-none fs-5 fw-bold">Contact Us</a><br>
                       <a href="#" class="d-inline-block mb-2 text-decoration-none fs-5 fw-bold">About</a><br>
                    </div>
                    <div class="col-lg-4">
                       <h5 class="mb-3 fw-bold">Follow Us</h5>
                       <a href="https://www.facebook.com/your-facebook-page-url" target="_blank">
                    <i class="fab fa-facebook-f fa-3x social-icon" style="color: #3b5998;"></i>
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/your-twitter-page-url" target="_blank">
                    <i class="fab fa-twitter fa-3x social-icon" style="color: #55acee;"></i>
                    </a>

                    <!-- Google -->
                    <a href="https://plus.google.com/your-google-plus-page-url" target="_blank">
                    <i class="fab fa-google fa-3x social-icon" style="color: #dd4b39;"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/your-instagram-page-url" target="_blank">
                    <i class="fab fa-instagram fa-3x social-icon" style="color: #ac2bac;"></i>
                    </a>

                   

                    <!-- Pinterest -->
                    <a href="https://www.pinterest.com/your-pinterest-page-url" target="_blank">
                    <i class="fab fa-pinterest fa-3x social-icon" style="color: #c61118;"></i>
                    </a>

                   

                    

                    <!-- Youtube -->
                    <a href="https://www.youtube.com/your-youtube-channel-url" target="_blank">
                    <i class="fab fa-youtube fa-3x social-icon" style="color: #ed302f;"></i>
                    </a>


                   

                    <!-- Whatsapp -->
                    <a href="https://api.whatsapp.com/send?phone=917356653492" target="_blank">
                    <i class="fab fa-whatsapp fa-3x social-icon" style="color: #25d366;"></i>
                    </a>
                    </div>
                </div>
                <br>
            <div class="container text-center text-dark fw-bold">
                <p>&copy; 2023 ADJ. All Rights Reserved.</p>
            </div>
            </div>
            
                  

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
              spaceBetween: 30,
              effect: "fade",
              loop: true,
              autoplay:{
                delay:3500,
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
            autoplay:{
                delay:6000,
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
            <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    </body>
</html>

<!-- start from 3rd video -->
