<?php include '../conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container p-4">
        <h1 class="text-center text-primary text-uppercase">Add Staff</h1>
        <form method="post" class="form-control mt-3 p-4">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input required type="text" name="name" id="name" class="form-control w-100">
            </div>
            <div class="mb-3">
                <label for="Subject" class="form-label">Subjects:</label>
                <input required type="text" name="sub" id="sub" class="form-control w-100">
            </div>
            <div class="mb-3">
                <label for="Qly" class="form-label">Qualification</label>
                <input required type="text" name="qly" id="qly" class="form-control w-100">
            </div>
            <div class="mb-3">
                <label for="post" class="form-label">Post:</label>
                <input required type="text" name="post" id="post" class="form-control w-100">
            </div>
            <div class="mb-3">
                <label for="stream" class="stream">Stream:</label>
                <input required type="text" name="stream" id="stream" class="form-control w-100">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input required type="number" name="age" id="age" class="form-control w-100">
            </div>
            <div class="mb-3">
                <label for="gender"  class="form-label">Gender</label>
                <select name="gender" required id="gender" class="w-100" style="height: 2rem;">
                    <option value="" selected disabled>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exp" class="form-label">Experiance:</label>
                <select name="exp" required id="exp" class="w-100" style="height: 2rem;">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3+">3+</option>
                </select>
            </div>
            <input required type="submit" value="Add" class="btn btn-outline-primary w-100">
        </form>
    </div>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $sub = htmlspecialchars(trim($_POST['sub']));
    $qly = htmlspecialchars(trim($_POST['qly']));
    $post = htmlspecialchars(trim($_POST['post']));
    $stream = htmlspecialchars(trim($_POST['stream']));
    $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
    $gender = htmlspecialchars(trim($_POST['gender']));
    $exp = htmlspecialchars(trim($_POST['exp']));

    // Check if all required fields are filled
    if (empty($name) || empty($sub) || empty($qly) || empty($post) || empty($stream) || empty($age) || empty($gender) || empty($exp)) {
        echo "All fields are required.";
    } else {
        // Prepare the SQL query
        $stmt = mysqli_prepare($conn, "INSERT INTO `staff` (`Name`, `Subject`, `Highest_qly`, `Post`, `Stream`, `Age`, `Gender`, `EXP`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt) {
            // Bind parameters to the SQL query
            mysqli_stmt_bind_param($stmt, "sssssiis", $name, $sub, $qly, $post, $stream, $age, $gender, $exp);
            

            // Execute the query
            if (mysqli_stmt_execute($stmt)) {
                header('location:index.php');
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    }
}

// Close the connection
mysqli_close($conn);

}

?>