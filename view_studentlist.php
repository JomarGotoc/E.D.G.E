<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            display: grid;
            grid-template-rows: repeat(2, 1fr);
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
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

        .box {
            opacity: 1;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s, color 0.3s; 
            cursor: pointer;
        }

        .box:hover {
            background-color: #190572;
            color: #fff;
        }

        .box h5 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: medium;
            font-family: 'Darker Grotesque', sans-serif;
        }

        .box-content {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
            text-align: center; 
        }

        .box.expanded .box-content {
            display: flex;
        }

        .box-buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            align-items: center; 
            justify-content: center; 
            text-align: center; 
        }

        .box-buttons button {
            padding: 15px;
            background-color: #190572;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1.6rem;
            cursor: pointer;
            width: 100%; 
        }

        .box:hover .box-buttons button {
            background-color: #fff;
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
            <a href="School_Admin_Create_Account.php" id="create-acc">Create Accounts</a>
            <a href="School_manageaccount.php" id="manage-acc">Manage Accounts</a>
            <a href="Schooladmin_studentlist.php" id="manage-students">Manage Students List</a>
        </nav>
    </div>

    <div class="main-container">
        <div class="box" onclick="toggleBox(this)">
            <h5>Grade 1</h5>
            <div class="box-content">
                <div class="box-buttons">
                    <button onclick="handleButtonClick('Section 1')">Section 1</button>
                    <button onclick="handleButtonClick('Section 2')">Section 2</button>
                    <button onclick="handleButtonClick('Section 3')">Section 3</button>
                    <button onclick="handleButtonClick('Section 4')">Section 4</button>
                    <button onclick="handleButtonClick('Section 5')">Section 5</button>
                    <button onclick="handleButtonClick('Section 6')">Section 6</button>
                </div>
            </div>
        </div>

        <div class="box" onclick="toggleBox(this)">
            <h5>Grade 2</h5>
            <div class="box-content">
                <div class="box-buttons">
                    <button onclick="handleButtonClick('Section 1')">Section 1</button>
                    <button onclick="handleButtonClick('Section 2')">Section 2</button>
                    <button onclick="handleButtonClick('Section 3')">Section 3</button>
                    <button onclick="handleButtonClick('Section 4')">Section 4</button>
                    <button onclick="handleButtonClick('Section 5')">Section 5</button>
                    <button onclick="handleButtonClick('Section 6')">Section 6</button>
                </div>
            </div>
        </div>

        <div class="box" onclick="toggleBox(this)">
            <h5>Grade 3</h5>
            <div class="box-content">
                <div class="box-buttons">
                    <button onclick="handleButtonClick('Section 1')">Section 1</button>
                    <button onclick="handleButtonClick('Section 2')">Section 2</button>
                    <button onclick="handleButtonClick('Section 3')">Section 3</button>
                    <button onclick="handleButtonClick('Section 4')">Section 4</button>
                    <button onclick="handleButtonClick('Section 5')">Section 5</button>
                    <button onclick="handleButtonClick('Section 6')">Section 6</button>
                </div>
            </div>
        </div>

        <div class="box" onclick="toggleBox(this)">
            <h5>Grade 4</h5>
            <div class="box-content">
                <div class="box-buttons">
                    <button onclick="handleButtonClick('Section 1')">Section 1</button>
                    <button onclick="handleButtonClick('Section 2')">Section 2</button>
                    <button onclick="handleButtonClick('Section 3')">Section 3</button>
                    <button onclick="handleButtonClick('Section 4')">Section 4</button>
                    <button onclick="handleButtonClick('Section 5')">Section 5</button>
                    <button onclick="handleButtonClick('Section 6')">Section 6</button>
                </div>
            </div>
        </div>

        <div class="box" onclick="toggleBox(this)">
            <h5>Grade 5</h5>
            <div class="box-content">
                <div class="box-buttons">
                    <button onclick="handleButtonClick('Section 1')">Section 1</button>
                    <button onclick="handleButtonClick('Section 2')">Section 2</button>
                    <button onclick="handleButtonClick('Section 3')">Section 3</button>
                    <button onclick="handleButtonClick('Section 4')">Section 4</button>
                    <button onclick="handleButtonClick('Section 5')">Section 5</button>
                    <button onclick="handleButtonClick('Section 6')">Section 6</button>
                </div>
            </div>
        </div>

        <div class="box" onclick="toggleBox(this)">
            <h5>Grade 6</h5>
            <div class="box-content">
                <div class="box-buttons">
                    <button onclick="handleButtonClick('Section 1')">Section 1</button>
                    <button onclick="handleButtonClick('Section 2')">Section 2</button>
                    <button onclick="handleButtonClick('Section 3')">Section 3</button>
                    <button onclick="handleButtonClick('Section 4')">Section 4</button>
                    <button onclick="handleButtonClick('Section 5')">Section 5</button>
                    <button onclick="handleButtonClick('Section 6')">Section 6</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleBox(box) {
            box.classList.toggle('expanded');
            const boxContent = box.querySelector('.box-content');
            const boxText = box.querySelector('h5');
            if (boxContent.style.display === 'none') {
                boxContent.style.display = 'flex';
                boxText.style.display = 'none';
            } else {
                boxContent.style.display = 'none';
                boxText.style.display = 'block';
            }
        }

        function handleButtonClick(section) {
            window.location.href = 'view_studentlist2.php?section=' + section;
        }
    </script>
 
</body>
</html>
