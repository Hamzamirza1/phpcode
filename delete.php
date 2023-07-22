<?php

include 'database.php';


$std_id = $_GET['std_id'];

$delete = "DELETE FROM student where std_id='$std_id'";

mysqli_query($conn,$delete);

header('Location:show.php');


?>