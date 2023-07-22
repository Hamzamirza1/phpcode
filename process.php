<?php

include 'database.php';

$std_name = $_POST['std_name'];
$std_sem = $_POST['std_sem'];

if(isset($_POST['btn'])){

$sql = "INSERT INTO student(std_name,std_sem) VALUES('$std_name','$std_sem')";

mysqli_query($conn,$sql);

header('Location:show.php');

}
else{


echo "Please check button name";

}






?>