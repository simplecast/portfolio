<script type="text/javascript">
 
</script>
<?php
    echo $db->exec('SELECT `Adid`, `Logged_on` FROM `admin` WHERE 1');
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST['adlogsub'])){
       
      }
    }
  
  ?>