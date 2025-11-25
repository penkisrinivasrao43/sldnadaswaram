<?php
    session_start();
    include('config.php');
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
        if(isset($_GET['del']))
        {
            $id = $_GET["id"];
            $sql = "DELETE FROM services WHERE id = '$id'";
            $result =mysqli_query($conn,$sql);
            header("location: view_services.php");
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
                                            <th>Cover Image</th>
                                            <th>Service Name</th>
                                            <th>Content</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
	                                        $sql = "SELECT * FROM services" ;
	                                        $result = mysqli_query($conn,$sql);
	                                        $cnt = 1;
	                                        while($row = mysqli_fetch_array($result)){
	                                    ?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt++);?></td>
                                            <td class="text-center">
                                                <img alt="Service 1" src="uploads/services/<?php echo htmlentities($row['cover_image']);?>" style="height: 100px;" />
                                            </td>
                                            <td><?php echo ($row['service_name']);?></td>
                                            <td><?php echo ($row['content']);?></td>
                                            <td class="item-actions-block">
                                                <a class="remove" href="view_services.php?id=<?php echo $row['id'];?>&del=delete">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>&nbsp;
                                                <a class="edit" href="edit.php?id=<?php echo $row['id']?>">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
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