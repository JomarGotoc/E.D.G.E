<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Administrator</title>
    <style>
                    body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url(img/bg.png);
            background-size: cover;
            }

            .logo {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            background-image: url('img/logo.png'); 
            background-size: cover;
            }

            h2 {
            font-family: 'Darker Grotesque', sans-serif;
            color: #fff;
            }

            h2 p{
            margin-top: 5px;
            font-size: 18px;
            }

            .login-container {
            background-color: rgba(25, 5, 114, 0.80); 
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            }

            a {
            color: #fff;
            text-decoration: none;
            }

            header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: .1rem 5%;
            background: #190572;
            display: flex;
            align-items: center;
            z-index: 100;
            height: 75px;
            }

            .header.sticky {
            border-bottom: .2rem solid rgba(255, 255, 255, 0.2);
            }

            h4 {
            color: #fff;
            font-family: 'Darker Grotesque', sans-serif;
            font-size: 1.7rem;
            margin-left: 1rem;
            }

            .logs {
            width: 3.5rem;
            height: 3rem;
            }

            .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start; 
            justify-content: center;
            width: 100%; 
            }

            .header-content {
            display: flex;
            align-items: center;
            }

            .navbar {
            background-color: #190572;;
            opacity: 80%;
            display: flex;
            justify-content: center;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 75px; 
            }

            nav {
            display: flex;
            align-items: center;
            }

            nav a {
            display: inline-block;
            padding: 14px 40px;
            text-decoration: none;
            color: FFFFFF;
            opacity: 100%;
            }

            nav a:hover {
            background-color: #ddd;
            color: black;
            }

            h3{
            color: #fff;
            }

            .buttons {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 10px;
            }

            a .button {
            background-color: #0C052F;
            color: #fff;
            padding: 10px 20px;
            margin: 0 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 90%;
            }

            .button:hover {
            background-color: #ddd;
            border: 1px solid #0C052F;
            color: #190572;
            }
    </style>
</head>
<body>

  <header>
    <img src="img/logo.png" class="logs">
    <div class="container">
        <h4>E.D.G.E | S.T.A.R Early Detection and Guidance for Education</h4>
    </div>
  </header>
  
    <div class="login-container">
        <div class="logo"></div>
        <h2>Select the Admin<p>you'd like to create an account for:</p></h2>

        <div class="buttons">
            <a href="Create_Principal_Account.php"><button class="button">Principal</button></a>
            <a href="Create_Adviser_Account.php"><button class="button">Adviser</button></a>
            <a href="Create_Counsilor_Account.php"><button class="button">Guidance Counselor</button></a>
        </div>
    </div>
</body>
</html>