<!doctype html>
<html>
  <head>
    <title>Login</title>
    <?php
      $adusers="";
      $adpass="";
      include('../php_files/dbconnection.php');
      foreach($db->query("SELECT * FROM `users` WHERE 1 ") as $h){
         $adusers = $h['Username'];
         $adpass = $h['Password'];
      }
      $logprocess = './login.php';
      $isempty = [true,true,true,true];
      function validation(){
        global $isempty;
        global $aduser;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if(isset($_POST['logsub'])){
            if(!empty($_POST['username'])){
              $isempty[0] = false;
            }else 
              if($_POST['username'] === $aduser){
              $isempty[1] = false;
            }else
            if(!empty($_POST['password'])){
              $isempty[2] = false;
            }else
            if($_POST['password'] === $adpass){
                $isempty[3] = false;
            }
            
            
            if($isempty[0] === false && $isempty[1] === false &&
               $isempty[2] === false && $isempty[3] ===false){
             
              return true;
              
            }
            
            return false;
          }
          
        }
      }
    ?>
    
  </head>
  <body>
    <form action="<?php echo $logprocess;?>" onsubmit="<?php validation(); ?>" method="post">
      <label for="username">Username</label>
      <input name="username" id="username" type="text">
      <br>
      <label for="password">Password</label>
      <input name="password" id="password" type="password"><br>
      <input name="logsub" type="submit" value="Log In">
      <input type="reset" value="Reset">
    </form>
<!--    <?php/// echo validation();?>-->
  </body>
</html>