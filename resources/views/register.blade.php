<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
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
   <div class="w3-bar w3-yellow ">
     <a class="w3-bar-item w3-button w3-right" href="{{ url('login') }}"> Login</a>
    </div>
   <header class="w3-center w3-padding-large w3-yellow">
      <h2>MyTutor</h2>
   </header>
   <div class="w3-padding" style="display:flex; justify-content: center;margin-top:1%;margin-bottom:1%">
      <div class="w3-card w3-round" style="width:500px;">
        <header class="w3-yellow w3-padding">
          <h3>Registration Form</h3>
        </header>
       <div class="w3-padding ">
       <form action=" {{route('register.post') }}" method="post">
         {{csrf_field()}}
           <label for="name">Name</label>
           <p><input id="name" class="w3-input w3-round w3-border" type="name" name="name" required></p>
           @if ($errors->has('name'))
             <span class="text-danger">{{ $errors->first('name') }}</span>
           @endif
           <label for="email">Email</label>
           <p><input id="email" class="w3-input w3-round w3-border" type="email" name="email" required></p>
           @if ($errors->has('email'))
             <span class="text-danger">{{ $errors->first('email') }}</span>
           @endif
           <label for="pass">Password</label>
           <p><input id="pass" class="w3-input w3-round w3-border" type="password" name="password" required></p>
           @if ($errors->has('password'))
             <span class="text-danger">{{ $errors->first('password') }}</span>
           @endif
           <label for="phoneno">Phone number</label>
           <p><input id="phoneno" class="w3-input w3-round w3-border" type="phoneno" name="phoneno" required></p>
           @if ($errors->has('phoneno'))
             <span class="text-danger">{{ $errors->first('phoneno') }}</span>
           @endif
           <label for="address">Mailing address</label>
           <p><input id="address" class="w3-input w3-round w3-border" type="address" name="address" required></p>
           @if ($errors->has('address'))
             <span class="text-danger">{{ $errors->first('address') }}</span>
           @endif
           <label for="state">State</label>
           <p>
            <select id="state" class="w3-input w3-round w3-border" type="state" name="state" required>
              <option value="Perlis">Perlis</option>
              <option value="Kedah">Kedah</option>
              <option value="Penang">Penang</option>
              <option value="Kelantan">Kelantan</option>
              <option value="Perak">Perak</option>
              <option value="Terengganu">Terengganu</option>
              <option value="Pahang">Pahang</option>
              <option value="Selangor">Selangor</option>
              <option value="Negeri Sembilan">Negeri Sembilan</option>
              <option value="Malacca">Malacca</option>
              <option value="Johor">Johor</option>
              <option value="Sarawak">Sarawak</option>
              <option value="Sabah">Sabah</option>
            </select>
           </p>
           @if ($errors->has('state'))
             <span class="text-danger">{{ $errors->first('state') }}</span>
           @endif
           <p class="w3-center">
            <button class="w3-button w3-yellow w3-round">Register</button>
           </p>
         </form>
      </div>
    </div>
  </div>
  <footer class="w3-footer w3-center w3-yellow">MyTutor App&copy;</footer>
</div>

</body>
</html>