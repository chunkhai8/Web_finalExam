<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        
        <style>
            
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            @media screen and (max-width: 840px) {
            .w3-container {
                width: 100%;
                }
            }
            @media screen and (min-width: 840px) {
            .w3-container {
                width: 1500px;
                margin: 0 auto;
                }
            }
        </style>
    </head>
    <body class="antialiased">
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif

    <div class="w3-container">
        <div class="w3-bar w3-yellow ">
            <a class="w3-bar-item w3-button w3-right" href="{{ url('registration') }}">Register</a>
        </div>
        <header class="w3-center w3-padding-large w3-yellow">
            <h2>MyTutor</h2>
        </header>
        <div class="w3-padding" style="display:flex; justify-content: center;margin-top:1%;margin-bottom:1%">
            <div class="w3-card w3-round" style="width:500px;">
                <header class="w3-yellow w3-padding">
                    <h3>Login Form</h3>
                </header>
                <div class="w3-padding ">
                    <form action="{{route('login.post')}}" method="post" accept-charset="UTF-8">
                        {{csrf_field()}}
                        <label for="email">Email</label>
                        <p><input id="email" class="w3-input w3-round w3-border" type="email" name="email" required></p>
                        @if ($errors->has('email'))
                        <span class="w3-red">{{ $errors->first('email') }}</span>
                        @endif
                        <label for="pass">Password</label>
                        <p><input id="pass" class="w3-input w3-round w3-border" type="password" name="password" required></p>
                        @if ($errors->has('password'))
                        <span class="w3-red">{{ $errors->first('password') }}</span>
                        @endif
                        <div class="w3-row">
                            <input type="checkbox" name="remember"> Remember Me
                            <button class="w3-button w3-yellow w3-round w3-right">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="w3-footer w3-center w3-yellow">MyTutor App&copy;</footer>
    </div>

    </body>
</html>
