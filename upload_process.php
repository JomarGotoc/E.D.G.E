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
            $lrn = $row['0'];
            $fullname =  $row['1'];
            $section = $row['2'];
            $phone = $row['3'];

            $studentQuery = "INSERT INTO students (lrn,fullname,section,phone) VALUES ('$lrn,'$fullname','$section','$phone')";
            $result = mysqli_query($conn, $studentQuery);
            $msg = true;
        }
        if(isset($msg))
        {
            $_SESSION['message'] = "Succesfully Imported";
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