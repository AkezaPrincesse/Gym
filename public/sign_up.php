<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup</title>


  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
      font-family: "Lexend Deca", sans-serif;
    }

    .header {
      text-align: center;
      font-size: 64px;
      font-weight: 400;
      margin-top: 30px;
      color: #2E62C7;
      height: 80px;
    }

    .container {
      text-align: center;
    }

    .sub-header {
      text-align: center;
      font-size: 10px;
      font-weight: 400;
      margin-top: -1rem;
      color: #3c6ccd;
    }

    input {
      width: 300px;
      height: 45px;
      margin-top: 25px;
      border-radius: 10px;
      border: none;
      background-color: #CDDBFD;
    }

    input[type="checkbox"] {
      width: 18px;
      height: 17px;
      margin-top: 1rem;
      border-radius: 10px;
      border: none;
      background-color: #CDDBFD;
    }

    input::placeholder {
      color: #000;
      font-weight: 600;
      padding-left: 10px;
      width: 160px;
      height: 20px;
    }

    .sign-up-btn {
      font-size: 17px;
      width: 300px;
      height: 45px;
      margin-top: 25px;
      border-radius: 30px;
      border: 1px solid #00A3FF;
      background-color: #00A3FF;
      color: #FFFFFF;
    }

    .google {
      font-size: 15px;
      width: 300px;
      height: 45px;
      margin-top: 2px;
      border-radius: 30px;
      border: 1px solid #00A3FF;
      background-color: #fff;
      color: #224957;
      box-shadow: 1px 1px 5px #5f6366;
    }

    button:hover {
      cursor: pointer;
    }

    a {
      text-decoration: none;
      color: #00A3FF;
    }

    .text-bottom {
      font-family: "Lexend Deca", sans-serif;
      text-align: center;
      color: #224957;
    }

    footer {
      position: relative;

    }

    footer img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 111px;
      margin-top: 75px;
      size: cover;
    }
  </style>
</head>

<body>
  <form action="{{ route('signup') }}" method="post">
    <div class="container">
      <div>
        <h1 class="header">Sign up</h1>
      </div>
      <div class="sub-header">
        <h2>Create your account !</h2>
      </div>
      <div>
        <input type="text" name="username" id="name" placeholder="Name" required />
      </div>
      <div>
        <input type="email" name="useremail" id="email" placeholder="Email or Phone number" required />
      </div>
      <div>
        <input type="password" name="userpassword" id="password" placeholder="Password" required />
      </div>
      <div>
        <button type="submit" class="sign-up-btn">Sign up as user</button>
      </div>
      <p>OR</p>

      <p class="text-bottom">
        Already have an account? <a href="{{ route('login') }}">Login</a>
      </p>
      

      <P><a href="./adminauth.html">Signup or login as ADMIN</a></P>
    </div>
  </form>
  <footer>
    <img src="images/top.png" alt="" />
    "images/bottom.png"
    <img src="{{ asset('img/assets/home-images/Ellipse 2.png') }}" alt="" />
    <img src="{{ asset('img/assets/home-images/Ellipse 2.png') }}" class="ellipse-2">
  </footer>
</body>

</html>