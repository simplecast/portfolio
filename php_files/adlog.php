<script type="text/javascript"> 
  adlog = "<?php foreach($db->query("SELECT * FROM `admin` WHERE 1") as $row){
        echo $row['ADopenPhrase'];}?>";
  adlog = window.btoa(adlog);
</script>
