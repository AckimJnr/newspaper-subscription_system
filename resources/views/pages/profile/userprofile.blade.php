<!doctype html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="images/shortcut_image.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <script type="text/javascript" src="../../js/config.js"></script>
  <title>Profile</title>

  <script>
    const token = localStorage.getItem("token");
    const account_id = localStorage.getItem("account_id");
  </script>

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
              <a class="nav-link" href="{{route('newsfeed')}}">
                <span data-feather="home"></span>
                News Feed
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('mysubscription')}}">
                <span data-feather="file"></span>
                My Subscription
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('userprofile')}}">
                <span data-feather="user"></span>
                My profile
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- user profile here -->
        <div class="container rounded bg-white mt-5 mb-5">
          <div class="row">
            <div class="col-md-6 border-right">
              <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Personal Information</h4>
                </div>
                <div class="row mt-2">
                  <div class="col-md-12">
                    <label class="labels">Account ID</label>
                    <input id="account-id" type="text" class="form-control" readonly>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">First Name</label>
                    <input id="first-name" type="text" class="form-control" placeholder="Enter first name" required>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">Last Name</label>
                    <input id="last-name" type="text" class="form-control" placeholder="Enter last name" required>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">Username</label>
                    <input id="username" type="text" class="form-control" placeholder="Enter username" required readonly>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">Email</label>
                    <input id="email" type="email" class="form-control" placeholder="Enter email" required readonly>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">Phone Number</label>
                    <input id="phone-number" type="text" class="form-control" placeholder="Enter phone number" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Address</h4>
                </div>
                <div class="row mt-2">
                  <div class="col-md-12">
                    <label class="labels">Company Name</label>
                    <input id="company-name" type="text" class="form-control" placeholder="Enter company name">
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">District Name</label>
                    <input id="district-name" type="text" class="form-control" placeholder="Enter district name" required>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">District Code</label>
                    <input id="district-code" type="text" class="form-control" placeholder="Enter district code" required>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">Physical Address</label>
                    <input id="physical-address" type="text" class="form-control" placeholder="Enter physical address" required>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">Country</label>
                    <input id="country" type="text" class="form-control" placeholder="Enter country" required>
                  </div>
                </div>
                <div class="row mt-3 pt-3">
                  <div class="col-md-12">
                    <button id="update-profile-btn" class="btn btn-primary" type="button" onclick="updateProfile()">Update Profile</button>

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

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/dashboard.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
      const apiUrl = AppConfig.apiUrl;
      const token = localStorage.getItem("token");
      const account_id = localStorage.getItem("account_id");

      const settings = {
        "async": true,
        "crossDomain": true,
        "url": `${apiUrl}/api/users/${account_id}`,
        "method": "GET",
        "headers": {
          // "Authorization": `Bearer ${token}`,
          "Content-Type": "application/json",
        }
      };

      $.ajax(settings)
        .done(function(response) {
          const {
            data
          } = response;
          const {
            user_details
          } = data;

          $("#account-id").val(data.account_id);
          $("#first-name").val(data.first_name);
          $("#last-name").val(data.last_name);
          $("#username").val(data.username);
          $("#email").val(data.email);
          $("#phone-number").val(user_details[0].phone_number);
          $("#company-name").val(data.company_name);
          $("#district-name").val(user_details[0].district_name);
          $("#district-code").val(user_details[0].district_code);
          $("#physical-address").val(user_details[0].physical_address);
          $("#country").val(user_details[0].country);
        })
        .fail(function(error) {
          console.error("Error:", error);
        });
    });

    function updateProfile() {
      var token = localStorage.getItem("token");
      var account_id = localStorage.getItem("account_id");
      var updatedProfile = {
        first_name: $("#first-name").val(),
        last_name: $("#last-name").val(),
        phone_number: $("#phone-number").val(),
        company_name: $("#company-name").val(),
        physical_address: $("#physical-address").val(),
        country: $("#country").val(),
      };

      $.ajax({
        type: 'PUT',
        url: AppConfig.apiUrl + "/api/users/" + account_id,
        headers: {
          'Authorization': 'Bearer ' + token,
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        data: JSON.stringify(updatedProfile),
        success: function(response) {
          // Show success alert
          showAlert('Profile updated successfully', 'success');
        },
        error: function(error) {
          // Show error alert
          showAlert('Error updating profile', 'error');
          console.error('Error updating profile:', error);
        }
      });
    }

    function showAlert(message, type) {
      if (type === 'success') {
        Swal.fire({
          icon: 'success',
          title: 'Success',
          text: message,
          showConfirmButton: false,
          timer: 3000
        });
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: message,
          showConfirmButton: false,
          timer: 3000
        });
      }
    }

    function logout() {
      localStorage.removeItem("token");
      localStorage.removeItem("account_id");

      window.location.href = "{{ route('logout') }}";
    }
  </script>
</body>

</html>