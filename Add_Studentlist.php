<?php 
session_start();
$conn = mysqli_connect('localhost','root','','studentguard');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['submit']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext = ['xls','csv','xlsx'];
    
    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row)
        {
            $lrn =  $row['0'];
            $fullname =  $row['1'];
            $section = $row['2'];
            $phone = $row['3'];

            $studentQuery = "INSERT INTO students (lrn, fullname,section, phone) VALUES ('$lrn','$fullname','$section','$phone')";
            $result = mysqli_query($conn, $studentQuery);
            $msg = true;
        }
        if(isset($msg))
        {
            $_SESSION['message'] = "Succesfully Imported";
            header('Location: add_studentlist.php');
            exit(0);
        }
        else 
        {
            $_SESSION['message'] = "Not Imported";
            exit(0);
        }
    }
    else 
    {
        $_SESSION['message'] = "Invalid File";
        exit(0);
    }
}
?>
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
        
        .file-upload-container {
            margin-top: 20px;
            border: 2px dashed #fff;
            border-radius: 10px;
            padding: 80px;
            text-align: center;
            color: #fff;
        }

        .file-upload-container:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        #file-input {
            display: none;
        }

        .import-button {
            background-color: #D9D9D9;
            color: #190572;
            padding: 10px 20px;
            margin-top: 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .import-button:hover {
            background-color: #0C052F; 
            border: 1px solid #190572;
            color: #D9D9D9;
        }
        h31 {
            color: green;
            font-family: 'Darker Grotesque', sans-serif;
            font-size: 20px;
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
            <a href="School_Admin_Studentlist.php">Manage Students' List</a>
        </nav>
    </div>

 
    <div class="login-container">
        <div class="logo"></div>
        <h3>Import Data File</h3>

        <?php
                if(isset($_SESSION['message']))
                {
                    echo "<h31>".$_SESSION['message']."</h31>";
                    unset($_SESSION['message']);
                }
                ?>

        <form action="Add_Studentlist.php" method="POST" enctype="multipart/form-data">
        <div class="file-upload-container" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
            <p>Upload CSV file only</p>
            <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="full-name" name="password" required>
                    </div>
            <input type="file" name="import_file" accept=".csv"  class="form-control" required/>
            <button type="submit" name="submit" class="import-button">Import</button>
        </div>
        </form>
    </div>
</body>

<script>
    function dropHandler(event) {
        event.preventDefault();
        const files = event.dataTransfer.files;
        handleFile(files);
    }

    function dragOverHandler(event) {
        event.preventDefault();
    }

    function handleFile(files) {
        console.log(files);
    }
</script>
</html>
