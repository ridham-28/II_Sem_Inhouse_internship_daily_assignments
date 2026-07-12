<?php
include(db_connect.php;
if($_SERVER['request method']=='post'){
    $name =mysql_real_escape_string($com,$_POST['name']);
      $name =mysql_real_escape_string($com,$_POST['email']);
        $name =mysql_real_escape_string($com,$_POST['branch']);
          $cgpa=$_POST['cgpa']);
          $cgpa ="insert into students (name,email,branch,cgpa)
          values ('$name','$branch','$email','$cgpa')";
















































          

}

