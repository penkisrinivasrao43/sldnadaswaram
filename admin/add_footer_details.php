<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
        if(isset($_POST['submit'])){
            include 'config.php';
            $footer_icon = filter_var($_POST['icon_class'], FILTER_SANITIZE_STRING);
            $footer_name = filter_var($_POST['footer_name'], FILTER_SANITIZE_STRING);
            $footer_details = filter_var($_POST['footer_details'], FILTER_SANITIZE_STRING);

            $sql = "INSERT INTO `contact_info`(`icon_class`,`footer_name`, `footer_details` ) VALUES ('$footer_icon','$footer_name','$footer_details')";
            $result = mysqli_query($conn,$sql);
            $_SESSION['msg'] = "Added Successfully !!";
        }
?>
<?php include 'header.php'; ?>
<article class="content dashboard-page">
    <div class="title-block">
        <h1 class="title"> Add Your Details</h1>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title"> Add Your Footer Details </h3>
                    </div>
                    <?php if(isset($_POST['submit']))
                        {?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                    </div>
                    <?php } ?>

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="example-text-input" class="control-label">Footer Name (eg. Address, Email, Phone Number)</label>
                            <input class="form-control boxed" type="text" name="footer_name" required>
                        </div>

                        <div class="form-group">
                            <label for="example-text-input" class="control-label">Footer Details (eg. Address, Email, Phone Number)</label>
                            <input class="form-control boxed" type="text" name="footer_details" required>
                        </div>

                        <div class="form-group">
                            <label for="example-text-input" class="control-label">Choose Footer Icons</label>
                            <select class="form-control form-control-lg" name="icon_class" required>
                                <option value="">Select Icon</option>
                                <option name="icon_class" value="zmdi zmdi-home">Address</option>
                                <option name="icon_class" value="zmdi zmdi-phone">Phone</option>
                                <option name="icon_class" value="zmdi zmdi-email">Email</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</article>
<?php include 'footer.php'; ?>
<?php } ?>