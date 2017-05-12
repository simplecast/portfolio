<script type="text/javascript">
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST['adlogsub'])){
        if(isset($_POST['adlogin'])== newo){
          header('Location: ./admin/login.php');
        }
      }
    }
  
  ?>
</script>