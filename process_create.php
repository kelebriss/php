<?php

  $conn = mysqli_connect('localhost', 'testing', '12341234', 'phptutorials');
  $sql = "
    INSERT INTO topic
      (title, description, created)
      VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
        )";

   $result = mysqli_query($conn, $sql);
   if($result === false)
   {
     echo 'error';
     error_log(mysqli_error($conn)); // save into apache error log
   }
   else {
     echo 'success <a href="index.php">return</a>';
   }
 ?>
