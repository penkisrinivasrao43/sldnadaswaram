<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }
    else{
        if(isset($_POST['submit'])){

            $heading = $_POST['heading'];
            $allowedFileType = array('jpg','png','jpeg');
            $dir = "uploads/gallery/$heading";
            if(!is_dir($dir)){
                mkdir("uploads/gallery/".$heading);
            }
            $path = 'uploads/gallery/'.$heading.DIRECTORY_SEPARATOR;
            // Velidate if files exist
            if (!empty(array_filter($_FILES['fileUpload']['name']))) {
                
                // Loop through file items
                foreach($_FILES['fileUpload']['name'] as $id=>$val){
                    // Get files upload path
                    $fileName     = $_FILES['fileUpload']['name'][$id];
                    $temp_name    = $_FILES['fileUpload']['tmp_name'][$id];
                    $target_path  = $path . $fileName;
                    $fileType     = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));
                    $uploadDate   = date('Y-m-d H:i:s');
                    $uploadOk = 1;
                    if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($temp_name, $target_path)){
                            $sqlVal = "('".$fileName."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }  
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Only .jpg, .jpeg and .png file formats allowed."
                        );
                    }
                }
            } else {
                // Error
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Please select a file to upload."
                );
            }
        }
?>

<?php include "header.php"; ?>

<article class="content dashboard-page">
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-6">
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title"> Add Gallery Images </h3>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label">Add Heading</label>
                            <input type="text" class="form-control boxed" name="heading">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Choose Multiple Files</label>
                            <input type="file" class="form-control boxed" name="fileUpload[]" id="chooseFile" multiple />
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Upload Files</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-block">
                    <div class="title-block">
                        <h3 class="title"> Choosen Images Will Appear Here </h3>
                    </div>
                    <div class="imgGallery">
                        <!-- Image preview -->
                    </div>
                </div>
            </div>
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

<?php include "footer.php"; } ?>