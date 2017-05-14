<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['adlogsub'])){

    }
  }

  foreach($db->query('SELECT `Logged_on` FROM `admin` WHERE 1') as $h){
    echo $h['Logged_on'];
  };
  
  //echo $db->exec('SELECT `Adid` FROM `admin` WHERE 1');


  
 // print( $db->exec('SELECT `Adid` FROM `admin` WHERE `Adid` = 0'));
  /*echo $logg;
    if($logg === true){
      $logg = "here";
    }else{
      $logg = "there";
    };
*/
?>
<script type="text/javascript">
  adlog = "<?php echo $logg?>";
  alert("<?php echo $logg?>");
</script>
