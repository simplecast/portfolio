<!doctype html>
<html>
  <head>
    <title>Admin</title>
    <?php
      include('../php_files/dbconnection.php');   
    ?>
    <style>
      table {
          border-collapse: collapse;
      }

      table, th, td {
          border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <form>
      <fieldset>
        <legend>Projects</legend>
        <input name="add" type="submit" value="Add">
        <input name="update" type="submit" value="update">
        <input name="delete" type="submit" value="delete">

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
    <form>
      <fieldset>
        Project Item
        <input name="add" type="submit" value="Add">
        <input name="update" type="submit" value="update">
        <input name="delete" type="submit" value="delete">

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
    <form>
      <fieldset>
        Project subitems
        <input name="add" type="submit" value="Add">
        <input name="update" type="submit" value="update">
        <input name="delete" type="submit" value="delete">

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
    
    <form>
      <fieldset>
        Codes table
        <input name="add" type="submit" value="Add">
        <input name="update" type="submit" value="update">
        <input name="delete" type="submit" value="delete">

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
    
    <form>
      <fieldset>
        Codes items table
        <input name="add" type="submit" value="Add">
        <input name="update" type="submit" value="update">
        <input name="delete" type="submit" value="delete">

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
    <form>
      <fieldset>
        Codes subitems table
        <input name="add" type="submit" value="Add">
        <input name="update" type="submit" value="update">
        <input name="delete" type="submit" value="delete">

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
  </body>

</html>