<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Guidance Counselor</title>
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

      .login-container {
        background-color: #190572;
        opacity: 1;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
        text-align: center;
      }

      .logo {
        width: 100px;
        height: 100px;
        margin: 0 auto 20px;
        background-image: url('img/logo.png'); 
        background-size: cover;
      }

      .login-form input[type="text"],
      .login-form input[type="password"] {
        width: 90%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      .login-form button {
        background-color: #0C052F;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
      }

      .login-form button:hover {
        background-color: #DDDAE7;
        color: #0C052F;
      }

      h2 {
        font-family: 'Goblin One', cursive;
        color: #fff;

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

      .login-container {
        position: relative;
       }
            
      .back-icon {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 30px;
        color: #fff;
        text-decoration: none;
      }
            
      .back-icon i {
         margin-right: 5px;
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
    <a href="index.php" class="back-icon"><i class='bx bxs-chevron-left'></i></a>
        <div class="logo"></div>
        <h2>Guidance Counselor</h2>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentguard";

        $conn = new mysqli($servername, $username, $password, $dbname);


        // Example of usage
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idnum = $_POST["idnum"];
            $password = $_POST["password"];

            // Perform basic validation
            if (empty($idnum) || empty($password)) {
              echo "<div class='alert1-success'>No Account Found</div>";
            } else {
                $sql = "SELECT idnum, password FROM guidance WHERE idnum = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $idnum);
                $stmt->execute();
                $stmt->bind_result($db_idnum, $db_password);

                if ($stmt->fetch()) {
                    if (password_verify($password, $db_password)) {
                        header("Location: counselor_dashboard.php");
                    } else {
                      echo "<div class='alert1-success'>Password Incorrect</div>";
                    }
                } else {
                  echo "<div class='alert1-success'>ID Number Incorrect</div>";
                }

                $stmt->close();
            }

            $conn->close();
        }
        ?>
        <form class="login-form" action="Counselor_Login.php" method="post">
            <input type="text" placeholder="Enter ID Number: " name="idnum" >
            <input type="password" placeholder="Enter Password: " name="password" >
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
