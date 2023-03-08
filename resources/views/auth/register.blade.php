<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ route('process_register') }}">
                        @csrf
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name"
                                placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="phone" id="phone"
                                placeholder="Phone Number" />
                        </div>
                        <div class="form-group">
                            <label for="role">Gender</label> <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="1" checked>
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="0">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email"
                                placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password"
                                placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address"
                                placeholder="Address" />
                        </div>
                        <div class="form-group">
                            <label for="">Birthdate</label>
                            <input type="date" class="form-input" name="birthdate" id="birthdate" />
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label> <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="level" value="0" checked>
                                <label class="form-check-label" for="user">
                                    User
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="level" value="1">
                                <label class="form-check-label" for="admin">
                                    Admin
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-success">Đăng ký</button>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main-register.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"796adf456b331111","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>
