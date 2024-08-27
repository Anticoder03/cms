<?php
    include '../conn.php';

?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<h1 class="text-center text-primary text-uppercase">Teaching Staff</h1>
<table class="table table-light table-striped">
  <tr>
    <th>Time</th>
    <th>Monday</th>
    <th>Tuesday</th>
    <th>Wednesday</th>
    <th>Thrusday</th>
    <th>Friday</th>
    <th>Saturday</th>
  </tr>
 <?php
        $query = "SELECT * FROM `time_table`";
        $result = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['Time']; ?></td>
        <td><?php echo $row['Monday']; ?></td>
        <td><?php echo $row['Tuesday']; ?></td>
        <td><?php echo $row['Wednesday']; ?></td>
        <td><?php echo $row['Thursday']; ?></td>
        <td><?php echo $row['Friday']; ?></td>
        <td><?php echo $row['Saturday']; ?></td>
    </tr>
    <?php
  } 
?>


</table>
