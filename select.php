<?php

$conn = mysqli_connect('localhost', 'testing', '12341234', 'phptutorials');

$sql = "SELECT * FROM topic LIMIT 1000";
mysqli_query($conn, $sql);


 ?>
