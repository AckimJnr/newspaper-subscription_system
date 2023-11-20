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
            <img class="mb-4" src="../../images/Npl_logo-removebg-preview.png" alt="" width="72" height="57"  onclick="navigateHome()">

            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <div id="error-message" class="alert alert-danger" style="display:none;"></div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="button" onclick="performLogin()">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 1993 - <?php echo date('Y'); ?></p>
            <p>Don't have an account? <a href="{{route('signup')}}">Sign up</a></p>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function performLogin() {
            var email = $('#email').val();
            var password = $('#password').val();
            $('#error-message').hide().empty();
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
                url: AppConfig.apiUrl + '/api/login',
                data: {
                    email: email,
                    password: password,
                },
                success: function(response) {
                    let token = response.access_token;
                    localStorage.setItem('token', token);
                    localStorage.setItem('account_id', response.account_id);

                    if (response.role == 'admin')
                        window.location.href = "{{route('admin')}}";
                    else
                        window.location.href = "{{route('newsfeed')}}";
                },
                error: function(error) {
                    if (error.status === 401) {
                        // Invalid credentials
                        $('#error-message').text('Invalid credentials. Please check your email and password.').show();
                    } else if (error.status === 422) {
                        // Validation failed
                        var errorMessage = error.responseJSON.message;
                        if (error.responseJSON.errors && error.responseJSON.errors.email) {
                            errorMessage += ' ' + error.responseJSON.errors.email[0];
                        }
                        $('#error-message').text(errorMessage).show();
                    } else {
                        console.log(error);
                    }
                }
            });
        }

        function navigateHome() {
            window.location.href = AppConfig.apiUrl;
        }
    </script>

</body>

</html>