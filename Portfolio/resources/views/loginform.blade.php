<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <title>Login</title>
</head>

<body>
    <section id="banner" >
        <div class="content ">

            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                @csrf
                <h1 class="text-center">Login</h1>
                <div class="social-container text-center">

                </div>
                <span class="text-center d-block">Username</span>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required />
                    <div class="invalid-feedback">Password</div>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                    <br>
                </div>
                <button type="submit" class="btn btn-primary btn-block button">Sign In</button>
            </form>
        </div>
    </section>
</body>

</html>
