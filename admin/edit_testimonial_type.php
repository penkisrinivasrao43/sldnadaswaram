<?php
 include 'config.php';

 if(isset($_POST['upda'])){
           $id=$_POST['idi'];            
   
    $testimonial_name = $_POST['testimonial_name'];
    $content = $_POST['content'];
    $ofile=$_POST['ofile'];
    if($_FILES["image"]["name"]!=''){
        $image = $_FILES["image"]["name"];
    $dir = "uploads/testimonial/";
    // if(!is_dir($dir)){
    //     mkdir("uploads/event_type/". $image);
    // }

    $upload_dir = 'uploads/testimonial/'.DIRECTORY_SEPARATOR;
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
    move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/testimonial/".$_FILES["image"]["name"]);
                    }else{
                        $image=$ofile;
                    }
// echo $id;
// echo "<br>";
// echo $testimonial_name;
// echo "<br>";
// echo $content;
// echo "<br>";
// echo $image;

$fc= mysqli_query($conn,"UPDATE testimonial SET testimonial_name='$testimonial_name',image='$image',content='$content' WHERE id='$id'") or die('Query unsucess');
   // $sql = "INSERT INTO `testimonial` (event_name,image,event_heading,content) VALUES('$event_name','$image','$event_heading','$content')";
  // $sql="INSERT INTO `testimonial`(`testimonial_name`, `image`,  `content`) VALUES ('$testimonial_name','$image','$content')";
  //  $result = mysqli_query($conn,$sql);
  if($fc){ ?>
  <script>alert('Data Updated Succesfully');window.location.href='view_testimonial.php';</script>
  <?php

  }
  // $_SESSION['msg']="Added Successfully !!";
}

    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
       
?>
<?php include 'header.php'; ?>
<article class="content dashboard-page">
    <div class="title-block">
        <h1 class="title"> Add Your Testimonial </h1>
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
                   <?php
                   $id=$_GET['id'];
                   echo $id;
                   $fd=mysqli_query($conn,"SELECT * FROM testimonial WHERE id='$id'") or die('Query unsuccess');
                   while($rf=mysqli_fetch_assoc($fd)){
                   ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="title-block">
                            <h1 class="title"> Add  Testimonial Information Here </h1>
                        </div>
                        <input class="form-control boxed" type="text" name="idi"  value="<?php echo $rf['id'];?>"/>
                        
                        <div class="form-group">
                            <label for="example-text-input" class="control-label">Testimonial Name</label>
                            <input class="form-control boxed" type="text" name="testimonial_name"  value="<?php echo $rf['testimonial_name'];?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="basicinput">Event Image</label>
                            <input class="form-control boxed" type="text" name="ofile"  value="<?php echo $rf['image'];?>"/>
                            <input type="file" class="form-control boxed" name="image" />
                        </div>
                        <!-- <div class="form-group">
                            <label for="example-text-input" class="control-label">Event Heading</label>
                            <input class="form-control boxed" type="text" name="event_heading" required>
                        </div> -->
                        <!-- <div class="form-group">
                            <label class="control-label" for="basicinput">Service Gallery</label>
                            <input type="file" class="form-control boxed" name="files[]" id="file" multiple>
                        </div> -->
                        <div class="form-group">
                            <label class="control-label" for="basicinput">Content</label>
                            <textarea id="elm1" class="form-control boxed" name="content" rows="4"><?php echo $rf['content'];?></textarea>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <input type="submit" name="upda" class="btn btn-primary" value="Submit"/>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</article>
<?php } ?>
<?php include 'footer.php'; ?>
