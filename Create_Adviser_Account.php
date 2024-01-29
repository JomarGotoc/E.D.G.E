
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
            .alert1-success{
                color: red;
                font-weight: bold;
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

            .login-container {
            margin-top: 50px;
            background-color: rgba(25, 5, 114, 0.80); 
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
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
            color: #FFFFFF;
            opacity: 100%;
            }

            nav a:hover {
            background-color: #ddd;
            color: black;
            }

            h3{
            color: #fff;
            }

            button {
            margin-top: 10px;
            background-color: #0C052F;
            color: white;
            border: 1px solid #fff;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 97.5%;
            }

            button:hover {
            background-color: #ddd;
            border: 1px solid #0C052F;
            color: #190572;
            }

            .row {
            display: flex;
            }

            .columns {
            flex: 1;
            padding: 10px;
            }

            .columns:nth-child(1) {
            flex: 70;
            }

            .columns:nth-child(2) {
            flex: 50;
            }

            .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            }

            label {
            font-size: 10px;
            color: #FFFFFF; 
            text-align: left;
            }

            textarea,
            input[type="text"],
            select, #date-added {
            height: 20x;
            padding: 10px;
            border: 1px solid #0C052F; 
            border-radius: 5px;
            background-color: #DDDAE7;
            color: #0C052F; 
            }

            .button-container {
            display: flex;
            justify-content: center; 
            margin-top: 20px; 
            }

            #add-btn {
            background-color: #0C052F;
            color: #fff;
            padding: 10px 20px;
            margin: 0 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            }

            #add-btn:hover {
            background-color: #ddd;
            border: 1px solid #0C052F;
            color: #190572;
            }

            .addpopup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            z-index: 1000;
            }

            #myPopup {
            display: none;
            }

            .popup-content {
            background-color: #FFEEEE;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            width: 20%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

            .popup-header img {
            max-width: 100px;
            }

            .popup-header h2 {
            margin-top: 10px;
            color: #0C052F;
            font-weight: bold;
            }

            .popup-footer button {
            background-color: #0C052F;
            color: white;
            border: 1px solid #fff;
            font-weight: bold;
            font-size: 16px;
            border: none;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 20px;
            width: 100%;
            max-width: 100%;
            cursor: pointer;
            }

            .popup-footer button:hover {
            background-color: #ddd;
            border: 1px solid #0C052F;
            color: #190572;
            }
            .alert-success {
                color: green;
                font-weight: bold;
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
            <a href="School_Admin_Create_Account.php">Create Accounts</a>
            <a href="School_manageaccount.php">Manage Accounts</a>
            <a href="School_Admin_Studentlist.php">Manage Student List</a>
        </nav>
    </div>

 
    <div class="login-container">
        <div class="logo"></div>
        <h2>Adviser</h2>

        <?php

        $hostName = "localhost";
        $dbUser = "root";
        $dbPassword = "";
        $dbName = "studentguard";
        $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

        if (isset($_POST["submit"])) {
           $fullname = $_POST["fullname"];
           $idnum = $_POST["idnum"];
           $password = $_POST["password"];
           $date = $_POST["date"];
           $section = $_POST["section"];
           $grade = $_POST["grade"];

           $errors = array();
            
           if(empty($fullname) || empty($idnum) ||  empty($password) ||  empty($date) ||  empty($section)){

            echo "<div class='alert1-success'>Please Fill in the input fields</div>";
        }
        else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO adviser (fullname, idnum, password, date, section, grade) VALUES ( ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"ssssss",$fullname, $idnum, $hashedPassword, $date, $section, $grade);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert-success'>You are registered successfully.</div>";
                
            }
        }
        }
        ?>

        <form class="login-form" action="Create_adviser_Account.php" method="post">
            <div class="row">
            <div class="columns">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="full-name" name="fullname" >
                    </div>
                    <div class="form-group">
                        <label for="idnum">ID Number</label>
                        <input type="text" id="idnum" name="idnum" >
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="text" id="pass" name="password" >
                    </div>
                </div>

                <div class="columns">
                <div class="form-group">
                        <label for="date-added">Date Added</label>
                        <input type="date" id="date-added" name="date" >
                    </div>
                    <div class="form-group">
                        <label for="topdown">Grade</label>
                        <select id="topdown" name="grade" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="topdown">Section</label>
                        <select id="topdown" name="section" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" id="add-btn">Create Account</button>
        </form>
    </div>

    <script src="../js/SchoolAd.js"></script>
</body>
</html>

