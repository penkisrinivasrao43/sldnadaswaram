<?php
    session_start();
    include('config.php');
    
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
        if(isset($_GET['del']))
        {
            $id = $_GET["id"];
            $sql = "DELETE FROM contact_info WHERE id = '$id'";
            $result =mysqli_query($conn,$sql);
            header("location: view_footer_table.php");
        }
    }
?>