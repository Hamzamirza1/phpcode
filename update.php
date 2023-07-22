<?php

include 'database.php';

$std_id = $_GET['std_id'];

$select = "SELECT * from student where std_id=$std_id";

$result = mysqli_query($conn,$select);

$data = mysqli_fetch_array($result);

if(isset($_POST['btn'])){

    $std_name = $_POST['std_name'];
    $std_sem = $_POST['std_sem'];

    $update = "UPDATE student SET std_name='$std_name', std_sem='$std_sem' where std_id='$std_id'";

    $sql = mysqli_query($conn,$update);

    header('Location:show.php');

}
else{

echo "Error";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="POST">
        <label>Student Name: </label>
        <br>
        <input type="text" name="std_name" value="<?php echo $data['std_name'] ?>">
        <br>
        <label>Student Sem: </label>
        <br>
        <input type="number" name="std_sem" value="<?php echo $data['std_sem'] ?>">
        <br>
        <button type="submit" name="btn">Update</button>
</form> -->


<form action="" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="std_name" value="<?php echo $data['std_name'] ?>">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Studet Semester:</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name= "std_sem" value="<?php echo $data['std_sem'] ?>">
  </div>
  <button type= "submit" class="btn btn-primary" name= "btn">Submit</button>
</form>
</body>
</html>