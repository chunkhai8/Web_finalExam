<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
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
<body>
    <div class="w3-container">
        <div class="w3-bar w3-yellow w3-padding-large">
            <a class="w3-bar-item w3-button w3-right" href="{{ url('registration') }}">Register</a>
            <a class="w3-bar-item w3-button w3-right" href="{{ url('login') }}"> Login</a>
        </div>

        <div class="w3-center">
            <img class='w3-image w3-margin' src="{{ url('/storage/welcome.png') }}" style="width:97%">
            <br>
        </div>
    
        <footer class="w3-footer w3-center w3-yellow">MyTutor App&copy;</footer>
    
    </div>
</body>
</html>

