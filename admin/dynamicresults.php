<!doctype html>
<html>
  <head>
    
    <?php
      echo $_POST["who"];
      $process = "./dyamicresults.php";
      include('../php_files/dbconnection.php');
      $db->exec('Use digisoul_portfolio;');
      $currentcount = $db->exec('select count(pid) from projects');
      $int = (int)$currentcount;
      $currentcount = $int;
      function padd(){
        $f = "<form";
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
      <label for="Name">Name</label>
      <input name="Name" id="Name" type="text"><br>
      <input type="submit" name="add" id="Add" value="add">
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["add"])){
          if(!empty($_POST["Name"])){
            echo "here";;
          }
          //$db->exec('INSERT INTO `projects`(`Name`) VALUES ()');
        }
      }
    
    
    ?>
  </body>
</html>
