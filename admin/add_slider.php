<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
        if(isset($_POST['submit'])){
             include 'config.php';
            $image = $_FILES["image"]["name"];
            date_default_timezone_set('Asia/Kolkata');
            $date  = date('d-m-Y H:i');
            // directory creation for product images
            move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/sliders/".$_FILES["image"]["name"]);
            $sql = "INSERT INTO sliders(slidername,date_added) VALUES('$image', '$date')";
            $result = mysqli_query($conn,$sql);
            $_SESSION['msg']="Inserted Successfully !!";
        }
?>
<?php include 'header.php'; ?>

<article class="content dashboard-page">
    <div class="title-block">
        <h1 class="title"> Add Your Sliders Here </h1>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-10 mx-auto">
                <?php if(isset($_POST['submit'])) {?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                </div>
                <?php } ?>
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title"> Add Slider Images </h3>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label">Select File</label>
                            <input type="file" class="form-control boxed" name="image" id="chooseFile" value="" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Upload Files</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</article>
<?php include 'footer.php'; ?>
<?php } ?>