<!doctype html>
<html>
  <head>
    <title>Admin</title>
    <?php
      include('../php_files/dbconnection.php');
      $pprocess;
      $piprocess;
      $psiprocess;
      $cprocess;
      $ciprocess;
      $csiprocess;
      
      $arry = [["Padd","Pup","Pdel",
                    "Piadd","Piup","Pidel",
                    "Psiadd","Psiup","Psidel",
                    "Cadd","Cup","Cdel",
                    "Ciadd","Ciup","Cidel",
                    "Csiadd","Csiup","Csidel"
                ]];
    
      function validate(){
        global $pprocess;
        global $piprocess;
        global $psiprocess;
        global $cprocess;
        global $ciprocess;
        global $csiprocess;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
          
        }
        
      }
    ?>
    <script type="text/javascript">
      var idarry = ["Padd","Pup","Pdel",
                    "Piadd","Piup","Pidel",
                    "Psiadd","Psiup","Psidel",
                    "Cadd","Cup","Cdel",
                    "Ciadd","Ciup","Cidel",
                    "Csiadd","Csiup","Csidel"
                   ];
    
    </script>
    <style>
      table {
          border-collapse: collapse;
      }

      table, th, td {
          border: 1px solid black;
      }
    </style>
    <script type="text/javascript" src="../javascript/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../javascript/jquery.redirect.js"></script>
  </head>
  <body>
    <form action="<?php $pprocess?>" method="post" onsubmit="php:; ">
      <fieldset>
        <legend>Projects</legend>
        <input name="add" id="Padd" type="submit" value="Add">
        <input name="update" id="Pup" type="submit" value="update">
        <input name="delete" id="Pdel" type="submit" value="delete">

        <table>
          <th>ID</th>
          <th>Name</th>
          <?php
            foreach($db->query('SELECT * FROM `projects`') as $h){
            echo"<td>".$h['Pid']."</td>";
            echo"<td>".$h['Name']."</td>";
          };

          ?>
        </table>
      </fieldset>
    </form>
    <form action="<?php $piprocess?>" method="post" >
      <fieldset>
        <legend>Project Item</legend>
        <input name="add" id="Piadd" type="submit" value="Add">
        <input name="update" id="Piup" type="submit" value="update">
        <input name="delete" id="Pidel" type="submit" value="delete">

        <table>
          <th>Procject Item Id</th>
          <th>Procject Id</th>
          <th>Project Name</th>
          <th>Project Description</th>
          <?php
            foreach($db->query('SELECT * FROM `projectitems`') as $h){
            echo"<td>".$h['Prid']."</td>";
            echo"<td>".$h['Pid']."</td>";
            echo"<td>".$h['PrName']."</td>";
            echo"<td>".$h['Prdesc']."</td>";
          };?>
        </table>
      </fieldset>
    </form>
    <form action="<?php $psiprocess?>" method="post" >
      <fieldset>
        <legend>Project subitems</legend>
        <input name="add" id="Psiadd" type="submit" value="Add">
        <input name="update" id="Psiup" type="submit" value="update">
        <input name="delete" id="Psidel" type="submit" value="delete">

        <table>
          <th>Procject subitems Id</th>
          <th>Procject item Id</th>
          <th>Procject Id</th>
          <th>Images Location</th>
          <th>Items</th>
          <?php
              foreach($db->query('SELECT * FROM `projectsubitems`') as $h){
              echo"<td>".$h['Prsid']."</td>";
              echo"<td>".$h['Prid']."</td>";
              echo"<td>".$h['Pid']."</td>";
              echo"<td>".$h['Imgs_Loc']."</td>";
              echo"<td>".$h['Project']."</td>";
            };?>
        </table>
      </fieldset>
    </form>
    
    <form action="<?php $cprocess?>" method="post">
      <fieldset>
        <legend></legend>Codes table
        <input name="add" id="Cadd" type="submit" value="Add">
        <input name="update" id="Cup" type="submit" value="update">
        <input name="delete" id="Cdel" type="submit" value="delete">

        <table>
          <th>CID</th>
          <th>Name</th>
          <th>Image Location</th>
          <?php
              foreach($db->query('SELECT * FROM `codes`') as $h){
              echo"<td>".$h['Cid']."</td>";
              echo"<td>".$h['Name']."</td>";
              echo"<td>".$h['Img_Loc']."</td>";
            };?>
        </table>
      </fieldset>
    </form>
    
    <form action="<?php $ciprocess?>" method="post">
      <fieldset>
        Codes items table
        <input name="add" id="Ciadd" type="submit" value="Add">
        <input name="update" id="Ciup" type="submit" value="update">
        <input name="delete" id="Cidel" type="submit" value="delete">

        <table>
          <th>CIID</th>
          <th>CID</th>
          <th>Name</th>
          <th>Code Desc</th>
          <?php
              foreach($db->query('SELECT * FROM `codeitems`') as $h){
              echo"<td>".$h['Ciid']."</td>";
              echo"<td>".$h['Cid']."</td>";
              echo"<td>".$h['CName']."</td>";
              echo"<td>".$h['Cdesc']."</td>";
            };?>
        </table>
      </fieldset>
    </form>
    <form action="<?php $csiprocess?>" method="post">
      <fieldset>
        Codes subitems table
        <input name="add" id="Csiadd" type="submit" value="Add">
        <input name="update" id="Csiup"  type="submit" value="update">
        <input name="delete" id="Csidel" type="submit" value="delete">

        <table>
          <th>CSIID</th>
          <th>CIID</th>
          <th>CID</th>
          <th>Code</th>
          <?php
              foreach($db->query('SELECT * FROM `codesubitems`') as $h){
              echo"<td>".$h['Cid']."</td>";
              echo"<td>".$h['Cid']."</td>";
              echo"<td>".$h['Cid']."</td>";
              echo"<td>".$h['Code']."</td>";
            };?>
        </table>
      </fieldset>
    </form>
    
    <script type="text/javascript">
      
      for(var i in idarry){
        console.log(idarry[i]);
        getfindbyid(idarry[i]).addEventListener('click',function(e){
          
          switch(e.target.id){
          
            case("Padd") :{
              $.redirect('./dynamicresults.php',{who:""+e.target.id+""},"POST","_self");
              alert(e.target.id);
              break;
            }case("Pup") :{
              break;
            }case("Pdel") :{
              break;
            }case("Piadd") :{
              break;
            }case("Piup") :{
              break;
            }case("Pidel") :{
              break;
            }case("Psiadd") :{
              break;
            }case("Psiup") :{
              break;
            }case("Psidel") :{
              break;
            }case("Cadd") :{
              break;
            }case("Cup") :{
              break;
            }case("Cdel") :{
              break;
            }case("Ciadd") :{
              break;
            }case("Ciup") :{
              break;
            }case("Cidel") :{
              break;
            }case("Csiadd") :{
              break;
            }case("Csiup") :{
              break;
            }case("Csidel") :{
              break;
            }
          }
        });
      }

      
      
      function getfindbyid(id){
        var doc = document.getElementById(id);
        return doc;
      }
      function addidtoarray(obj){
        idarry.push(obj);
      }
    
    </script>
    <?php
      
    
    ?>
  </body>

</html>