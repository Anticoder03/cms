<?php
    include '../conn.php';
    $course = $_GET['course'];

?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<h1 class="text-center text-primary text-uppercase">Teaching Staff</h1>
<table class="table table-light table-striped">
  <tr>
    <th>Name</th>
    <th>Subject</th>
    <th>Qualification</th>
    <th>Post</th>
    <th>Stream</th>
  </tr>
 <?php
        $query = "SELECT * FROM `staff` WHERE `Stream` = '$course'";
        $result = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Subject']; ?></td>
        <td><?php echo $row['Highest_qly']; ?></td>
        <td><?php echo $row['Post']; ?></td>
        <td><?php echo $row['Stream']; ?></td>
    </tr>
    <?php
  } 
?>


</table>
