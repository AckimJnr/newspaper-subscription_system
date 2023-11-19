<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin centered-form">
        <form action="signup.php" method="POST">
            <!-- Add form elements for signup -->
            <img class="mb-4" src="../../images/Npl_logo-removebg-preview.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Sign up</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingFirstName" placeholder="First Name" required>
                <label for="floatingFirstName">First Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingLastName" placeholder="Last Name" required>
                <label for="floatingLastName">Last Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingUsername" placeholder="Username" required>
                <label for="floatingUsername">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email address" required>
                <label for="floatingEmail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingCompanyNa me" placeholder="Organisation Name">
                <label for="floatingCompanyName">Company Name</label>
            </div>
            <div class="form-floating">
                <select class="form-select" id="floatingSex" required>
                    <option value="" disabled selected>Select your sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="floatingSex">Sex</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingDistrictName" placeholder="District Name" required>
                <label for="floatingDistrictName">District Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPhysicalAddress" placeholder="Physical Address" required>
                <label for="floatingPhysicalAddress">Physical Address</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingCountry" placeholder="Country" required>
                <label for="floatingCountry">Country</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPhoneNumber" placeholder="Phone Number" required>
                <label for="floatingPhoneNumber">Phone Number</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="agree"> I agree to the terms and conditions
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            <p>Already have an account? <a href="{{route('signin')}}">Sign in</a></p>
        </form>
    </main>

</body>

</html>
