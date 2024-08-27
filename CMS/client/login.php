<?php
include '../conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .main{
            display: grid;
            height: 100vh;
            width: 100vw;
            place-items: center;
            background-color: whitesmoke;
        }
        .login_box{
            
            place-items: center;
           
        }
       
    </style>
</head>
<body>
    <div class="bg-light main">
        <div class=" container login_box form-control w-50 rounded h-50 d-grid">
            <form method="post" >
                <h1 class="text-center text-dark">Login</h1>
                <div class="input_box">
                    <label for="Uname" class="form-label">User Name:</label>
                    <input required type="text" name="name" class="w-100 form-control" id="name">
                </div>
                <div class="input_box">
                    <label for="password" class="form-label">Password:</label>
                    <input required type="password" class="w-100 form-control" name="pass" id="pass">
                </div>
                <input type="submit" class="btn btn-outline-dark my-3 w-50" value="Login">
            </form>
            <?php
// Start the session
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "CMS");

// Check connection
if (!$conn) {
    echo "Failed to connect to database";
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $stmt = mysqli_prepare($conn, "SELECT * FROM `student` WHERE `Name` = ? AND `Password` = ?");
    mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user_name'] = $user;
        header("Location: user.php"); 
        exit();
    } else {
        echo "<p style='color:red;'>Invalid username or password.</p>";
    }
    
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
            <p>
                <a href="reg.php">No Have Account Create New Account</a>
            </p>
        </div>
    </div>
</body>
</html>
