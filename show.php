<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body> 
<table class="table table-dark table-hover">
  


  <thead>

  <tr>
<th>STUDENT ID</th>
<th>STUDENT NAME</th>
<th>STUDENT SEMESTER</th>
<th colspan="2">ACTION</th>
</tr>

</thead>

<tbody>

<?php

include 'database.php';

$query = "SELECT * FROM student";

$result = mysqli_query($conn,$query);

while($data = mysqli_fetch_array($result)){


?>

<tr>
<td><?php echo $data['std_id']; ?></td>
<td><?php echo $data['std_name']; ?></td>
<td><?php echo $data['std_sem']; ?></td>
<td><a href="update.php?std_id=<?php echo $data['std_id']; ?>"><i class="fa fa-edit" style="font-size:36px; color:green;"></i></a></td>
<td><a href="delete.php?std_id=<?php echo $data['std_id']; ?>"><i class="fa fa-close" style="font-size:36px; color:red;"></a></td>
</tr>

<?php
}

?>
</tbody>
    </table>
</body>
</html>