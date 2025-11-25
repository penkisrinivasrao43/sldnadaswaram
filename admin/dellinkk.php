 <?php
  $id = $_GET["id"];
  include 'config.php';
            $sql = "DELETE FROM youtube WHERE id = '$id'";
            $result =mysqli_query($conn,$sql) or die('sadas');
           header("location: view_youtube_link.php");
            ?>