<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center text-dark my-4">Registretion </h1>
        <form method="post" class="form-control">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="Name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Emai:</label>
            <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Phone Number:</label>
            <input type="text" name="name" id="Name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="marks" class="form-label">12<sup>th</sup> Marks:</label>
            <input type="number" name="marks" id="marks" class="form-control">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password:</label>
            <input type="password" name="pass" id="pass" class="form-control">
            </div>
            <div class="mb-3">
                <label for="c_pass" class="form-label">Confirm Password:</label>
            <input type="password" name="c_pass" id="c_pass" class="form-control">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Gender:</label>
                <select name="gender" id="gender" class="w-100">
                    <option value="" selected disabled>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Course:</label>
            <select name="course" id="course" class="w-100">
                <option value="" selected disabled>Select Course</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
                <option value="BSC">BSc</option>
                <option value="BCOM">BCom</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date Of Birth:</label>
            <input type="date" name="date" id="date" class="form-control">
            </div>
            <input type="submit" value="Submit" class="btn btn-outline-dark w-100">
        </form>
    </div>
</body>
</html>


<?php
include '../conn.php';
$name = $email = $phone = $marks = $password = $c_pass = $gender = $course = $dob = "";
$name_err = $email_err = $phone_err = $marks_err = $password_err = $c_pass_err = $gender_err = $course_err = $dob_err = $pic_err = "";

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate phone number
    if (empty(trim($_POST["Phone"]))) {
        $phone_err = "Please enter your phone number.";
    } elseif (!is_numeric(trim($_POST["Phone"]))) {
        $phone_err = "Phone number must be numeric.";
    } else {
        $phone = trim($_POST["Phone"]);
    }

    // Validate marks
    if (empty(trim($_POST["marks"]))) {
        $marks_err = "Please enter your 12th marks.";
    } elseif (!is_numeric(trim($_POST["marks"]))) {
        $marks_err = "Marks must be numeric.";
    } else {
        $marks = trim($_POST["marks"]);
    }

    // Validate passwords
    if (empty(trim($_POST["pass"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["pass"])) < 6) {
        $password_err = "Password must be at least 6 characters.";
    } else {
        $password = trim($_POST["pass"]);
    }

    if (empty(trim($_POST["c_pass"]))) {
        $c_pass_err = "Please confirm your password.";
    } elseif ($password !== trim($_POST["c_pass"])) {
        $c_pass_err = "Passwords do not match.";
    } else {
        $c_pass = trim($_POST["c_pass"]);
    }

    // Validate gender
    if ($_POST["gender"] == "Select") {
        $gender_err = "Please select your gender.";
    } else {
        $gender = $_POST["gender"];
    }

    // Validate course
    if ($_POST["course"] == "Select") {
        $course_err = "Please select your course.";
    } else {
        $course = $_POST["course"];
    }

    // Validate date of birth
    if (empty(trim($_POST["date"]))) {
        $dob_err = "Please enter your date of birth.";
    } else {
        $dob = trim($_POST["date"]);
    }

  

    // Check if there are no errors
    if (empty($name_err) && empty($email_err) && empty($phone_err) && empty($marks_err) && empty($password_err) && empty($c_pass_err) && empty($gender_err) && empty($course_err) && empty($dob_err) ) {
        $sql = "INSERT INTO `student`( `Name`, `Email`, `Number`, `Password`, `Gender`, `Marks`, `Course`, `Date_Of_Birth`) VALUES ('$name','$email','$phone','$password','$gender','$marks','$course','$dob')";
        $res = mysqli_query($conn,$sql);
        if($res)    {
            header('location:login.php');
        }
        else{
            echo "Failed to registe plesetry again.";
            die();
        }
    } else {
        // Display errors
        echo "There were errors in your form submission:<br>";
        echo $name_err . "<br>";
        echo $email_err . "<br>";
        echo $phone_err . "<br>";
        echo $marks_err . "<br>";
        echo $password_err . "<br>";
        echo $c_pass_err . "<br>";
        echo $gender_err . "<br>";
        echo $course_err . "<br>";
        echo $dob_err . "<br>";
    }
}
?>
