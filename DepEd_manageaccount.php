<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Department of Education</title>
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
            background: url(img/bg.png);
            background-size: cover;
        }
        
        .logo {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            background-image: url('img/logo.png'); 
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
        color: #fff;
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
            font-size: 2.5rem;
            font-weight: bolder;
    
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
            height: fit-content;
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

        .bottom-inner-container2 {
            margin-top: 20px;
            background-color: transparent;
            display: grid;
            grid-template-columns: repeat(5, 1fr); 
            gap: 10px; 
            align-items: center;
            justify-content: center;
            padding: 10px;
            border-radius: 10px;
        }

        .column {
            background-color: #190572;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            position: relative;
            color: #fff;
        }

        .column h3{
            font-size: 20px;
        }

        .bx-filter-alt {
            position: absolute;
            right: 5px;
            font-size: 20px;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .column {
            background-color: #190572;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            border-radius: 10px;
            position: relative;
            color: #fff;
        }

        .column h3 {
            font-size: 20px;
            margin: 0;
        }

        .sheshable {
            background-color: transparent;
            color: #EFDFDF;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        .rows {
            border-bottom: 1px solid #000000;
            color: #000;
            padding: 10px;
            font-size: 16px;
            position: relative;
        }

        .straight-line {
            height: 1px;
            width: calc(100% - 40px);
            background-color: #000; 
            margin: 0 auto;
        }
        
        .sheshable td {
            border: none;
        }

        .table tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .table td {
            padding: 10px;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .edit-button,
        .delete-button {
            color: #fff;
            border: none;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            width: 5rem;
        }

        .edit-button{
            background-color: #008705;
        }

        .delete-button{
            background-color: #771F1F;
        }

        .edit-button:hover,
        .delete-button:hover{
            background-color: #190572;
            color:#E2DFEE;
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
    
            #save-btn {
            background-color: #0C052F;
            color: #fff;
            padding: 10px 20px;
            margin: 0 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            }
    
            #save-dd-btn:hover {
            background-color: #ddd;
            border: 1px solid #0C052F;
            color: #190572;
            }

            .logo {
                width: 100px;
                height: 100px;
                margin: 0 auto 20px;
                background-image: url('img/logo.png'); 
                background-size: cover;
            }

            

            .popup {
                background-color: #FFEEEE;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 5px #190572;
                position: relative;
                max-width: 80%; 
                color: #0C052F; 
                text-align: center; 
            }
            
            .pop-form {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #190572;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(255, 255, 255);
                text-align: center; 
                z-index: 101; 
            }
        
            .pop-form h2 {
                margin-bottom: 20px; 
                color: #ddd; 
            }

            .addpopup, .delpopup, .deletepopup{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); 
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000; 
            }
            
            #myPopup, #delPopup, #deletePopup{
                display: none;
            }
            
            .popup-content {
                background-color: #FFEEEE;
                padding: 20px;
                border-radius: 8px;
                text-align: center;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); 
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
                color: #fff;
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

            .delpopup .popup-footer {
                display: flex;
                justify-content: space-between;
            }
            
            .delpopup button {
                width: 10px;
                flex: 1;
                margin: 0 5px;
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
            <a href="DepEd_manageaccount.php" id="deped-admin">SDO Administrators</a>
            <a href="DepEd_manageaccount2.php" id="division-admin">Superintendent</a>
            <a href="DepEd_manageaccount3.php" id="deped-admin">School Administrators</a>
        </nav>
    </div>

    <div class="main-container">
        <div class="inner-container">
            <div class="top-inner-container"></div>
            <div class="middle-inner-container"><h3>Department of Education SDO Administrators</h3></div>
            <div class="bottom-inner-container"></div>

            <div class="bottom-inner-container2">
                <div class="column"><h3>Name <i class='bx bx-filter-alt'></i></h3></div>
                <div class="column"><h3>ID Number <i class='bx bx-filter-alt'></i></h3></div>
                <div class="column"><h3>Password</h3></div>
                <div class="column"><h3>Date Added <i class='bx bx-filter-alt'></i></h3></div>
                <div class="column"><h3>Action</h3></div>
            </div>

            
        <div class="filter-popup" id="filter-popup">
            <ul id="filter-choices">
                
            </ul>
        </div>

            <table class="table">
                <tr class="sheshable">
                    <td class="rows">Vanessa</td>
                    <td class="rows">01-2023-123</td>
                    <td class="rows">dfgbdrfgbdf</td>
                    <td class="rows">01-10-2024</td>
                    <td class="rows">
                        <div class="button-container">
                            <a href="DepEd_manageaccount_edit.php"><button class="edit-button">Edit</button></a>
                        </div>
                    </td>
                    
                </tr>
            </table>
            <div class="straight-line"></div>
            
        </div>
    </div>

    
</body>
</html>
