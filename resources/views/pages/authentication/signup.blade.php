<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="../../js/config.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin centered-form">
        <form action="signup.php" method="POST">
            @csrf
            <img class="mb-4" src="../../images/Npl_logo-removebg-preview.png" alt="" width="72" height="57" onclick="navigateHome()">
            <h1 class="h3 mb-3 fw-normal">Sign up</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="first-name" placeholder="First Name" required>
                <label for="first-name">First Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="last-name" placeholder="Last Name" required>
                <label for="last-name">Last Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Email address" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="company-name" placeholder="Organisation Name">
                <label for="company-name">Company Name</label>
            </div>
            <div class="form-floating">
                <select class="form-select" id="sex" required>
                    <option value="" disabled selected>Select your sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="sex">Sex</label>
            </div>
            <!-- Districts -->
            <div class="form-floating">
                <select class="form-select" id="district" required>
                    <option value="" disabled selected>Select a district</option>
                    <option value="BA">Balaka</option>
                    <option value="BL">Blantyre</option>
                    <option value="CH">Chitipa</option>
                    <option value="CHI">Chiradzulu</option>
                    <option value="CK">Chikwawa</option>
                    <option value="DE">Dedza</option>
                    <option value="DO">Dowa</option>
                    <option value="KA">Karonga</option>
                    <option value="KS">Kasungu</option>
                    <option value="LI">Likoma</option>
                    <option value="LL">Lilongwe</option>
                    <option value="MA">Mangochi</option>
                    <option value="MC">Mchinji</option>
                    <option value="MCA">Machinga</option>
                    <option value="MU">Mulanje</option>
                    <option value="MW">Mwanza</option>
                    <option value="MZ">Mzimba</option>
                    <option value="MZC">Mzuzu City</option>
                    <option value="NB">Nkhata Bay</option>
                    <option value="NE">Neno</option>
                    <option value="NK">Nkhotakota</option>
                    <option value="NS">Nsanje</option>
                    <option value="NT">Ntchisi</option>
                    <option value="NTC">Ntcheu</option>
                    <option value="PH">Phalombe</option>
                    <option value="RU">Rumphi</option>
                    <option value="SA">Salima</option>
                    <option value="TH">Thyolo</option>
                    <option value="ZO">Zomba</option>
                </select>
            </div>

            <!-- End Districts -->
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" required>
                <label for="confirm-password">Confirm Password</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="physical-address" placeholder="Physical Address" required>
                <label for="physical-address">Physical Address</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="country" placeholder="Country" value="Malawi" required readonly>
                <label for="country">Country</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="phone-number" placeholder="Phone Number" required>
                <label for="phone-number">Phone Number</label>
            </div>
            <div id="error-message" class="alert alert-danger" style="display:none;"></div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="agree" required> I agree to the terms and conditions
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" id="signup-btn" disabled>Sign up</button>
            <p class="mt-5 mb-3 text-muted">&copy; 1993 - <?php echo date('Y'); ?></p>
            <p>Already have an account? <a href="{{route('signin')}}">Sign in</a></p>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#signup-btn").click(function(event) {
                event.preventDefault();
                signup();
            });

            $("#confirm-password").keyup(function() {
                var password = $("#password").val();
                var confirmPassword = $("#confirm-password").val();

                if (password === confirmPassword) {
                    $("#signup-btn").prop("disabled", false);
                    $("#password, #confirm-password").removeClass("password-mismatch").addClass("password-match");
                    $("#error-message").hide().empty();
                } else {
                    $("#signup-btn").prop("disabled", true);
                    $("#password, #confirm-password").removeClass("password-match").addClass("password-mismatch");
                    $("#error-message").text("Passwords do not match").show();
                }
            });
        });

        function signup() {
            $('#error-message').hide().empty();
            var updatedProfile = {
                first_name: $("#first-name").val(),
                last_name: $("#last-name").val(),
                username: $("#username").val(),
                email: $("#email").val(),
                company_name: $("#company-name").val(),
                sex: $("#sex").val(),
                password: $("#password").val(),
                district_code: $("#district").val(),
                physical_address: $("#physical-address").val(),
                country: $("#country").val(),
                phone_number: $("#phone-number").val()
            };

            $.ajax({
                url: AppConfig.apiUrl + "/api/users",
                type: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: JSON.stringify(updatedProfile),
                success: function(response) {
                    showAlertSignup('Account Created Successfully, proceed to login', 'success');
                    function showAlertSignup(message, type) {
                        if (type === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                html: message,
                                position: 'center',
                                showConfirmButton: true,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer);
                                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                                },
                                willClose: () => {
                                    window.location.href = "{{ route('signin') }}";
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "{{ route('signin') }}";
                                }
                            });
                        }
                    }

                },
                error: function(error) {
                    if (error.status === 422) {
                        var errorMessage = error.responseJSON.message;
                        if (error.responseJSON.errors) {
                            for (var key in error.responseJSON.errors) {
                                errorMessage += ' ' + error.responseJSON.errors[key][0];
                            }
                        }
                        $('#error-message').text(errorMessage).show();
                    } else {
                        console.log(error);
                    }
                }
            });
        }

        function showAlert(message, type) {
            if (type === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    html: message,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    html: message,
                    position: 'top-end',
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
        function navigateHome() {
            window.location.href = AppConfig.apiUrl;
        }
    </script>

</body>

</html>