<!doctype html>
<html>
  <head>
    <title>Login</title>
    <?php
      $adusers="";
      $adpass="";
      $usern = " ";
      $passw =<!-- " ";-->
      include('../php_files/dbconnection.php');
      foreach($db->query("SELECT * FROM `users` WHERE 1 ") as $h){
         $adusers = $h['Username'];
         $adpass = $h['Password'];
      }
      echo $adpass;
      $logprocess = './login.php';
      $isempty = [true,true,true,true];
      $isempty1 = true;
      $isempty2 = true;
      $isempty3 = true;
      $isempty4 = true;
      function validation(){
        global $isempty;
        $isempty1 = true;
        global $adusers;
        global $adpass;
        global $usern;
        global $passw;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          echo "appp";
          if(isset($_POST['logsub'])){
            $usern = $_POST['username'];
            $passw = $_POST['password'];
            if(!empty($usern)){
              $isempty[0] = false;
              $isempty1 = false;
              echo "Asd";
            }
            
            if($usern === $adusers){
              $isempty[1] = false;
              echo "Asdd";
            }else{
              $isempty[1] = true;
            }
            if(!empty($passw)){
              $isempty[2] = false;
              echo "dfaaass";
            }
            if($passw === $adpass){
                $isempty[3] = false;
              echo "shhd";
            }
            if($isempty[0]==false){
              echo "heres";
            }
            if($isempty[0]=== false && $isempty[1]==false &&
               $isempty[2] === false && $isempty[3] === false){
              echo "herse";
              if($adpass === "pa11word"){
                $usern = "";
                $_POST['username'] = "";
                header("Location: ./changePredirect.php");
              }
             $_POST['username'] = "";
              return true;
              
            }
            $usern = "";
            $passw = "";
            $_POST['username'] = "";
            $_POST['password'] = "";
            return false;
          }
          
        }
      }
    ?>
    
  </head>
  <body>
    <?php echo validation();?>
    <form action="<?php echo $logprocess;?>" onsubmit="php:return  <?php validation(); ?>" method="post">
      <label for="username">Username</label>
      <input name="username" id="username" type="text" autocomplete="off" value="<?php echo $usern; ?>">
      <br>
      <label for="password">Password</label>
      <input name="password" id="password" type="password" <?php echo $passw;?>><br>
      <input name="logsub" type="submit" value="Log In">
      <input type="reset" value="Reset">
    </form>
    
  </body>
</html>