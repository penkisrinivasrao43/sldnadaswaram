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
            <div class="col-md-10">
                <div class="card card-block sameheight-item w-100">
                    <div class="title-block">
                        <h3 class="title"> View Client Details </h3>
                    </div>
                    <?php if(isset($_POST['update']))
                        {?>
                    <!-- <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                    </div> -->
                    <?php } ?>

                    <?php
                     	$sql ="SELECT * FROM clients WHERE id='$id'";
                     	$query = mysqli_query($conn,$sql);
                     	while($row = mysqli_fetch_array($query)){
                  	?> 
                    <div class="row mt-2">
                        <div class="col-5   ">Name:</div>
                        <div class="col-7"><input class="form-control box" type="text" value="<?php echo $row['name'];?>" readonly/></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5   ">Mobile Number:</div>
                        <div class="col-7"><input class="form-control box" type="text" value="<?php echo $row['phone'];?>" readonly/></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5   ">Email:</div>
                        <div class="col-7"><input class="form-control box" type="text" value="<?php echo $row['email'];?>" readonly/></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5   ">Event Name:</div>
                        <div class="col-7"><input class="form-control box" type="text" value="<?php echo $row['event'];?>" readonly/></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5   ">Content:</div>
                        <div class="col-7"><input class="form-control box" type="text" value="<?php echo $row['content'];?>" readonly/></div>
                    </div>
                    
                   
                   
                   
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
</article>
<?php include "footer.php"; ?>
<?php } ?>