<!doctype html>
<html>
  <head>
    
    <?php
    
    
      $lifetime = 60 * 60 * 24 * 365; 
      session_set_cookie_params($lifetime, '/');
      session_start();
      $session1 = 'dynamicpage';
      if(isset($_POST["who"])){
        if(!empty($_POST["who"])){
          $session1value = $_POST["who"];
          $_SESSION[$session1] = $session1value;
        }
      }
      if (isset($_SESSION[$session1])) {
        $session1value = $_SESSION[$session1];
      } else {
        $session1value = $session1 . ' does not exist';
      }
      echo $session1value;
      
      $process = "./dyamicresults.php";
      include('../php_files/dbconnection.php');
      foreach($db->query('SELECT * FROM `projects`') as $h){
            $currentcount = $h['Pid'];
            echo $h['Name'];
          };
      $int = (int)$currentcount;
      $currentcount = $int;
      if($currentcount === 0){
        $currentcount = 0;
      }else{
        $currentcount++;
      }
      
      function padd(){
        $f = '<form action="<?php $process; ?>" method="post">
                <label for="ID">ID</label>
                <input id="ID" type="text" value="<?php echo $currentcount?>" readonly><br>
                <label for="nbame">Name</label>
                <input name="nname" id="nbame" type="text"><br>
                <input type="submit" name="add" id="Add" value="add">
              </form>
              
              <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if(isset($_POST["add"])){
                    if(!empty($_POST["nname"])){
                      echo $_POST["nname"];
                      $db->exec(\'INSERT INTO `projects`( `Name`) VALUES ("\'.$_POST["nname"].\'")\');
                    }

                  }
                }   
              ?>';
        return $f;
      }
//      foreach($db->query('SELECT * FROM `projects` Where 1 ') as $h){
//        echo "h";
//        if(!empty($h['`projects`'])){
//          echo "the truth";
//        };
//      }
    ?>
    <title></title>
    <script>
    
    </script>
  </head>
  <body>
    <?php
      
    
    ?>
    <form action="<?php $process; ?>" method="post">
      <label for="ID">ID</label>
      <input id="ID" type="text" value="<?php echo $currentcount?>" readonly><br>
      <label for="nname">Name</label>
      <input name="nname" id="nname" type="text"><br>
      <input type="submit" name="add" id="Add" value="add">
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["add"])){
          if(!empty($_POST["nname"])){
            echo $_POST["nname"];
            $db->exec('INSERT INTO `projects`( `Name`) VALUES ("'.$_POST["nname"].'")');
          }
         
        }
      }   
    ?>
  </body>
</html>
