<!doctype html>
<html>
  <head>
    
    <title>Change Password</title>
    <?php
      include('../php_files/dbconnection.php');
      $passw ="";
      $newpass="";
      $conpass = "";
      $porocess = "./changePass.php";
      $isempty = [true,true,true];
      foreach($db->query('SELECT `Password` FROM `users` WHERE User_ID =1 AND Adid = 1') as $h){
        echo $h['Password'];
      };
    function Validation(){
        global $passw;
        global $newpass;
        global $conpass;
        global $porocess;
        global $isempty;
        global $db;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['nPsub'])){
          $newpass = $_POST['newpass'];
          $conpass = $_POST['confirmpass'];
          if(!empty($newpass)){
            echo "heerr";
            $isempty[0] = false;
          }
          if(!empty($conpass)){
            echo "there";
            $isempty[1] = false;
          }
          if($newpass !== $conpass){
            echo "Not match";
          }else{
            if(!empty($newpass) && !empty($conpass)){
              $isempty[2] = false;
            }
          }
          if($isempty[0]=== false && $isempty[1] === false && $isempty[2] === false ){
            echo "Not Yeah ";
          };
          if($isempty[0]=== false && $isempty[1]=== false && $isempty[2]=== false ){
            $newpass = password_hash($newpass,PASSWORD_DEFAULT);
            $db->exec('UPDATE `users` SET `Password`="'.$newpass.'" WHERE User_ID =1 AND Adid = 1');
            header("Location: ./adminpage.php");
            return true;
          }
                    
        }
          return false;
      }
    };
      

    ?>
  </head>
  <body>
<!--    <?php //echo Validation();?>-->
    <form action="<?php echo $porocess;?>" method="post" onsubmit="php: return <?php echo Validation(); ?>"
      <label>New Password</label>
      <input name="newpass" type="text">
      <label>Confirm Password</label>
      <input name="confirmpass" type="text">
      <input name="nPsub" type="submit" value="Submit">
      <input type="reset" value="Reset">
    
    </form>
  
  </body>
</html>