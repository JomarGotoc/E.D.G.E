<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "studentguard";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["id"];

// Retrieve user information from the database based on ID
$sql_select_user = "SELECT * FROM students WHERE id=$id";
$result_user = $conn->query($sql_select_user);

if ($result_user->num_rows > 0) {
    $row_user = $result_user->fetch_assoc();
    $fullname = $row_user["fullname"];
    $email = $row_user["email"];
    $phone = $row_user["phone"];
    $course = $row_user["course"];
} else {
    echo "User not found";
    $conn->close();
    exit();
}

// Check if form is submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $new_full_name = $_POST["fullname"];
    $new_email = $_POST["email"];
    $new_phone = $_POST["phone"];
    $new_course = $_POST["course"];

    // Update user information in the database
    $sql_update = "UPDATE students SET fullname='$new_full_name', email='$new_email', phone='$new_phone', course='$new_course' WHERE id=$id";

    if ($conn->query($sql_update) === TRUE) {
        $message = "Record updated successfully";
    } else {
        $error_message = "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
// Check if form is submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    if (isset($message)) {
        echo "<div style='color:green;'>$message</div>";
    }

    if (isset($error_message)) {
        echo "<div style='color:red;'>$error_message</div>";
    }
}
?>

<h2>Edit User Information</h2>

<form method="post" action="">
    
    <label for="fullname">Full Name:</label>
    <input type="text" name="fullname" value="<?php echo $fullname; ?>" required>
    <label for="email">Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>" required>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php echo $phone; ?>" required>
    <label for="course">Course:</label>
    <input type="text" name="course" value="<?php echo $course; ?>" required>
    <button type="submit" name="update">Save Changes</button>
</form>

</body>
</html>
