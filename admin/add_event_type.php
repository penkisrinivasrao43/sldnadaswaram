<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
        if(isset($_POST['submit'])){
            include 'config.php';
            $image = $_FILES["image"]["name"];
            $event_name = $_POST['event_name'];
            $event_heading = $_POST['event_heading'];
            $content = $_POST['content'];
    
            $dir = "uploads/event_type/";
            // if(!is_dir($dir)){
            //     mkdir("uploads/event_type/". $image);
            // }
     
            $upload_dir = 'uploads/event_type/'.DIRECTORY_SEPARATOR;
            $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
     
            // Define maxsize for files i.e 2MB
            //$maxsize = 2 * 1024 * 1024;
    
            // Checks if user sent an empty form
           // if(!empty(array_filter($_FILES['files']['name']))) {
    
                // Loop through each file in files[] array
                //foreach ($_FILES['files']['tmp_name'] as $key => $value) { 
                  //  $file_tmpname = $_FILES['files']['tmp_name'][$key];
                   // $file_name = $_FILES['files']['name'][$key];
                    //$file_size = $_FILES['files']['size'][$key];
                    //$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

                    // Set upload file path
                    //$filepath = $upload_dir.$file_name;
       
                    // Check file type is allowed or not
                    //if(in_array(strtolower($file_ext), $allowed_types)) {
           
                        // Verify file size - 2MB max
                       // if ($file_size > $maxsize){
                            //echo "Error: File size is larger than the allowed limit.";
                      //  }
                        // If file with name already exist then append time in
                        // front of name of the file to avoid overwriting of file
                       /// if(file_exists($filepath)) {
                          //  $filepath = $upload_dir.time().$file_name;
                        
                           // if( move_uploaded_file($file_tmpname, $filepath)) {
                                //  echo "{$file_name} successfully uploaded <br />";
                           // }else {                  
                            //  echo "Error uploading {$file_name} <br />";
                            //}
                       // }else {
                           // if( move_uploaded_file($file_tmpname, $filepath)) {
                                //  echo "{$file_name} successfully uploaded <br />";
                            //}else {                  
                                //  echo "Error uploading {$file_name} <br />";
                           // }
                       // }
                    //}
               // }
            //}
     
            // directory creation for product images
            move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/event_type/".$_FILES["image"]["name"]);
         
           // $sql = "INSERT INTO `event_type` (event_name,image,event_heading,content) VALUES('$event_name','$image','$event_heading','$content')";
           $sql="INSERT INTO `event_type`(`event_name`, `image`, `event_heading`, `content`) VALUES ('$event_name','$image','$event_heading','$content')";
            $result = mysqli_query($conn,$sql);
            $_SESSION['msg']="Added Successfully !!";
        }
?>
<?php include 'header.php'; ?>
<article class="content dashboard-page">
    <div class="title-block">
        <h1 class="title"> Add Your Services </h1>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-10 mx-auto">
                <div class="card card-block sameheight-item">
                    <?php if(isset($_POST['submit'])) { ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                        </div>
                    <?php } ?>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="title-block">
                            <h1 class="title"> Add  Event Information Here </h1>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="control-label">Event Name</label>
                            <input class="form-control boxed" type="text" name="event_name" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="basicinput">Event Image</label>
                            <input type="file" class="form-control boxed" name="image" required>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="control-label">Event Heading</label>
                            <input class="form-control boxed" type="text" name="event_heading" required>
                        </div>
                        <!-- <div class="form-group">
                            <label class="control-label" for="basicinput">Service Gallery</label>
                            <input type="file" class="form-control boxed" name="files[]" id="file" multiple>
                        </div> -->
                        <div class="form-group">
                            <label class="control-label" for="basicinput">Content</label>
                            <textarea id="elm1" class="form-control boxed" name="content" rows="4"></textarea>
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
<?php } ?>
<?php include 'footer.php'; ?>
