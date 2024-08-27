<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sidebars.css">
    <script src="../js/sidebars.js"></script>
</head>
<body>
<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Admin</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="./stud.php" target="main-frame" class="nav-link text-dark" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Home 
            </a>
          </li>
          <li>
            <a href="./feculty.php" target="main-frame" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Add Staff
            </a>
          </li>
          <li>
            <a href="./add_event.php" target="main-frame" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Add Events
            </a>
          </li>
          <li>
            <a href="./view_complain.php" target="main-frame" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              View Complains
            </a>
          </li>
         
        </ul>
        <hr>
        
      </div>
      <iframe name="main-frame"  style="height: 100vh; width: 100vw;" frameborder="0"></iframe>
</div>
</body>
</html>