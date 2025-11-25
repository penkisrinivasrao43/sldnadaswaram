<?php include'includes/header.php'; ?>
<!--Breadcrumb start-->
<div class="ast_pagetitle">
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
                    <li><a href="index.html">home</a></li>
                    <li>//</li>
                    <li><a href="gallery.html">Our Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!----Gallery start-->
<section id="gallery">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="work-title">
                    <h2 class="section-heading">We are With Celebrities</h2>
                    <div class="underline1"></div>
                    <div class="underline2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="work-details">
                <div class="container">
                    <?php
                        include 'admin/config.php';
                        $query="SELECT * FROM events";
                        $result=mysqli_query($conn , $query);
                        while($fetch=mysqli_fetch_assoc($result)) {
                    ?>
                    <div id="portfolio-list">
                        <div class="portfolio filter2" data-cat="filter2">
                            <a class="fancybox" href="admin/uploads/gallery/events/<?php echo $fetch["images"]; ?>" title="little something about the image"> <i class="fa-solid fa-image work-icon"></i> <img
                            src="admin/uploads/gallery/events/<?php echo $fetch["images"]; ?>" alt="" class="img-fluid" />

                            <!-- end portfolio-wrapper  -->
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- container -->
            </div>
        </div>
    </div>
</section>
<!----Gallery end-->


<?php include'includes/footer.php'; ?>
<div class="row">
            <div class="work-details">
                <div class="container">
                    <?php
                        
                        $query="SELECT * FROM events";
                        $result=mysqli_query($conn , $query);
                        while($fetch=mysqli_fetch_assoc($result)) {
                    ?>
                    <div id="portfolio-list">
                        <div class="portfolio filter2" data-cat="filter2">
                            <a class="fancybox" href="admin/uploads/gallery/events/<?php echo $fetch["images"]; ?>" title="little something about the image"> <i class="fa-solid fa-image work-icon"></i> <img
                            src="admin/uploads/gallery/events/<?php echo $fetch["images"]; ?>" alt="" class="img-fluid" />

                            <!-- end portfolio-wrapper  -->
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- container -->
            </div>
        </div>