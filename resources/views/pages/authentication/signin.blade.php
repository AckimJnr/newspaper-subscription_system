<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../images/shortcut_image.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Newspaper Subscription System</title>
    <script type="text/javascript" src="../../js/config.js"></script>

    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin centered-form">
        <form id="loginForm">
            @csrf
            <img class="mb-4" src="../../images/Npl_logo-removebg-preview.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="button" onclick="performLogin()">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            <p>Don't have an account? <a href="{{route('signup')}}">Sign up</a></p>
        </form>
    </main>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function performLogin() {
            var email = $('#email').val();
            var password = $('#password').val();
            var headers = {
                'Content-Type': 'application/json',
                'Allow-Control-Allow-Origin': '*',
            };
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: 'http://127.0.0.1:8000/api/login',
                data: {
                    email: email,
                    password: password,
              

                },
                success: function(response) {
                    var token = response.access_token;
                    localStorage.setItem('token', token);
                    window.location.href = "{{route('userprofile')}}";
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>

</body>

</html>