<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/shortcut_image.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper Subscription System</title>
</head>
<body>
    <!-- Start header -->
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="images/Npl_logo-removebg-preview.png" width="100" height="100" alt="Logo">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 link-dark">Home</a></li>
              <li><a href="#" class="nav-link px-2 link-dark">The Nation</a></li>
              <li><a href="#" class="nav-link px-2 link-dark">Weekend Nation</a></li>
              <li><a href="#" class="nav-link px-2 link-dark">Nation on Sunday</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- End Header -->

      <!-- Start Hero Section -->
      <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">News Paper Subscription System</h1>
            <p class="lead">Get a digital experience of the Malawi National News paper right on your gadgets</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
              <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" href="{{route('signin')}}">Login</a>
              <a class="btn btn-outline-secondary btn-lg px-4" href="{{route('signup')}}">Signup</a>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
              <img class="rounded-lg-3" src="images/hero.jpeg" alt="" width="400" height="400">
          </div>
        </div>
      </div>
      <!-- End Hero Section -->

      
    <!-- Start content -->
    <div class="container">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-8 fw-normal">Pricing</h1>
        <p class="fs-5 text-muted"></p>
      </div>
    </header>
  
    <main>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">The Nation</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">K1, 200<small class="text-muted fw-light">/copy</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Delivered every monday</li>
                <li>Based on your Subscription</li>
                <li>Digital News Paper</li>
                <li>Digital Experience</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">The Weekend Nation</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">K1, 200<small class="text-muted fw-light">/copy</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Delivered every Friday</li>
                <li>Based on your Subscription</li>
                <li>Digital News Paper</li>
                <li>Digital Experience</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">Nation on Sunday</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">K1, 200<small class="text-muted fw-light">/copy</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Delivered every Sunday</li>
                <li>Based on your Subscription</li>
                <li>Digital News Paper</li>
                <li>Digital Experience</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
            </div>
          </div>
        </div>
      </div>
  
    </main>
    </div>
    <!-- End content -->


    <footer>
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
          </a>
          <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://releases.jquery.com/git/jquery-git.min.js"></script>
</body>
</html>

