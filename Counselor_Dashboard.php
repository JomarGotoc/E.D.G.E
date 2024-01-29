<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "studentguard";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

$query = "SELECT * FROM student_info";
$result1=mysqli_query($conn,$query);

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $last = $_POST['last'];
    $idnum = $_POST["idnum"];
    $grade = $_POST["grade"];
    $date = $_POST["date"];
    $period = $_POST["period"];
    $star = $_POST["star"];
    $indicators = $_POST["indicators"];
    $notes = $_POST["notes"];
    $section = $_POST["section"];
 
    
    $sql = "SELECT * FROM student_info";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);

     $sql = "INSERT INTO student_info ( name, last, idnum, grade, date, period, star, indicators, notes, section) VALUES ( ?, ?, ?, ?, ? ,?, ?, ?, ? ,?)";
     $stmt = mysqli_stmt_init($conn);
     $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
     if ($prepareStmt) {
         mysqli_stmt_bind_param($stmt,"ssssssssss", $name ,$last, $idnum, $grade, $date, $period, $star, $indicators, $notes , $section);
         mysqli_stmt_execute($stmt);
     }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Guidance Coounselor</title>
    <style>
                @import url('https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300&display=swap');

        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body{
            overflow: hidden;
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

        .logs {
            width: 3.5rem;
            height: 3rem;
        }

        .header-content {
            display: flex;
            align-items: center;
        }

        .menu-icon{
            font-size: 35px;
            color: #fff;
            cursor: pointer;
            margin-left: auto;
            font-weight: bold;
        }

        .menu-icon {
            cursor: pointer;
        }

        .menu-popup {
            display: none;
            position: absolute;
            background: #2206A0;
            border: 1px solid #ccc;
            list-style: none;
            padding: 0;
            z-index: 100;
            top: 100%; 
            right: 0; 
            color: #EFDFDF;
        }

        .menu-popup ul li {
            padding: 10px;
            list-style: none;
        }

        .menu-popup ul li a{
            color: #FFFF;
            text-decoration: none;
        }

        section{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
        }

        .profile{
            position: sticky;
            overflow: hidden;
            top: 10px;
            display: flex; 
            justify-content: space-between; 
            background-image: url(img/bg3.png);
            background-repeat: no-repeat;
            background-size: cover;
            height: 35vh;
            padding: 80px;
        }

        .left-container {
            flex: 1; 
            background-color: rgba(34, 6, 160, 0.48);
            display: flex; 
            align-items: center;
            border-radius: 14px;
            margin-right: 30px;
            height: fit-content;
            border: 2px solid #000000;
        }
        
        .profile-picture img {
            height: 190px;
            border-radius: 50%;
        }
        
        .profile-details { 
            color: #D9D9D9;
            font-size: 25px;
            font-family: 'Darker Grotesque', sans-serif;
            font-weight: bold;
        }

        .ident{
            flex: 1;
        }

        .ident{
            border-top: 1px solid #000000;
            background-color: #FFFFFF;
            justify-content: center;
            margin: 0;
            width: 100%;
            max-height: 50vh;
            justify-content: space-between;
            position: sticky;
            top: 10px;
        }

        .ident .container{
            margin: 10px;
            width: 95%;
            background-color: #2206A0;
            padding: 5px;
            text-align: center;
            position: relative;
        }

        .ident .label{
            font-family: 'Darker Grotesque', sans-serif;
            font-weight: normal;
            font-size: 23px;
            color: #EFDFDF;
        }

        .ident .column{
            display: grid;
            width: 90%;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;

        }

        .list{
            background-color: #FFFFFF;
            justify-content: center;
            margin: 0;
            width: 100%;
            max-height: 50vh;
            justify-content: space-between;
            overflow: auto;
        }

        .list::-webkit-scrollbar-thumb {
            background-color: #2206A0; 
            border-radius: 5px;
        }

        .list::-webkit-scrollbar{
            width: 10px;
            background-color: #E6CBCB;
            border-radius: 5px;
        }

        .column{
            flex: 1;
        }

        .bx-filter-alt {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #fff6f6;
            cursor: pointer;
        }

        .contents .cons{
            padding-top: 20px;
            padding-bottom: 15px;
            padding-left: 30px;
            font-family: 'Darker Grotesque', sans-serif;
            font-weight: 550;
            font-size: 25px;
            color: #070000;
        }
        .cons {
            position: relative;
        }

        .cons::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            margin-right: 15px;
            width: 100%;
            height: 1px;
            background-color: #000;
            margin-top: 10px; 
        }

        .plus-container {
            position: fixed;
            bottom: 20px; 
            right: 20px; 
            z-index: 9999; 
        }

        .circle {
            width: 50px; 
            height: 50px; 
            background-color: rgba(34, 6, 160, 0.48); 
            border-radius: 50%; 
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
        }

        .circle i {
            font-size: 24px; 
            font-weight: bolder;
            color: #2206A0; 
        }

        .popup-container {
            display: none;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 100;
        }

        .popup {
            background-color: #FFEEEE;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px #F6B6B6;
            position: relative;
            max-width: 80%; 
            color: #2206A0; 
            text-align: center; 
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 24px;
        }

        .photo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            text-align: center;
            margin-top: 10px;
        }

        .filter-popup {
            display: none;
            position: absolute;
            background: #2206A0;
            border: 1px solid #ccc;
            list-style: none; 
            padding: 0;
            z-index: 100;
            color: #FFF;
            border-radius: 1rem;
        }

        .filter-popup ul {
            list-style-type: none; 
            padding: 0;
        }

        .filter-popup li {
            cursor: pointer;
            padding: 10px;
        }

        .filter-container {
            display: flex;
            align-items: center;
        }

        .filter-icon {
            cursor: pointer;
            margin-left: 10px;
        }
        .table {
            border-collapse: collapse;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .shesh {
            background-color: transparent;
            color: #EFDFDF;
            text-align: center;
            margin: 10px;
            width: 95%;
        }

        .cons {
            padding: 10px;
            text-align: center;
            border: 1px solid #000;
            width: 25%;
            color: #000;
        }

        .shesh td {
            border: none;
        }

        .table tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .table td {
            padding: 10px;
        }

        .profile {
            display: flex;
        }

        .left-container {
            display: flex;
            flex-direction: column;
            padding-bottom: 8px;
        }

        .profile-details {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .left-container .profile-details h3,
        .left-container .profile-details p:nth-child(2) {
            margin-bottom: 0;
        }

        .left-container .profile-details p:last-child {
            margin-top: 0;
        }

        .left-container .profile-details div.col1 {
            margin-right: 100px; 
            margin-left: 100px; 
        }

        .left-container .profile-details div.col2 {
            margin-right: 100px; 
            margin-left: 100px; 
            align-items: center;
            justify-content: center;
        }

        .left-container .shesh{
            align-items: center;
            background-color: #0C052F;
            width: 100%;
            font-size: 20px;
            padding: 8px;
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

    <div class="container">
        <section class="profile">
            <div class="left-container">
                <p class="shesh">Dagupan City National High School</p>

                <div class="profile-details">
                    <div style="display: flex; justify-content: space-between;">
                        <div class="col1">
                            <h3>Cynthia C. Gonzales</h3>
                            <h4>ID Number: 02345678</h4>
                        </div>
                        <div class="col2">
                            <h4>Guidance Counselor</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ident">
            <div class="column">
                <div class="container">
                    <h3 class="label">First Name, Last Name</h3>
                    <i class='bx bx-filter-alt' id="name-filter-icon"></i>
                </div>
                <div class="container">
                    <h3 class="label">STAR Identification</h3>
                </div>
                <div class="container">
                    <h3 class="label">Grade Level</h3>
                    <i class='bx bx-filter-alt' id="grade-filter-icon"></i>
                </div>
                <div class="container" id="last-filter-container">
                    <h3 class="label">Section</h3>
                    <i class='bx bx-filter-alt' id="section-filter-icon"></i>
                </div>
            </div>
        </section>

        <div class="filter-popup" id="filter-popup">
            <ul id="filter-choices">
                
            </ul>
        </div>
    </div>
        </section>

        <table class="table">
            <tr class="shesh">
                <?php
                while($row = mysqli_fetch_assoc($result1))
                {
                    ?>
                    <td class="cons"><?php echo $row['name'] ?><span> </span><?php echo $row['last'] ?></td>
                    <td class="cons"><?php echo $row['star'] ?></td>
                    <td class="cons"><?php echo $row['grade'] ?></td>
                    <td class="cons"><?php echo $row['section'] ?></td>
                    </tr>
                    <?php
                }
                ?>
        </table>
</div>
</div>

<script src="gcdashboard.js"></script>
</body>
</html>

