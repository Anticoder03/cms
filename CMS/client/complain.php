<?php include '../conn.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Complaint Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>
  <h1 class="text-center text-danger text-uppercase">Rais Complaint</h1>
<form method="post" class="container mt-5">
  <div class="mb-3">
    <label for="subect" class="form-label">Subject</label>
    <input type="text" class="form-control" name="subject" id="sub" >
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description: </label>
    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
    <input type="submit" value="Submit" class="btn btn-outline-danger mt-3">
</div>

</form>


</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $sub = $_POST['subject'];
  $desc = $_POST['desc'];
  $query = "INSERT INTO `complains`(`Subjct`, `Complain`) VALUES ('$sub','$desc')";
  $res = mysqli_query($conn,$query);
  if($res){
    echo "Complain Registered Successfully.";
  } else{
    echo "Thare is an error. Plese Try Again";
  }
}
?>