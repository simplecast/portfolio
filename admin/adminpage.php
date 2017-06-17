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
      $pid = array();
      $arry = [["Padd","Pup","Pdel",
                    "Piadd","Piup","Pidel",
                    "Psiadd","Psiup","Psidel",
                    "Cadd","Cup","Cdel",
                    "Ciadd","Ciup","Cidel",
                    "Csiadd","Csiup","Csidel"
                ]];
      foreach($db->query("Select `Pid` FROM `projects` WHERE 1") as $h){
          array_push($pid,$h["Pid"]); 
      }
      //echo $pid[1];
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
      body{
        height: 100%;
        
      }
      table {
        border-collapse: collapse;
/*        display: table;     */
      }
      fieldset{
          
      }
      form{
       
      }
      table, th, td {
        border: 1px solid black;
        
      }
      tr{
        display: table-row;
      }
/*
      th{
        display:table-row;
        width: auto;
      }
      td{
        display: table-row;
      }
*/
    </style>
    <script type="text/javascript" src="../javascript/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../javascript/jquery.redirect.js"></script>
  </head>
  <body>
    <form action="<?php $pprocess?>" method="post" onsubmit="javascript: return false; ">
      <fieldset>
        <legend>Projects</legend>
        <input name="add" class="Padd" type="submit" value="Add">

        <table>
          <tr>
            <th>ID</th>
            <th>Name</th>
          </tr>
          <?php
            foreach($db->query('SELECT * FROM `projects`') as $h){
            echo"<tr><td>".$h['Pid']."</td>";
            echo"<td>".$h['Name']."</td>";
            echo"<td>".$h['Isactived']."</td>
              <td>
                <input name=\"update\" class=\"Pup\" type=\"submit\" data-id=\"".$h['Pid']."\" value=\"update\">
              </td>
              <td>
                <input name=\"add\" class=\"Piadd\" type=\"submit\" data-id=\"".$h['Pid']."\" value=\"Add To Project Item\">
              </td>
            </tr>";
          };

          ?>
        </table>
      </fieldset>
    </form>
    <form action="<?php $piprocess?>" method="post" onsubmit="javascript: return false;">
      <fieldset>
        <legend>Project Item</legend>
<!--        <input name="add" class="Piadd" type="submit" value="Add">-->
        <table>
          <tr>
            <th>Procject Id</th>
            <th>Procject Item Id</th>
            <th>Project Name</th>
            <th>Project Description</th>
          </tr>
          <?php
            foreach($db->query('SELECT * FROM `projectitems`') as $h){
            echo"<tr><td>".$h['Pid']."</td>";
            echo"<td>".$h['Prid']."</td>";
            echo"<td>".$h['PrName']."</td>";
            echo"<td>".$h['Prdesc']."</td>
            <td><input name=\"update\" class=\"Piup\" type=\"submit\" data-id=\"".$h['Prid']."\" data-id2=\"".$h['Pid']."\" value=\"update\"></td>
            <td><input name=\"add\" class=\"Psiadd\" type=\"submit\" data-id=\"".$h['Prid']."\" data-id2=\"".$h['Pid']."\"  value=\"Add To Project Subitems\"></td>
            </tr>";
          };?>
        </table>
      </fieldset>
    </form>
    <form action="<?php $psiprocess?>" method="post" onsubmit="javascript: return false;">
      <fieldset>
        <legend>Project subitems</legend>
        
        <table>
          <tr>
            <th>Procject item Id</th>
            <th>Procject subitems Id</th>
            <th>Images Location</th>
            <th>Items</th>
          </tr>
          <?php
              foreach($db->query('SELECT * FROM `projectsubitems`') as $h){
              echo"<tr><td>".$h['Prid']."</td>";
              echo"<td>".$h['Prsid']."</td>";
              echo"<td>".$h['Imgs_Loc']."</td>";
              echo"<td>".$h['Project']."</td>
              <td><input name=\"update\" class=\"Psiup\" type=\"submit\" data-id=\"".$h['Prsid']."\" data-id2=\"".$h['Prid']."\" value=\"update\"></td></tr>";
            };?>
        </table>
      </fieldset>
    </form>
    
    <form action="<?php $cprocess?>" method="post" onsubmit="javascript: return false;">
      <fieldset>
        <legend></legend>Codes table
        <input name="add" class="Cadd" type="submit" value="Add">

        <table>
          <tr>
            <th>CID</th>
            <th>Name</th>
            <th>Image Location</th>
          </tr>
          <?php
              foreach($db->query('SELECT * FROM `codes`') as $h){
              echo"<tr><td>".$h['Cid']."</td>";
              echo"<td>".$h['Name']."</td>";
              echo"<td>".$h['Img_Loc']."</td>
              <td><input name=\"update\" class=\"Cup\" type=\"submit\" value=\"update\"></td></tr>";
            };?>
        </table>
      </fieldset>
    </form>
    
    <form action="<?php $ciprocess?>" method="post" onsubmit="javascript: return false;">
      <fieldset>
        Codes items table
        <input name="add" class="Ciadd" type="submit" value="Add">
        <table>
          <tr>
            <th>CIID</th>
            <th>CID</th>
            <th>Name</th>
            <th>Code Desc</th>
          </tr>
          <?php
              foreach($db->query('SELECT * FROM `codeitems`') as $h){
              echo"<tr><td>".$h['Ciid']."</td>";
              echo"<td>".$h['Cid']."</td>";
              echo"<td>".$h['CName']."</td>";
              echo"<td>".$h['Cdesc']."</td>
              <td><input name=\"update\" class=\"Ciup\" type=\"submit\" value=\"update\"></td></tr>";
            };?>
        </table>
      </fieldset>
    </form>
    <form action="<?php $csiprocess?>" method="post" onsubmit="javascript: return false;">
      <fieldset>
        Codes subitems table
        <input name="add" class="Csiadd" type="submit" value="Add">

        <table>
          <tr>
            <th>CSIID</th>
            <th>CIID</th>
            <th>CID</th>
            <th>Code</th>
          </tr>
          <?php
              foreach($db->query('SELECT * FROM `codesubitems`') as $h){
              echo"<tr><td>".$h['Cid']."</td>";
              echo"<td>".$h['Cid']."</td>";
              echo"<td>".$h['Cid']."</td>";
              echo"<td>".$h['Code']."</td>
              <td><input name=\"update\" class=\"Csiup\"  type=\"submit\" value=\"update\"></td></tr>";
            };?>
        </table>
      </fieldset>
    </form>
    
    <script type="text/javascript">
      
      for(var i in idarry){
       // console.log(idarry[i]);
       
        for(var j=0 ; j <= getfindByClass(idarry[i]).length; j++){
            
            if(getfindByClass(idarry[i])[j] != undefined){
              
              getfindByClass(idarry[i])[j].addEventListener('click',function(e){
          
          switch(e.target.className){
          
            case("Padd") :{
              $.redirect('./dynamicresults.php',{who:""+e.target.className+""},"POST","_self");
              break;
            }case("Pup") :{
              $.redirect('./dynamicresults.php',
                         {who:""+e.target.className+"", ids:""+e.target.getAttribute('data-id')+""},
                         "POST","_self");
              break;
            }case("Piadd") :{
              $.redirect('./dynamicresults.php',
                         {who:""+e.target.className+"", ids:""+e.target.getAttribute('data-id')+""},
                         "POST","_self");
              break;
            }case("Piup") :{
              $.redirect('./dynamicresults.php',
                         {who:""+e.target.className+"", ids:""+e.target.getAttribute('data-id')+"", ids2:""+e.target.getAttribute('data-id2')+""},
                         "POST","_self");
              break;
            }case("Psiadd") :{
              $.redirect('./dynamicresults.php',
                         {who:""+e.target.className+"", ids:""+e.target.getAttribute('data-id')+"", ids2:""+e.target.getAttribute('data-id2')+""},
                         "POST","_self");
              break;
            }case("Psiup") :{
              $.redirect('./dynamicresults.php',
                         {who:""+e.target.className+"", ids:""+e.target.getAttribute('data-id')+"", ids2:""+e.target.getAttribute('data-id2')+""},
                         "POST","_self");
              break;
            }case("Cadd") :{
              break;
            }case("Cup") :{
              break;
            }case("Ciadd") :{
              break;
            }case("Ciup") :{
              break;
            }case("Csiadd") :{
              break;
            }case("Csiup") :{
              break;
            }
          }
            
        });
          }
        }
      }

      
      
      function getfindbyid(id){
        var doc = document.getElementById(id);
        return doc;
      }
      function getfindByClass(clas){
        var doc = document.getElementsByClassName(clas);
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