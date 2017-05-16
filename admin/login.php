<!doctype html>
<html>
  <head>
    <title>Login</title>
    <?php
      
      include('../php_files/dbconnection.php');
    
//      $adusers = $db->Query("SELECT * FROM `users` WHERE users.User_ID=1,Adid=1");
//      $adpass = $db->exec("SELECT `Password` FROM `users` WHERE 1");
      $logprocess = './login.php';
      ///$isempty = [true,true,true,true];
      //echo $adusers;
     // print( $aduser);
      function validation(){
        global $isempty;
        //global $aduser;
//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
//          if(isset($_POST['logsub'])){
//            if(!empty($_POST['username'])){
//              $isempty[0] = false;
//              if($_POST['username'] === $aduser){
//                $isempty[1] = false;
//              }
//            }
//            if(!empty($_POST['password'])){
//              $isempty[2] = false;
//              if($_POST['password']){
//                $isempty[3] = false;
//              }
//            }
//            
//            
//            if($isempty[0] === false && $isempty[1] === false &&
//               $isempty[2] === false && $isempty[3] ===false){
//              return true;
//            }
//            
//            return false;
//          }
          
       // }
      }
    ?>
    
  </head>
  <body>
    <?php 
    Query('SELECT `Username` FROM `users` WHERE 1');
    ?>
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