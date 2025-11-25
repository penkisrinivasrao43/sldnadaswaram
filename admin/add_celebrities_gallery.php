<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }
    else{
        if(isset($_POST['submit'])){
            include 'config.php';
            $image = $_FILES['image']['name'];
            $imagename=$_POST['imagename'];
           // echo $totalfiles;
            // $res= $_FILES['fileUpload']['name'];
         //  echo $res['0'];
            // for($i=0;$i<$totalfiles;$i++){
               // echo $rr=$res[$i]; 
                // $sql="INSERT INTO celebrities (images) VALUES ('$rr')"OR die("Query FAILED");
                 
            // }
            // $heading = $_POST['heading'];
            $allowedFileType = array('jpg','png','jpeg');
            $dir = "uploads/gallery/celebrities/";
            // if(!is_dir($dir)){
            //     mkdir("uploads/gallery/celebrities/");
            // }
            // $path = 'uploads/gallery/celebrities/';
            // // Velidate if files exist
            // if (!empty(array_filter($_FILES['fileUpload']['name']))) {
                
            //     // Loop through file items
            //     foreach($_FILES['fileUpload']['name'] as $id=>$val){
            //         // Get files upload path
            //         $fileName     = $_FILES['fileUpload']['name'][$id];
            //         $temp_name    = $_FILES['fileUpload']['tmp_name'][$id];
            //         $target_path  = $path . $fileName;
            //         $fileType     = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));
            //         $uploadDate   = date('Y-m-d H:i:s');
            //         $uploadOk = 1;
            //         if(in_array($fileType, $allowedFileType)){
            //             if(move_uploaded_file($temp_name, $target_path)){
            //                 $sqlVal = "('".$fileName."', '".$uploadDate."')";
            //              $var=$fileName;
                        move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/gallery/celebrities/".$_FILES["image"]["name"]);
                         $res = mysqli_query($conn,"INSERT INTO celebrities(images,imagename)VALUES('$image','$imagename')") or die("query failed");
                          $_SESSION['msg']="Added Successfully !!";
                        // //  echo $var;
                        // $totalfiles = count($_FILES['fileUpload']['name']);
                        // echo $_FILES['fileUpload']['name'][$id];
                        //    $sql="INSERT INTO `celebrities`(`id`, `images`) VALUES ('$id','$var')"OR die("Query FAILED");
                        //     $result = mysqli_query($conn,$sql);

                      //  } 
                   // }
                //}
            }
        }
?>

<?php include "header.php"; ?>

<article class="content dashboard-page">
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                 <?php if(isset($_POST['submit'])) { ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                        </div>
                    <?php } ?>
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title"> Add Celebrities Gallery Images </h3>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- <div class="form-group">
                            <label class="control-label">Add Heading</label>
                            <input type="text" class="form-control boxed" name="heading">
                        </div> -->
                        <div class="form-group">
                            <label class="control-label">Choose Image</label>
                            <input type="file" class="form-control boxed" name="image" id="chooseFile"  />
                        </div>
                         <div class="form-group">
                            <label class="control-label">Image Name</label>
                            <input type="text" class="form-control boxed" name="imagename"  />
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Upload Files</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--<div class="col-md-6">-->
            <!--    <div class="card card-block">-->
            <!--        <div class="title-block">-->
            <!--            <h3 class="title"> Choosen Images Will Appear Here </h3>-->
            <!--        </div>-->
            <!--        <div class="imgGallery">-->
                        <!-- Image preview -->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
</article>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(function () {
        // Multiple images preview with JavaScript
        var multiImgPreview = function (input, imgPreviewPlaceholder) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        $($.parseHTML("<img>")).attr("src", event.target.result).appendTo(imgPreviewPlaceholder);
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $("#chooseFile").on("change", function () {
            multiImgPreview(this, "div.imgGallery");
        });
    });
</script>

<style>
.imgGallery img {
    padding: 8px;
    max-width: 107px;
}
</style>

<?php include "footer.php"; //} ?>