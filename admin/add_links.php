<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
        if(isset($_POST['submit'])){
            include 'config.php';
            $link_class = filter_var($_POST['link_class'], FILTER_SANITIZE_STRING);
            $link_name = filter_var($_POST['link_name'], FILTER_SANITIZE_STRING);
            $link_address = filter_var($_POST['link_address'], FILTER_SANITIZE_STRING);
         
            $sql = "INSERT INTO `links`(link_class, link_name, link_address) VALUES('$link_class','$link_name','$link_address')";
            $result = mysqli_query($conn,$sql);
            $_SESSION['msg']="Added Successfully !!";
        }
?>
<?php include 'header.php'; ?>
<article class="content dashboard-page">
    <div class="title-block">
        <h1 class="title"> Add Your Social Media Links </h1>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title">Add Your Link</h3>
                    </div>
                    <?php if(isset($_POST['submit']))
                        {?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                    </div>
                    <?php } ?>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="example-text-input" class="control-label">Link Name(eg. Facebook,Email,Phone)</label>
                            <input class="form-control boxed" type="text" name="link_name" id="example-text-input" required>
                        </div>

                        <div class="form-group">
                            <label for="example-text-input" class="control-label">Link Address</label>
                            <input class="form-control boxed" type="text" name="link_address" id="example-text-input" required>
                        </div>

                        <div class="form-group">
                            <label for="example-text-input" class="control-label">Icon (Font Awesome 5 Codes) *</label>
                            <select class="form-control form-control-lg" name="link_class" required>
                                <option value="">Select Icon</option>
                                <option name="link_class" value="zmdi zmdi-facebook">Facebook</option>
                                <option name="link_class" value="zmdi zmdi-instagram">Instagram</option>
                                <option name="link_class" value="zmdi zmdi-linkedin-box">Linkdin</option>
                                <option name="link_class" value="zmdi zmdi-twitter">Twitter</option>
                                <option name="link_class" value="zmdi zmdi-pinterest">Pintrest</option>
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