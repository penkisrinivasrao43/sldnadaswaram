<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
        
        if(isset($_GET['yes']))
        {   
            $id = $_GET["id"];
            include('config.php');
            $sql ="DELETE FROM sliders where id = '$id'";
            $result = mysqli_query($conn,$sql);
            header("location: view_sliders.php");
        }
?>
<?php include "header.php"; ?>
<article class="content responsive-tables-page">
    <div class="title-block">
        <h1 class="title"> View Sliders </h1>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Sliders in Tabular Form</h3>
                        </div>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tblUser">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Slider Image</th>
                                            <th>Slider Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                            include('config.php');
	                                        $sql = "SELECT * FROM sliders" ;
	                                        $result = mysqli_query($conn,$sql);
	                                        $cnt = 1;
	                                        while($row = mysqli_fetch_array($result)){
	                                    ?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt++);?></td>
                                            <td class="text-center">
                                            	<img src="uploads/sliders/<?php echo htmlentities($row['slidername']);?>" width="100px" height="100px"></td>
                                            <td><?php echo ($row['slidername']);?></td>
                                            <td class="item-actions-block">
                                                <a class="remove" href="view_sliders.php?id=<?php echo $row['id'];?>&yes=delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                    	<?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<?php include "footer.php";?>
<?php } ?>