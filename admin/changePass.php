<?php
  include('../php_files/dbconnection.php');
  $passw ="";
  
  foreach($db->query('SELECT * FROM `users` WHERE 1') as $h){
    echo $h['Password'];
  };

?>