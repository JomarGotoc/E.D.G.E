<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDO Administrator</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

            .form-container {
                background-color: #190572;
                opacity: 1;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 300px;
                text-align: center;
            }
            
            h2 {
                font-family: 'Darker Grotesque', sans-serif;
                color: #fff;
                font-size: 20px;
            }
            
            .form-container {
                background-color: rgba(25, 5, 114, 0.80); 
                flex-direction: column;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 400px;
                text-align: center;
                align-items: center;
                justify-content: center;
                position: relative;
            }
            
            a {
                color: #fff;
                text-decoration: none;
            }

            .search-container {
            margin-top: 35px;
            position: relative; 
            display: flex;
            left: 5px;
            margin-bottom: 30px;
            width: 100%;
            }

            input[type="text"] {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            flex-grow: 1;
            }

            .search-icon {
                font-size: 20px;
                position: absolute; 
                right: 20px; 
                top: 50%;
                transform: translateY(-50%);
                cursor: pointer;
                color: #0C052F;
            }

            button {
                background-color: #0C052F;
                color: white;
                border: 1px solid #fff;
                padding: 10px;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                background-color: #ddd;
                border: 1px solid #0C052F;
                color: #190572;
            }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div class="header-content">
                <img src="img/logo.png" class="logs">
                <h4>E.D.G.E | S.T.A.R Early Detection and Guidance for Education</h4>
            </div>
        </div>
    </header>

    <div class="navbar">
        <nav>
            <a href="Select_Deped_Admin.php">Create Accounts</a>
            <a href="DepEd_manageaccount.php">Manage Accounts</a>
            <a href="DepEd_VOR.php">View Overall Reports</a>
        </nav>
    </div>

    <div class="form-container">
        <div class="logo"></div>
        <h2>Select School</h2>

        <div class="search-container">
            <input type="text" placeholder="School's Name" />
            <i class='bx bx-search-alt-2 search-icon'></i> 
        </div>
        <a href="Create_SchoolAdmin_Account.php"><button>Confirm</button></a>

    </div>


</body>
</html>