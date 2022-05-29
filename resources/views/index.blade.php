<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dare2Coders</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico'); }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=" {{ asset('/css/style.css'); }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery.js'); }}"></script>
    <script src="{{ asset('js/scripts.js'); }}"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="#">Dare2Coders</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"><button class="btn btn-outline-primary text-light me-3 mt-1 dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="https://www.student.dare2coders.com/login">Student</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="https://www.faculty.dare2coders.com/login">Faculty</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><button class="btn btn-outline-light text-hover-dark mt-1  dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Sign-up
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" style="left:auto;top:auto;" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="https://www.student.dare2coders.com/registration">Student</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="https://www.faculty.dare2coders.com/registration">Faculty</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="masthead  bkg-custom text-center text-white">
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="heading fw-bold display-4 mb-0">Dronacharya Groups of Institutions</h1>
                <h2 class="subheading fw-normal display-5 mb-0">Training & Placement Cell</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
            </div>
        </div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('img/skill.png'); }}" alt="SKILLS" /></div>
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="p-lg-5">
                        <h3 class="display-5">Learn New <span class="text-danger display-5">Skills / Roadmaps</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        <a class="btn btn-primary text-light btn-l rounded-pill" style="line-height: 1.6rem;" href="#">Read More &nbsp<i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-5">
                    <div class="p-5"><img class="img-fluid rounded" src="{{ asset('img/training.jpg'); }}" alt="TRAINING" /></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-lg-5">
                        <h2 class="display-5">Online Test <span class="text-danger">Training</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        <a class="btn btn-primary text-light btn-l rounded-pill" style="line-height: 1.6rem;" href="#">Read More &nbsp<i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-lg-2">
                    <div class="p-0"><img class="img-fluid" src="{{ asset('img/hackathons.jpg'); }}" height="275px" width="400px" alt="HACKATHONS" /></div>
                </div>
                <div class="col-lg-8 order-lg-1">
                    <div class="p-lg-5">
                        <h2 class="display-4">Hackathons<span class="text-danger"> & </span>Competitions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        <a class="btn btn-primary text-light btn-l rounded-pill" style="line-height: 1.6rem;" href="#">Read More &nbsp<i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 4-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4">
                    <div class="p-5"><img class="img-fluid" src="{{ asset('img/cv.png'); }}" alt="CV MODULATOR" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="p-lg-5">
                        <h2 class="display-4">CV <span class="text-danger"> Modulator </span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        <a class="btn btn-primary text-light btn-l rounded-pill" style="line-height: 1.6rem;" href="#">Read More &nbsp<i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-black mt-3">
        <div class="container px-5">
            <p class="m-0 text-center text-white ">Copyright &copy; <script></script> Dare2Coders</p>
            <p class="m-0 text-center text-white ">Designed and Developed by <span class="text-primary"><a href="https://www.incredibals.dare2coders.com" class="text-decoration-none">Incredibals</a></span></p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->


</body>

</html>