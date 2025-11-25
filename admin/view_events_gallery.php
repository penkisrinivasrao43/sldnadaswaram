<?php
    session_start();
    include('config.php');
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
        if(isset($_GET['del']))
        {
            $id = $_GET["id"];
            $sql = "DELETE FROM events WHERE id = '$id'";
            $result =mysqli_query($conn,$sql);
            header("location: view_events_gallery.php");
        }
?>

<?php include "header.php"; ?>
	<article class="content responsive-tables-page">
	    <div class="title-block">
	        <h1 class="title"> View Services Information</h1>
	    </div>

	    <section class="section">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="card">
	                    <div class="card-block">
	                        <div class="card-title-block">
	                            <h3 class="title"> Services in Tabular Form</h3>
	                        </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tblUser">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                             <th>Image Name</th>
                                            <!--<th>Content</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
	                                        $sql = "SELECT * FROM events" ;
	                                        $result = mysqli_query($conn,$sql);
	                                        $cnt = 1;
	                                        while($row = mysqli_fetch_array($result)){
	                                    ?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt++);?></td>
                                            <td class="text-center">
                                                <img alt="Service 1" src="uploads/gallery/events/<?php echo htmlentities($row['images']);?>" style="height: 60px;" />
                                            </td>
                                             <td><?php echo ($row['imagename']);?></td>
                                           
                                            <td class="item-actions-block">
                                                <a class="remove" href="view_events_gallery.php?id=<?php echo $row['id'];?>&del=delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>&nbsp;
                                                <!-- <a class="edit" href="edit.php?id=<?php //echo $row['id']?>">
                                                    <i class="fa fa-pencil"></i>
                                                </a> -->
                                            </td>
                                        </tr><?php }?>
                                    </tbody>
                                </table>
                            </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	</article>

<?php include "footer.php"; ?>
<?php } ?>