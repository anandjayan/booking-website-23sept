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
        <style>
            * {
                font-family: "Poppins", sans-serif;
                font-family: "Raleway", sans-serif;
            }
            .h-font {
                font-family: "Libre Baskerville", serif;
                font-family: "Merienda", cursive;
                
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type="number"] {
                -moz-appearance: textfield;
            }
            .custom-bg{
                background-color: #2ec1ac;
            }
            .custom-bg:hover{
                background-color: #279e8c;
            }
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
                    >AquaZen Houseboats</a
                >
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
                <div class="col-lg-4 col-md-6 my-3">
                    <!-- cards -->

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
                 <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">>>>More Houseboats >>></a>
                </div>
            </div>
        </div>


        <br><br><br>
        <br><br><br>

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
        </script>
    </body>
</html>
