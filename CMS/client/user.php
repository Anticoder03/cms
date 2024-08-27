<?php
// Start the session
session_start();

include '../conn.php';

// Check if user is logged in
if (!isset($_SESSION['user_name'])) {
    echo "You need to log in first.";
    exit();
}

// Retrieve the username from the session
$user_name = $_SESSION['user_name'];

// Fetch user details from the database
$sql = "SELECT * FROM `student` WHERE `Name` = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $user_name);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Check if user was found
if ($row = mysqli_fetch_assoc($result)) {
    $name = htmlspecialchars($row['Name']);
    $email = htmlspecialchars($row['Email']);
    $phone = htmlspecialchars($row['Number']);
    $marks = htmlspecialchars($row['Marks']);
    $gender = htmlspecialchars($row['Gender']);
    $course = htmlspecialchars($row['Course']);
    $dob = htmlspecialchars($row['Date_Of_Birth']);
} else {
    echo "User not found.";
    exit();
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sidebars.css">
    <script src="../js/sidebars.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
  <div class="d-flex">
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Wel Come</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="./info.php" target="frame" class="nav-link link-dark" >
        Dashboard
        </a>
      </li>
      <li>
        <a href="./staff.php?course=<?php echo $course; ?>" target="frame" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
         Teaching staff
        </a>
      </li>
     
      <li>
        <a href="./time_table.php" target="frame" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Time-table
        </a>
      </li>
      <li>
        <a href="./complain.php" target="frame" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Complain
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
       
        <strong><?php echo $name; ?></strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
        
        <li><a class="dropdown-item" href="./edit.php?id=<?php echo $row['Id'] ?>">Edit Account</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="./logout.php?user_name=<?php echo $name ?>">Sign out</a></li>
      </ul>
    </div>
  </div>
  <iframe name="frame" class="w-100" style="height: 100vh !important; overflow-y: scroll;" src="./info.php" frameborder="0"></iframe>
</div>
    
</body>
</html>
