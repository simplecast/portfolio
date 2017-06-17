<!doctype html>
<html>
  <head>
    
    <?php
      $nname = " ";
      $imgname = " ";
      $descript = " ";
      $projdescript = " ";
      $placeholder = "";
      $placeholderdes = "";
      $isactive = "\"a\"";
      
      $int = 0;
      $currentcount = 0;
      $currentcount2id = 0;
      $arrcount = 0;
      $lifetime = 60 * 60 * 24 * 365; 
      session_set_cookie_params($lifetime, '/');
      session_start();
      $session1 = 'dynamicpage';
      if(isset($_POST["who"])){
        if(!empty($_POST["who"])){
          $_SESSION[$session1] = array();
          $session1value = $_POST["who"];
          $_SESSION[$session1][] = $session1value;
          
        }
      }
      if(isset($_POST["ids"])){
        if(!empty($_POST["ids"])){
          $session2value = $_POST["ids"];
          $_SESSION[$session1][] = $session2value;
        }
      }
      if(isset($_POST["ids2"])){
        if(!empty($_POST["ids2"])){
          $session3value = $_POST["ids2"];
          $_SESSION[$session1][] = $session3value;
        }
      }
      $arrcount =  count($_SESSION[$session1]);
      //echo $_SESSION[$session1][1];
      if (isset($_SESSION[$session1])) {
        $session1value = $_SESSION[$session1][0];
        if(isset($_SESSION[$session1][1]))
          $session2value = $_SESSION[$session1][1];
        if(isset($_SESSION[$session1][2]))
          $session3value = $_SESSION[$session1][2];
      } else {
        $session1value = $session1 . ' does not exist';
        if(isset($_SESSION[$session1][1]))
          $session2value = $session1 . ' does not exist';
        if(isset($_SESSION[$session1][2]))
          $session3value = $session1 . ' does not exist';
      }
      echo $session1value;
      if(isset($session2value))
        echo $session2value;
      if(isset($session2value))
        echo $session2value;
      
      $process = "./dynamicresults.php";
      include('../php_files/dbconnection.php');

      if(isset($session1value)){
        if(!empty($session1value)){
          if($session1value === "Padd"){
            foreach($db->query('SELECT * FROM `projects`') as $h){
              $currentcount = $h['Pid'];
              echo $h['Name'];
            };
            $int = (int)$currentcount;
            $currentcount = $int;
            if($currentcount === 0)
              $currentcount = 1;
            else
              $currentcount++;
            
          }
          else if($session1value === "Pup"){
            if(!empty($session2value)){
              $int = (int) $session2value;
              $currentcount = $int;
            }
            foreach($db->query('SELECT * FROM `projects` WHERE `Pid` ='."$currentcount") as $h){
              $placeholder = $h['Name'];
              $isactive = $h['Isactived'];
              //echo $h['Name'];
            };
          }
          else if($session1value === "Piadd"){
            foreach($db->query('SELECT * FROM `projectitems`') as $h){
              $currentcount = $h['Prid'];
             // echo $h['Name'];
            };
            $int = (int)$currentcount;
            $currentcount = $int;
            if($currentcount === 0)
              $currentcount = 1;
            else
              $currentcount++;
            $currentcount2id = $session2value;
            $int = (int)$currentcount2id;
            $currentcount2id =  $int;
            
            
            foreach($db->query('SELECT * FROM `projectitems` WHERE `Prid` ='."$currentcount".' AND `Pid` ='.$currentcount2id.'') as $h){
              $placeholder = $h['PrName'];
              echo $placeholder;
            };
          }
          else if($session1value === "Piup"){
            $int = (int)$session2value;
            $currentcount = $int;
            
            $currentcount2id = $session3value;
            $int = (int)$currentcount2id;
            $currentcount2id =  $int;
            
            
            foreach($db->query('SELECT * FROM `projectitems` WHERE `Prid` ='."$currentcount".' AND `Pid` ='.$currentcount2id.'') as $h){
              $placeholder = $h['PrName'];
              $placeholderdes = $h['Prdesc'];
              echo $placeholder;
            };
          }
          else if($session1value === "Psiadd"){
            foreach($db->query('SELECT * FROM `projectsubitems`') as $h){
              $currentcount = $h['Prsid'];
             // echo $h['Name'];
            };
            $int = (int)$session2value;
            $currentcount = $int;
            if($currentcount === 0)
              $currentcount = 1;
            else{
              if($session2value > $session2value+1){
                echo "here";
              }
              $currentcount++;
            }
          
            
            $currentcount2id = $session2value;
            $int = (int)$currentcount2id;
            $currentcount2id =  $int;
            
          }
          else if($session1value === "Psiup"){
            $int = (int)$session2value;
            $currentcount = $int;
            
            echo $currentcount;
            $currentcount2id = $session3value;
            $int = (int)$currentcount2id;
            $currentcount2id =  $int;
            
            
            foreach($db->query('SELECT * FROM `projectsubitems` WHERE `Psrid` ='."$currentcount".' AND `Prid` ='.$currentcount2id.'') as $h){
              $placeholder = $h['PrName'];
              $placeholderdes = $h['Prdesc'];
              echo $placeholder;
            };
          }
        }
      }
      
      function padd(){
        global $currentcount;
        global $process;
        global $nname;
        $f = '<form action="'."$process".'" method="post">
                <label for="ID">ID</label>
                <input id="ID" type="text" value='."$currentcount".' readonly><br>
                <label for="nbame">Name</label>
                <input name="nname" id="nbame" type="text" value="'."$nname".'"><br>
                <input type="submit" name="padd" id="Add" value="add">
                <input type="submit" name="done" id="Done" value="Done">
              </form>';
        return $f;
      }
      function pup(){
        global $currentcount;
        global $process;
        global $placeholder;
        global $isactive;
        
        $f = '<form action="'."$process".'" method="post">
                <label for="ID">ID</label>
                <input id="ID" type="text" value='."$currentcount".' readonly><br>
                <label for="nbame">Name</label>
                <input name="nname" id="nbame" type="text" placeholder="'.$placeholder.'" ><br>
                <label for="isact">IsActive</label>
                <input id="isact" type="checkbox" name="isact" value="'.$isactive.'"><br>
                <input type="submit" name="update" value="update">
                <input type="submit" name="done" id="Done" value="Done">
              </form>';
        return $f;
      }
      function piadd(){
        global $currentcount;
        global $process;
        global $nname;
        global $descript;
        global $currentcount2id;
        $f = '<form action="'."$process".'" method="post">
                <label for="ID2">Project ID</label>
                <input id="ID2" type="text" value='."$currentcount2id".' readonly><br>
                <label for="ID">Project Item ID</label>
                <input id="ID" type="text" value='."$currentcount".' readonly><br>
                <label for="nbame">Name</label>
                <input name="nname" id="nbame" type="text" value="'."$nname".'"><br>
                <label for="des">Description</label><br>
                <textarea name="desc" id="des" type="text" value="'."$descript".'"></textarea><br>
                <input type="submit" name="piadd" id="Add" value="add">
                <input type="submit" name="done" id="Done" value="Done">
                <input id="isact" type="checkbox" name="isact"  hidden><br>
              </form>';
        return $f;
      }
      function piup(){
        global $currentcount;
        global $process;
        global $nname;
        global $placeholder;
        global $descript;
        global $placeholderdes;
        global $currentcount2id;
        $f = '<form action="'."$process".'" method="post">
                <label for="ID2">Project ID</label>
                <input id="ID2" type="text" value='."$currentcount2id".' readonly><br>
                <label for="ID">Project Item ID</label>
                <input id="ID" type="text" value='."$currentcount".' readonly><br>
                <label for="nbame">Name</label>
                <input name="nname" id="nbame" type="text" placeholder="'.$placeholder.'"><br>
                <label for="des">Description</label><br>
                <textarea name="desc" id="des" type="text" placeholder="'.$placeholderdes.'"></textarea><br>
                <input type="submit" name="piup" id="Add" value="Update">
                <input type="submit" name="done" id="Done" value="Done">
                <input id="isact" type="checkbox" name="isact"  hidden><br>
              </form>';
        return $f;
      }
     function psiadd(){
        global $currentcount;
        global $process;
        global $nname;
        global $imgname;
        global $placeholder;
        global $descript;
        global $projdescript;
        global $placeholderdes;
        global $currentcount2id;
        $f = '<form enctype="multipart/form-data" action="'."$process".'" method="post">
                <label for="ID2">Project ID</label>
                <input id="ID2" type="text" value='."$currentcount2id".' readonly><br>
                <label for="ID">Project Subitem ID</label>
                <input id="ID" type="text" value='."$currentcount".' readonly><br>
                <label for="nbame">Image Location</label>
                <input name="nname" id="nbame" type="text" value="'."$nname".'"><br>
                <label for="nbame">Image Location</label>
                <input name="imgfile" id="imgfile" type="file" value="'."$imgname".'" ><br>
                <label for="des">Projedct content</label><br>
                <input name="desc" id="des" type="text" value="'."$descript".'"><br>
                <label for="descfile">Projedct content</label><br>
                <input name="descfile" id="descfile" type="file" value="'."$projdescript".'"><br>
                <input type="submit" name="psiadd" id="Add" value="add">
                <input type="submit" name="done" id="Done" value="Done">
                <input id="isact" type="checkbox" name="isact"  hidden><br>
              </form>';
        return $f;
      }
      function psiup(){
        global $currentcount;
        global $process;
        global $nname;
        global $placeholder;
        global $descript;
        global $placeholderdes;
        global $currentcount2id;
        $f = '<form action="'."$process".'" method="post">
                <label for="ID">ID</label>
                <input id="ID" type="text" value='."$currentcount".' readonly><br>
                <label for="ID2">Project ID</label>
                <input id="ID2" type="text" value='."$currentcount2id".' readonly><br>
                <label for="nbame">Image Location</label>
                <input name="nname" id="nbame" type="text" placeholder="'.$placeholder.'"><br>
                <label for="des">Projedct content</label><br>
                <textarea name="desc" id="des" type="text" placeholder="'.$placeholderdes.'"></textarea><br>
                <input type="submit" name="psiup" id="Add" value="Update">
                <input type="submit" name="done" id="Done" value="Done">
                <input id="isact" type="checkbox" name="isact"  hidden><br>
              </form>';
        return $f;
      }  
//      foreach($db->query('SELECT * FROM `projects` Where 1 ') as $h){
//        echo "h";
//        if(!empty($h['`projects`'])){
//          echo "the truth";
//        };
//      }   
      $fieldnotempty = false;
      $fieldnotempty2 = false;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if(isset($_POST["padd"])){
          if(!empty($_POST["nname"])){
            echo $_POST["nname"];
            $db->exec('INSERT INTO `projects`( `Name`) VALUES ("'.$_POST["nname"].'")');
          }
         $_POST["nname"] = "";
        }
        if(isset($_POST["update"])){
          
          if(!empty($_POST["nname"])){
            //echo $_POST["nname"];
            try{
              $db->exec('UPDATE `projects` SET `Name`="'.$_POST["nname"].'" WHERE `Pid` = "'.$currentcount.'"');
            }catch (PDOExcetoption $e){
              echo $e->getMessage();
            }
            
          }
          
          $_POST["nname"] = "";
          echo $isactive;
          if(isset($_POST["isact"])){
            echo "here";
            $db->exec('UPDATE `projects` SET `Isactived` = "'."true".'" WHERE `projects`.`Pid` = '.$currentcount.'');
          }else{
            echo "there";
            $db->exec('UPDATE `projects` SET `Isactived` = "'."false".'" WHERE `projects`.`Pid` = '.$currentcount.'');
          }
          foreach($db->query('SELECT * FROM `projects` WHERE `Pid` ='."$currentcount") as $h){
            $placeholder = $h['Name'];
            $isactive = $h['Isactived'];        
          };
        }
        if(isset($_POST["done"])){
          header('Location: ./adminpage.php');
        }
        if(isset($_POST["piadd"])){
          if(!empty($_POST["nname"])){
            echo $_POST["nname"];
            $fieldnotempty = true;
          }
          if(!empty($_POST["desc"])){
            echo $_POST["desc"];
            $fieldnotempty2 = true;
            
          }
          if($fieldnotempty2===true && $fieldnotempty===true){
            $db->exec('INSERT INTO `projectitems`( `Pid`,`PrName`, `Prdesc`) VALUES ("'.$currentcount2id.'","'.$_POST["nname"].'","'.$_POST["desc"].'")');
            
          }
         $_POST["nname"] = "";
        }
        if(isset($_POST["piup"])){
          if(!empty($_POST["nname"])){
            echo $_POST["nname"];
            $fieldnotempty = true;
          }
          if(!empty($_POST["desc"])){
            echo $_POST["desc"];
            $fieldnotempty2 = true;
            
          }
          if($fieldnotempty2===true && $fieldnotempty===true){
            
            $db->exec('UPDATE `projectitems` SET `PrName`="'.$_POST["nname"].'", `Prdesc` = "'.$_POST["desc"].'" WHERE `Prid` = "'.$currentcount.'" AND Pid="'.$currentcount2id.'"');
          }
          foreach($db->query('SELECT * FROM `projectitems` WHERE `Prid` ='."$currentcount".' AND `Pid` ='.$currentcount2id.'') as $h){
              $placeholder = $h['PrName'];
              $placeholderdes = $h['Prdesc'];
              echo $placeholder;
            };
         $_POST["nname"] = "";
        }
        if(isset($_POST["psiadd"])){
          if(!empty($_POST["nname"])){
            echo $_POST["nname"];
            $fieldnotempty = true;
          }
          if(!empty($_POST["desc"])){
            echo $_POST["desc"];
            $fieldnotempty2 = true;
            
          }
          
            $nname = uploadImg();
            $descript = uploadFile();
            
          if($fieldnotempty || $fieldnotempty2 ){
            $db->exec('INSERT INTO `projectsubitems`(`Prid`,`Imgs_Loc`,`Project`) VALUES ("'.$currentcount2id.'","'.$nname.'","'.$descript.'")');
          }
          
        // $_POST["nname"] = "";
          $imgname = "";
          //$nname = "";
          $projdescript = "";
         // $descript = "";
//          $_POST["imgfile"] = "";
//          $_POST["descfile"] = "";
        }
        
      } 
    function uploadImg(){
      $target_dir = "../assets/images/";
          $target_file = $target_dir . basename($_FILES["imgfile"]["name"]);
          $uploadOk = 1;
          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          // Check if image file is a actual image or fake image
          if(!empty(getimagesize($_FILES["imgfile"]["tmp_name"]))){
            $check = getimagesize($_FILES["imgfile"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["imgfile"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["imgfile"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
          }
      return $target_file;
    }   
    function uploadFile(){
      $target_dir = "../assets/projects/";
        $filename = basename($_FILES["descfile"]["name"]);
        $newname = str_replace(array(".cpp",".php",".html",".vb",".cs","jsl",".jar"),".txt",$filename);
        
          $target_file = $target_dir . $filename;
          $uploadOk = 1;
          $projectFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          // Check if image file is a actual image or fake image
          
          $check = filesize($_FILES["descfile"]["tmp_name"]);
          if($check !== false) {
              echo "File is an file - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an file.";
              $uploadOk = 0;
          }

          // Check if file already exists
          if (file_exists($target_file)) {
              echo "Sorry, file already exists.";
              $uploadOk = 0;
          }
          // Check file size
          if ($_FILES["descfile"]["size"] > 500000) {
              echo "Sorry, your file is too large.";
              $uploadOk = 0;
          }
          // Allow certain file formats
          if($projectFileType != "txt" && $projectFileType != "cpp" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
          }
          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
              if (move_uploaded_file($_FILES["descfile"]["tmp_name"], $target_file.".txt")) {
                  echo "The file ". basename( $_FILES["imgfile"]["name"]). " has been uploaded.";
              } else {
                  echo "Sorry, there was an error uploading your file.";
              }
          }
      return $target_file.".txt";
    }
      
    ?>
    <title></title>
    <script type="text/javascript">
      var isactive = <?php echo $isactive; ?>;
    </script>
  </head>
  <body>
    <?php
      if(isset($session1value)){
        if(!empty($session1value)){
          if($session1value === "Padd")
            echo padd();
          else if($session1value === "Pup"){
            echo pup();
          }else if($session1value === "Piadd"){
            echo piadd();
          }else if($session1value === "Piup"){
            echo piup();
          }else if($session1value === "Psiadd"){
            echo psiadd();
          }else if($session1value === "Psiup"){
            echo psiup();
          }
        }
        
      }
    ?>

<!--
    <form action="<?php $process; ?>" method="post">
      <label for="ID">ID</label>
      <input id="ID" type="text" value="<?php echo $currentcount?>" readonly><br>
      <label for="nname">Name</label>
      <input name="nname" id="nname" type="text"  placeholder="<?php echo $placeholder;?>" autocomplete="off"><br>
      <label for="isact">IsActive</label>
      <input id="isact" type="checkbox" name="isact" value="<?php echo $isactive;?>"><br>
      <input type="submit" name="update" value="update">
      
    </form>
-->
    <script type="text/javascript">
      isactive = <?php echo $isactive; ?>;
      var pch =  document.getElementById('isact');
      if(isactive ===  true){
        pch .checked= isactive;
      }else{
        pch .checked= isactive;
      }

    
    </script>
   
  </body>
</html>
