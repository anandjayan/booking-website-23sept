<!-- navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
                <a
                    class="navbar-brand me-5 fw-bold fs-2 h-font text-success"
                    href="index.php"
                    >AquaZen Houseboats
                    
                </a>
                
                <button
                    class="navbar-toggler shadow-none"
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
                                href="index.php"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-bold" href="rooms.php">Houseboats/rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-bold" href="facilities.php"
                                >Facilities</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-bold" href="contact.php"
                                >Contact Us</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-bold" href="about.php">About</a>
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

        <!-- modal -->
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
                                            class="form-control shadow-none"
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