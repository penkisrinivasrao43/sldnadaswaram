<?php
	$id = $_GET["id"];
	include 'config.php';

    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
    	if(isset($_POST['update'])){
    		$id = $_POST["id"];
        	echo $link_address = $_POST['link_address'];
    		$sql = "UPDATE links SET `link_address`='$link_address' WHERE id = '$id'";
			$result = mysqli_query($conn,$sql);
	        header("location: view_link_table.php");
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
                    <?php if(isset($_POST['update']))
                        {?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                    </div>
                    <?php } ?>

                    <?php
                     	$sql ="SELECT * FROM links WHERE id='$id'";
                     	$query = mysqli_query($conn,$sql);
                     	while($row = mysqli_fetch_array($query)){
                  	?> 
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <label for="example-text-input" class="control-label">Link Address</label>
                            <input class="form-control boxed" type="text" name="link_address"  value="<?php echo $row['link_address'];?>" id="example-text-input" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="basicinput">Selected Icon</label>
                            <div style="font-size: 40px;"><i class="<?php echo $row['link_class'];?>"></i></div>
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