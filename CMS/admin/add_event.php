<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary">Add New Event</h1>
        <form method="post" class="form-control">
            <div class="mb-3">
                <label for="Name" class="form-label">Name Of Event:</label>
                <input type="text" name="name" id="name" class="from-control w-100">
            </div>
            <div class="mb-3">
                <label for="S_date" class="form-label">Starting Date:</label>
                <input type="date" name="s_date" id="s_date" class="from-cnrol w-100">
            </div>
            <div class="mb-3">
                <label for="E_date" class="form-label">Ending Date:</label>
                <input type="date" name="e_date" id="e_date" class="from-cnrol w-100">
            </div>
            <div class="mb-3">
                <label for="organiser" class="form-label">Organised By:</label>
                <input type="text" name="org" id="org" class="form-control w-100">
            </div>
            <div class="mb-3">
                <label for="stream" class="form-label">Stream: </label>
                <input type="text" name="stream" id="stream" class="form-control w-100">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Descrition:</label>
                <textarea name="desc" class="form-control" id="desc" cols="30" rows="5"></textarea>
            </div>
            <input type="submit" value="Add Event" class="btn btn-outline-primary w-100">
        </form>
    </div>
</body>
</html>
<?php
include '../conn.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $s_date = $_POST['s_date'];
    $e_date = $_POST['e_date'];
    $org = $_POST['org'];
    $desc = $_POST['desc'];
    $stream = $_POST['stream'];
    $sql = "INSERT INTO `events`( `Name`, `starting_date`, `Ending_date`, `Organised_By`, `Description`, `Stream`) VALUES ('$name','$s_date','$e_date','$org','$desc','$stream')";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "<script>alert('Event Added.')</script>";
    }
}


?>
