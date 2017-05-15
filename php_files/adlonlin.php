<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['adlogsub'])){
      header("Loction: admin/login.php");
    }
  }
  $logg;
  foreach($db->query('SELECT `Logged_on` FROM `admin` WHERE 1') as $h){
    $logg = $h['Logged_on'];
  };
  echo $logg;
  if($logg === "1"){
    //$logg = "here";
  }else{
    //$logg = "there";
  }
  print(gettype($logg));
?>
<script type="text/javascript">
  loggedon = <?php echo $logg?>;
  
  
</script>
