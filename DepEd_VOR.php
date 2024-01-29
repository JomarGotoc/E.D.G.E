<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>School Administrator</title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300&display=swap');
        
            
            body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url(bg.png);
            background-size: cover;
        }
        
        .logo {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            background-image: url('logo.png'); 
            background-size: cover;
        }
        
        h3 {
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
            color: FFFFFF;
            opacity: 100%;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        h3{
        color: #FFF;
        }

        .main-container {
            width: 100%;
            height: calc(90vh - 140px);
            margin: 20px;
            margin-top: 125px;
            bottom: 0;
            background-color: #E2DFEE;
            opacity: 80%;
            overflow: auto;
            padding: 20px;
            border-radius: 20px;
        }

        .inner-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .top-inner-container{
            height: 20px;
            background-color: #190572;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
        }

        .middle-inner-container {
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            color: #190572;
        }
        
        .middle-inner-container h3 {
            color: #190572;
            font-size: 2rem;
            font-weight: bold;
    
        }
        
        .bottom-inner-container {
            height: 20px;
            background-color: #190572;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .bottom-inner-container2 {
            margin-top: 20px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 500px;
            color: #190572;
            border-radius: 10px;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }
    
        ::-webkit-scrollbar-thumb {
            background-color: #190572;
            border-radius: 20px;
        }
    
        ::-webkit-scrollbar-track {
            background-color: #E2DFEE;
            border-radius: 20px;
        }
        .col {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px;
            width: 260px;
            background-color: #190572; 
            padding: 5px;
            text-align: center;
            position: relative;
            height: 30px;
            padding-bottom: 8px;
            border-radius: 10px;
        }
        .col1 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin: 10px;
            width: 260px;
            background-color: #FFFFFF; 
            padding: 5px;
            text-align: center;
            position: relative;
            height: 30px;
            padding-bottom: 8px;
            border-radius: 10px;
            margin-left: 10px;
        }
        .col1 h3 {
            color: #190572;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px;
            width: 80;
            background-color: #919097;
            padding: 5px;
            text-align: center;
            position: relative;
            height: 30px;
            padding-bottom: 8px;
        }

        .label{
            font-family: 'Darker Grotesque', sans-serif;
            font-weight:bolder;
            font-size: 23px;
            color: #EFDFDF;
        }

        .column{
            display: flex;
            justify-content: center;
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


    </style>
</head>
<body>

    <header>
            <div class="header-content">
                <img src="img/logo.png" class="logs">
                <h4>E.D.G.E | S.T.A.R Early Detection and Guidance for Education</h4>
            </div>
    </header>

    <div class="navbar">
        <nav>
            <a href=" " id="create-acc">View Periodical Reports</a>
            <a href="DepEd_VOR.php" id="manage-acc">View Overall Reports</a>
        </nav>
    </div>

    <div class="main-container">

        <div class="mainc">
            <div class="col">
                <h3>1st Period</h3>
                <i class='bx bx-filter-alt' id="star-filter-icon"></i>
            </div>
        
            <div class="col1">
                <h3>Dagupan City Division Elementary Schools</h3>
            </div>

            <div class="col">
                <h3>90</h3>
            </div>
            <div class="col1">
                <h3>S.T.A.R</h3>
            </div>
        </div>
        
            <div class="column">
                <div class="container">
                    <h3 class="label">Elementary School's name</h3>
                </div>
                <div class="container">
                    <h3 class="label"># of Students</h3>
                </div>
                <div class="container">
                    <h3 class="label"># of S.T.A.R</h3>
                </div>
                <div class="container" id="last-filter-container">
                    <h3 class="label">A - Numeracy</h3>
                </div>
                <div class="container" id="last-filter-container">
                    <h3 class="label">A - Literacy</h3>
                </div>
                <div class="container" id="last-filter-container">
                    <h3 class="label">Behavioral</h3>
                </div>
            </div>
    </div>

   
        </div>

        <script src="DepEd.js"></script>

    
</body>
</html>
