<?php include '../conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="top_cards container d-flex justify-content-between">
        <div class="card ms-3 align-items-center w-100 bg-success border border-3 text-light px-3">
            <h2>Your Success </h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima est nemo odit itaque nihil quae alias illo, dolores quos sit.
            </p>
        </div>
        <div class="card ms-3 align-items-center w-100 bg-danger px-3">
            <h2 class="text-light">Warning</h2>
            <p class="text-center text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique blanditiis eum asperiores accusamus inventore explicabo aperiam </p>
        </div>
        <div class="card ms-3 align-items-center w-100 px-3 bg-dark text-light">
            <h2 class="text-light">Other Info.</h2>
            <p class="text-center text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti similique nulla assumenda facere ullam quisquam.
            </p>
        </div>
    </div>
    <hr>
    <h1 class="text-center text-primary text-uppercase">Events</h1>
    <div class="d-flex justify-content-between px-5 wrap">
    <?php
        $query = "SELECT * FROM `events`";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success"><?php echo "Event - ".$row['Id'] ?></div>
        <div class="card-body text-success">
          <h5 class="card-title"><?php echo $row['Name'] ?></h5>
          <p class="card-text"><?php echo $row['Description'] ?>
            <br>
            <br>
            <strong>Time line: <br><?php echo $row['starting_date'] ?> to <?php echo $row['Ending_date'] ?></strong>
        </p>
        </div>
        <div class="card-footer bg-transparent border-success"><?php echo $row['Organised_By'] ?></div>
      </div>
   <?php
        }
   ?>
   </div>
   <div class="container">
    <h1 class="text-danger text-uppercase text-center ">
        Rules
    </h1>
    <p class="text-danger">*Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, dolores. Nihil, quis dolorum quaerat, voluptatum natus, pariatur magnam rerum ullam maxime dolores corrupti sequi mollitia animi facere tempore alias dolorem.</p>
   </div>
</body>
</html>