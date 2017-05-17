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
      foreach($db->query('SELECT * FROM `users` WHERE 1') as $h){
        echo $h['Password'];
      };
    function Validation(){
        global $passw;
        global $newpass;
        global $conpass;
        global $porocess;
        global $isempty;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['nPsub'])){
          if(!empty($_POST['newpass'])){
            echo "heerr";
            $isempty[0] = false;
          }
          if(!empty($_POST['confirmpass'])){
            echo "there";
            $isempty[1] = false;
          }
          if($_POST['newpass'] !== $_POST['confirmpass']){
            echo "Not match";
          }else{
            if(!empty($_POST['newpass']) && !empty($_POST['confirmpass'])){
              $isempty[2] = false;
            }
          }
          if($isempty[0]=== false && $isempty[1] === false && $isempty[2] === false ){
            echo "Not Yeah ";
          };
          if($isempty[0]=== false && $isempty[1]=== false && $isempty[2]=== false ){
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
    <?php echo Validation();?>
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