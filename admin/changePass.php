<!doctype html>
<html>
  <head>
    
    <title>Change Password</title>
    <?php
      include('../php_files/dbconnection.php');
      $passw ="";
      $newpass="";
      $conpass = "";
      foreach($db->query('SELECT * FROM `users` WHERE 1') as $h){
        echo $h['Password'];
      };
      for($i=0;$i < 0; $i++){
        header("Location: ./changePass.php");
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['nPsub'])){
          if(!empty($_POST['newpass'])){
            
          }
          if(!empty($_POST['confirmpass'])){
            
          }
          if($_POST['newpass'] !== $_POST['confirmpass']){
            echo "Not match";
          }else{
            
          }
          
          
        }
      }

    ?>
  </head>
  <body>
    <form>
      <label>New Password</label>
      <input name="newpass" type="text">
      <label>Confirm Password</label>
      <input name="confirmpass" type="text">
      <input name="nPsub" type="submit" value="Submit">
      <input type="reset" value="Reset">
    
    </form>
  
  </body>
</html>