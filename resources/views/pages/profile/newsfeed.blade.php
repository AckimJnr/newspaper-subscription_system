<!doctype html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="images/shortcut_image.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News feed</title>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
      <img src="../../images/shortcut_image.png" alt="NSS" class="logo" width="40" height="40">
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="javascript:void(0);" onclick="logout()">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid mt-4">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link  active" href="{{route('newsfeed')}}">
                <span data-feather="home"></span>
                News Feed
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('mysubscription')}}" aria-current="page">
                <span data-feather="file"></span>
                My Subscription
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('userprofile')}}">
                <span data-feather="user"></span>
                My profile
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- user profile here -->
        <div class="album py-5 bg-light">
          <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{ asset('publications/weekend_nation_front_page.jpg') }}" class="bd-placeholder-img card-img-top" alt="Front Page Image" width="100%" height="50%" role="img" aria-label="Placeholder: Front Page" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <div class="card-body">
                    <p class="card-text">Headline</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Read</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                      </div>
                      <small class="text-muted">dd month, year, 00:00 AM</small>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>

    </div>
  </div>
  </div>
  </main>
  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="js/dashboard.js"></script>
  <script>
    function logout() {
      localStorage.removeItem("token");
      localStorage.removeItem("account_id");

      window.location.href = "{{ route('logout') }}";
    }
  </script>
</body>

</html>