<?php

$conn = mysqli_connect('localhost', 'testing', '12341234', 'phptutorials');

//1 row
echo '<h1>Single Row</h1>';
$sql = "SELECT * FROM topic where id = 6 LIMIT 1000";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
  echo '<h1>'.$row['title'].'</h1>';
  echo $row['description'];

// all row
echo '<h1>All Row</h1>';
$sql = "SELECT * FROM topic LIMIT 1000";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
   echo '<h2>'.$row['title'].'</h2>';
   echo $row['description'];
};

 ?>
