<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E.D.G.E</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
    <style>
                    body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(img/bg.png);
            background-size: cover;
            }

            .container {
            text-align: center;
            }

            .logo {
            width: 150px; 
            height: auto;
            margin-bottom: 20px;
            }

            .buttons {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 10px;
            }

            a .button {
            background-color: #190572;
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

            h1 {
            font-family: 'Goblin One', cursive;
            color: #2206A0;
            text-shadow:
            -1px -1px 0 #BCB1B1,
            1px -1px 0 #BCB1B1,
            -1px 1px 0 #BCB1B1,
            1px 1px 0 #BCB1B1;
            }

            h5 {
            font-family: 'Goblin One', cursive;
            color: #2206A0;
            }

            a {
            color: #fff;
            text-decoration: none
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
            border-bottom: .2rem solid rgba(185, 169, 169, 0.2);
            }

            h4{
            color: #fff;
            font-family: 'Darker Grotesque', sans-serif;
            font-size: 1.7rem;
            margin-left: 1rem;
            }
            .logs{
            width: 3.5rem;
            height: 3rem;
            }
    </style>
</head>
<body>
  
  <header>
    <img src="img/logo.png" class="logs">
    <div class="container">
        <h4> E.D.G.E | S.T.A.R Early Detection and Guidance for Education</h4>
    </div>
  </header>

    <div class="container">
        <img src="img/logo.png" alt="Logo" class="logo">
        <h1>E.D.G.E</h1>
        <h5>building brighter future</h5>
        <div class="buttons">
            <a href="deped_admin_login.php"><button class="button">SDO Administrator</button></a>
            <a href="SDO_Admin_Login.php"><button class="button">SDO Superintendent</button></a>
            <a href="School_Admin_Login.php"><button class="button">School Administrator</button></a>
            <a href="Principal_Login.php"><button class="button">Principal</button></a>
            <a href="Adviser_Login.php"><button class="button">Adviser</button></a>
            <a href="Counselor_Login.php"><button class="button">Guidance Counselor</button></a>
        </div>
    </div>
</body>
</html>
