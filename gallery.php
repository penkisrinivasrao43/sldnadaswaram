<?php include'includes/header.php'; ?>
<!--Breadcrumb start-->
<div class="ast_pagetitle" style="background-image: url(media/images/images/background.jpg);" height="auto">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>Our Gallery</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">home</a></li>
                    <li>//</li>
                    <li><a href="gallery.php">Our Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!----Gallery start-->
<section>
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="work-title">
                    <h2 class="section-heading">We Are With Celebrities</h2>
                    <div class="underline1"></div>
                    <div class="underline2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                include 'admin/config.php';
                $query="SELECT * FROM celebrities";
                $result=mysqli_query($conn , $query);
                while($row = mysqli_fetch_assoc($result)){
            ?>

            <div class="col-lg- col-md-3">
                <a class="fancybox col-md-3 " href="admin/uploads/gallery/celebrities/<?php echo $row["images"]; ?>" title="little something about the image">
                <i class="fa-solid fa-image work-icon"></i>
                <img src="admin/uploads/gallery/celebrities/<?php echo $row["images"]; ?>" alt="" class="img-fluid events" height="60" width="80" />
                </a>
                <h5 class="text-center mt-1"><?php echo ($row['imagename']);?></h5>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!----Gallery end-->
<section>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="work-title">
                    <h2 class="section-heading">We are in Events</h2>
                    <div class="underline1"></div>
                    <div class="underline2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $query="SELECT * FROM events";
                $result=mysqli_query($conn , $query);
            ?>
            <div class="row">
                <?php 
                    while($fetch=mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-lg- col-md-3">
                    <a class="fancybox col-md-3 " href="admin/uploads/gallery/events/<?php echo $fetch["images"]; ?>" title="little something about the image">
                    <i class="fa-solid fa-image work-icon"></i>
                    <img src="admin/uploads/gallery/events/<?php echo $fetch["images"]; ?>" alt="" class="img-fluid events" />
                    </a>
                    <h5 class="text-center mt-1"><?php echo ($fetch['imagename']);?></h5>
                </div>
                <?php } ?>
            </div>
        </div>

       
    </div>
</section>
 <?php include'includes/footer.php'; ?>