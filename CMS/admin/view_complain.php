<?php include '../conn.php'; ?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<h1 class="text-center text-danger text-uppercase">complains</h1>
    <div class="d-flex justify-content-between px-5 wrap">
    <?php
        $query = 'SELECT * FROM `complains`';
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class="card border-danger mb-3" style="max-width: 18rem;">
        <div class="card-header text-danger bg-transparent border-danger"><?php echo "Complain - ".$row['Id'] ?></div>
        <div class="card-body text-danger">
          <h5 class="card-title"><?php echo $row['Subjct'] ?></h5>
          <p class="card-text"><?php echo $row['Complain'] ?>
            <br>
            <br>
            
        </p>
        </div>
        <div class="card-footer bg-transparent border-danger"><a class="btn btn-outline-danger w-100" href="del_c.php?id=<?php echo $row['Id'] ?>">Delete</a></div>
      </div>
   <?php
        }
   ?>
   </div>