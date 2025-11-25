<?php
	$id = $_GET["id"];
	include 'config.php';

    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
    	if(isset($_POST['update'])){
    		$id = $_POST["id"];
        	$service_name = $_POST['service_name'];
        	$content = $_POST['content'];
    		$sql = "UPDATE services SET `service_name`='$service_name', `content`='$content' WHERE id = '$id'";
			$result =mysqli_query($conn,$sql);
	        header("location: view_services.php");
	    }
?>
<?php include "header.php"; ?>
<article class="content dashboard-page">
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-6">
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title"> Add Your Services </h3>
                    </div>
                    <?php if(isset($_POST['submit']))
                        {?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                    </div>
                    <?php } ?>

                    <?php
                     	$sql ="SELECT * FROM services WHERE id='$id'";
                     	$query=mysqli_query($conn,$sql);
                     	$cnt=1;
                     	while($row=mysqli_fetch_array($query)){
                  	?> 
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        	<input type="hidden" name="id" value="<?php echo htmlentities($row['id']);?>">
                            <label for="example-text-input" class="control-label">Service Name</label>
                            <input class="form-control boxed" type="text" name="service_name"  value="<?php echo htmlentities($row['service_name']);?>" id="example-text-input" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="basicinput">Content</label>
                            <textarea id="elm1" class="form-control boxed" name="content" rows="4" value="<?php echo htmlentities($row['content']);?>"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" name="update" class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </form>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
</article>
<?php include "footer.php"; ?>
<?php } ?>