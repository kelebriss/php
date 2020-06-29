<?php
//$mysqli = mysqli_connect("example.com", "user", "password", "database");
//$res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
//$row = mysqli_fetch_assoc($res);
//echo $row['_msg'];
$sql = "
  INSERT INTO topic
  (title, description, created)
    VALUE(
      'MYSQL',
      'MYSQL is ...',
      NOW()
      )
   ";
$conn = mysqli_connect("localhost", "testing", "12341234", "phptutorials");
$result = mysqli_query($conn, $sql);

if($result === false){
    echo mysqli_error($conn);
}

 ?>
