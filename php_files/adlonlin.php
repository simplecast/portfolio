<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['adlogsub'])){

    }
  }
  $logg;
  foreach($db->query('SELECT `Logged_on` FROM `admin` WHERE 1') as $h){
    $logg = $h['Logged_on'];
  };
  echo $logg;
  if($logg === "1"){
    $logg = "here";
  }else{
    $logg = "there";
  }
?>
<script type="text/javascript">
  adlog = "<?php echo $logg?>";
  alert("<?php echo $logg?>");
</script>
